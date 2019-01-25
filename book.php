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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>
    <title>Register - Swaploop</title>
</head>
<body onLoad="run_first()">
	
    <?php include("include/nav.inc") ?>
    <div class="container" style="margin-top:30px;">
   <?php if(@$_GET['action']=='upok'){?><div align="center" style="color:#093">Book Registered Successfully</div><?php }?>
<?php if(@$_GET['action']=='upno'){?><div align="center" style="color:#F00">Unable to Register, Some Problem occured</div><?php }?>

    <form action="book_submit.php" method="post">
    	<div class="row" style="border-radius: 5px; border: #999 solid 1px;" align="left">
        	<div class="col">
        		<div class="mt-3 px-2" style="border-radius: 5px; border: #0000ff solid 0px;">
                        <h1>Book Detail</h1>
<br>
<h4>Enter Book Name</h4>
                        <p><input  class="form-control mr-sm-2" type="text" name="bookname" placeholder="Book Name" style="width:33%; float:left" required >  </p>
						
						<br>
						<br>
						<h4>Select Book Genre</h4>
						<p>
			<select name="genre" class="form-control mr-sm-2" required>
            <option value="">Select Genre</option>
            <option value="genre">Romantic</option>
			<option value="genre">Biography</option>
			<option value="genre">Sci-fiction</option>
			<option value="genre">Action</option>
            </select>
		</p>
						
						<h5>Enter Author Name</h5>
                        <p><input  class="form-control mr-sm-2" type="text" name="name" placeholder="First Name" style="width:33%; float:left" required >  <input  class="form-control mr-sm-2" type="text" name="lname" placeholder="Last Name"style="width:30%" required></p>
						
						<h5>Enter Publication Date</h5>
                       
                        <p><input  class="form-control mr-sm-2" type="date" name="dob" placeholder="DOB"  required></p>
<h5>Select Condition</h5>
                       
                        		<p>
			<select name="Present Condition" class="form-control mr-sm-2" required>
            <option value="">Select Condition</option>
            <option value="genre">As New</option>
			<option value="genre">Good</option>
			<option value="genre">Mint</option>
			<option value="genre">You can read it</option>
            </select>
		</p>
		<h5>Reccomendation for Book</h5>
		
		<p>
			
			<input  class="form-control mr-sm-2" type="textbox" name="" placeholder="Enter Your Reccomendation" required>
			
		

		
		
       
            <p><input type="checkbox" required> I accept That I Want to Swap This Book and Agree to Swaploop Terms & Conditions</p>
	 <p>
     <button type="submit" class="btn" name="login_user">Submit</button>
     </p>
                       
                        
            	</div>
        	</div>
            
        </div>
        </form>
    </div>
	
	<?php include("include/footer.inc") ?>
</body>
</html>