<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = 'login.txt';
    $data = "Username: $username\nPassword: $password\n\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "Username and password saved.";
}
?>