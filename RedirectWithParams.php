<?php
// redirect to previous
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
$added_vals = '?get_val=val';
$redirect_header = 'location:' . $previous . $added_vals;
header($redirect_header);
?>
