<!--register.php-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <title>Giriş</title>
    <style>
        .kutu {
            margin-top: 40px
        }
    </style>
</head>
<body>

<?php
session_start(); 
include("inc/vt.php");


if (!isset($_SESSION["Oturum"]) || $_SESSION["Oturum"] != "6789") {
    header("location:login.php");
}


if ($_POST) {
    $txtKadi = $_POST["txtKadi"]; 
    $txtParola = $_POST["txtParola"]; 
    $txtParolaTekrar = $_POST["txtParolaTekrar"]; 
}
?>

<form id="form1" method="post">
    <div class="row align-content-center justify-content-center ">
        <div class="col-md-3 kutu">
            <h3 class="text-center">Yeni Kullanıcı Ekle</h3>
            <table class="table">
                <tr>
                    <td>
                        
                        <input type="text" ID="txtKadi" name="txtKadi" class="form-control" placeholder="Kullanıcı adı" value='<?php echo @$txtKadi ?>'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtParola" name="txtParola" class="form-control" placeholder="Parola"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" ID="txtParolaTekrar" name="txtParolaTekrar" class="form-control" placeholder="Parola Tekrar"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        
                        if ($_POST) {

                            
                            if ($txtParola == $txtParolaTekrar && $txtParola != '' && $txtKadi != '') {
                                
                                $txtParola = md5('56' . $txtParola . '23');
                                if ($sorgu = $baglanti->query("INSERT INTO kullanicilar (kadi, parola) VALUES ('$txtKadi', '$txtParola')"))
                                {
                                    header("location:index1.php"); 
                                }
                                else
                                {
                                    echo 'bir hata oldu tekrar deneyin';
                                }
                            }
                            else
                            {
                               
                                echo "Alanları düzgün doldurunuz";
                            }
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Kaydet"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
</body>
</html>