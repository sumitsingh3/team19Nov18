<?php
session_start();
require 'connect.php';
//include_once('include/config.php');
?>
<?php //include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/modified.css">
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

    <h4 id="heading1">My Matches</h4>
    <div class="container contemp"><br>
        <button width="200px" type="button" id="matlab" class=" btn btn-default btn-lg" onclick="myfunction()">Match1</button>
        <button width="200px" type="button" class=" btn btn-default btn-lg" onclick="myfunction1()">Match2</button>
    </div>
    <form action="accept.php" method="post">
        <div id="lo1">
          

            <table width="100%" border="0" cellspacing="10" cellpadding="10" style="height:100px;">
                <tr>
                    <td align="center">
                        <button type="submit" name="submit" class="btn btn-success btn-lg dola">Accept</button>
                        <button type="button" class="btn btn-danger btn-lg tola">Reject</button></td>
                </tr>
            </table>
        </div>

        <div id="lo2" style="display: none;">
            <table width="100%" border="0" cellspacing="10" cellpadding="10" style=" height:300px;">
                <tr>
                    <td style=" text-align:center">
                        <?php echo $_SESSION['name'] ?>
                    </td>
                    <td style=" text-align:center">
                        <?php echo $_SESSION['bookname'] ?>
                    </td>
                    <td style=" text-align:center">Title 5</td>
                    <td style=" text-align:center">
                        <?php echo $_SESSION['bookname'] ?>
                    </td>
                    <td style=" text-align:center">
                        <?php echo $_SESSION['uname']; echo " "; echo $_SESSION['lastname']; ?>
                    </td>

                </tr>
            </table>

            <table width="100%" border="0" cellspacing="10" cellpadding="10" style="height:100px;">
                <tr>
                    <td align="center"> <button type="submit" name="submit" class="btn btn-success btn-lg dola">Accept</button>
                        <button type="button" class="btn btn-danger btn-lg tola">Reject</button></td>
                </tr>
            </table>
        </div>
    </form>
    <div id="lkj">
        <button type="button" class="btn btn-success btn-lg kola">Accept all</button></div>

    <?php include("include/footer.inc") ?>
    <script>
        function myfunction() {
            var x = document.getElementById("lo1");
            var y = document.getElementById("lo2");
            x.style.display = "block";
            y.style.display = "none";
        }

        function myfunction1() {
            var x = document.getElementById("lo1");
            var y = document.getElementById("lo2");
            y.style.display = "block";
            x.style.display = "none";
        }

    </script>


</body>

</html>
