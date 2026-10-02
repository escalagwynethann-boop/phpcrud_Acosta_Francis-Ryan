<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_acosta_francisryan');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>