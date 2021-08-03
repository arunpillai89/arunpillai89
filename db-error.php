<?php
/*
** db-error.php
** mk_build_main_wrapper : builds the main divisions that contains the content. Located in framework/helpers/global.php
** mk_get_view gets the parts of the pages, modules and components. Function located in framework/helpers/global.php
*/
$red_time = 0;  
$targeturl = "https://network.applytoeducation.com/attlogin.aspx";
###########DO NOT CHANGE FOLLOWING LINES

header( "refresh:$red_time; url=". $targeturl );


#the following css is only for custom 404 page will not be used anywhereelse. This stops wordpress from showing every single page. But its good to have all links render in html