<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ad = $_POST['ad'] ?? '';
    $oyun_id = $_POST['oyun_id'] ?? '';
    $miqdar = $_POST['miqdar'] ?? '';

    if ($ad && $oyun_id && $miqdar) {
        $sifaris = [
            'tarix' => date("Y-m-d H:i:s"),
            'ad' => htmlspecialchars($ad),
            'oyun_id' => htmlspecialchars($oyun_id),
            'miqdar' => htmlspecialchars($miqdar)
        ];
        $fayl = "orders.json";
        $mevcut = file_exists($fayl) ? json_decode(file_get_contents($fayl), true) : [];
        $mevcut[] = $sifaris;
        file_put_contents($fayl, json_encode($mevcut, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    header("Location: thanks.php");
    exit;
}
?>