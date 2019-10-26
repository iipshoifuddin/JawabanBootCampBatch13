<?php

function divideAndSort($a)
{
	$max=explode("0",$a);
	$pecah="";
	$gabung1="";
	
	for($i=0; $i<count($max); $i++)
	{
		$pecah=str_split($max[$i]);
		$gabung1=sort_array([$pecah]);
		$b[$i]=$gabung1;
	}
	return implode("", $b);

}
function swap(&$arr,$p1,$p2)
{
    $temp = $arr[$p2];
    $arr[$p2] = $arr[$p1];
    $arr[$p1] = $temp;
    return $arr;
}

function sort_array($arr) // menggunakan bubble short
{   
    $x=0;
    $y=count($arr);
    do
    {
        $count = count($arr[$x]);
        for ($j = 1; $j < $count; $j++)
        {
            for ($i=1; $i < $count-$j+1; $i++)
            {
                if ($arr[$x][$i-1] > $arr[$x][$i])
                {
                    $arr[$x] = swap($arr[$x], $i-1, $i);
                }
            }
        }   
        $arr=implode("",$arr[$x]); // penggabungan huruf (pengembalian 1 dimensi)
        $x++;
    }
    while ($x<$y); 
    return $arr;
}




print_r(divideAndSort("5956560159466056")); 
?>
