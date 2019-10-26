<?php

function is_name_valid($name)
{
	$uppercase = preg_match('@[A-Z]@', $name);
	$lowercase = preg_match('@[a-z]@', $name);
	$number    = preg_match('@[0-9]@', $name);
	$spesial   = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", $name);
	if(!$uppercase || $lowercase || $number || strlen($name)<5 || strlen($name)>50 || $spesial)
	{
	    return 0; //bisa diganti dengan "false"
	}else
	{
	    return 1; //bisa diganti dengan "true"
	    
	}
}

function is_age_valid($age)
{
	(String)$age=$age;
	$uppercase = preg_match('@[A-Z]@', $age);
	$lowercase = preg_match('@[a-z]@', $age);
	$number    = preg_match('@[0-9]@', $age);
	$spesial   = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", $age);
	if($uppercase || $lowercase || !$number || strlen($age)!==2 || $spesial)
	{
	    return 0; //bisa diganti dengan "false"
	}else
	{
	    return 1; //bisa diganti dengan "true"
	    
	}
}

function is_username_valid($user)
{
	$must_undr_or_dot   = preg_match("#[\\_\\.\\\\\\\\]+#", substr($user, 4,1));
	$uppercase 			= preg_match('@[A-Z]@', $user);
	$lowercase			= preg_match('@[a-z]@', substr($user, 0,4));
	$left_number 		= preg_match('@[0-9]@', substr($user, 0,4));
	$left_spesial   = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", substr($user, 0,4));
	$number    		= preg_match('@[0-9]@', substr($user, 5,3));
	$right_lowercase= preg_match('@[a-z]@', substr($user, 5,3));
	$right_spesial  = preg_match("#[\\~\\`\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\.\\?\\/\\\\\\\\]+#", substr($user, 5,3));
	if(!$must_undr_or_dot || strlen($user)!==8 ||  $uppercase || !$lowercase || $left_number || $left_spesial || !$number || $right_lowercase || $right_spesial)
	{
	    return 0; //bisa diganti dengan "false" note: preg_match hanya menghasilkan boolean
	}else
	{
	    return 1; //bisa diganti dengan "true" substr($user, 0,1)==$number || substr($user, 0,1) === $spesial ||
	    
	}
}


 echo is_name_valid("TIARA");
 echo is_age_valid(21);
 echo is_username_valid("yani_333");
 echo is_username_valid("dian.11");
?>