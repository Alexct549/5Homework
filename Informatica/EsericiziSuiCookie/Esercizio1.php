<?php
if (isset($_SERVER["REQUEST_METHOD"]) == "POST" && isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("bgcolor", $color, time() + (86400 * 30)); // 86400 = 1 day
} else {
    $color = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : "#FFFFFF";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleziona Colore di Sfondo</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;">
    <form method="post" action="">
        <label for="color">Scegli un colore di sfondo:</label>
        <input type="color" id="color" name="color" value="<?php echo htmlspecialchars($color); ?>">
        <input type="submit" value="Salva">
    </form>
</body>
</html></form></head>