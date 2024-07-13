<?php
echo "<pre>";
//taske 1
// $cities = ["Aqaba", "Amman", "Zarqa", "Irbid"];
// foreach($cities as $element){
//     echo $element;
//     echo "<br>";
// };
// echo "<br>";
// echo array_search("Zarqa", $cities);
// echo "<br>";
// $arr = array_diff ($cities,["Aqaba"]);
// print_r($arr);
// print_r(array_slice($cities,0,3));
// echo "<hr>";

//taske2
$products = ["shampoo"=>6, "mascara"=>4, "blusher"=>8 ];
// ksort($products);
// print_r($products);

// sort($products);
// print_r($products);

// $price =0 ;
// $stups =0;
// foreach($products as $c=> $pr){
//  $price+=$pr;
//  $stups++;
//  $avarage = $price/$stups;
// };
// echo $avarage;

// echo "<br>";
// print_r(max($products));  //value بس بطلع ال 
// $expensive="";
// $big = 0;
// foreach($products as $product =>$price){
//     if($big<$price){
//         $big = $price;
//         $expensive = $product;
//     }
// };
// echo $expensive;
//????????????????????????????????????



// echo "<hr>";
//taske3 
// $books =[
//    [
//       "title"=>"zz" ,
//       "author"=>"George Orwell",
//       "year"=> 2000 
//    ],
//    [
//       "title"=>"To Kill a Mockingbird" ,
//       "author"=> "Harper Lee", 
//       "year"=>2016
//    ],
//    [
//       "title"=> "The Great Gatsby",
//       "author"=>"Harper Lee",
//       "year"=> 2011
//    ]
// ];
// $after=2010;
// foreach($books as $x){

//     if($after < $x["year"]){
//     echo $x["title"];
//     echo $x["author"];
//     echo $x["year"];
//     }
//     echo"<br>";
// };

// $books []=[
//     "title"=> "pets",
//     "author"=>"rasha yaseen",
//     "year"=> 2004
// ];
// print_r($books);

// $books[1]["author"]="nejar";
// print_r($books);


// $title = array_column ($books , "title");
// asort($title);

// print_r($title);

// echo "<hr>";




//taske4
// //1
// $toupp= ["blue","red","yellow","green"];

// $result = array_map('strtoupper', $toupp);
// print_r($result);

// //2
// $donot = [11, 8, 77, 5, 75];
// $bigger= array_filter($donot, function($x){
//    return $x > 10;
// });
// print_r($bigger);

// //3
// $sum = array_reduce($donot, function($x,$y){
//   return $x+$y;
// });
// print_r($sum);


 //4
// $toupp= ["blue","red","yellow","green"];
// function toupper(&$value){
//     $value = strtoupper($value);
// }
// array_walk($toupp,'toupper');
// print_r($toupp); // جديدة array بدون ما تعمل  array على كل عنصر من عناصر ال function  بتطبق ال 


//5
// $array1 = ["1"=>"rasha" ,"2"=>"nejar", "3"=>"relam" ,"4"=>"aram"];
// $array2 = ["1"=>"rasha" ,"2"=>"hala", "3"=>"relam" ,"4"=>"aram"];
// $diffrent = array_diff($array1,$array2);
// print_r($diffrent); //arrays بتطلع الفرق بين ال 
// //6
// $Similar= array_intersect($array1,$array2);
// print_r($Similar); //arrays بتطلع المتشابه بين ال 


//7
// $arr1 = ["rasha", "nejar","relam","aram"];
// $arr2= [19, 17, 16, 15];
// $combine = array_combine($arr1 , $arr2);
// print_r($combine); //associative array ب indexed array بجمع تنين 


//8
// $books =[
//    [
//       "title"=>"zz" ,
//       "author"=>"George Orwell",
//       "year"=> 2000 
//    ],
//    [
//       "title"=>"To Kill a Mockingbird" ,
//       "author"=> "Harper Lee", 
//       "year"=>2016
//    ],
//    [
//       "title"=> "The Great Gatsby",
//       "author"=>"Harper Lee",
//       "year"=> 2011
//    ]
// ];
// $column = array_column($books,"title");
// print_r($column); 


$slicearray = ["rasha", "nejar","relam","aram"];
//9
$result = array_slice($slicearray,1);
print_r($result);
//array_slice(): لا يعدل المصفوفة الأصلية ويُرجع الجزء المحدد كنسخة.
//array_splice(): يعدل المصفوفة الأصلية بإزالة جزء منها (واستبداله اختياريًا) ويُرجع العناصر التي تمت إزالتها.

//10
if(in_array("laila",$slicearray)){
   echo "yes";
}
else{
   echo "no";
};

echo "</pre>";
?>