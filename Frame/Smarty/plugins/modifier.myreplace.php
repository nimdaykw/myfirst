<?php
function smarty_modifier_myreplace($string, $find, $replace){
    return str_replace($find, $replace,$string);
}
?>