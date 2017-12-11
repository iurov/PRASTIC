<?include('search.php');?>

<body>
	<!--Меню-->
	<?php include('menu.php');?>
	<!--Контент-->	
	<div class="row" style="background:#D4D4D3;">
		<!--Меню-->
		
		<?php
		/*
		$stmt = $pdo->query('SELECT name FROM person'); //$pdo = new PDO($dsn, $user, $pass, $opt);
		while ($row = $stmt->fetch()) //разбиваем результат запроса на строки
		{
			echo $row['name'] . "\n";
		}
		
		$gmail = '%gmail.com';
		$stmt = $pdo->prepare('SELECT email FROM person WHERE email LIKE ?');
		$stmt->execute(array($gmail));
		foreach ($stmt as $row)
		{
			echo $row['email'] . "\n";
		}
		*/
		
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
	