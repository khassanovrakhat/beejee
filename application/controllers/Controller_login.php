<?php

class Controller_Login extends Controller
{
	
	function action_index()
	{
		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];

			if($login=="admin" && $password=="123")
			{
				$data["login_status"] = "access_granted";
				header('Location: http://'.$_SERVER['HTTP_HOST'].'/todo');
			}
			else
			{
				$data["login_status"] = "access_denied";
				echo "<p class='text-center'>Неправильный email или пароль</p>";
			}

			$_SESSION['login_status'] = $data["login_status"];
			if( $data["login_status"] == "access_granted")
				header('Location: http://'.$_SERVER['HTTP_HOST'].'/todo');
		}
		
		$this->view->generate('login_view.php', 'template_view.php');
	}

	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}
	
}
