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
    <title>Swaploop</title>
</head>
<body onLoad="run_first()">
	<?php //include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>
    <div class="container" style="margin-top:30px;">
    	<div class="row">
        	<div class="col">
        		<div class="mt-3 px-2" style="border-radius: 5px; border: #0000ff solid 0px;">
                        
<br>
                        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/LSnGTVdKo9c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>>

                       
            	</div>
        	</div>
       
            <div class="col">
                 <br>
                      
                           
            	<div class="mt-3 px-2" style="border-radius: 5px; border: #999 solid 1px;" align="center">
                     <?php if(@$_SESSION['username']==""){?> 
                        <h2 style="text-align:left">Log-in</h2>
<hr>

                        <form method="post" action="checklogin.php">

		

		<div class="input-group">
			
			<input  class="form-control mr-sm-2" type="email" name="email" placeholder="Email" required>
		</div>
        
<br>
		<div class="input-group">
			
			<input  class="form-control mr-sm-2" type="password" name="password"  placeholder="Password" required>
		</div>
<br>

		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Sign in</button>
		</div>
        
        <input type="checkbox" checked> Remember me
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
          <?php }else{?>  
          <h1>Upcoming Meeting</h1><br>

          <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=en.indian%23holiday%40group.v.calendar.google.com&amp;color=%230F4B38&amp;ctz=Asia%2FKolkata" style="border-width:0" width="100%" height="300" frameborder="0" scrolling="no"></iframe><br>
<br>

          <!--<button type="submit" class="btn" style="width:70%; background-color:#C1C1FF;" name="login_user">See Details</button><br>-->
<br>

          <?php }?>            
            	</div>
            </div>
        </div>
    </div>
	
	<?php include("include/footer.inc") ?>
</body>
</html>