
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">

	</head>
	<body>
		<div id='header'>
		</div>



		<div >
			<form name="set", action = "", method="post">
				<p>Start rand <input  type = "checkbox" name = "rand" value =  "yes" ></p>
				<p>Start from number:<input type = "text"  size="8" name = "start" value =  "1"> </p>
				<p><input type = "submit" name = "submit" value = "Start"></p>
			</form>
		</div>
		<div >
			<?php
			$file = new SplFileObject("tests/test.csv");

			$file->seek(0);
			$end = $file->fgets();
			$start = (int) $_POST['start'];

			if ($_POST['rand'] == 'yes') {
				$num_q = rand (1, $end);
			} else {
				(($start > 0) && ($start < $end)) ? $num_q = $start : $num_q = 1;

			}

			echo "Вопрос № ", $num_q;

			$file->seek($num_q);
			$data = $file->fgetcsv($delimetr=";");
			list($ques, $answ1, $answ2, $answ3, $answ4, $answ5, $answ6, $r_answ) = $data;
			?>

			<div id = 'question'>
				<? echo $ques ?>
			</div>
			<div >
				<form name="ask", action = "", method="post">
				<p id = 'answer1'><? echo $answ1 ?><input  type = "checkbox" name = "an1"  value = '32'></p>

				<p id = 'answer2'><? echo $answ2 ?><input  type = "checkbox" name = "an1"  value = '16'></p>

				<p id = 'answer3'><? echo $answ3 ?><input  type = "checkbox" name = "an1"  value = '8'></p>

			<?
			if (($answ4!='')) {
			echo "<p id = 'answer4'>", $answ4, "<input  type = 'checkbox' name = 'an1' value = '4' ></p>";
			}

			if (($answ5!='')) {
			echo "<p id = 'answer5'>", $answ5, "<input  type = 'checkbox' name = 'an1' value = '2' ></p>";
			}

			if (($answ6!='')) {
			echo "<p id = 'answer6'>", $answ6, "<input  type = 'checkbox' name = 'an1' value = '1' ></p>";
			}
			?>

			<button type = "button" onclick = "result()" >Answer</button>
			</form>

			<script>
			let r_answ = '<? echo $r_answ; ?>'

			function result() {
			let results = document.forms.ask;
			let sum = 0;
				for(let i = 0; i < results.length; i++) {
			 		if (results.elements[i].checked) {
					sum += +(results.elements[i].value);
					}
				}

			if (sum == parseInt( r_answ, 2 )) {
				alert ("Yes!");
			}else{
				alert ("No!");
			}
			}
			</script>

		</div>

		<div>
			<? ($num_q == $end) ? $num_q = 1: $num_q = $num_q+1 ;?>

			<form name="next", action = "", method="post">
				<p><input type = "hidden"  name = "start" value =  <? echo $num_q?>> </p>
				<p><input type = "submit" name = "subnext" value = "Next"></p>
			</form>
		</div>

		<hr>
		<div id = "footer">

		</div>

	</body>
</html>