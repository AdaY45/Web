<?php
    require "container.php";
    $search = $_GET['search'];
    $search = strip_tags($search);
    $search = htmlspecialchars($search);
    $search = addslashes($search);
?>