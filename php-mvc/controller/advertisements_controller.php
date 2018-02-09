<?php
  class AdvertisementsController {
    public function index() {

      $advertisements = Advertisement::all();
      require_once('view/advertisements.php');
    }
  }
?>