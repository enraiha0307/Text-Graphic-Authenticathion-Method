<?php
session_start();
require "conn.php";
$EnRi=$_POST["EnRi"];
$EnPi=$_POST["EnPi"];
$publicke=$_POST["hashuser"];

/*$sql = "SELECT `publickey` FROM `userhash` 	WHERE `userhash`.`hashid` = '$userhash'";
$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
       $publicke=$row["publickey"];
    }
*/
//$pk_string = "-----BEGIN PUBLIC KEY-----\n".$publicke."\n-----END PUBLIC KEY-----";

$key="
-----BEGIN PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCl5G46GfvX7BxG
2U3omhYkutUTkcos+6QWCkx2C42yQHAM4+ut1go/V7etkwc32hUH9BNOmRAzgKsZ
iWy1SZO7mcR92wfiUdHF7eqGL37M6SdYokKdbgKrvSghMIArTwEgn/hlwYzVJTK/
X7S7VoFzHqDVoqG2G21GM2lyTYsFodWiW3tngVNvlJ1kzAkpHIS/x+4/rLJHQIkY
RtApkoA4M0rKonjaxXNRDYAxAhZ2GQV0AVqEoIvgwKEa8pToXbRwd2+iTLFcmNTe
xmhuM1+L7wXMf2F3vLySaLijcAo/r2nlqyB+VehcemjXfmLc3NmqU0n4Gz2lj73S
72ItJyknAgEDAoIBAG6YSXwRUo/yvYSQ3psRZBh8jg0L3B39GA6xiE6yXnbVoAiX
8nPkBtTlJR5iBM/muK/4DN8QtXerHLuw8yOGYn0RLak8r+w2i9lJRwQfqd3wxOXB
gb5JVx0oxWt1qseKAMBqpZkrszjDdyo/zdI5q6IUazkXFnlnni7M8PbeXK5q0PE6
0XclC1W79jX71D8d24SITAfXDqaXOwObSn9dadw1gsxx8fPd6Fr7ZTS0AddxJZN2
jNK14xkv2rkxdP1W529gnCVQUhju5SPJS5QwphI7KyfH7wTHnBOhbhp3FpaVKPz0
biLwZ6D0xgR6reZofz+t1cvDOha54wC4ZZYJyTsCgYEA0blJn8zxAHDSj8z/01zz
dc1qdYfdlf9gEWgr+APS9XSowGg+CdQN2W0XwySlpPoMZyCKM/aH0DNcl11yynpL
Mkm5MU2V2T+VKWXwUNHrGXSVRJkgLu+iD1Pt0oGPfS9qRYydG5TBjQEVrBrh4Jtk
KdsMBA82mgxEdFqtERbTpi0CgYEAyn85oWfYwf4oHEbSd218RauRBqwMhk39nyqx
6Gaza/k6Ri+5hBjqvVt8pT1Obrji5fZFU1IH5wecQae1mvIQJv+tVBy+XPedU8Mo
Jj3/TPwBAHezTADvQyEIwPot6y5lZt2fX7Urv+n1k7XkfWfb8O/ChTc/zHc0dPct
uLVE1SMCgYEAi9Dbv932AEs3CoiqjOiiTojxo6/pDqpAC5rH+q03Tk3F1ZrUBo1e
kPNlLMMZGKay72sGzU8FNXeTD5Oh3FGHdtvQy4kOkNUOG5lK4IvyEPhjgxDAH0ps
Cjfz4au0/h+cLl2+EmMrs1YOcryWlbztcTyyrV95vAgtouceC2SNGXMCgYEAhv97
wO/l1qlwEtnhpPOoLnJgrx1drt6pFMchRZnM8qYm2XUmWBCcfjz9w340SdCXQ/mD
jOFamgUS1m/OZ0wKxKpzjWh+6KUTjSzFbtP/iKgAqvp3iACfghYF1fwenMmY7z5q
P84dKpv5DSPtqO/n9fUsWM9/3aTNo09z0HjYjhcCgYEAoN+1/ZzonPWDIY/u+7bW
e8BkcuBVpMZe7qBYHeVix89yvyuVE+erKqurnG7fN7YIDX8V1OcVP+qHw8fJNQKL
wd03nNIIJyTPXodgty3HYjBUe8fVn/8P+JOv2U7bJCkUGlFeyZIMZWEsYd8t5794
3fotiYXOUug9bFtnGHRyY7I=
-----END PRIVATE KEY-----";

/*$origkey=base64_decode($origpubkey);*/

//$encryptedString = base64_decode($EnPi);
$encryptedRi=base64_decode($EnRi);
openssl_public_decrypt($encryptedRi, $decryptedRi, $publicke);
$Ri=$decryptedRi;

//$encryptedPi=base64_decode($EnPi);
//openssl_public_decrypt($encryptedPi, $decryptedPi, $publicke);
//$encryptedPi1=base64_decode($decryptedPi);
//openssl_private_decrypt($encryptedPi1, $decryptedPi1, $key);
//$Pi=$decryptedPi1;

$encryptedPi=base64_decode($EnPi);
openssl_public_decrypt($encryptedPi, $decryptedran, $publicke);

$digest = hash("sha256", utf8_encode($decryptedran));


//sacred XOR function
 $s1 = $digest;
 $s2 = $Ri;
 $x = bin2hex(pack('H*',$s1) ^ pack('H*',$s2));

$sql = "SELECT * FROM `userhash` 	WHERE `userhash`.`hashid` = '$x'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
   /* while($row = $result->fetch_assoc()) {
        echo $row["pwi"];
    }*/
    $imageapp="";
   	$Ti=hash("sha256", utf8_encode($decryptedran+1));

   	$sql = "SELECT `imagenu` FROM `imagedata` 	WHERE `imagedata`.`hashid` = '$x'";
	$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
       $imageapp=$imageapp."x".$row["imagenu"];
    }
openssl_public_encrypt($Ti, $cryptedTi, $publicke);
$sendcryptedTi=base64_encode($cryptedTi);
openssl_public_encrypt($imageapp, $cryptedimage, $publicke);
$sendcryptedimage=base64_encode($cryptedimage);
    echo $sendcryptedTi.",".$sendcryptedimage;
}
else{
	echo "noresult";
}
$_SESSION['varname'] = 500;
//$encryptedString1 = base64_decode($string1);
?>