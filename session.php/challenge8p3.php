<?php
session_start();

echo "Hello " . $_SESSION["username"] . ", Your favorite programming language is " . $_SESSION["favorite_language"] . ".";