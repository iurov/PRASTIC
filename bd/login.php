<?php
	session_start();
	
	include('../db.php'); //подключение к БД
	
	$login = $_POST['login'];
	$pswd = $_POST['pass'];
	
	//проверка логина
	$stm = $pdo->prepare('SELECT id_person, username, password FROM person WHERE username=?');
	$stm->execute([$login]);
	$res = $stm->fetch();
	if (!$res)
	// ПОКА ТАК ////
	{
		?>
		<script>
			alert("Извините, введённый вами логин неверный.");
		</script>
		<?
		exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
	} 
	/// ПОКА ТАК /////
	else {
		if ($res['password']!=md5($pswd)) {
			?>
			<script>
				alert("Извините, введённый вами пароль неверный.");
			</script>
			<?
			exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
		}
		else {
			$_SESSION['login']=$res['username']; 
			$_SESSION['password']=$res['password']; 
			$_SESSION['id']=$res['id_person'];
			
			$role='';
			$tables = array('admin','student','pterodactyl');
			
			foreach ($tables as $nt) {
				$stmt = $pdo->query('SELECT id FROM '.$nt.' WHERE id = '.$_SESSION['id']); //БАЙДА КАКАЯ-ТО :СССС
				$res = $stmt->fetch();
				if ($res)
					$role = $nt;
			}
			$_SESSION['role']=$role;
			exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
		}
	}
?>


