<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="hal1.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <script src="second.js"></script>
    <?PHP 
        $username = $_GET['name'];
        $eemail = $_GET['email'];
        if($username != "sekar rahayu" || $eemail != "rahayusekar09@gmail.com"){
            header("Location: first.php");
        }
    ?>
    <div class="photo1">
        <div>
            <div class="textawal">WELCOME BABY</div>
        </div>
    </div>
</body>
</html>