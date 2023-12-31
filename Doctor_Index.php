<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Page</title>

    <meta 
    Name:           Emilio Carreira
    Student number: 221350
    assessment:     PHP assignment term 2
    >

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        .container {
            margin-top: 5%;
        }
        #Form1 {
            border: 3px solid black;
            height: auto;
            width: 30%;
            margin-left: 35%;
            margin-right: 35%;
            background-color: rgba(106, 123, 139, 0.85);
        }
        #phonenumber, #email, #specialisation, #profileimage {
            background-color: rgba(47, 65, 49, 0.75);
            color: white;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            border: 1px solid whitesmoke;
            margin-bottom: 10px;
        }
        #age, #gender, #name, #surname {
            background-color: rgba(47, 65, 49, 0.75);
            color: white;
            border: 1px solid whitesmoke;
            margin-bottom: 10px;
        }

        #heading  {
            margin-top: 6px;
            width: 70%;
            margin-left: 10%;
            margin-right: 15%;
            
        }
        h3 {
            text-align: center;
            margin-top: 10px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
        }
        #mainheading {
            width: 30%;
            margin-left: 35%;
            margin-right: 35%;
            background-color: rgba(17, 22, 19, 0.95);
            color: white;
        }
        #btn-primary {
            background-color: #2F4131;
            border-color: #2F4131;
            
        }
        #btn-primary:hover {
            background-color: #202C22;
            border-color: #202C22;
        }
        #btn-danger {
            background-color: rgba(64, 87, 66, 0.65);
            border-color: #405742;
            
        }
        #btn-danger:hover {
            background-color: #2F4131;
            border-color: #2F4131;
        }
        #btns  {
            margin-top: 15px;
            padding-bottom: 10px;
            margin-left: 5%;
            margin-right: 5%;  
        }
        .successmessage {
            margin-top: 10px;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
            text-align: center;
            color: #202C22;
        }
        #Form_size {
            height: auto;
            margin-left: 20px;
            background-color: rgba(106, 123, 139, 0.85);
        }
        #Form_align {
            height: auto;
            margin-left: 20px;
            background-color: rgba(106, 123, 139, 0.85);
        }
        #Show_name, #Show_Surname, #Show_Age, #Show_Gender, #Show_Profile, #Show_Number, #Show_Email, #Show_Specialisation {
            background-color: rgba(47, 65, 49, 0.75);
            color: white;
            margin-left: 20px;
            border: 1px solid whitesmoke;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 4px;
        }
        
        #contain2 {
            margin-left: 40%;
            width: 300px;
            
        }
        #mainheading2 {
            margin-top: 10%;
            margin-bottom: -75px;
            margin-left: 41.5%;
            width: 255px;
            background-color: rgba(17, 22, 19, 0.95);
            color: white;
        }

    </style>
    <script>

        

    </script>

</head>
<body 
    style="
        background-image: url('https://gomohealth.com/wp-content/uploads/2019/08/gradient-background-healthcare-technology-01.png');
    "
>

    <?php   
        include 'navbar.php';
    ?>

    <div class="container">
        <div class="row">
            <div id="mainheading">
                <h3>Create Doctor Account</h3>
            </div>
            
            <form id="Form1" method="POST" action="Doctor_Add.php" >

            <?php if (isset($_GET['success'])) { ?>

     		    <b><p class="successmessage">

                <?php echo $_GET['success']; ?></p></b>
     	    <?php } ?>

        
                <div class="row">
                    
                <!--Email-->
                    <div class="col-sm-12">
                        <label class="col-sm-12" id="heading" for=""><b>Email</b></label>
                        <input class="col-sm-12" type="text" class="form-control" id="email" name="email"> 
                    </div>
                <!--Name-->
                    <div class="col-sm-4" style="margin-left: 14%;">
                        <label class="col-sm-8" id="heading" for=""><b>Name</b></label>
                        <input class="col-sm-12" type="text" class="form-control" id="name" name="name">
                    </div>
                <!--Surname-->
                    <div class="col-sm-4" style="margin-left: 18px;">
                        <label class="col-sm-8" id="heading" for=""><b>Surname</b></label>
                        <input class="col-sm-12" type="text" class="form-control" id="surname" name="surname">
                    </div>
                
                <!--age-->
                    <div class="col-sm-4" style="margin-left: 14%;">
                        <label class="col-sm-8" id="heading" for=""><b>Age</b></label>
                        <input class="col-sm-12" type="number" class="form-control" id="age" name="age">
                    </div>
                
                <!--gender-->
                    <div class="col-sm-4" style="margin-left: 18px;">
                        <label class="col-sm-8" id="heading" for=""><b>Gender</b></label>
                        <input class="col-sm-12" type="text" class="form-control" id="gender" name="gender"> 
                    </div>
                <!--Phone Number-->
                    <div class="col-sm-12">
                        <label class="col-sm-12" id="heading" for=""><b>Phone Number</b></label>
                        <input class="col-sm-12" type="number" class="form-control" id="phonenumber" name="phonenumber"> 
                    </div>
                <!--Specialisation-->
                    <div class="col-sm-12">
                        <label class="col-sm-12" id="heading" for=""><b>Specialisation</b></label>
                        <input class="col-sm-12" type="text" class="form-control" id="specialisation" name="specialisation"> 
                    </div>
                <!--Profile Image-->
                    <div class="col-sm-12">
                        <label class="col-sm-12" id="heading" for=""><b>Profile Image</b></label>
                        <input class="col-sm-12" type="text" class="form-control" id="profileimage" name="profileimage"> 
                    </div> 

                    <div id="btns" class="col-sm-12">
                        <button  id="btn-danger" class="col-sm-5 btn-danger mx-1">Discart</button>
                        <button id="btn-primary" class="col-sm-5 btn-primary mx-1">Add Account</button>
                    </div>
                </div>   

            </form>
        </div>
    </div>
    
    <div id="mainheading2">
                <h3>Created Doctors</h3>
    </div>
    <div id="contain2" class="container">
        
        <tbody id="list">
            <?php
                include 'Doctor_Read.php';
            ?>
        </tbody>
    </div>
       
    
        
        
        
    
</body>
</html>