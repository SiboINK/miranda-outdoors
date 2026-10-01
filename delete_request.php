<?php
    require_once('request_db.php');

    $request_id = $_GET['request_id'];

    delete_request($request_id);

    header("Location: requests.php");
    exit();
?>