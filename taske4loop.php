
<?php
echo "<pre>";

//taske 1
for ($i=1 ; $i<=10; $i++){
    
    if($i===10){
       echo $i;
    }
    else{
        echo $i . "-";
    }
};
echo "<hr>";





//taske 2
$sum = 0;
for($x = 0; $x <= 30; $x++){
 $sum+=$x;
};
echo $sum;
echo "<hr>";




//taske 3
for($r = 0; $r < 5; $r++){
    
  for($c = 0; $c < 5; $c++){
    echo "*"." ";
  };
  echo "<br>";
};
echo "<hr>";





//taske 4
$factorial=1;
for($m = 1; $m <= 5; $m++){
$factorial*=$m;
};
echo $factorial;
//حاصل ضرب جميع الاعداد الصحيحة من 1 ال 5
echo "<hr>";





//taske 5
$zero =0;
$one =1;
echo $zero.","." ";
echo $one.","." ";
//طبعت قيمة ال 0 و ال 1

for($f = 2 ; $f <= 10; $f++){
    $next = $zero + $one ;
   //عرفت القيمة التالية مجموع العددين السابقين
   echo $next.","." ";

   $zero = $one ;
    $one = $next;
    //تحديث قيميهم 
};
echo "<hr>";




//taske 6
$cccc = "Orange Coding Academy";
$count = 0;
for($u = 0; $u < strlen($cccc); $u++){
// echo $u;
       if($cccc[$u] == "c" || $cccc[$u] == "C"){
   $count += 1; 
   }
};
echo $count;
echo "<hr>";



//taske 7
echo '<table cellpadding="3px" cellspacing="0px" border="1">';
for($t = 1; $t <= 6; $t++){
    echo "<tr>";
    for($r = 1; $r <= 5; $r++){
        $rusult = $t * $r;
        echo "<td>$t * $r = $rusult</td>";
    };
    echo "</tr>";
};






//taske 8
$three = 3;
$five = 5;
for($f = 1; $f <= 50; $f++){
    if($f % 3 == 0 && $f % 5 == 0){
        echo "FizzBuzz"." ";
    }
    elseif($f % 3 == 0){
        echo "Fizz"." ";
    }
    elseif($f % 5 == 0){
        echo "Buzz"." ";
    }
    else{
        echo $f." ";
    }
    if($f % 10 == 0){
        echo "<br><br>";
    }
};
echo "<hr>";









//taske 9
$firstnum = 1;
for($row = 1; $row <= 5; $row++){
    //للصفوف
    for($col = 1; $col <= $row; $col++){
    //للاعمدة
   echo $firstnum ;
   $firstnum ++;
    }
    echo "<br>";
};



echo "</pre>";
?>
