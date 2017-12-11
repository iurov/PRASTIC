<?php include('search.php');?>

<body>
	<!--Меню-->
	<?php include('menu.php');?>
	
	
	
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
		$for_invalids='5555';
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
		<p3>'.$for_invalids.'</p3>
		<br>
		<div style="float: right;"><button type="submit" align="right">Подать</button></div>
		</div>
		
		</div>
		
		</div>
		';
		
		
		
		?>
	</div>
</body>	
	