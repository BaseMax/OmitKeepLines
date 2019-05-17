<?php
/**
*
* @Name : OmitKeepLines/Parse.php
* @Version : 1.0
* @Programmer : Max
* @Date : 2019-05-17
* @Released under : https://github.com/BaseMax/OmitKeepLines/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/OmitKeepLines
*
**/
if(isset($_POST['submit'])) {
	$input=$_POST['input'];
	$action=$_POST['action'];
	$orientation=$_POST['orientation'];
	$count=$_POST['count'];
	$keepempty=$_POST['keepempty'];
	///////////////////////////////////
	
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
	<button>Check</button>
</form>
<?php } ?>
