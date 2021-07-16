<?php

session_start(); 
// подключаем файлы ядра
spl_autoload_register(function($class)
{
    $coreFile = APP . 'core/' . str_replace('\\', '/', $class . '.php');

    if (is_file($userFile)) {
        require_once $userFile;
    }

  if (is_file($coreFile)) {
        require_once $coreFile;
    }
});

function checkAuth()
{
	$cheker = false;
	$status = $_SESSION['login_status'] ?? '';
	if($status == 'access_granted')
		$cheker = true;

	return $cheker;
}

require_once __DIR__ . '/core/Route.php';

Route::start(); // запускаем маршрутизатор
