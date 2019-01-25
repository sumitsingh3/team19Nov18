<?php
session_start();
//include_once('include/config.php');
?>
<?php //include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Register - Swaploop</title>
    
</head>
<body onLoad="run_first()">
	
    <?php include("include/nav.inc") ?>
    <div class="container" style="margin-top:30px;">
   <?php if(@$_GET['action']=='upok'){?><div align="center" style="color:#093">User Registered Successfully</div><?php }?>
<?php if(@$_GET['action']=='upno'){?><div align="center" style="color:#F00">Unable to Register, Some Problem occured</div><?php }?>

    <form action="register_submit.php" method="post" name="myForm" onsubmit="return validateForm()">
    	<div class="row" style="border-radius: 5px; border: #999 solid 1px;" align="left">
        	<div class="col">
        		<div class="mt-3 px-2" style="border-radius: 5px; border: #0000ff solid 0px;">
                        <h1>Sign-up</h1>
<br>
                        <p><input  class="form-control mr-sm-2" type="text" name="name" placeholder="First Name" style="width:33%; float:left" required > <input  class="form-control mr-sm-2" type="text" name="mname" placeholder="Middle name" style="width:33%; float:left"> <input  class="form-control mr-sm-2" type="text" name="lname" placeholder="Last Name"style="width:30%" required></p>

                       
                        <p><input  class="form-control mr-sm-2" type="date" name="dob" placeholder="DOB"  required></p>

                       
                        <p><input  class="form-control mr-sm-2" type="email" name="email" placeholder="Email" required></p>
                        <p><input  class="form-control mr-sm-2" type="password" id="password" name="password" placeholder="Password" required style="width:48%; float:left" > <input  class="form-control mr-sm-2" type="password" id="rpassword" name="rpassword" placeholder="Repeat Password" style="width:48%;" required> </p>
                        
            	</div>
        	</div>
            <div class="col">
            	<div class="mt-3 px-2" >
                      
                        <h1 style="text-align:left">&nbsp;</h1>
<br>

                        

		
<p>Home Address</p>
		<p>
			
			<input  class="form-control mr-sm-2" type="text" name="Street1" placeholder="Street Line 1" required>
		</p>
        
		<p>
			
			<input  class="form-control mr-sm-2" type="text" name="Street2"  placeholder="Street Line 1">
		</p>

		<p>
			<select name="state" class="form-control mr-sm-2" required>
            <option value="">Select City</option>
            <option value="Brisbane">Brisbane</option>
			<option value="Perth">Perth</option>
			<option value="Adelaide">Adelaide</option>
			<option value="Melbourne">Melbourne</option>
            </select>
		</p>
        <p>
			
			<input  class="form-control mr-sm-2" type="text" name="postcode" id="postcode"  placeholder="Post Code" required>
		</p>
        
        <p>
			<select name="question" class="form-control mr-sm-2" required>
            <option value="">Secret Question</option>
            <option value="Your First Mobile No.">Your First Mobile No.</option>
            <option value="Your Birth Place">Your Birth Place</option>
            </select>
		</p>
		<p>
			
			<input  class="form-control mr-sm-2" type="text" name="answer"  placeholder="Answer" required>
		</p>
        <p><input type="checkbox" required> I accept Swaploop Terms & Conditions</p>
	 <p>
     <input type="submit" class="btn" value="Submit" name="login_user">
     </p>
                      
            	</div>
            </div>
        </div>
        </form>
    </div>
	
	<?php include("include/footer.inc") ?>
</body>
<script>
function validateForm() {
  var x = document.forms["myForm"]["postcode"].value;
  var pass=document.forms["myForm"]["password"].value;
    var rpass=document.forms["myForm"]["rpassword"].value;
var n = x.length; 
  if (n < 4 || n > 4) {
    alert("Post Code must be 4 Digits");
	document.getElementById('postcode').value = '';
    return false;
  }
  if (pass != rpass) {
    alert("Password & Confirm Password Should be Same");
	document.getElementById('password').value = '';
	document.getElementById('rpassword').value = '';
    return false;
  }
} 
</script>
</html>