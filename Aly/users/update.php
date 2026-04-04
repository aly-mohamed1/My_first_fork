<?php

$method = $_SERVER["REQUEST_METHOD"] ?? "";

if ($method !== "PUT") die("Only put method is allowed");

$id_to_update = $_GET["id"] ?? "";

echo $id_to_update;

$new_data = $_POST;