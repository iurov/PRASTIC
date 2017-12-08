<!DOCTYPE>

<!--Подключаем базу данных-->
<?//php include('db.php');?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--Заголовок сайта-->
	<title>Практика ДВФУ</title>
	<!--Стили скачанного меню сайта-->
	<link rel="stylesheet" href="css/main_menu.css" type="text/css">
	<!--Стили foundation для разметки и стандартных элементов-->
	<link rel="stylesheet" href="css/foundation.css">
	<!--Основные стили на сайте--> 
	<link rel="stylesheet" href="css/app.css">
	<!--Стили для главного меню--> 
	<link rel="stylesheet" href="css/main_menu.css">
</head>

<header class="header" style="width:100%">
	
</header>

<body>
	<!--Поисковая строка+название+кнопка входа-->
	<?php include('search.php');?>
	<!--Меню-->
	<?php include('menu.php');?>
	<!--Контент-->	
	<div class="row" style="background:#D4D4D3;">
		<!--Меню-->
		
		<?php
		$name_company='2222222';//Название компании:
		$adds='3333333';//Обязанности:
		$score='4444444';//Приветствуется:
		$About_company='55555';
		$description='66666';
		$kind_activity='77777';
		$for_invalids='888888';
		
		echo
		'
		<div class="column small-12 medium-12 large-12">
		<div class="row" style="padding:5px; margin:5px;">
		<div class="column small-2 medium-2 large-2" style="background:white; padding:10px;">
		
		
		</div>
		<div class="column small-10 medium-10 large-10" style="background:white; padding:10px; padding-right:60px;">
		<p5>'.$name_company.'</p5>
		<hr style="border: none; background-color: #EF9C00; color: #EF9C00; height: 3px;  padding:0; margin:0; margin-top:-5px; margin-bottom:7px;  width:50%">
		<div style="float: left;"><p3>договор о сотрудничестве</p3></div>
		<div style="float: right;"><p4 align="right">Вакансий:</p4>
		<p4>5</p4>
		</div>
		
		<br>
		<p4>Описание: </p4>
		<br>
		<p3>'.$description.'</p3>
		<br>
		<p4>Вид деятельности:</p4>
		<br>
		<p3>'.$kind_activity.'</p3>
		<br>
		<p4>Условия для инвалидов:</p4>
		<br>
		<p3>'.$for_invalids.'</p3>
		</div>
		
		</div>
		
		</div>
		';
		
		?>
	</div>
</body>	
	