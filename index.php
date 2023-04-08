<?php 
session_start();

if(empty($_SESSION["SiteDili"])){
    include("langTR.php");
}
else{
    if($_SESSION["SiteDili"]=="Turkish"){
        include("langTR.php");
    }
    else{
        include("langEn.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="1000" align="center" border="0">
        <tr height="40">
            <td width="130"><?php echo ANASAYFA; ?></td>
            <td width="155"><?php echo HAKKIMIZDA; ?></td>
            <td width="130"><?php echo ILETISIM; ?></td>
            <td width="373"><?php echo URUNLER; ?>ler</td>
            <td width="190"><a href="vote.php?DilSecimi=Turkish" style="color:#000000;text-decoration:none">TR</a> | <a href="vote.php?DilSecimi=English" style="color:#000000;text-decoration:none">EN</a></td>
        </tr>
    </table>
</body>
</html>