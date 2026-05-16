<?php
// CORS Policy অনুমতি দেওয়া, যাতে GitHub Pages এই ডেটা পড়তে পারে
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: Content-Type");

$json_file = 'products.json';

// যদি ফাইল না থাকে, খালি অ্যারে তৈরি করবে
if (!file_exists($json_file)) {
    file_put_contents($json_file, json_encode([]));
}

$message = "";

// ফর্ম সাবমিট হলে ডেটা প্রসেস করা
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'] ?? '';
    
    // 🔐 আপনার সিকিউরিটি পাসওয়ার্ড (এখানে আপনার পছন্দমতো পাসওয়ার্ড দিন)
    if ($password === "admin123") { 
        $name = htmlspecialchars($_POST['name']);
        $price = htmlspecialchars($_POST['price']);
        $image = htmlspecialchars($_POST['image']);

        if (!empty($name) && !empty($price) && !empty($image)) {
            $current_data = json_decode(file_get_contents($json_file), true);
            
            // নতুন প্রোডাক্টের তথ্য
            $new_product = [
                "id" => time(),
                "name" => $name,
                "price" => $price,
                "image" => $image
            ];

            array_unshift($current_data, $new_product); // নতুন প্রোডাক্ট সবার ওপরে দেখাবে
            
            if (file_put_contents($json_file, json_encode($current_data, JSON_PRETTY_PRINT))) {
                $message = "<div style='color:green;'>✅ প্রোডাক্ট সফলভাবে পোস্ট হয়েছে!</div>";
            } else {
                $message = "<div style='color:red;'>❌ ডেটা সেভ করা যায়নি! পারমিশন চেক করুন।</div>";
            }
        } else {
            $message = "<div style='color:red;'>❌ সব ঘর পূরণ করুন!</div>";
        }
    } else {
        $message = "<div style='color:red;'>❌ ভুল পাসওয়ার্ড!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বকুলতলা - অ্যাডমিন প্যানেল</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; text-align: center; }
        .form-container { background: white; max-width: 400px; margin: 30px auto; padding: 25px; border-radius: 8px; box-shadow: 0px 4px 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        button:hover { background: #218838; }
    </style>
</head>
<body>

    <h2>Bakultala Admin Panel 🛒</h2>
    <div class="form-container">
        <?php echo $message; ?>
        <form method="POST">
            <input type="text" name="name" placeholder="প্রোডাক্টের নাম" required>
            <input type="number" name="price" placeholder="প্রোডাক্টের দাম (টাকা)" required>
            <input type="url" name="image" placeholder="ছবির সরাসরি লিঙ্ক (URL)" required>
            <input type="password" name="password" placeholder="অ্যাডমিন পাসওয়ার্ড দিন" required>
            <button type="submit">পোস্ট করুন 🚀</button>
        </form>
    </div>

</body>
</html>