<?php include('dbcon.php');  //file that connects to database

	if(isset($_POST['update']))  //executes only when user has clicked submit button
	{
		//read form fields and store in objects
		$name=$_POST['studname']; 	//for student name
		$age=$_POST['age'];			//for student age
		$math=$_POST['math'];		//for marks in mathematics
		$sci=$_POST['sci'];			//for marks in science
		$eng=$_POST['eng'];			//for marks in english
		$srno=$_POST['srno'];		//for sr.no.
		
		//query to update the student record with provided input
		$query="UPDATE student
				SET stud_name='$name', age=$age, math=$math, eng=$eng, sci=$sci
				WHERE `sr.no.`=$srno";
		if(!mysqli_query($con,$query))  //execute the query
		{
			die(mysqli_error($con));
		}
		else
		{
			header('location:index.php');  //on success rediect to home page
		}
	}
?>