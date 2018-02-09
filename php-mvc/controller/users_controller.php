<?php
  class UsersController {
    public function index() {

      $users = User::all();
      require_once('view/users.php');
    }
  }
?>