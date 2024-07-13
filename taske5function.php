<?php
echo "<pre>";

// //taske 1
function prime($num){
    if($num <= 1){
        echo "$num :Not a prime number";
    }
for($p = 2; $p<= sqrt($num); $p++){
    if($num % $p == 0){
        echo "$num :Not a prime number";
        return;
    }
    else{
        echo "$num :is a prime";
        return;
    }
}

};
prime(11);
echo "<hr>";





//taske 2
function reverse($strin){
    echo strrev($strin);
};
reverse("rasha");
echo "<br>";
reverse("tweety");
echo "<hr>";




// //taske 3
function iflower($lower){
        if(ctype_lower($lower)){
            //lowercase دالة تستخدم للتاكد من ان جميع الاحرف 
            echo "Your String is Ok";
        }
        else {
            echo "not ok";
        }
    };
 iflower("rasha");
echo "<br>";
 iflower("RAsha");
echo "<hr>";







//taske 4
function swap(&$x , &$y){
   $swup = $x;
   $x = $y;
   $y = $swup;
}
$x = 12;
$y = 10;
swap($x , $y);
echo "x = $x  y = $y";
echo "<hr>";








// //taske 6
//يعني اذا كان الرقم حاصل مجموع مربع كل عدد من اعدادهarmstrong بدو اتاكد اذا الرقم 
// ex : 407 ?= (4*4*4)+(0*0*0)+(7*7*7)
function armstrong($num){
    $ruslt = 0;
    $tostrin = strval($num);
    //string بتحول الرقم ل 
    for($i = 0; $i < strlen($tostrin); $i++){
       $tonumber = intval($tostrin[$i]);
       //Get the integer value of a variable
       //ل رقم string بيرجعلي ال 
       $mul = pow ($tonumber, 3);
       $ruslt += $mul;
    }
    if($ruslt == $num){
        echo "$num : is Armstrong Number ";
    }
    else{
        echo "$num :Not armstrong";
    }
}
armstrong(407);
echo "<hr>";






//taske 7
// هي كلمة أو جملة أو رقم يقرأ بنفس الطريقة من اليسار الى اليمين او العكس Palindrome
// ex: level
function palindrome($st){
    $without = preg_replace("/[^a-z]/i", "",strtolower($st));
    //lowercase خليت الجملة بس احرف و حولت كل الجملة ل 
    $reverse = strrev($without);
    //عكست الجملة
    if($reverse === $without){
        echo "Yes it is a palindrome"; 
    }
    else{
        echo "No it is not a palindrome"; 
    }

};
palindrome("Eva, can I see bees in a cave?");
echo "<hr>";







//taske 8
function removeduplicates($array){
    $newarray = [];
    foreach($array as $x){
        if(!in_array($x , $newarray)){
            $newarray[] = $x;
        }
    }
    return $newarray;
};
print_r (removeduplicates([2, 4, 7, 4, 8, 4]));

//طريقة اخرى
function dd($arra){
    $without = array_unique($arra);
    return $without;
};
print_r(dd([2, 4, 7, 4, 8, 4]));

























































echo "</pre>";
?>