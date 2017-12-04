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
	<div class="row" style="">
		<div class="column small-2 medium-2 large-2" style="background:WHITE">
			<p style="font-weight:bold; font-size:x-large;">Практики</p>
		</div>
		<div class="column small-8 medium-8 large-8" style="background:WHITE">
			<form action="" method="get">
			  <input name="s" placeholder="Искать здесь..." type="search""></input>
			  <button type="submit">Поиск</button>
			</form>
		</div>
		<div class="column small-2 medium-2 large-2" style="background:WHITE">
			  <button type="submit" style=" background:white; color: black;">Войти</button>
			 
		</div>
	</div>	
	<div class="row" style="background:#343843; height:30px">
		<!--Меню-->
		<?php
		echo
		'
		<div class="column small-6 medium-6 large-6"  style="padding:0;">
		<ul>
			<li><a href="vacancy.php">Вакансии</a></li>
			<li><a href="resume.php">Резюме</a></li>
			<li><a href="company.php">Компании</a></li>
			<li><a href="group.php">Группы</a></li>
		  </ul>
		</div>
		';
		if($role=='ГОСТЬ')
		echo'
		<div class="column small-6 medium-6 large-6"  style="padding:0;">
		<ul>
			<li style="float:right;"><a href="1.html">Вакансии</a></li>
			<li style="float:right;"><a href="2.html">Резюме</a></li>
			<li style="float:right;"><a href="3.html">Компании</a></li>
			<li style="float:right;"><a href="4.html">Группы</a></li>
		  </ul>
		</div>
		<!--Контент-->
		';
		?>
	</div>			
</body>	
	