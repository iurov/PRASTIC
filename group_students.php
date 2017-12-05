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
			<li ><a href="vacancy.php">Вакансии</a></li>
				<li ><a href="resume.php">Резюме</a></li>
				<li ><a href="company.php">Компании</a></li>
				<li style="background: #BABBBD;"><a href="group.php">Группы</a></li>
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
		
		echo
		'
		<div class="column small-12 medium-12 large-12" style="padding-top:10px;">
		<div style="background:white">
		<div class="block-absolute">
		
		<p2>Школа
		<select style="width:20%">
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<select>
		</p2>
		
		<p2>Кафедра
		<select style="width:20%">
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<select>
		</p2>
		
		<p2>Специальность
		<select style="width:20%">
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<select>
		</p2>
		
		<p2>Курс
		<select style="width:20%">
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<select>
		</p2>
		
		<p2>Группа
		<select style="width:20%">
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<option value="HFFF">HFFF</option>
		<select>
		</p2>
		
		<p2>Руководитель
		<select style="width:20%">
			<option value="HFFF">HFFF</option>
			<option value="HFFF">HFFF</option>
			<option value="HFFF">HFFF</option>
		<select></p2>
			
		<button type="submit">Выбрать</button>
		
			<table>
				<thead>
					<tr  onclick="window.location.href="group_students.php"; return false>
						<th>Группа</th>
						<th>Курс</th>
						<th>Специальность</th>
						<th>Кафедра</th>
						<th>Школа</th>
						<th>Руководитель</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Б8419а</td>
						<td>4й</td>
						<td>Прикладная информатика</td>
						<td>Информатики, математического и компьютерного моделирования</td>
						<td>ШЕН</td>
						<td>Кленина Н.В.</td>
					</tr>
					<tr>
						<td>Б8419а</td>
						<td>4й</td>
						<td>Прикладная информатика</td>
						<td>Информатики, математического и компьютерного моделирования</td>
						<td>ШЕН</td>
						<td>Кленина Н.В.</td>
					</tr>
					<tr>
						<td>Б8419а</td>
						<td>4й</td>
						<td>Прикладная информатика</td>
						<td>Информатики, математического и компьютерного моделирования</td>
						<td>ШЕН</td>
						<td>Кленина Н.В.</td>
					</tr>
				</tbody>
			</table>
		</div></div>

		
  
		';
		?>
	</div>
</body>	
	