<?php

function BuildURL($page ,$category_id, $tag_id, $user_id, $q, $baseURL){

    $newURL = $baseURL . '?page=' . $page;

    if($category_id !== null)
        $newURL .= '&category_id=' . $category_id;

    if($tag_id !== null)
        $newURL .= '&tag_id =' . $tag_id;
    
    if($user_id !== null)
        $newURL .= '&user_id=' . $user_id;
    
    if($q !== null)
        $newURL .= '&q=' . $q;

    return $newURL;
}

?>