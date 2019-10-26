
<?php
function findHighestProfit($data)
{
	$data=array($data);
	$modal_awal=$data[0];
	$grafik_awal=0;
	$keuntungan=0;
	for($i=1; $i<=count($data); $i++)
	{
		$grafik_awal=$data[$i];

		$keuntungan=$keuntungan+($grafik_awal-$modal_awal);
	}

	return $keuntungan; 	

}

findHighestProfit([10, 2, 11, 20, 3, 5]);

?>