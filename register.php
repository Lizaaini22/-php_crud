<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link
    <from action = "cekregister.php" methode="POST">
</head>
<body>
   <div class="container">
       <div class="loginbox">
           <h2>Halaman Register</h2>
           <form action="#" method="POST">
               <input type="text" placeholder="Nama Lengkap" id="fullname" name="fullname"/>
               <input type="text" placeholder="Username" id="username" name="username"/>
               <input type="password" placeholder="Password" id="password" name="password"/>
               <input type="password" placeholder="Konfirmasi Password" id="konfirm_password" name="konfirm_password"/>
               <input type="submit" value="Register" name="register" onclick="return Validate"/>
           </form>
       </div>
   </div> 
</body>
</html>

<script type="text/javascript">
    function Validate() {
        var password = document.
        getElementById("password").value;
        var konfirmPassword = document.
        getElementById("konfirm_password").value;
        if(password ! = konfirmPassword) {
            alert("Password tidak sesuai");
            return false;
        }
        return true;
    }
</script>