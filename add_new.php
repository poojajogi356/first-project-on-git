<!DOCTYPE html>
<html>
  <head>

  <!---title of the Document-->
    <title>
	     Add New Student Record
    </title>

    <!--CSS links-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
   <!-- <script src="validate.js"></script>-->
    <script type="text/javascript">
  	     
         function success() 
         {
              /*var ret=validate_name();*/
             /* if(ret==false)
              {
                  alert('Only letters and white space is allowed');
                  document.newdata.name.focus();
                  return false;
              }
              else
              {*/
              alert('Record Added Successfully!');
              /*document.newdata.getElementById('name_error').innerHTML = 'Only letters and white space is allowed';*/
             //}
        }
          //function to validate name
            /*function validate_name()    
            {
                // body...
                var letters = /^[A-Za-z]+$/;  

                var studname=document.newdata.name.value;   //read the input from textfield of 'student name'

                if(studname.match(letters))  //check if textfield value matches with letters
                {  
                    return false;  
                }
                return true;
            }*/
    </script>

  </head>
  
  <body>
     
     <div class="right">              
            <a rel="tooltip" class="btn btn-success" href="index.php">
              <span class="glyphicon glyphicon-home"></span>
            </a>&nbsp;
          </div>

      <div class="container">

      
         <div id="center">
         <!--Heading of the Page-->
		        <div class="heading">
                  Add New Student
            </div>
        
            <div id="content">
		                     
            <!--Form to add records-->
                <form method="post" action="add_data.php" name="newdata" onsubmit="success()">  

                
                <!--Student Name-->
                    <div class="form-group">
            					 <label class="span" for="studname"> Student Name</label>
						           <input type="text" name="name" id="studname" placeholder="Student Name" required="required" max="30" />
                       <span class="error" id="name_error">* </span>
                       <br />
                    </div>
                    
                <!--Student Age-->
                    <div class="form-group">
						            <label class="span" for="age"> Age</label>
						            <input type="number" name="age" id="age" placeholder="Age" required="required" max="20" min="6" />
                        <span class="error">*</span>
                        <br />
                    </div>
                
                <!--Marks is Maths Subject-->    
                    <div class="form-group">
						            <label class="span" for="math">Marks in Maths </label>
						            <input type="number" name="math_marks" id="math" alt="Marks in Maths" required="required" max="100" min="0" />
                        <span class="error">*</span>
                        <br />
                    </div>

                <!--Marks is English Subject--> 
                    <div class="form-group">
						            <label class="span" for="eng">Marks in English</label>			
						            <input type="number" name="eng_marks" id="eng" alt="Marks in English" required="required" max="100" min="0" />
                        <span class="error">*</span>
                        <br />
                    </div>
 
                <!--Marks is Science Subject-->
                    <div class="form-group">
						            <label class="span" for="sci">Marks in Science</label>
						            <input type="number" name="sci_marks" id="sci" alt="Marks in Science" required="required" max="100" min="0" />
                         <span class="error">*</span>
                        <br >
			               </div>
	
                    <div class="span12">

                  <!--Submit Button to submit the form-->
                        <button type="submit" name="submit" class="btn btn-success">
                          <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;Save
                        </button>

                  <!--Clear Button to clear all fields in the form-->
			                  <button type="reset" name="Clear" class="btn btn-primary">
                          <span class="glyphicon glyphicon-erase"></span>&nbsp;Clear
                        </button>
                    </div>

                </form>  <!--End of Form-->
		            <br />
            </div>
          </div>
      </div>
  </body> <!--End of Body-->
</html> <!--End of Document-->

