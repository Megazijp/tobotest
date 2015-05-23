<?php
function loggedin(){
    if(isset($_COOKIE["user"])) {
     return true;
    }
    return false;
}
?>