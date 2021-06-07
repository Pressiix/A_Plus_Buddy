<?php 

/**
 * return current uri segment
 */
function getUriSegments()
{
    $current_uri = current_url(true);
    $uri = (array) $current_uri;
    $prefix = chr(0).'*'.chr(0);  

    return end($uri[$prefix.'segments']);
}
      
?>