<?php
  class PagesController {
    public function home() {
      $first_name = 'Dear';
      $last_name  = 'Guest';
      require_once('view/home.php');
    }
  }
?>