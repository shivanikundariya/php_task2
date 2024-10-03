<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = (float)$_POST['number'];
    $result = sqrt($number);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Square Root Calculator</title>
</head>
<body>
    <h1>Calculate Square Root</h1>
    <form method="post">
        <input type="number" name="number" step="0.01" required>
        <input type="submit" value="Calculate">
    </form>
    <?php if (isset($result)) echo "<p>Square root of $number is $result.</p>"; ?>
</body>
</html>
