<?php
    include('../inc/config.php');
    include(INC_FOLDER_ROOTPATH."header.php");

    $userClass = new user;

    $id = $_GET['id'];
    $url = BASE_URL."cms/index.php";
    $userClass->delete_user($id);
    utility::redirect_index($url);
?>