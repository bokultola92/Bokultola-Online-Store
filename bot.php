<?php
// আপনার টেলিগ্রাম বট টোকেন
$botToken = "7265940573:AAEviCMNGTEsloUHd4BkkwJVGj80PI2gLW4";
$website = "https://api.telegram.org/bot".$botToken;

// টেলিগ্রাম থেকে আসা ডেটা গ্রহণ করা
$content = file_get_contents("php://input");
$update = json_decode($content, true);

if (!$update) {
    exit;
}

$chatId = $update["message"]["chat"]["id"];
$messageText = trim($update["message"]["text"]);

// ইউজার স্টেট এবং ডেটা ট্র্যাকিংয়ের জন্য ফাইল
$stateFile = "bot_state_" . $chatId . ".json";
$productsFile = "products.json";

// মেসেজ পাঠানোর ফাংশন
function sendMessage($chatId, $message) {
    global $website;
    $url = $website . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message);
    file_get_contents($url);
}

// স্টেট লোড করা
$state = [];
if (file_exists($stateFile)) {
    $state = json_decode(file_get_contents($stateFile), true);
}

// মূল লজিক শুরু
if ($messageText == "/start") {
    sendMessage($chatId, "বকুলতলা বট-এ আপনাকে স্বাগতম! নতুন প্রোডাক্ট যুক্ত করতে /new কমান্ডটি লিখুন।");
    if (file_exists($stateFile)) unlink($stateFile);
} 
elseif ($messageText == "/new") {
    $state = ['step' => 'get_name'];
    file_put_contents($stateFile, json_encode($state));
    sendMessage($chatId, "🛍️ প্রোডাক্টের নাম কি? (যেমন: স্টাইলিশ শার্ট)");
} 
// ইউজার যখন নাম ইনপুট দেবে
elseif (isset($state['step']) && $state['step'] == 'get_name') {
    $state['name'] = $messageText;
    $state['step'] = 'get_price';
    file_put_contents($stateFile, json_encode($state));
    sendMessage($chatId, "💰 প্রোডাক্টের দাম কত? (শুধু সংখ্যা লিখুন, যেমন: ১২০০)");
} 
// ইউজার যখন দাম ইনপুট দেবে
elseif (isset($state['step']) && $state['step'] == 'get_price') {
    $state['price'] = $messageText;
    $state['step'] = 'get_image';
    file_put_contents($stateFile, json_encode($state));
    sendMessage($chatId, "🖼️ প্রোডাক্টের ছবির একটি সরাসরি লিঙ্ক (URL) দিন:");
} 
// ইউজার যখন ছবির লিঙ্ক ইনপুট দেবে এবং প্রোডাক্ট সেভ হবে
elseif (isset($state['step']) && $state['step'] == 'get_image') {
    $state['image'] = $messageText;
    
    // নতুন প্রোডাক্টের অ্যারে তৈরি
    $newProduct = [
        "name" => $state['name'],
        "price" => $state['price'],
        "image" => $state['image']
    ];
    
    // আগের প্রোডাক্টগুলোর সাথে নতুনটি যোগ করা
    $currentProducts = [];
    if (file_exists($productsFile)) {
        $currentProducts = json_decode(file_get_contents($productsFile), true);
        if (!is_array($currentProducts)) $currentProducts = [];
    }
    
    $currentProducts[] = $newProduct;
    file_put_contents($productsFile, json_encode($currentProducts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    
    // স্টেট ফাইল ডিলিট করা
    unlink($stateFile);
    
    sendMessage($chatId, "✅ সফলভাবে প্রোডাক্টটি ওয়েবসাইটে যুক্ত করা হয়েছে!");
} 
else {
    sendMessage($chatId, "দুঃখিত, কমান্ডটি বুঝতে পারিনি। নতুন প্রোডাক্ট যোগ করতে /new লিখুন।");
}
?>