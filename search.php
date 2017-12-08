<!--Поисковая строка+название+кнопка входа-->
<?php 
	$role = $_GET["role"];
	$idr = $_GET["idr"];
?>
<div class="row" style="margin-top:10px;">
		<div class="column small-2 medium-2 large-2" style="background:WHITE">
			<p style="font-weight:bold; font-size:x-large;">Практики</p>
		</div>
		<div class="column small-8 medium-8 large-8" style="background:WHITE">
			<form 
			action="" method="get">
				<div style="float:left; width:80%">
			  <input class="rectangle" name="s" placeholder="Искать здесь..." type="search" ></input></div>
			<div style="float:left; width:18%; margin-left:2%;"><button type="submit" >Поиск</button></div>
			</form>
		</div>
		<div class="column small-2 medium-2 large-2" style="background:WHITE; float:right;">
			  
			<?php
			if($role){
				echo
				'
				<button type="submit" style="float:right; background:white; color: black;">Выйти</button>
				';
			}
			else
				echo
				'
				<button type="submit" style="float:right; background:white; color: black;">Войти</a></button>
				';
			  ?>
		</div>
	</div>	
	