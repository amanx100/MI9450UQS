<?php

// access layout file to set page head, manage session, manage permission for access

$angularPost = file_get_contents("php://input");
$ar = json_decode($angularPost, true);
