<?php
session_start();

if (!isset($_SESSION['random_number'])) {
    $_SESSION['random_number'] = rand(1, 10);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $guess = (int)$_POST['guess'];
    if ($guess < 1 || $guess > 10) {
        $message = "Please enter a number between 1 and 10.";
    } elseif ($guess == $_SESSION['random_number']) {
        $message = "Congratulations! You've guessed the number!";
        unset($_SESSION['random_number']); // Reset the game
    } else {
        $message = "Wrong guess. Try again!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number</title>
</head>
<body>
    <h1>Guess the Number (1-10)</h1>
    <form method="post">
        <input type="number" name="guess" min="1" max="10" required>
        <input type="submit" value="Guess">
    </form>
    <?php if (isset($message)) echo "<p>$message</p>"; ?>
</body>
</html>
