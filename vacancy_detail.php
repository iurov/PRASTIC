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
		<div class="column small-6 medium-6 large-6" style="padding:0;">
		<ul>
			<li style="background: #BABBBD;"><a href="vacancy.php">Вакансии</a></li>
			<li><a href="resume.php">Резюме</a></li>
				<li><a href="company.php">Компании</a></li>
				<li><a href="group.php">Группы</a></li>
		  </ul>
		</div>
		';
		if($role=='СТУДЕНТ')
		echo'
		<div class="column small-6 medium-6 large-6"  style="padding:0;">
		<ul>
			<li style="float:right;"><a href="1.html">Вакансии</a></li>
			<li style="float:right;"><a href="2.html">Резюме</a></li>
			<li style="float:right;"><a href="3.html">Компании</a></li>
			<li style="float:right;"><a href="4.html">Группы</a></li>
		  </ul>
		</div>
		';
		
		
			
		?>
		
		
	</div>	
	<!--Контент-->	
	<div class="row" style="background:#D4D4D3;">
		<!--Меню-->
		
		<?php
		$first_date='01.01.01';
		$last_date='15.01.01';
		
		$name_vacancy='1111111';//Название вокансии:
		$name_company='2222222';//Название компании:
		$student_dities='3333333';//Обязанности:
		$student_welcome='4444444';//Приветствуется:
		
		echo
		'
		<div class="column small-12 medium-12 large-12">
		<div class="row" style="padding:5px; margin:5px;">
		<div class="column small-2 medium-2 large-2" style="background:white; padding:10px;">
		
		
		</div>
		<div class="column small-10 medium-10 large-10" style="background:white; padding:10px; padding-right:60px;">
		<p5>'.$name_vacancy.'</p5>
		<hr style="border: none; background-color: #EF9C00; color: #EF9C00; height: 3px;  padding:0; margin:0; margin-top:-5px; margin-bottom:7px;  width:50%">
		<div style="float: left;"><p4>'.$name_company.'</p4></div>
		<div style="float: right;"><p4 align="right">Осталось мест:</p4>
		<p4>5</p4>
		<p4>Претендентов:</p4>
		<p4>4</p4>
		<p4>Период:</p4>
		<p4>'.$first_date.' - '.$last_date.'</p4>
		</div>
		<br>
		<p4>Описание: </p4>
		<br>
		<p3>'.$student_dities.'</p3>
		<br>
		<p4>Вид деятельности:</p4>
		<br>
		<p3>'.$student_welcome.'</p3>
		<br>
		<p4>Условия для инвалидов:</p4>
		<br>
		<p3>'.$student_welcome.'</p3>
		<br>
		<div style="float: right;"><button type="submit" align="right">Подать</button></div>
		</div>
		
		</div>
		
		</div>
		';
		
		
		
		?>
	</div>
</body>	
	