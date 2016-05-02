<!DOCTYPE html>

<html>
	<head>

	<!--CSS link-->
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<link rel="stylesheet" href="style.css" type="text/css">
  
  	<!--Title of the Document-->
  		<title>
  				Edit Student Record
  		</title>

  		<script type="text/javascript">
  			function success() {
  				// body...
  				alert('Record Updated Successfully!');
  			}
  		</script>
   		<!--<script src="validate.js"></script>-->
 	</head>
  
  <!--Web Page Body Goes here-->
  	<body>
		<?php include('dbcon.php');  //file used to connect to the database
			if(isset($_POST['submit']))  //if used has clicked the submit button
			{
					$sr=$_POST['srno'];   //store the input sr.no in variable
							
					$query="SELECT * from student WHERE `sr.no.`=$sr";  //query to find student record associated with given serial no.
					
					$result = mysqli_query($con,$query)or die(mysqli_error($con));  //execute the query and store result in a object

					while($row=mysqli_fetch_array($result,MYSQLI_BOTH)) //fetch the result from database
					{
								$srno=$row['sr.no.'];  		//for sr.no.
								$name=$row['stud_name'];	//for student name
								$age=$row['age'];			//for age
								$eng=$row['eng'];			//for english marks
								$sci=$row['sci'];			//for science marks
								$math=$row['math'];			//for mathematics marks
		?>

	
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
	<!--Display the student records fetched from database-->
		<div id="center">

	<!--Title of the Form-->
			<div class="heading">
				Edit Student Record
			</div>
			
			<div id="content">		

	<!--Form to edit and update student record-->
				<form action="update_data.php" method="POST" name="newdata" onSubmit="return success()">

	<!--Sr.No. Field-->
                    <div class="form-group">
						<label class="span" for="no"> Sr. No.</label>
						<input type="text" id="no" name="srno" value="<?php echo $srno;?>" readonly=""  />
						<br />
					</div>

	<!--Student Name-->
	                <div class="form-group">
						<label class="span" for="name"> Student Name</label>
						<input type="text" id="name" name="studname" placeholder="Student Name" max="30" required="required" value="<?php echo $name; ?>"  />
						<br />
					</div>

	<!--Student Age-->
                    <div class="form-group">
						<label class="span" for="age"> Age</label>
						<input type="text" name="age" id="age" placeholder="Age" required="required" max="20" min="6" value="<?php echo $age; ?>" />
						<br />
					</div>

	<!--Marks in Mathematics-->
	                <div class="form-group">				
						<label class="span" for="math">Marks in Maths </label>
						<input type="text" id="math" name="math" placeholder="Marks in Maths" required="required" max="100" min="0" value="<?php echo $math; ?>"/>
						<br />
					</div>

	<!--Marks in English-->
					<div class="form-group">
						<label class="span" for="eng">Marks in English</label>		
						<input type="text" id="eng" name="eng" placeholder="Marks in English" required="required" max="100" min="0" value="<?php echo $eng; ?>" />
						<br />
					</div>
				
	<!--Marks in Science-->
					<div class="form-group">
						<label class="span" for="sci">Marks in Science</label>
						<input type="text" id="sci" name="sci" placeholder="Marks in Science" required="required" max="100" min="0" value="<?php echo $sci; ?>" />
						<br />
					</div>
	<!--Submit Button-->
					<div align="center">
						<button type="submit" name="update" class="btn btn-success">
							<span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;Update
						</button>

	<!--clear button-->
						<button type="reset" name="clear" class="btn btn-primary">
							<span class="glyphicon glyphicon-erase"></span>&nbsp;Clear
						</button>
					</div>

				</form>   <!--End of Form-->

				<?php }}?>
			</div>
		</div>
	</body>  <!--End of body-->
</html>  <!--End of Document-->
				