<?php
function factorial($num) {
    if ($num < 0) return null;
    return ($num === 0) ? 1 : $num * factorial($num - 1);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = (int)$_POST['number'];
    $result = factorial($number);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post">
        <input type="number" name="number" min="0" required>
        <input type="submit" value="Calculate">
    </form>
    <?php if (isset($result)) echo "<p>Factorial of $number is $result.</p>"; ?>
</body>
</html>
