<?php
require_once 'modules/user/models/UserModel.php';

class UserController {
    public function index() {
        $userModel = new UserModel();
        
        $users = $userModel->getUsers();
        
        require 'modules/user/views/index.php';
    }
}
?>