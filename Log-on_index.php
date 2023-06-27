<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">

    <meta 
    Name:           Emilio Carreira
    Student number: 221350
    assessment:     PHP assignment term 2
    >
    
    <style>
        
    body {
        background-image: url("https://gomohealth.com/wp-content/uploads/2019/08/gradient-background-healthcare-technology-01.png");
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    *{
        font-family: sans-serif;
        box-sizing: border-box;
    }

    form {
        width: 500px;
        border: 2px solid #ccc;
        padding: 30px;
        background: rgba(106, 123, 139, 0.85);
        border-radius: 15px;
    }

    h2 {
        text-align: center;
        margin-bottom: 40px;
        color: #fff;
    }

    input {
        display: block;
        border: 2px solid whitesmoke;
        width: 95%;
        padding: 10px;
        margin: 10px auto;
        border-radius: 5px ;
        background-color: rgba(47, 65, 49, 0.75);
        color: white;
    }
    label {
        color: black;
        font-size: 18px;
        padding: 10px;
    }

    button {
        float: right;
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
        background-color: #2F4131;
        
    }
    button:hover{
        opacity: .7;
    }
    .error {
    background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
    }

    h1 {
        text-align: center;
        color: #fff;
    }

    a {
        float: right;
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
        text-decoration: none;
    }
    a:hover{
        opacity: .7;
    }
    </style>
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label><b>Email:</b></label>
     	<input type="text" name="uname" placeholder="name@gmail.com"><br>

     	<label><b>Password:</b></label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>