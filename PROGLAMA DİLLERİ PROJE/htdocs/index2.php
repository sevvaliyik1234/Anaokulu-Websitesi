<?php
      $baglan=mysqli_connect("localhost","root","","ilk_veri_tabani");
	  
	  if(!$baglan)
	  {
		  die("connection failed:".mysgli_connect_error());
	  }
	  else
	  {
		  echo "Bağlantınız gerçekleşti";
	  }
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="k1.css">
    <title>Kayıt</title>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <img src="logo1.jpg" width="100" class="left">
        <div class="taCenter headerTitle">TOPKAPI ANAOKULLARI</div>
        <div class="clear"></div>
    </div>
<div id="myMenu">
<form action="" method="post">
<legend style="text-align: center"><font size="5" color="#3D2B1F">Öğrenci Bilgileri</font></legend>
</br>
<table border="2" cellspacing="2" cellpadding="5" width="500" align="center" bordercolor="black">
<tr>
  <td>Öğr. Adı</td>
  <td class="bold">:</td>
  <td><input type="text" name="inputName" id="inputName" class="newUserBox" minlength="2"></td>
</tr>
<tr>
   <td>Öğr. Soyadı</td>
  <td class="bold">:</td>
   <td><input type="text" name="inputSurname" id="inputSurname" class="newUserBox" maxlength="20"></td>
</tr>
<tr>
  <td>Öğr. TC. Kimlik No</td>
  <td class="bold">:</td>
  <td><input type="text" name="inputTC" id="inputTC" class="newUserBox"  maxlength="11"/></td> 
</tr>
<tr>
  <td>Öğr. Ek Bilgileri</td>
  <td class="bold">:</td>
  <td>
  <textarea name="inputMesaj" rows="5" id="inputMesaj" minlength="10" maxlength="250" onkeyup="karaktersay(this.value);" class="newUserBox"></textarea><br>
  
  </td>
</tr>
</table>
</br>
</br>

<table border="2" cellspacing="2" cellpadding="5" width="500" align="center">

<legend style="text-align: center"><font size="5" color="#3D2B1F">Anne Bilgileri</font></legend>
</br>
<tr>
 <td>Anne Adı </td>
 <td class="bold">:</td>
 <td><input type="text" name="inputNames" id="inputNames" class="newUserBox" minlength="2"></td>
 </tr>
 <tr>
 <td>Anne Soyadı </td>
 <td class="bold">:</td>
 <td><input type="text" name="inputSurnames" id="inputSurnames" class="newUserBox" maxlength="20"></td>
 </tr>
 <tr>
 <td>Anne E-Posta Adresi </td>
 <td class="bold">:</td>
 <td><input type="text" name="inputEmails" id="inputEmails" class="newUserBox" placeholder="_____@gmail.com" maxlength="23"></td>
 </tr>
 <tr>
 <td>Anne Cep Telefonu </td>
 <td class="bold">:</td>
 <td><input type="text" name="inputPhones" id="inputPhones" class="newUserBox" placeholder="+90XXXXXXXXXX" maxlength="13"/></td>
 </tr> 
 <tr>
 <td>Ev Adresi </td>
 <td class="bold">:</td>
 <td>
  <textarea name="inputMesajs" rows="5" id="inputMesajs" minlength="10" maxlength="250"  class="newUserBox"></textarea><br>
  </td>
 </tr>
 </table>
 </br>
 </br>
 <table border="2" cellspacing="2" cellpadding="5" width="500" align="center">
 <legend style="text-align: center"><font size="5" color="#3D2B1F">Baba Bilgileri</font></legend>
 </br>
 <tr>
 <td>Baba Adı </td>
 <td class="bold">:</td>
 <td><input type="text" name="inputNamed" id="inputNamed" class="newUserBox" minlength="2"></td>
 </tr>
 <tr>
 <td>Baba Soyadı </td>
 <td class="bold">:</td>
  <td><input type="text" name="inputSurnamed" id="inputSurnamed" class="newUserBox" maxlength="20"></td>
 </tr>
 <tr>
 <td>Baba E-Posta Adresi </td>
 <td class="bold">:</td>
  <td><input type="text" name="inputEmaild" id="inputEmaild" class="newUserBox" placeholder="______@gmail.com" maxlength="23"></td>
 </tr>
 <tr>
 <td>Baba Cep Telefonu </td>
 <td class="bold">:</td>
 <td><input type="text" name="inputPhoned" id="inputPhoned" class="newUserBox" placeholder="+90XXXXXXXXXX" maxlength="13"/></td> 
 </tr>
 <tr>
 <td>Ev Adresi </td>
 <td class="bold">:</td>
 <td>
  <textarea name="inputMesajd" rows="5" id="inputMesajd" minlength="10" maxlength="250"  class="newUserBox"></textarea><br>
  </td>
 </tr>
<tr>
<td colspan="3" class="taCenter"><button id="btnAdd" name="gönder" onclick="formkontrol()">Gönder</button></td>
</tr>	
</table>
</form>
<?php

     if(isset($_POST["gönder"]))
	 {
		 $sql="insert into ogrenci (inputName , inputSurname, inputTC, inputMesaj, inputNames, inputSurnames, inputEmails, inputPhones, inputMesajs, inputNamed, inputSurnamed, inputEmaild, inputPhoned, inputMesajd)
		           values('".($_POST["inputName"])."','".($_POST["inputSurname"])."','".($_POST["inputTC"])."','".($_POST["inputMesaj"])."','".($_POST["inputNames"])."','".($_POST["inputSurnames"])."','".($_POST["inputEmails"])."','".($_POST["inputPhones"])."','".($_POST["inputMesajs"])."','".($_POST["inputNamed"])."','".($_POST["inputSurnamed"])."','".($_POST["inputEmaild"])."','".($_POST["inputPhoned"])."','".($_POST["inputMesajd"])."')";
         $sonuc=mysqli_query($baglan,$sql);
		 if($sonuc)
		 {
			 echo "verimiz eklendi";
		 }
		 else
		 {
			 echo "hata oluştu";
	     }
	 }
?>
    <div class="clear"></div>
</div>
<div id="content">
</div>
</div>
</body>
</html>