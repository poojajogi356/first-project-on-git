<?php include('dbcon.php'); //connect to database
		
if(isset($_POST['submit'])) //only excuted if user has clicked submit button
{

		//save all data received in variables
			$name=$_POST['name'];  //for student name
			$age=$_POST['age'];			//for age
			$math=$_POST['math'];		//for marks in math
			$eng=$_POST['eng'];			//for marks in english
			$sci=$_POST['sci'];			//for marks in science
         	
         	/*Query to insert data into database*/
         	$query="insert into student (`sr.no.`,`stud_name`,`age`,`math`,`eng`,`sci`,`total`,`per`)
 			values(NULL,'$name','$age','$math','$eng','$sci','NULL','NULL')";
  			
  			//check that query is correctly executed
  			if (!mysqli_query($con,$query))
  			{
 				die('Error: ' . mysqli_error($con)); //if any error
  			}
  			else
  			{
  				header('location:index.php');  //after sucessful execution redirects to home page
			}
} //end if	
?>
 