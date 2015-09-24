<?php
    session_start();

    $site_path = realpath(dirname(__FILE__));
    define ('__SITE_PATH', $site_path);

    $site_url = str_replace('C:\wamp\www\\','/',__SITE_PATH);
    define ('__SITE_URL', $site_url);

    include (__SITE_PATH . '/View/header.php');
    include(__SITE_PATH . '/model/Security.php');
    include(__SITE_PATH . '/model/user.php');

    if (!empty($_GET['page']) && is_file('Controller/'.$_GET['page'].'.class.php'))
    {
            include 'Controller/'.$_GET['page'].'.php';
    }
    else
    {
            include 'Controller/index.class.php';
    }

    include 'View/footer.php';

?>