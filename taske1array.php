<?php
echo"<pre>";
//taske 1
$fruits = ["apple", "banana", "Strawberry", "blueberry"];
foreach($fruits as $r){
    echo $r;
    echo "<br>";
};
$fruits []= "mango";

echo print_r ($fruits);

array_pop($fruits);

echo print_r ($fruits);

if(in_array("apple",$fruits)){
    echo "yes";
}
else{
    echo "no";
};

echo"<hr>";






//taske2
$peoplenames = ["Rasha"=>19 , "Nejar"=>17, "Relam"=>16, "Aram"=>15, "Hala"=>13];

foreach($peoplenames as $x => $y){
    echo "$x => $y";
    echo "<br>";
};

$peoplenames+=["asal"=>23];
$peoplenames["ahmad"]=25;
echo print_r($peoplenames);

unset($peoplenames["Rasha"]);
echo print_r ($peoplenames);

if(in_array("Rasha",$peoplenames)){
    echo "found";
}
else{
    echo "not found";
};





//taske 3
$multi = [
    ["name" =>"omar ","age" => 16, "grade" => "grade 10"],
    ["name" =>"sara ","age" => 13, "grade" => "grade 7"],
    ["name" =>"ahmad ","age" => 12, "grade" => "grade 6"],
]; 
echo "<hr>";
foreach($multi as $x){
    echo $x["name"] ;
    echo $x["age"] ;
    echo $x["grade"] ;
    echo "<br>";
};

$multi[3]=["name" =>"rami","age" => 17, "grade" => "grade 11"];
print_r($multi);

$multi[1]["grade"]="ggg";
print_r($multi);

array_splice($multi,1,1);
print_r($multi);

echo "<hr>";









//taske 4
$arr = [456, 43, 55, 76, 988, 266];
array_push($arr , 44, 444);
print_r($arr);

array_pop($arr);
print_r($arr);

$asso = ["color"=>"rad", "number"=>44, "city"=>"Aqaba"];
;
print_r(array_keys($asso));
print_r(array_values($asso));
echo count($asso);

$arraye1=[44, 444, 4];
$arraye2=[3, 33, 5];
print_r (array_merge($arraye1 , $arraye2));
echo array_search(44, $arraye1);


$sortt = ["laila", "asl", "zaid", "ahmad"];
sort($sortt);
echo "<br>";
echo "<br>";
print_r ($sortt);

$keysort=["nesreen"=> 25, "rashed"=> 19, "omar"=> 23, "ayham"=>19];
ksort($keysort);
echo "<br>";
echo "<br>";
print_r ($keysort);


$valuesort = ["color"=>"blue", "size"=>"large", "price"=> "expensive"];
sort($valuesort);
echo "<br>";
echo "<br>";
print_r ($valuesort);














echo "</pre>";
?>