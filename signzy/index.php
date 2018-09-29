<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signzy Form</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body class="bg-light">
    <div class="container">

        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="img/signzy.png" alt="" width="182" height="62">
            <h2>Personal Information Form</h2>
            <p class="lead">You have to enter your Personal Information in below given Form</p>
        </div>


    <form action="data.php" method="post" onsubmit="validation()" id="detail-form"> 

        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" autocomplete="off" required>
            <span id="nameid" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username in range of 3-20" autocomplete="off" required>
            <span id="usernameid" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password in range of 5-20" autocomplete="off" required>
            <span id="passwordid" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" class="form-control"  placeholder="Should be same as Password" autocomplete="off" required>
            <span id="confirmpasswordid" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
            <label>Phone No:</label>
            <input type="tel" name="phoneno" id="phoneno" class="form-control"  placeholder="Phone no should be of 10 digiit" autocomplete="off" required>
            <span id="phonenoid" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" id="email" class="form-control"  placeholder="Email id should be in Proper Format" autocomplete="off" required>
            <span id="emailid" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
            <label>Address:</label>
            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your Address" required>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
        <button class="btn btn-lg btn-primary btn-block" onclick="location.href='details.php';" style="width:100%" type="submit"><i class="fa fa-download"></i>Download Your Details</button>

    </form> 

    <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-2019</p>
    
    </div>

    <script type="text/javascript">

        function validation()
        {
            var Name=document.getElementById('name').value;
            var Username=document.getElementById('username').value;
            var Password=document.getElementById('password').value;
            var ConfirmPassword=document.getElementById('confirmpassword').value;
            var Phoneno=document.getElementById('phoneno').value;
            var Email=document.getElementById('email').value;

            if((Username.length<3)||(Username.length>20))
            {
                document.getElementById('usernameid').innerHTML="*Please Enter Username in Range of 3-20*";
                return false;
            }
            
            if(!isNaN(Username))
            {
                document.getElementById('usernameid').innerHTML="*Please Enter Characters*";
                return false;
            }

            if((Password.length<5)||(Username.length>20))
            {
                document.getElementById('passwordid').innerHTML="*Please Enter Password in Range of 5-20 *";
                return false;
            }

            if(Password!=ConfirmPassword)
            {
                document.getElementById('confirmpasswordid').innerHTML="*Please Enter Same Password*";
                return false;   
            }

            if((Phoneno.length<=10)&&(Phoneno.length>=20))
            {
                document.getElementById('phonenoid').innerHTML="*Please Enter Phone no*";
                return false;
            }
            
            if(isNaN(Phoneno))
            {
                document.getElementById('phonenoid').innerHTML="*Please Enter Phone no in Digit*";
                return false;
            }

            if(Email.indexOf('@')<=0)
            {
                document.getElementById('emailid').innerHTML="*Please Enter Proper Email id*";
                return false;
            }

            if((Email.charAt(Email.length-4)!='.')&&(Email.charAt(Email.length-3)!='.'))
            {
                document.getElementById('emailid').innerHTML="*Please Enter Proper Email id*";
                return false;
            }
        }
    </script>

  </body>
</html>