<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = (float)$_POST['num1'];
    $num2 = (float)$_POST['num2'];
    $num3 = (float)$_POST['num3'];
    $largest = max($num1, $num2, $num3);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Largest Number</title>
</head>
<body>
    <h1>Find the Largest Among Three Numbers</h1>
    <form method="post">
        <input type="number" name="num1" required>
        <input type="number" name="num2" required>
        <input type="number" name="num3" required>
        <input type="submit" value="Find Largest">
    </form>
    <?php if (isset($largest)) echo "<p>The largest number is $largest.</p>"; ?>
</body>
</html>
