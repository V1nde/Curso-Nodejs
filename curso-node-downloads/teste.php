<?php
//Define a site type
$sitetype = "Search Engine";
//Define the site types
$site1 = 'yahoo.com';
$site2 = 'hi5.com';
$site3 = 'aliexpress.com';
//Check the value of the $sitetype variable
switch($sitetype)
{
    //Define array based on the match and search site in the array
    case 'Search Engine':
        $array = Array ('google.com','ask.com','bing.com');
        if(in_array($site1,$array))
            echo "$site1 is a search engine site.";
        else
            echo "$site1 does not exist in the list.";
        break;
    case 'Social Network':
        $array = Array ('facebook.com','twitter.com','snapchat.com');
        if(in_array($site2,$array))
            echo "$site2 is a social networking site.";
        else
            echo "$site2 does not exist in the list.";
        break;
    case 'E-commerce':
        $array = Array ('aliexpress.com','ebay.com','daraz.com');
        if(in_array($site1,$array))
            echo "$site3 is a e-commerce site.";
        else
            echo "$site3 does not exist in the list.";
        break;
    default:
        echo "Unknown site.";
}
?>