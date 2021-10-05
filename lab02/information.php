<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $class = $_POST['class'];
    $university = $_POST['university'];
    $email = $_POST['email'];
    $tele = $_POST['telephone'];
    $address = $_POST['address'];
    $hobbies = $_POST['hobby'];

    echo 'Hello, ' . $firstName . ' ' . $lastName . '<br/>';
    echo 'You are studying at ' . $class . ', ' . $university . '<br/>';

    if (!empty($hobbies)) {
        echo "Your hobby is ";
        foreach ($hobbies as $hobby) {
            echo $hobby .' ';
        }
    }
}
?>