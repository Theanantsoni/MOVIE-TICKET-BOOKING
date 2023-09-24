<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <!--<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">-->

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>


    <!-- ticket price Javascript Start-->
    <script>
        $(function()
        {
            $('#tickets').change(function()
            {
                $('#priceinput').val($('#tickets option:selected').attr('seat'));
            });
        });
    </script>
    <!-- ticket price Javascript End-->

    <!-- Payment Price Javascript Start -->
    <script>
        $(function() {
            $('#tickets').change(function() {
                calculatePaymentPrice();
            });

            $('select[name="utcktno"]').change(function() {
                calculatePaymentPrice();
            });

            function calculatePaymentPrice() {
                const selectedSeatPrice = parseInt($('#tickets option:selected').attr('seat'));
                const numberOfTickets = parseInt($('select[name="utcktno"]').val());

                if (!isNaN(selectedSeatPrice) && !isNaN(numberOfTickets)) {
                    const totalPrice = selectedSeatPrice * numberOfTickets;
                    $('#paymentPrice').val(totalPrice);
                }
            }
        });
    </script>
    <!-- Payment Price Javascript End -->

    <script>
        function form()
        {
            //------------------First name js------------------

            var fname = document.getElementById("ufname").value;    
            var pattern = /^[a-zA-Z]*$|^\d*$/;

            if(fname == "")
            {
                document.getElementById("ufirstname").innerHTML="*First Name Is Empty*";
                return false;
            }
            if(!isNaN(fname))
            {
                document.getElementById("ufirstname").innerHTML="*characters Are Not Allowed*";
                return false;
            }
            if (!pattern.test(fname)) 
            {
                document.getElementById("ufirstname").innerHTML="Numbers Are Not Allowed*";
                return false;
            }
            else
            {
                document.getElementById("ufirstname").innerHTML="";
            }

            //------------------Last name js------------------

            var lname = document.getElementById("ulname").value;
            var pattern = /^[a-zA-Z]*$|^\d*$/;

            if(lname == "")
            {
                document.getElementById("ulastname").innerHTML="*Last Name Is Empty*";
                return false;
            }
            if(!isNaN(lname))
            {
                document.getElementById("ulastname").innerHTML="*characters Are Not Allowed*";
                return false;
            }
            if (!pattern.test(lname)) 
            {
                document.getElementById("ulastname").innerHTML="Numbers Are Not Allowed*";
                return false;
            }
            else
            {
                document.getElementById("ulastname").innerHTML="";
            }

            //------------------Email js------------------

            var email = document.getElementById("uemail").value;    
            var emailPattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/; // Regular expression for email validation

            // Check if the email matches the pattern
            if(email == "")
            {
                document.getElementById("useremail").innerHTML="*Please Enter Your Email Address*";
                return false;
            }
            if (emailPattern.test(email))   //if (email.match(emailPattern))
            {
              document.getElementById("useremail").innerHTML="";
            } 
            else 
            {
              document.getElementById("useremail").innerHTML="*Invalid email address. Please enter a valid email.*";
              return false; 
            }

            //------------------Contact js------------------

            var contact = document.getElementById("ucontact").value;

            if(contact == "")
            {
                document.getElementById("usercontact").innerHTML="*Enter Contact Number*";
                return false;
            }
            
            if(contact.length>10 || contact.length <10)
            {
                document.getElementById("usercontact").innerHTML="*Enter Mobile Number must be 10 Digits*";
                return false;
            }
            if (!/^\d{10}$/.test(contact)) 
            {
                document.getElementById("usercontact").innerHTML="characters Are Not Allowed*";
                return false;
            }
            else
            {
                document.getElementById("usercontact").innerHTML="";
            }
            

            //------------------movie js------------------

            var umovie = document.getElementById("uselmovie").value;    

            if(umovie == "selected")
            {
                document.getElementById("selmovie").innerHTML="*Please Select Movie*";
                return false;
            }

            //------------------date js------------------

            var date = document.getElementById("datepicker").value; 

            if(date == "")
            {
                document.getElementById("userdate").innerHTML="*Please Select Date*";
                return false;
            }

            //------------------Time js------------------

            var selutime = document.getElementById("useltime").value;    

            if(selutime == "Select Time")
            {
                document.getElementById("usertime").innerHTML="*Please Select Time*";
                return false;
            }

            //------------------Seat js------------------

            var userselseat = document.getElementById("tickets").value;  
            
            if(userselseat == "Choose Seat")  
            {
                document.getElementById("selseat").innerHTML="*Please Select Seat*";
                return false;
            }

            //------------------Seat No. js------------------

            var userseatnumber = document.getElementById("selno").value;
            if(userseatnumber == "Select Number Of Seat")
            {
                document.getElementById("selseatno").innerHTML="*Select How many seats do you want*";
                return false;
            }
    
        }

    </script>

