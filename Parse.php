<?php
/**
*
* @Name : OmitKeepLines/Parse.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-05-17, 2019-05-18
* @Released under : https://github.com/BaseMax/OmitKeepLines/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/OmitKeepLines
*
**/
if(isset($_POST['submit'])) {
	$input=$_POST['input'];

	// $action=$_POST['action'];
	// true : Omit, false : Keep
	$action=(bool)( ((isset($_POST['action'])) && $_POST['action'] == "omit") ? true : false);

	// $orientation=$_POST['orientation'];
	// true : Begin, false : End
	$orientation=(bool)( ((isset($_POST['orientation'])) && $_POST['orientation'] == "begin") ? true : false);

	// $count=$_POST['count'];
	// true : Word, false : Char
	$count=(bool)( ((isset($_POST['count'])) && $_POST['count'] == "word") ? true : false);

	$count_number=$_POST['count_number'];
	$count_number=(int) $count_number;

	// $keepempty=$_POST['keepempty'];
	// true : remove, false : not remove
	$keepempty=(bool)( ((isset($_POST['keepempty'])) && $_POST['keepempty'] == "true") ? true : false);
	///////////////////////////////////
	$lines=explode("\n", $input);
	$output="";
	foreach($lines as $line) {
		// $line=trim($line);
		if($keepempty == false && trim($line) == "") {
			continue;
		}
		if($orientation == true) { // begin
			if($action == true) { // omit
				$begin=$count_number;
				// $length=$count_number;
				$line=mb_substr($line, $begin);
				// $line=mb_substr($line, $begin, $length);
			}
			else { // keep
				$begin=0;
				$length=$count_number;
				$line=mb_substr($line, $begin, $length);
			}
		}
		else {
			if($action == true) { // omit
				$begin=-1 * $count_number;
				// $length=$count_number;
				$line=mb_substr($line, $begin);
				// $line=mb_substr($line, $begin, $length);
			}
			else { // keep
				$begin=0;
				$length=-1 * $count_number;
				$line=mb_substr($line, $begin, $length);
			}
		}
		$output.=$line;
	}
	print "<pre>";
	print $output;
	print "</pre>";
}
else {
?>
<form action="" method="POST">
	<div>
		<h3>Input #0</h3>
		<textarea name="input" cols="80" rows="20"></textarea>
		<br>
	</div>
	<hr>
	<div>
		<h3>Action #1</h3>
		<select name="action">
			<option value="omit">Omitting</option>
			<option value="keep">Keeping</option>
		</select>
		<br>
	</div>
	<hr>
	<div>
		<h3>Orientation #2</h3>
		<select name="orientation">
			<option value="begin">From the beginning</option>
			<option value="end">From the end</option>
		</select>
		<br>
	</div>
	<hr>
	<div>
		<h3>What to count #3</h3>
		<select name="count">
			<option value="word">Word</option>
			<option value="char">Character</option>
		</select>
		<br>
		<input type="number" name="count_number" value="0">
		<br>
	</div>
	<hr>
	<div>
		<h3>Keep Empty Lines #4</h3>
		<select name="keepempty">
			<option value="yes">Yes</option>
			<option value="no">No</option>
		</select>
		<br>
	</div>
	<hr>
	<button name="submit">Check</button>
</form>
<?php } ?>
