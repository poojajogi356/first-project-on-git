var doc=document.forms['newdata'];
    var age=doc.getElementById('age').value();
    var eng=doc.getElementById('eng').value();
    var sci=doc.getElementById('sci').value();
    var math=doc.getElementById('math').value();
    var studname=doc.getElementById('studname').value();
    var v_age=validate_age();
function validate()
{
	 if () {}
return true;
}

function success() {
    alert("Record Updated Successfully!");
}

function validate_marks_m()
{
    if( math>100 || isNaN( math ) )
    {
        doc.getElementById('math').innerHTML = 'Please enter marks in correct Format (i.e. must be <=100)';
        math.focus() ;
        return false;
    }
    return true;
}

function validate_marks_e() 
{
    // body...
    if( eng>100 || isNaN( eng ) )
    {
        doc.getElementById('eng').innerHTML = 'Please enter marks in correct Format (i.e. must be <=100)';
        eng.focus() ;
        return false;
    }
    return true;
}

function validate_marks_s() 
{
    // body...
    if( sci>100 || isNaN( sci ) )
    {
        doc.getElementById('scie').innerHTML = 'Please enter marks incorrect Format (i.e. must be <=100)';
        sci.focus() ;
        return false;
    }
    return true;
}

function validate_age() 
{
    // body...
    if( age >21 || isNaN( age ) )
    {
         doc.getElementById('age').innerHTML = 'Age Must be less than or Equal to 21';
         age.focus() ;
         return false;
    }
    retrun true;
}

function validate_name() 
{
    // body...
    var letters = /^[A-Za-z]+$/;  
    if(studname!=letters)  
    {  
        doc.getElementById('name').innerHTML = 'Student name must contain alphabets only';
        studname.focus();  
        return false;  
    }
    return true;
}