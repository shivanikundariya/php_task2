<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $radius = (float)$_POST['radius'];
    $area = pi() * pow($radius, 2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Area of a Circle</title>
</head>
<body>
    <h1>Calculate Area of a Circle</h1>
    <form method="post">
        <input type="number" name="radius" step="0.01" required>
        <input type="submit" value="Calculate">
    </form>
    <?php if (isset($area)) echo "<p>Area of the circle is $area.</p>"; ?>
</body>
</html>
