<?php

if (isset($_POST["register_fun"])) {
    echo "Name: " . $_POST["fname"] . " " . $_POST["lname"] . " <br/>";
    echo "Address: " . $_POST["address"] . " <br/>";
}

if (isset($_POST["logIn_fun"])) {
    echo "Email: " . $_POST["email"] . " <br/>";
    echo "Pass: " . $_POST["pass"] . " <br/>";
}