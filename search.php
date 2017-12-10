<!--Поисковая строка+название+кнопка входа-->
<?php 
	$role = $_GET["role"];
	$idr = $_GET["idr"];
?>

<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.2.1.min.js"></script>

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
				'<button type="submit" style="float:right; background:white; color: black;">Выйти</button>';
			}
			else
				echo
				'<button type="submit" class="popup" iddiv="box_1" style="float:right; background:white; color: black;">Войти</button>';
			  ?>
		</div>
	</div>	
 
<div id="myfond_gris" opendiv=""></div>
<div id="box_1" class="mymagicoverbox_fenetre">
	<form name="fr" method="post" action="">
		<span style="padding:2%;">Вход</span>
		<div>
			<input name="login" type="text" class="authorize" placeholder="Логин">
			<input name="pass" type="password" class="authorize" placeholder="Пароль">
		</div>
		<div class="row"><span><a href="#" style="float:left; color:#7E8AA0; font-size:16px">Регистрация</a></span></div>
		<div class="row" style="float:right"><button type="submit" >Войти</button></div>
	</form>
</div>

<script>
$(document).ready(function(){
	$(".popup").click(function(){
		$('#myfond_gris').fadeIn(300);
		var iddiv = $(this).attr("iddiv");
		$('#'+iddiv).fadeIn(300);
		$('#myfond_gris').attr('opendiv',iddiv);
		return false;
	});
	 
	$('#myfond_gris, .mymagicoverbox_fermer').click(function(){
		var iddiv = $("#myfond_gris").attr('opendiv');
		$('#myfond_gris').fadeOut(300);
		$('#'+iddiv).fadeOut(300);
	});
});
</script>