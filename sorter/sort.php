<?php
function ShellSort(&$array)
{
	$sort_length = count($array) - 1;
	$step = ceil(($sort_length + 1)/2);
	do
	{
	   $i = ceil($step);
	   do
	   {
	     $j=$i-$step;
	     $c=1;
	     do
	     {
	       if($array[$j]<=$array[$j+$step])
	       {
		  	$c=0;
	       }
	       else
		   {
		      $tmp=$array[$j];
		      $array[$j]=$array[$j+$step];
		      $array[$j+$step]=$tmp;
		   }
		$j=$j-1;
	     }
	     while($j>=0 && ($c==1));
	      $i = $i+1;
	    }
	    while($i<=$sort_length);
	    $step = $step/2;
	}
	while($step>0);
    return $array;
}
