<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = (int)$_POST['number'];
    $result = isPrime($number) ? "$number is a prime number." : "$number is not a prime number.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Check</title>
</head>
<body>
    <h1>Check Prime Number</h1>
    <form method="post">
        <input type="number" name="number" min="1" required>
        <input type="submit" value="Check">
    </form>
    <?php if (isset($result)) echo "<p>$result</p>"; ?>
</body>
</html>
