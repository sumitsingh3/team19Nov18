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
	<div class="container">
    	<div class="row">
        	<div class="col">
        		<div class="bg-light mt-3 px-2" style="border-radius: 5px;">
                        <h1>About US</h1>

                        <p><em>Class</em> convallis phasellus neque pulvinar id taciti duis mi ullamcorper.
                             Nonummy platea senectus. Pulvinar magnis lobortis porttitor.
                             Urna interdum pede vitae, suspendisse magna.</p>

                        <h2>Urna Cras</h2>
                        <p>Integer ipsum praesent ultrices nullam molestie tortor pellentesque sociis.
                            Placerat Laoreet, aptent dictumst magnis. Per sapien Sollicitudin.
                            Mus auctor ut. Lectus penatibus tellus augue lorem. Aenean, sociosqu
                            etiam etiam tellus suscipit vitae commodo Quisque auctor volutpat a ut
                            felis maecenas feugiat posuere, class parturient porta. Ultricies a. Convallis.</p>

                        <h2>Commodo Vestibulum</h2>
                        <p>Mauris. Tortor cras. Rhoncus congue ultricies nunc. Integer habitasse.
                            Leo malesuada morbi pharetra ultricies metus mi, est. Sagittis quis
                            facilisi porttitor bibendum, suspendisse penatibus posuere rutrum tellus tortor nibh.</p>
            	</div>
        	</div>
            <div class="col">
            	<div class="bg-light mt-3 px-2" style="border-radius: 5px;">
                        <form action="feedback_process.php" method="post">
        
        	 	<h1>Feedback Form</h1>
            <h2>Please enter your feedback</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
            	<div class="col">
                	<label for="name">Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="email">Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="comment">* Comment:</label>
                    <textarea id="comment" name="comment" rows="4" cols="30" required></textarea>
                </div>
            </div>

            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                    <input type="reset" id="reset" value="Clear Form" />
                </div>
            </div>
        </div>
        </form>
            	</div>
            </div>
        </div>
    </div>
	
    <div class="container">
    	
    </div>
	<?php include("include/footer.inc") ?>
</body>
</html>


