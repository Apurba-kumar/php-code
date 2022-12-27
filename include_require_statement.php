<?php
//the main difference betweeen include and require
// require will produce a fatal error (E_COMPILE_ERROR) and stop the script. include will only produce a warning (E_WARNING) and the script will continue.


include 'name_of_page';
require 'name_of_page';


//we used include_once and require_once when if we mistakenly put same file multiple time it shows only once.
include_once 'name_of_page';
require_once 'name_of_page';
?>