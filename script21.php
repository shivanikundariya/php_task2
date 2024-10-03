<?php
function isPalindrome($num) {
    return strval($num) === strrev(strval($num));
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = (int)$_POST['number'];
    $result = isPalindrome($number) ? "$number is a palindrome." : "$number is not a palindrome.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h1>Palindrome Checker</h1>
    <form method="post">
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>
    <?php if (isset($result)) echo "<p>$result</p>"; ?>
</body>
</html>
