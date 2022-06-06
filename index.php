<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
	</head>
<body>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Barcode Generator</h3>
		<div class="col-md-8">
			<form method="POST">
				<div class="form-group">
					<label>Enter a text</label>
					<input type="text" class="form-control" name="barcode"/>
					<br />
					<button class="btn btn-primary" name="generate">Generate</button>
					<br />
					<?php
						if(ISSET($_POST['generate'])){
							$code=$_POST['barcode'];
							echo "<center><img alt='testing' src='barcode-library.php?codetype=code39&size=50&text=".$code."&print=true'/></center>";
						}
					?>
				</div>
			</form>
		</div>
	</div>
</body>
</html>