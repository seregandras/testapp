<?php
  class User {
    public $id;
    public $name;

    public function __construct($id, $name) {
      $this->id    = $id;
      $this->name  = $name;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM users');

      foreach($req->fetchAll() as $user) {
        $list[] = new User($user['id'], $user['name']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM users WHERE id = :id');
      $req->execute(array('id' => $id));
      $user = $req->fetch();

      return new User($user['id'], $user['name']);
    }
  }
?>