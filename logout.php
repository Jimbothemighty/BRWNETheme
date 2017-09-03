<?php /* Template Name: Log out Template */ ?>

<?php
require 'config/config.php';

session_destroy();
header("Location: /register");
exit();
?>