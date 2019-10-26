<?php

function array_flatten($array) { 
  if (!is_array($array)) { 
    return false; 
  } 
  $result = array(); 
  foreach ($array as $key => $value) { 
    if (is_array($value)) { 
      $result = array_merge($result, array_flatten($value)); 
    } else { 
      $result[$key] = $value; 
    } 
  } 
  return $result; 
}


$json = '[  
    {   
        "name": "Movies", "info": "category_name", 
        "data": [
                    { "name": "Interstellar", "info": "category_data" },    
                    { "name": "Dark Knight", "info": "category_data" }
                ] 
    }, 
    {    
        "name": "Music", "info": "category_name",  
        "data": [
                    { "name": "Adams", "info": "category_data" },
                    { "name": "Nirvana", "info": "category_data" }
                ]
    }
]';

print_r(inputArrayJson(json_decode($json,true)));
//var_dump(array_flatten($var)); // NULL

function inputArrayJson($var)
{
	if(json_last_error()!==0)
	{
		return 0;
	}
	$new_var=array();
	for($i=0; $i<count($var); $i++)
	{
		$temp_arr[$i]=$var[$i]['data'];
		array_pop ($var[$i]);
		//echo count($var[0]);
		$new_var=array_merge($new_var,array($var[$i]),$temp_arr[$i]);
	}
	return json_encode($new_var, JSON_PRETTY_PRINT);
}

//catatan hanya untuk array 2 Dimensi

?>