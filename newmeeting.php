<?php
session_start();
//include_once('include/config.php');
?>
<?php //include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

   
    <link rel="stylesheet" href="css/modified.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

    <div class="row">
        <div class="col">
            <div class="mt-3 px-2" style="border-radius: 5px; border: #0000ff solid 0px;">

                <hr>

                <h3>Meetings</h3>

                <table width="100%" border="0" cellspacing="10" cellpadding="10" style=" height:300px;">
                    <tr>
                        <td style=" text-align:center">Title 1</td>
                        <td style=" text-align:center">Title 2</td>
                        <td style=" text-align:center">Title 3</td>
                        <td style=" text-align:center">Title 3</td>
                    </tr>
                </table>

                <table width="100%" border="0" cellspacing="10" cellpadding="10" style="border-collapse:separate;">
                    <tr>
                        <td width=100%; style="text-align:center">Title 1</td>
        
                        <td width=50%; style="text-align:center ">
                            <h3>Actions</h3>
                            <button type="button" class="btn btn-default btn-lg center-block bhola">Reeschedule</button><button type="button" class="btn btn-default btn-lg center-block gola">Cancel</button>
                            <button type="button" class="btn btn-default btn-lg mola">Leave Feedback</button>
                        </td>
                    </tr>
                </table>
             

                <?php include("include/footer.inc") ?>
            </div>
        </div>
    </div>
</body>

</html>
