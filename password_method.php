
<?php
$password = "GeeksforGeeks";
echo "<b>Password is:</b>", $password."<br>";
 
echo "<b>Hashed password using CRYPT_BLOWFISH: </b>",
    password_hash($password, PASSWORD_BCRYPT)."<br>";
echo "\n";
 
echo "<b>Hashed password using Argon2i: </b>",
    password_hash($password, PASSWORD_ARGON2I)."<br>";
echo "\n";
 
echo "<b>Hashed password using bcrypt: </b>",
    password_hash($password, PASSWORD_DEFAULT);

