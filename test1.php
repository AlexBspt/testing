
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<title> Энергосервис - технологии производства </title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id='header'> <h1>ТЕСТ</h1>
			<h2>№1</h2>
		</div>

		<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff78ba">
  				<a class="navbar-brand" href="index.html">Главная</a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  				</button>

  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav mr-auto">
      					<li class="nav-item">
        				<a class="nav-link" href="prombez.html">Промышленная безопасность</a>
      					</li>
      					<li class="nav-item">
        				<a class="nav-link" href="labor.html">Лаборатории</a>
      					</li>
      					<li class="nav-item dropdown active">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Сварка
        				</a>
        					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="#">Аттестация</a>
          					<a class="dropdown-item" href="#">Заявка онлайн</a>
          					<a class="dropdown-item" href="#">Документация</a>
        					</div>
      					</li>
      					<li class="nav-item">
        				<a class="nav-link" href="#">Реестр<span class="sr-only">(current)</span></a>
      					</li>
      				</ul>

    			</form>
  				</div>
				</nav>
		<div>
		<h2>Интересный тест</h2>

		</div>
		<div >
			<form name="set", action = "", method="post">
				<p>Случайный вопрос <input  type = "checkbox" name = "rand" value =  "yes" ></p>
				<p>Начать с вопроса номер:<input type = "text"  size="8" name = "start" value =  "1"> </p>
				<p><input type = "submit" name = "submit" value = "Начать"></p>
			</form>
		</div>
		<div>


			<?php
				require "content.php";
				echo $content;
			?>

			<br>
			<button type = "button" onclick = "result()" >Ответ</button>


		</div>

		<div>
			<form name="next", action = "", method="post">
				<p><input type = "hidden"  name = "start" value =  <? echo $num_q ?>> </p>
				<p><input type = "submit" name = "subnext" value = "Следующий вопрос"></p>
			</form>
		</div>

		<hr>

		<div id = "footer">
			<p><span>141206, Московская область, г. Пушкино,</span> <span>ул. Боголюбская, д. 3</span></p>
			<p>тел. +7 (495) 000-00-00</p>
		</div>

	<script src="testing.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	</body>
</html>