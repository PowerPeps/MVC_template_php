<?php
class UserController {
    public function dashboard() {
        require 'views/user/dashboard.php';
    }

    public function admin() {
        require 'views/user/admin.php';
    }
}

