<?php 

/**
 * return login status : true | false
 */
function checkLogin()
{
  return (session()->get('isLoggedIn')) ? TRUE : FALSE;
}

/**
 * Thai Citizen Id Validation
 * 
 * return true | false
 */
function valid_citizen_id($personID)
{
    if (strlen($personID) != 13) {
        return false;
    }
    $rev = strrev($personID); 
    $total = 0;
    for($i=1;$i<13;$i++)
    {
    $mul = $i +1;
    $count = $rev[$i]*$mul; 
    $total = $total + $count; 
    }
    $mod = $total % 11; 
    $sub = 11 - $mod;
    $check_digit = $sub % 10; 

    if($rev[0] == $check_digit)  
        return true; 
    else
        return false; 
}
      
?>