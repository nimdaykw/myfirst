<?php
function smarty_function_show($arr){
    return "<font color='$arr[color]' size='$arr[size]'>$arr[content]</font>";
}
?>