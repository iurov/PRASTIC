<!DOCTYPE>

<!--Подключаем базу данных-->
<?php include('db.php');?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!--Заголовок сайта-->
	<title>EDNLESS LIBRARY</title>
	<!--Стили скачанного меню сайта-->
	<link rel="stylesheet" href="css/menu.css" type="text/css">

	<!--Стили foundation для разметки и стандартных элементов-->
	<link rel="stylesheet" href="css/foundation.css">
	<!--Основные стили на сайте--> 
	<link rel="stylesheet" href="css/app.css">
	<!--Стили для главного меню--> 
	<link rel="stylesheet" href="css/main_menu.css">
	<!--Скрипт разворачивалки меню-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!--Скрпт для главного меню--> 
	<script type="text/javascript">
        $(document).ready(function () {
			$('#cssmenu li.has-sub > a').on('click', function(){
				$(this).removeAttr('href');
				var element = $(this).parent('li');
				if (element.hasClass('open')) {
					element.removeClass('open');
					element.find('li').removeClass('open');
					element.find('ul').slideUp();
				}
				else {
					element.addClass('open');
					element.children('ul').slideDown();
					element.siblings('li').children('ul').slideUp();
					element.siblings('li').removeClass('open');
					element.siblings('li').find('li').removeClass('open');
					element.siblings('li').find('ul').slideUp();
				}
			});

			$('#cssmenu>ul>li.has-sub>a').append('<span class="holder"></span>');
        });
    </script>
	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
	
</head>

<header class="header" style="width:100%">
    <div class="header">
	<center><img class="header_image" src="images/header_logo.png" alt="man"></center>
	</div>
	<div class="header_menu">
	</div>
</header>

<body>
	<div class="row">
		<!--Меню-->
		<div class="column small-3 medium-3 large-3" style="margin:0; padding:0;" style="background:RED; height:100%">
			<?php include('menu.htm');?>
		</div>
		
		<!--Контент-->
		<div class="column small-9 medium-9 large-9" style="background:BLUE;">
			
			<!--Карта сайта. Требуется разработка непосредственно карты сайта-->
			<div class="row">
				<div class="column small-12 medium-12 large-12" style="background:GREEN;">
				<a href="/" title="Главная">Главная / </a><a>Поступление</a>
				<h1>Главная</h1>
				</div>
			</div>
			
				
				
			<!--Непосредственно контент-->
			<div class="row">
				<select>
				<?php
				//Запрос всех неповторяющийхся элементов столбца author таблицы books
				$stmt = $db->query('SELECT distinct `author` FROM `books` ');
				while ($row = $stmt->fetch())
				{				
					$author = $row['author'];
					echo'<option value="'.$author.'">'.$author.'</option>';
				}
				?>
				</select>
				
				
				<table>
					<thead>
						<tr>
							<th>Автор</th>
							<th>Название</th>
							<th>Цена</th>
							<th>Жанр</th>
							<th>Количество</th>
						</tr>
					</thead>
					<tbody>
				<?php
				$stmt = $db->query('SELECT * FROM `books` ');
				while ($row = $stmt->fetch())
				{				
					$author = $row['author'];
					$title = $row['title'];
					$price = $row['price'];
					$genre = $row['id_genre'];
					$amount = $row['amount'];
					
					
					
					echo'
						<tr>
							<td>'.$author.'</td>
							<td>'.$title.'</td>
							<td>'.$price.'</td>
							<td>'.$genre.'</td>
							<td>'.$amount.'</td>
						</tr>
					';
				}
				?>
						</tbody>
					</table>
			</div>
		</div>
	</div>		
</body>	
	