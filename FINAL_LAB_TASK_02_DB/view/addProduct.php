<?php
	$title= "Add product";
	include('header.php');
?>


	<div id="page_title">
		<h1>Add product</h1>
	</div>



	<div id="main_content">
		<form method="post" action="">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value=""> </td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><input type="number" name="buy" value=""> </td>
					</tr>
					<tr>
						<td>Selling Price</td>
						<td><input type="number" name="sell" value=""> </td>
					</tr>

						<td></td>
						<td>
							<input type="submit" name="save" value="Save">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>
