function formkontrol() {
var ad = document.getElementById("inputName").value;
var soyad = document.getElementById("inputSurname").value;
var telefon = document.getElementById("inputPhone").value;
var konu = document.getElementById("inputSec").value;
var mesaj = document.getElementById("inputMesaj").value;

if (ad.length <= 2) {
    alert("Geçersiz ad girdiniz.");
}
else {
    if (soyad.length == "" || soyad.length >= 20) {
        alert("Geçersiz soyad girdiniz.");
    } else {
        if (telefon.length != 13) {
            alert("Geçersiz numara girdiniz.");
        } else {
            if (konu == 0) {
                alert("Konu seçimi yapınız.");
            } else {
                if (mesaj.length < 10 || mesaj.length > 250) {
                    alert("10 ile 250 karakter arasında mesaj yazınız.");
                } else {
                    let url = "api.php";
                    let request = new XMLHttpRequest();
                    request.open("POST", url);
                    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    request.onload = function(){
                       if (request.response == "200") {
                           alert("Mesajınız gönderildi.");
                       } else {
                           alert("Mesajınız gönderilirken bir sorun oluştu.");
                       }
                    }
                    request.send("action=ekle&ad="+ad+"&soyad="+soyad+"&telefon="+telefon+"&konu="+konu+"&mesaj="+mesaj);
                }
            }
        }
    }
}
//console.log(ad,soyad,telefon,konu,mesaj);
}

function karaktersay(metin) {
var toplam = metin.length;
document.getElementById("char").innerHTML = 250-toplam+" karakter kaldı.";
}