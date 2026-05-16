<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বকুলতলা - অনলাইন শপিং</title>
    <style>
        /* (আপনার আগের সমস্ত CSS স্টাইল এখানে থাকবে, কোড ছোট রাখার জন্য নিচে শুধু প্রোডাক্ট গ্রিড দেওয়া হলো) */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background-color: #f4f6f9; color: #333; }
        header { background-color: #1e3a8a; color: white; padding: 15px 5%; position: sticky; top: 0; z-index: 1000; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .navbar { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 24px; font-weight: bold; }
        .nav-links { list-style: none; display: flex; gap: 20px; }
        .cart-icon { background-color: #ef4444; padding: 8px 15px; border-radius: 20px; font-weight: bold; cursor: pointer; }
        .hero { background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1472851294608-062f824d29cc?lazy') no-repeat center center/cover; height: 350px; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; text-align: center; }
        .container { max-width: 1200px; margin: 40px auto; padding: 0 20px; }
        .section-title { text-align: center; font-size: 28px; margin-bottom: 30px; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; }
        .product-card { background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); display: flex; flex-direction: column; justify-content: space-between; }
        .product-img { width: 100%; height: 200px; object-fit: cover; }
        .product-info { padding: 15px; text-align: center; }
        .product-title { font-size: 18px; margin-bottom: 10px; font-weight: 600; }
        .product-price { color: #ef4444; font-size: 16px; font-weight: bold; margin-bottom: 15px; }
        .add-to-cart { background-color: #1e3a8a; color: white; border: none; width: 100%; padding: 10px; font-size: 14px; font-weight: bold; cursor: pointer; border-radius: 4px; }
        .whatsapp-float { position: fixed; width: 60px; height: 60px; bottom: 30px; right: 30px; background-color: #25d366; color: #FFF; border-radius: 50px; display: flex; align-items: center; justify-content: center; box-shadow: 2px 2px 10px rgba(0,0,0,0.3); z-index: 100; }
        .whatsapp-icon { width: 35px; height: 35px; }
        footer { background-color: #111827; color: #9ca3af; text-align: center; padding: 20px; margin-top: 40px; }
    </style>
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">বকুলতলা</div>
            <ul class="nav-links">
                <li><a href="#">হোম</a></li>
                <li><a href="#">শপ</a></li>
                <li><a href="#">যোগাযোগ</a></li>
            </ul>
            <div class="cart-icon" id="cart-counter">কার্ট (0)</div>
        </div>
    </header>

    <section class="hero">
        <h1>বকুলতলা অনলাইন শপ</h1>
        <p>সেরা মানের পণ্য কিনুন সাশ্রয়ী মূল্যে!</p>
    </section>

    <div class="container">
        <h2 class="section-title">আমাদের প্রোডাক্টস</h2>
        
        <div class="product-grid">
            <?php
            $productsFile = "products.json";
            if (file_exists($productsFile)) {
                $products = json_decode(file_get_contents($productsFile), true);
                if (is_array($products) && !empty($products)) {
                    // লুপ চালিয়ে প্রতিটি প্রোডাক্ট ডাইনামিকালি প্রিন্ট করা হচ্ছে
                    foreach ($products as $product) {
                        echo '<div class="product-card">';
                        echo '    <img src="'.htmlspecialchars($product['image']).'" alt="product" class="product-img">';
                        echo '    <div class="product-info">';
                        echo '        <div class="product-title">'.htmlspecialchars($product['name']).'</div>';
                        echo '        <div class="product-price">৳ '.htmlspecialchars($product['price']).'</div>';
                        echo '        <button class="add-to-cart" onclick="addToCart()">কার্টে যোগ করুন</button>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p style="text-align:center; grid-column: 1/-1;">কোনো প্রোডাক্ট পাওয়া যায়নি। বটের মাধ্যমে অ্যাড করুন!</p>';
                }
            }
            ?>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/+8801305579094" class="whatsapp-float" target="_blank">
        <svg class="whatsapp-icon" viewBox="0 0 24 24" fill="currentColor">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.713-1.455L0 24zm6.59-4.846c1.66.986 3.288 1.474 4.925 1.475 5.45-.001 9.885-4.415 9.888-9.86.002-2.639-1.018-5.122-2.873-6.982C16.738 1.926 14.26 .905 11.624.905c-5.456 0-9.893 4.414-9.896 9.858-.002 1.81.475 3.578 1.38 5.148L2.061 20.12l4.586-1.199zm11.92-5.485c-.327-.164-1.938-.955-2.239-1.064-.301-.11-.52-.164-.738.164-.219.329-.848 1.064-1.039 1.283-.192.219-.383.246-.71.082-.328-.164-1.385-.51-2.637-1.63-1.013-.904-1.698-2.022-1.896-2.351-.198-.33-.02-.508.145-.671.148-.147.328-.384.492-.575.164-.192.219-.328.328-.547.11-.219.055-.411-.027-.575-.082-.164-.738-1.777-1.011-2.434-.267-.641-.539-.553-.738-.563-.191-.01-.41-.01-.628-.01-.219 0-.575.082-.875.411-.3.328-1.148 1.121-1.148 2.734 0 1.614 1.175 3.174 1.339 3.393.164.22 2.313 3.532 5.6 4.951.782.337 1.392.539 1.866.69.786.25 1.5.214 2.066.129.631-.095 1.938-.793 2.211-1.56.273-.767.273-1.423.191-1.56-.081-.137-.3-.219-.627-.383z"/>
        </svg>
    </a>

    <footer><p>&copy; ২০২৬ বকুলতলা ডট কম।</p></footer>

    <script>
        let count = 0;
        function addToCart() {
            count++;
            document.getElementById('cart-counter').innerText = "কার্ট (" + count + ")";
            alert("পণ্যটি আপনার কার্টে যোগ করা হয়েছে!");
        }
    </script>
</body>
</html>