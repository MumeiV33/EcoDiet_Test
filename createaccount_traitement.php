<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pseudonyme_or_email = !empty($_POST['pseudonyme_or_email']) ? $_POST['pseudonyme_or_email'] : null;
    echo "Pseudonyme or Email: " . htmlspecialchars($pseudonyme_or_email) . "<br>";
}

?>
