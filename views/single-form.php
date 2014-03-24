<form action="">
	<fieldset>
		<legend>Single Form</legend>
		<label for="name" class="label-text">Name</label>
		<input type="text" name="name"><br>
		<label for="adress" class="label-text">Adress</label>
		<input type="text" name="adress"><br>
		<label for="email" class="label-text">Email</label>
		<input type="text" name="email"><br>
		<label for="city" class="label-text">City</label>
		<input type="text" name="city"><br>
		<label for="company" class="label-text">Company</label>
		<input type="text" name="company"><br>
		<div class="button-wrap right">
			<input type="submit" value="Delete" class="button danger">
			<input type="submit" value='Submit' class="button succes">
		</div>
	</fieldset>
</form>

<form action="">
	<fieldset>
		<legend>Second Form</legend>
		<label for="color">Color</label>
		<input type="color" name="color">
		<br>
		<label for="shoesize">Shoesize</label>
		<input type="range" name="shoesize" class="medium"><br>
		<label for="deodorant">Deodorant ?</label>
		<input type="checkbox" name="deodorant"><br>
		<div class="label-div" for="haircolor">Haircolor</div class="label-div">
		Blue
		<input type="radio" name="haircolor">
		Green
		<input type="radio" name="haircolor">
		Blond
		<input type="radio" name="haircolor"><br>
		<label for="date" class="label-text">Date</label>
		<input type="date" name="date"><br>
		<label for="select">Select</label>
		<select name="select" class="">
			<optgroup label="Group 1">
				<option value="">Option 1</option>
				<option value="">Option 2</option>
				<option value="">Option 3</option>
			</optgroup>
			<optgroup label="Group 2">
				<option value="">Option 1</option>
				<option value="">Option 2</option>
				<option value="">Option 3</option>
			</optgroup>
		</select><br>
		<meter value='30' min='0' max='100'></meter><br>
		<div class="button-wrap right">
			<input type="submit" value="Submit" class="button">
		</div>
	</fieldset>
</form>
