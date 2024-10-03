<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];

    // Swap using arithmetic operators
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers</title>
</head>
<body>
    <h1>Swap Two Numbers</h1>
    <form method="post">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <input type="submit" value="Swap">
    </form>
    <?php if (isset($num1) && isset($num2)) echo "<p>After swapping: num1 = $num1, num2 = $num2.</p>"; ?>
</body>
</html>
