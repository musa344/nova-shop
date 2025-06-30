<?php
session_start();
if (isset($_POST['password'])) {
    if ($_POST['password'] === 'nova123') {
        $_SESSION['admin'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = "Şifrə yanlışdır!";
    }
}

if (!isset($_SESSION['admin'])) {
?>
<form method="post">
    <input type="password" name="password" placeholder="Şifrə">
    <button type="submit">Daxil ol</button>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</form>
<?php
exit;
}

$sifarisler = file_exists('orders.json') ? json_decode(file_get_contents('orders.json'), true) : [];
?>
<h2>Sifarişlər</h2>
<ul>
<?php foreach ($sifarisler as $sifaris): ?>
    <li>
        <b>Ad:</b> <?= htmlspecialchars($sifaris['ad']) ?> |
        <b>ID:</b> <?= htmlspecialchars($sifaris['oyun_id']) ?> |
        <b>Miqdar:</b> <?= htmlspecialchars($sifaris['miqdar']) ?> |
        <b>Tarix:</b> <?= htmlspecialchars($sifaris['tarix']) ?>
    </li>
<?php endforeach; ?>
</ul>
<a href="logout.php">Çıxış</a>
