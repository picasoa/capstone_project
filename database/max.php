<?php
$a = array("qwer","qw","qhyrtgrfewd","qwerty","rtfrfy");
$c=strlen($a[0]);
for($i=0;$i<count($a);$i++)
{
	
	if(strlen($c)<strlen($a[$i]))
	{
		$c=$a[$i];
		


	}
}
echo $c;
?>
