<?php include('search.php');?>

<body>
	<!--Меню-->
	<?php include('menu.php');?>
	<!--Контент-->	
	<div class="row" style="background:#D4D4D3;">
		<!--Меню-->
		
		<?php
		
		echo
		'
		<div class="column small-12 medium-12 large-12" style="padding-top:10px;">
		<div style="background:white">
		<div class="block-absolute">
			<p2 style="font-size:xx-large">Прикладная информатика группа Б8419А</p2>
			<table>
				<thead>
					<tr  onclick="window.location.href="group_students.php"; return false>
						<th>№</th>
						<th>Фамилия</th>
						<th>Имя</th>
						<th>Отчество</th>
						<th>ОВЗ</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Ивановский</td>
						<td>Калина</td>
						<td>Витальевич</td>
						<td>да</td>
					</tr>
					
				</tbody>
			</table>
		</div></div>
			
		
		';
		if($role=="RMAD"){
			echo'<button type="submit">Выбрать</button>';
		}
		?>
		
	</div>
</body>	
	