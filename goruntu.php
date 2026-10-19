<html>
  <head> 
  <title>PHP ile Çarpraz Kareler</title>  
    <style>
    table {
      border-collapse: collapse;  /* çift çizgileri birleştirip tek çizgi yapar */
      margin: 30px auto;
    }

    td{
      width: 50px;
      height: 50px;
      border: 1px solid #777; /*karelerin etrafına gri renkte çerçeve ekler */
      text-align: center;
      vertical-align: middle;
      font-weight: bold; /* yıldızlar daha kalın görünür */
      font-size: 20px;
    }
    </style>
  </head>
  <body>
</body>
</html>

<?php
echo"<table>";

  for($satir=1; $satir<=8; $satir++){ // 8 adet satır ekler
    echo "<tr>";

  for($sutun=1; $sutun<=8; $sutun++) // 8 adet sütun ekler
 { 
    if(($satir+$sutun)%2==0){ // satır ile sütun numaralarının toplamı çift ise yıldız ekler
      echo "<td>*</td>";
    }else{                   // toplam tek ise boş bırakır
      echo "<td></td>";
    }
  }
  echo "</tr>";
  }
  echo "</table>";

?>


