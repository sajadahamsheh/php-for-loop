<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //question 1
    
    for ($x=1 ; $x <= 10 ; $x++){
        echo $x ."-";
    }
    echo "<br>";
///////////////////////////////////////////////////////////////////
    echo "<br>";
    //question 2
    $xx=0;
    for ($i=1 ; $i <= 30 ; $i++){
        $xx=$xx+$i;
    }
    echo $xx;
    echo "<br>";
 ///////////////////////////////////////////////////////////////////
        echo "<br>";
        //question 3
        $iii=3;
        $i1=3;
        $alps="B";
        for($m=0; $m< 5 ; $m++){
            echo "A" ." ";
        }
        echo "<br>";
    for($ii=0 ; $ii<4; $ii++ ){
        // echo "A";
       
        for($l=0;$l<$i1;$l++){
            echo "A". " ";
        }
        for ($i2=2;$i2<=$iii;$i2++ ){
            echo $alps." ";
        }
        echo "<br>";
        $iii++;
        $i1--; 
        $alps++;
    }
    echo "<br>";
 ///////////////////////////////////////////////////////////////////
        echo "<br>";
        //question 4
        $iii1=2;
        $i11=3;
        
        for($m1=0; $m1< 5 ; $m1++){
            echo 1 ." ";
        }
        echo "<br>";
    for($ii1=0 ; $ii1<4; $ii1++ ){
        // echo "A";
       
        for($l1=0;$l1<$i11;$l1++){
            echo 1 ." "; 
        }
        for ($i21=1;$i21<=$iii1;$i21++ ){
            echo $iii1 ." ";
        }
        echo "<br>";
        $iii1++;
        $i11--; 
        
    }
    
 ///////////////////////////////////////////////////////////////////
        echo "<br>";
        //question 5
    $f=5;
    $fi=1;
    for($k=1;$k <=$f ; $k++){
        $fi = $fi*$k;
    }
    echo $fi;
    echo "<br>";
    
 ///////////////////////////////////////////////////////////////////
        echo "<br>";
        //question 5
        $num = 0;  
        $n1 = 0;  
        $n2 = 1;  
         
        echo $n1.' '.$n2.' ';  
        for ($num=0; $num <7 ; $num++){
            $n3 = $n2 + $n1;  
            echo $n3.' ';  
            $n1 = $n2;  
            $n2 = $n3;
        }
        // while ($num < 7 )  
        // {  
             
        //     // $num = $num + 1; 
        // }
    echo "<br>";
    
 ///////////////////////////////////////////////////////////////////
        echo "<br>";
        //question 6
        $text="OrangeAcademy";
        $char="c";
        $count="0";
        for($x2="0"; $x2< strlen($text); $x2++){ 
            if(substr($text,$x2,1)==$char){
                $count=$count+1;
	        }
        }
        echo $count;
    echo "<br>";
///////////////////////////////////////////////////////////////////
    echo "<br>";
//question 10
    echo "<table border =\"1\" style='border-collapse: collapse'>";
    for ($row=1; $row <= 10; $row++) {
        echo "<tr> \n";
        for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        echo "<td>$p</td> \n";
        }   
        echo "</tr>";
    }
    echo "</table>";
///////////////////////////////////////////////////////////////////
echo "<br>";
//question 11
for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . " FizzBuzz"."\n" ;
     echo "<br>";
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. " Fizz"."\n";
     echo "<br>";
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. " Buzz"."\n";
     echo "<br>";
   }
     else
   {
     echo $i."\n";
     echo "<br>";
   }
 }
///////////////////////////////////////////////////////////////////
echo "<br>";
//question 12

$n = 5; 
echo "n = " . $n . "\n";
echo "<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
    echo "\n";
    echo "<br>";
   }

///////////////////////////////////////////////////////////////////
echo "<br>";
//question 13

echo "<pre>";
for ($row = 0; $row <= 10; $row++) {
    for ($column = 0; $column <= 10; $column++) {
        if ((($column == 1 or $column == 10) and $row != 0) or (($row == 0 or $row == 5) and ($column > 1 and $column < 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";

///////////////////////////////////////////////////////////////////
echo "<br>";
//question 14
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5 or $row == 10) and ($col < 10 and $col > 1)) or ($col == 10 and ($row != 0 and $row != 5 and $row != 10))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";

///////////////////////////////////////////////////////////////////
echo "<br>";
//question 15
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 11; $col++) {
        if (($col == 1 and ($row != 0 and $row != 10)) or (($row == 0 or $row == 10) and ($col > 1 and $col < 9)) or ($col == 9 and ($row == 1 or $row == 9))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
    
    ?>
<!-- ///////////////////////////////////qustion 9//////////////////////////////////////////////////////// -->

    <table width=”270px” cellspacing=”0px” cellpadding=”0px” border=”1px”>

    <?php
        for($row=1;$row <= 8 ;$row++){
            echo "<tr>";
            for($col=1;$col <= 8 ;$col++){
                $total= $row + $col;
                if($total%2==0){
                    echo "<td ></td>";
                }else{
                    echo "<td height=30px width=30px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }
    echo "<br>";
    ?>
    </table>

<!-- ////////////////////////////////qustion12///////////////////////////////////////// -->
    <table  border="1.5" cellpadding="3" cellspacing="0">
    <?php
        echo "<br>";
        for($i=1;$i<=6;$i++){
            echo "<tr>";
            for ($j=1;$j<=5;$j++){
                echo "<td>$i * $j = ".$i*$j."</td>";
            }
            echo "</tr>";
        }
?>

</body>
</html>