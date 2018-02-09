<?php
  class Advertisement {

    public $id;
    public $title;
    public $user_id;

    public function __construct($id, $title, $user_id) {
      $this->id    = $id;
      $this->title = $title;
      $this->user_id  = $user_id;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM advertisements');

      foreach($req->fetchAll() as $advertisement) {
        $list[] = new Advertisement($advertisement['id'], $advertisement['title'], $advertisement['user_id']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM advertisements WHERE id = :id');
      $req->execute(array('id' => $id));
      $advertisement = $req->fetch();

      return new Advertisement($advertisement['id'], $advertisement['title'], $advertisement['user_id']);
    }
  }
?>