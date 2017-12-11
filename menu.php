<!--Меню-->
<div class="row" style="background:#343843; height:30px">
	<?php
		echo
		'
			<div class="column small-6 medium-6 large-6"  style="padding:0;">
				<ul>
					<li><a href="vacancy.php?role='.$role.'&idr='.$idr.'">Вакансии</a></li>
					<li><a href="resume.php?role='.$role.'&idr='.$idr.'">Резюме</a></li>
					<li><a href="company.php?role='.$role.'&idr='.$idr.'">Компании</a></li>
					<li><a href="group.php?role='.$role.'&idr='.$idr.'">Группы</a></li>
				</ul>
			</div>
		';
		
		// АДминистратор
		if($role=='admin')
		echo
		'
			<div class="column small-6 medium-6 large-6"  style="padding:0;">
				<ul>
					<li style="float:right;"><a href="options_right.php?role='.$role.'">Настройки</a></li>
					<li style="float:right;"><a href="3.html">Заявки</a></li>
					<li style="float:right;"><a href="2.html">Группы</a></li>
					<li style="float:right;"><a href="1.html">Образец</a></li>
				</ul>
			</div>
		';
		// СТудент
		if($role=='student')
		echo
		'
			<div class="column small-6 medium-6 large-6"  style="padding:0;">
				<ul>
					<li style="float:right;"><a href="options_right.php?role='.$role.'">Настройки</a></li>
					<li style="float:right;"><a href="3.html">Заявки</a></li>
					<li style="float:right;"><a href="2.html">Резюме</a></li>
					<li style="float:right;"><a href="1.html">Образец</a></li>
				</ul>
			</div>
		
		';
		// ПТеродактель
		if($role=='pterodactyl')
		echo
		'
			<div class="column small-6 medium-6 large-6"  style="padding:0;">
				<ul>
					<li style="float:right;"><a href="options_right.php?role='.$role.'">Настройки</a></li>
					<li style="float:right;"><a href="3.html">Заявки</a></li>
					<li style="float:right;"><a href="2.html">Вакансии</a></li>
					<li style="float:right;"><a href="1.html">Образец</a></li>
				</ul>
			</div>
		';
	?>
</div>