<?php
//taske 1
echo "<pre>";
$strin = "hello world rasha";
echo strtoupper($strin); //string كل ال 
echo"<br>";
echo strtolower($strin); //string كل ال 
echo"<br>";
echo ucfirst($strin);  //اول حرف فقط
echo"<br>";
echo ucwords($strin);  //اول حرف من كل كلمة
echo"<hr>";






//taske 2
$time = date_create("085119");
echo date_format($time, "H:i:s");  
//بحولي اياه لوقت 
echo"<hr>";





//taske3
$check = "I am a full stack developer at orange coding academy";
if(preg_match("/ORANGE/i",$check))echo "found";
  //بتاكد اذا الكلمة يلي محدديتها موجودة او لا 
echo"<hr>";





//taske4
$filename = "www.orange.com/index.php";
echo basename($filename);  
//URL بيستخرج اسم الملف من ال 
echo"<hr>";





// // taske5
$username = "rasha@orange.com";
echo strstr($username , "@", true);
//strstr : string search
// ($username:stringe اسم ال )
// ("@": من وين يبلش يقتطع )
// (true :اذا ما كتبتها رح يتقطع من بعد الجزء يلي انا محدديتو اما اذا كتبتها رح يتقطع من قبلها)
// strstr => sensitive/stristr=>insensitive
echo"<hr>";




//taske 6
$get = "info@orange.com";
echo substr($get ,-3);
echo"<hr>";



//taske 7
$password = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
//  فيو كل الارقام و الاحرف variable عرفت  
$random = str_shuffle($password);
// (str_shuffle)=>بتخلط الاحرف و الارقام بشكل عشوائي 
echo substr($random , 0 , 9);
echo"<hr>";





//taske 8
$replace = "That new trainee is so genius";
echo str_replace("That","our",$replace);
echo"<hr>";





//taske 9
$stringe1 = "rasha";
$stringe2 ="raspa";
$diffrent = strspn($stringe1,$stringe2);
// strspn:string span
//strspn:بتقارن بين سلسلتين وبتوقف عند ما تلاقي اختلاف و بتحفظ القيمة يلي وقف عندها
echo "First difference between two strings at position $diffrent: $stringe1[$diffrent] vs $stringe2[$diffrent] ";
                                 // مشان يعرف الحرف المختلف  //مشان يعرف وين وقف بالزبط

echo"<hr>";




//taske 10
$stirnge = "Twinkle, twinkle, little star";
$toarray = explode (", ",$stirnge);
//array ل stirng بتحول ال 
var_dump($toarray);
echo"<hr>";




//taske 11
$nextletter = "a";
echo ++$nextletter;
echo "<br>";
$znextletter = "z";
echo ++$znextletter;
// aa:رح يطلع الناتج 
if($znextletter == "z"){
    $znextletter = "a";   
};
echo $znextletter;
echo"<hr>";





//taske 12
$add = "The brown fox";
echo substr_replace($add, "quick ", 4, 0);
// (string , عدد الاحرف يلي بدي ينحذفو, مكان يلي يبلش يضيف عليه, الكلمة يلي بدي يضيفها)
echo"<hr>";




//taske 18
$firstword = "rarquick brown fox";
$tt = explode (" ", $firstword);
// array ل string بتحول ال 
echo $tt[0];
echo"<hr>";




//taske 13
$remove0 = '0000657022.24';
echo trim($remove0 , "0");
//string رح يضل في 0 في نص ال 
 echo"<br>";
echo (preg_replace('/0/','',$remove0));
// رح يشيل كل ال 0
echo"<hr>";





//taske 14
$remove = "The quick brown fox jumps over the lazy dog";
echo str_replace("quick","",$remove);
// ""وما حط بدالها اشي quick حذف 
echo"<hr>";





// taske 15
$removedash = "The quick brown fox jumps over the lazy dog---";
echo (preg_replace('/-/','',$removedash));
echo rtrim ($removedash,"-");
echo"<hr>";
// rtrim=> بتحذف من اليمين
// ltrim=> بتحذف من اليسار
// trim=> بتحذف من الجهتين




//taske 16
$removespecial = '\"\1+2/3*2:2-3/4*3';
echo (preg_replace('/[^0-9]/',' ',$removespecial));
// preg_replace('الجزء يلي بدي استبدلو وهون معناها انو كل اشي ما عدا الارقام',' ',$removespecial)





//taske 17
$select5words = "The quick brown fox jumps over the lazy dog";
$tarr = explode (" ", $select5words);
//array ل string بتحول ال 
// print_r ($tarr);
$cut = array_slice($tarr,0,5);
//بتقطع اول 5 عناصر
// print_r ($cut);
echo implode (" ",$cut);
// string في array بتدمج عناصر ال 







//taske 18
$removecomma = '2,543.12';
echo preg_replace('/,/','',$removecomma);





//taske 19
for($alfa=97; $alfa <=122; $alfa++){
    //ASCLL كتبت ترميز الاحرف ب 
    echo chr($alfa ).' ';
    //97=a مشان يطلعلي العدد المقابل للرقم يعني 
};








































echo "</pre>";
?>