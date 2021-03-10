<?php
$quantity = 5;
$testpath = "tests/test".$_GET['testname'].".csv";

$file = new SplFileObject($testpath);
$file->seek(0);
$end = $file->fgets();
$num_q = (int) $_POST['start'];

$data = [];
$ques = [];
$answ1 = [];
$answ2 = [];
$answ3 = [];
$answ4 = [];
$answ5 = [];
$answ6 = [];
$r_answ = [];
$content = "";

for ($i=0; $i < $quantity; $i++) {

	if ($_POST['rand'] == 'yes') {
	    $num_q = rand (1, $end);
	} else {
		(($num_q > 0) && ($num_q < $end)) ? $num_q = $num_q : $num_q = 1;

	};


echo "<div class='q' id='question'>Вопрос № ", $num_q, "<br>";

$file->seek($num_q);
$data[$i] = $file->fgetcsv($delimetr=";");

list($ques[$i], $answ1[$i], $answ2[$i], $answ3[$i], $answ4[$i], $answ5[$i], $answ6[$i], $r_answ[$i]) = $data[$i];

echo "<strong>", $ques[$i], "</strong>";
echo '<div class="as" id="cont0_'.$i.'" onclick="select()">'.'<p>'.'<input id = "answer0_'.$i.'" type="checkbox" class="check" name = "an1"  '."value = '".substr($r_answ[$i], 0, 1)."'>"."     ".$answ1[$i]."</p></div>";

echo '<div class="as" id="cont1_'.$i.'" onclick="select()">'."<p>".'<input id = "answer1_'.$i.'" type="checkbox" class="check" name = "an1"  '."value = '".substr($r_answ[$i], 1, 1)."'>"."     ".$answ2[$i]."</p></div>";

echo '<div class="as" id="cont2_'.$i.'" onclick="select()">'."<p>".'<input id = "answer2_'.$i.'" type = "checkbox" class="check" name = "an1"  '."value = '".substr($r_answ[$i], 2, 1)."'>"."     ".$answ3[$i]."</p></div>";


if (($answ4[$i]!='')) {
	echo '<div class="as" id="cont3_'.$i.'" onclick="select()">'."<p>".'<input id = "answer3_'.$i.'" type = "checkbox" class="check" name = "an1"  '."value = '".substr($r_answ[$i], 3, 1)."'>"."     ".$answ4[$i]."</p></div>";
};

if (($answ5[$i]!='')) {
	echo '<div class="as" id="cont4_'.$i.'" onclick="select()">'."<p>".'<input id = "answer4_'.$i.'" type = "checkbox" class="check" name = "an1"  '."value = '".substr($r_answ[$i], 4, 1)."'>"."     ".$answ5[$i]."</p></div>";
};

if (($answ6[$i]!='')) {
	echo '<div class="as" id="cont5_'.$i.'" onclick="select()">'."<p>".'<input id = "answer5_'.$i.'" type = "checkbox" class="check" name = "an1"  '."value = '".substr($r_answ[$i], 5, 1)."'>"."     ".$answ6[$i]."</p></div>";
};

($num_q == $end) ? $num_q = 1: $num_q = $num_q+1 ;

echo "</div>";
};


?>


