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
		
			<table class="linkRow">
				<thead>
						<tr >
							<th>Группа</th>
							<th>Курс</th>
							<th>Специальность</th>
							<th>Кафедра</th>
							<th>Школа</th>
							<th>Руководитель</th>
						</tr>
				</thead>
				<tbody>
					<tr data-href="group_students.php" onClick="gotolink(this)">
						<td>Б8419а111</td>
						<td>4й</td>
						<td>Прикладная информатика</td>
						<td>Информатики, математического и компьютерного моделирования</td>
						<td>ШЕН</td>
						<td>Кленина Н.В.</td>
					</tr>
					<tr>
						<td>Б8419а113333331999</td>
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
<script>
	function gotolink(event) {
		document.location.href = event.getAttribute('data-href');
	}
</script>
	</div>
</body>	
	