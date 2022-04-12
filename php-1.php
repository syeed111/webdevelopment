






<?php
echo "Hello PHP!";
print('<br>Inside print function .<br>');

$data=123;
echo $data;
/*comment
comment*/
//comment

echo"<br>value of data=".$data."<br>";
$array =array("n1","n2","n3");
echo'<pre>';
//print_r($array);
var_dump($array);

for($index=0;$index<count($array);$index++)
{
echo'<br>'.$array[$index];

}
foreach($array as $value)
{
echo'<br>'.$value;
}

?>