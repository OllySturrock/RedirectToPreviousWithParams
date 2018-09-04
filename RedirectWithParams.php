<?php
$added_params = '?get_val=val';
// redirect to previous
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
    $redirect_header = 'location:' . $previous . $added_params;
    header($redirect_header);
}
?>
