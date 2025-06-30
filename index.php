<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <title>NOVA SHOP - Elmas Sifarişi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>💎 NOVA SHOP</h1>
    <p class="subtitle">Free Fire üçün elmas sifariş et</p>
    <form action="submit.php" method="POST">
      <input type="text" name="ad" placeholder="Adınız" required>
      <input type="text" name="oyun_id" placeholder="Free Fire ID" required>
      <select name="miqdar" required>
        <option value="">Elmas miqdarı seçin</option>
        <option value="100">100 elmas</option>
        <option value="310">310 elmas</option>
        <option value="520">520 elmas</option>
        <option value="1060">1060 elmas</option>
      </select>
      <button type="submit">✅ Sifariş Et</button>
    </form>
    <div class="contact">
      <p>📞 WhatsApp ilə əlaqə:</p>
      <a href="https://wa.me/994514138767" target="_blank">+994 51 413 87 67</a><br>
      <a href="https://wa.me/994519575676" target="_blank">+994 51 957 56 76</a>
    </div>
  </div>
</body>
</html>
