<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

		<!--Title of the Document-->

		<title>
			Edit Student Records
		</title>

		<!--Links to CSS files-->

		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	
	<!--Body of the document-->

	<body>

		<div class="right">					     
			<a rel="tooltip" class="btn btn-success" href="index.php">
				<span class="glyphicon glyphicon-home"></span>
			</a>&nbsp;
		</div>


		<div class="right">					     
			<a rel="tooltip" class="btn btn-primary" href="add_new.php">
				<span class="glyphicon glyphicon-plus"></span>
			</a>&nbsp;
		</div>

		<div id="center">
			<div class="heading">
				Edit Student Record
			</div>
			
			<div id="content">

		<!--Form to search student record-->

				<form action="edit_data.php" method="POST" name="newdata">
		
		<!--Student sr.no.-->

					<div class="form-group">
						<label for="name">
							Enter the Student Sr.No. to edit record
						</label>
						<br/><br />
						<input type="text" id="name" name="srno" placeholder="Serial Number" required="required" min="1" />
						<br/><br/>
					</div>

		<!--Search Button-->

					<div align="center">
						<button  type="submit" name="submit" class="btn btn-success"/>
							<span class="glyphicon glyphicon-search"></span>&nbsp;Search
						</button>
					</div>
					
				</form><!--End of the Form-->
			</div>
		</div>
	</body>  <!--End of the Document Body-->
</html>  <!--End of the Document-->