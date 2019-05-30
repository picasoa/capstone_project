<?php
$a = array("31" =>"a" ,"41"=>"b","31"=>"a","39"=>"c","40"=>"d" );
$b=array_flip($a);
var_dump($b);
$c=0;
foreach($b as $k=>$v)
{
    $c=$c+intval($v);
}
echo $c;
?>