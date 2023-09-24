<?php
	if(isset($_POST['btnsubmit']))
	{
		$fname=$_POST['ufname'];
		$lname=$_POST['ulname'];
		$email=$_POST['uemail'];
		$contact=$_POST['ucontact'];
		$movie=$_POST['umovie'];
		$date=$_POST['udate'];
		$time=$_POST['utime'];
		$seat=$_POST['useat'];
		$price=$_POST['uprice'];
		$tcktno=$_POST['utcktno'];
		$payment=$_POST['upayprice'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="skyblue">
	<center>
		<h1 style="color:red">------------------------------Your Ticket Is Successfully Registration------------------------------</h1>
		<table border="5" bordercolor="red">
			<tr>
				<th>
					<font>
						First Name : 
					</font>
				</th>
				<td>
					<font>
						<?php
							echo $fname;
						?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Last Name : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $lname;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Email : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $email;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Contact Number : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $contact;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Movie Name : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $movie;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Date : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $date;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Time : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $time;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Select A Seat : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $seat;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Price For 1 Person : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $price;
						echo "&nbsp;";
						echo "RS/- Only";
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Select Number Of Seat :
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $tcktno;
					?>
					</font>
				</td>
			</tr>

			<tr>
				<th>
					<font>
						Payment Price : 
					</font>
				</th>
				<td>
					<font>
					<?php
						echo $payment;
						echo "&nbsp;";
						echo "RS/- Only";
					?>
					</font>
				</td>
			</tr>
		</table>

</body>
</html>

<?php
	}
?>


<!--<html>
    <head>
    <title>How to disable previous dates in date picker using JQuery - devnote.in</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>
<body>
    <h1>How to disable previous dates in date picker using JQuery</h1>
    Date : <input id="date_picker" type="date">


    
    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
    </script>
</body>
</html>





<html>
  <head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
        $( function() {
          $( "#shootdate" ).datepicker({
            minDate: 0
          });
        });
      </script>
  </head>
    <body>
      <label for="shootdate">Desired Date:</label>
      <input required type="text" name="shootdate" id="shootdate" title="Choose your desired date" />
    </body>
</html> -->





<!--
    <form action="tckt.php" method="POST">
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            
        </div>

        <input type="date" name="" id="datePicker">
    </form>



    
    <script>
        <?php
        // Get the current date in YYYY-MM-DD format using PHP
        $currentDate = date('Y-m-d');
        ?>

        // Set the minimum date for the date input field to the current date
        document.getElementById('datePicker').min = '<?php echo $currentDate; ?>';
    </script>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>  -->
                            


