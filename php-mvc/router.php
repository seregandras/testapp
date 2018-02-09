<?php
  function call($controller, $action) {
    require_once('controller/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'users':
        require_once('model/user.php');
        $controller = new UsersController();
      break;
      case 'advertisements':
        require_once('model/advertisement.php');
        $controller = new AdvertisementsController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('pages' => ['home'],
                       'users' => ['index'],
                       'advertisements' => ['index']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>