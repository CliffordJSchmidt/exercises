<?php 

require_once('var_show.php');

?>

<?php 
if (!empty($_POST)) { /* the !empty checks if there is something filled in*/
	echo 'adding product ' . $_POST['product'] . 'and it is the color: ' . $_POST['color'];
		if (isset($_POST['hdd']) && $_POST['hdd'] == 'on') {
			echo ' and the optional hdd is also included.';
		}
		if (isset($_POST['color'])){
			switch ($_POST['color']) {
				case 'red':
				echo " the Color is RED";
				break;

				case 'blue':
				echo " the Color is BLUE";
				break;
				
				default:
				echo " The Color is GREEN";
				break;
			}
		}
} ?>

<form action="" method="post">

<br>Product: 
<input type="text" name='product' value="product">

<br><br><label for="hdd">Optional HDD? <br></label>
<input type="checkbox"	name="hdd" id="hdd">

<br><br><strong>Color?</strong> <br>
<input type="radio"	name="color" value="red" id="color-red"><label for="color-red">RED</label> <br>
<input type="radio"	name="color" value="blue" id="color-blue"><label for="color-blue">BLUE</label> <br>
<input type="radio"	name="color" value="green" id="color-green"><label for="color-green">GREEN</label> <br>

<br><br><strong>Processor?</strong> <br>
i3 processor <input type="radio"	name="processor" value="i3"> <br>
i5 processor <input type="radio"	name="processor" value="i5"> <br>
i7 processor <input type="radio"	name="processor" value="i7"> <br>

<br>
<select name="country">
<option>Czech</option>
<option>Latvia</option>
<option selected>The Netherlands</option>
<option>Greece</option>
<option>Japan</option>
<option>Congo</option>
</select>
<br>

<br>
<textarea name="note">prefilled</textarea>
<br>

<br><input type="submit" value="ORDER NOW!!!">
</form>

<?php var_dump($_POST) ?>

<!-- Use GET if you use the data only searching for data. Use the POST method if you are storing information -->