<?php
require_once 'modules/user/controllers/UserController.php';

$userController = new UserController();
$userController->index();
?>