</head>

<body>
    <form action="tckt.php" method="POST" onsubmit="return form()">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Movie Ticket Booking</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First name</label>
                                    <input class="input--style-4" type="text" name="ufname" placeholder="Enter First Name" id="ufname">
                                    <span id="ufirstname" style="color:red"></span>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last name</label>
                                    <input class="input--style-4" type="text" name="ulname" placeholder="Enter Last Name" id="ulname">
                                    <span id="ulastname" style="color:red"></span>
                                </div>
                            </div>
                        </div>

                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="text" name="uemail" placeholder="Enter Email" id="uemail">
                                    <span id="useremail" style="color:red"></span>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="ucontact" placeholder="Enter Contact Number" id="ucontact">
                                    <span id="usercontact" style="color:red"></span>
                                </div>
                            </div>
                        </div>

                        
	                    <div class="input-group">
                            <label class="label">Select a Movie</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                <select id="uselmovie" name="umovie">
                                    <option value="selected">Choose Movie</option>
                                    <option value="movie 1">Movie 1</option>
                                    <option value="movie 2">Movie 2</option>
                                    <option value="movie 3">Movie 3</option>
                                    <option value="movie 4">Movie 4</option>
                                    <option value="movie 5">Movie 5</option>
                                </select>
                                <div class="select-dropdown"></div>
                                <span id="selmovie" style="color:red"></span>
                            </div>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="udate" id="datepicker" placeholder="Select Date">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                    <span id="userdate" style="color:red"></span>
                                </div>
                            </div>
                                <div class="col-2">
                                  <div class="input-group">
                                      <label class="label">Time</label>
                                      <div class="rs-select2 js-select-simple select--no-search">
                                            <div class="select-dropdown">
                                                <select name="utime" id="useltime">
                                                <option disabled="disabled" selected="selected">Select Time</option>
                                                <option>7:30 AM</option>
                                                <option>11:00 AM</option>
                                                <option>2:30 PM</option>
                                                <option>6:00 PM</option>
                                                <option>9:30 PM</option>
                                            </select>
                                          </div>
                                          <span id="usertime" style="color:red"></span>
                                    </div>
                                 </div>
                            </div>
						</div>

						<div class="row row-space">
                            <div class="input-group">
                            <label class="label">Choose a Seat</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <div class="select-dropdown">
                                <select name="useat" id="tickets">
                                    <option disabled="disabled" selected="selected">Choose Seat</option>
                                    <option seat="250">First Row</option>
                                    <option seat="450">Second Row</option>
                                    <option seat="650">third Row</option>
                                </select>
                                </div>
                                <span id="selseat" style="color:red"></span>
                            </div>
                        </div>

                                <div class="col-2">
	                                <div class="input-group">
	                                    <label class="label">Price :</label>
	                                    <input class="input--style-4" type="text" name="uprice" id="priceinput" readonly>
	                                </div>
                          		</div>

						</div>

                        <div class="row row-space">
                            <div class="input-group">
                            <label class="label">Number Of Tickets</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <div class="select-dropdown">
                                    <select name="utcktno" id="selno">
                                        <option disabled="disabled" selected="selected">Select Number Of Seat</option>
                                        <option tckt="1">1</option>
                                        <option tckt="2">2</option>
                                        <option tckt="3">3</option>
                                        <option tckt="4">4</option>
                                        <option tckt="5">5</option>
                                    </select>
                                    </div>
                                    <span id="selseatno" style="color:red"></span>
                                </div>
                            </div>
                        

                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Payment Price :</label>
                                        <input class="input--style-4" name="upayprice" type="text" id="paymentPrice" readonly>
                                    </div>
                                </div>

                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="btnsubmit" style="margin-left: 115px;">Submit</button>
                            <button class="btn btn--radius-2 btn--blue" type="reset" name="btnreset" style="margin-right: 90px; text-decoration: none;"><a href="index.php" style="text-decoration: none; color: white;">Cancel</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   </form> 

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

 <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

        <!-- Calender Javascript Start -->

        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#datepicker").datepicker({
                    minDate: 1, // 0 means today's date
                    dateFormat: "dd-mm-yy" // Customize the date format if needed
                });
            });
        </script> 

        <!-- Calender Javascript End -->
     
</html>
