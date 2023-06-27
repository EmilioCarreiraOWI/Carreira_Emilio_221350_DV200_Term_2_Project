
<!DOCTYPE html>
<html>
<head>
    <title>PHP Navigation Bar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <style>

  nav {
    background-color: #111613;
    border-bottom: 4px solid black;
  }
  img {
    height: 35px;
    width: auto;
    border-radius: 50%;
    border: 2px solid black;
  }
  #logoutbtn{
    background-color: rgba(47, 65, 49, 0.75);
    color: white;
    margin-left: 20px;
    border: 1px solid whitesmoke;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 4px;
  }
  #logoutbox {
    display: flex;
    align-items: end;
    justify-items: end;
  }


  </style>

</head>
<body>


    <nav class="my-company navbar navbar-expand-lg navbar-dark  fixed-top">
      <div id="mainName">
        <img src="https://static.vecteezy.com/system/resources/previews/000/565/402/original/hospital-logo-and-symbols-template-icons-vector.jpg" alt="">
        <a  class="navbar-brand" href="http://127.0.0.1/Emilio&Tsungai\Carreira_Emilio_221350_DV200_Term_2_Project\Appointment_Index.php">Health Centre</a>
      </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\Carreira_Emilio_221350_DV200_Term_2_Project\Appointment_Index.php">Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\Carreira_Emilio_221350_DV200_Term_2_Project\Receptionist_Index.php">Receptionist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\Carreira_Emilio_221350_DV200_Term_2_Project\Patient_Index.php">Patient</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\Carreira_Emilio_221350_DV200_Term_2_Project\Doctor_Index.php">Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://127.0.0.1/Emilio&Tsungai\Carreira_Emilio_221350_DV200_Term_2_Project\Doctor_Index.php"><?php echo $_SESSION['name']; ?></a>
                </li>
                
            </ul>
            <div id="logoutbox">
              <ul class="navbar-nav float-right">
                <li class="nav-item">
                  <a id="logoutbtn" class="nav-link btn-secondary" href="Logout.php">Logout</a>
                </li>
              </ul>
            </div>
            
        </div>
    </nav>




    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
