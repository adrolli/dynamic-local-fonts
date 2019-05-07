<?php

// Access all google fonts and write all information to own resource files

// Not needed for now: require('simple_html_dom.php');

require('config.php');

$api_req = $api_url . $api_key;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_req);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$resultset = json_decode($result, true);
$resultitems = $resultset["items"];

curl_close($ch);

// DEBUG echo "<pre>" . print_r($resultset) . "</pre>";

foreach ($resultitems as $ranking => $font) {
    $family = $font["family"];
    $category = $font["category"];
    $version = $font["version"];
    $modified = $font["lastModified"];
    $kind = $font["kind"];

    echo $ranking  . "<br>";
    echo $family . "<br>";
    echo $category . "<br>";
    echo $version . "<br>";
    echo $modified . "<br>";
    echo $kind . "<br>";

    $variants = $font["variants"];
    foreach ($variants as $count => $variant) {        
        echo $count . " is ";
        echo $variant . "<br>";
    }
    
    $subsets = $font["subsets"];
    foreach ($subsets as $subset) {
        echo $subset . "<br>";
    }
    
    $files = $font["files"];
    foreach ($files as $variant => $file) {
        echo $variant . " is ";
        echo $file . "<br>";
    }

    $gfonts = $gfonts_url . str_replace(" ", "+", $family);
    echo '<a href="' . $gfonts . '" target="_blank">' . $family . ' on Google Fonts</a><br>';

    $hfonts = $helper_url . strtolower(str_replace(" ", "-", $family));
    echo '<a href="' .$hfonts . '" target="_blank">' . $family . ' on Google Webfonts Helper</a><br>';

    // simple html dom does not work on JS-based websites
    // see https://www.codementor.io/wang90925/top-10-best-usage-examples-of-php-simple-html-dom-parser-i8ik76e16
    // see https://www.endpoint.com/blog/2016/07/07/scrape-web-content-with-php-no-api-no

    // But reading the json-file does work!
    $jfonts = $jfonts_url . str_replace(" ", "%20", $family);
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $jfonts);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    
    $jresult = curl_exec($ch2);

    $jresulttrim = ltrim($jresult, ")]}'");

    $jresultset = json_decode($jresulttrim, true);

    curl_close($ch2);

    // License
    echo "License: " . $jresultset["license"] . "<br>";

    // Author - TODO multiple
    foreach ($jresultset["designers"] as $designer) {
        echo "Author: " . $designer["name"] . "<br>";
        echo "Bio: " . $designer["bio"] . "<br>";
    }

    // Shortinfo (Google Fonts? - contains links sometimes)
    echo "Info:<br>" . $jresultset["description"] . "<br><br>";

    // thickness, slant and width (per single font)
    foreach ($jresultset["fonts"] as $type => $singlefont) {
        echo "Singlefont: " . $type . " is " . $singlefont["thickness"] . "<br><br>";
    }

    // Popular pairings like on Google Fonts
    foreach ($jresultset["pairings"] as $pairing) {
        echo "Pairing: " . $pairing . "<br><br>";
    }

    // TODO Generate CSS / @import (prefix etc. maybe as global configuration)
    // Prior to generating, we ask Google
    $cfonts = $cfonts_url . str_replace(" ", "+", $family);
    echo '<a href="' . $cfonts . '" target="_blank">See CSS for ' . $family . ' (only working for current browser)</a><br>';

    // Current TODO Download font files found in the CSS-file
    // Now we need to curl 5 times and set the useragent to get ttf, woff, woff2, eot and svg
    $ch3 = curl_init();
    curl_setopt($ch3, CURLOPT_URL, $cfonts);
    curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch3,CURLOPT_USERAGENT,'Mozilla/10.0 (Windows NT 10.0) AppleWebKit/538.36 (KHTML, like Gecko) Chrome/69.420 Safari/537.36');
    
    $woff2css = curl_exec($ch3);
    
    echo $woff2css;
    curl_close($ch3);

    // TODO Rename and save all font files locally

    // Debug 
    //echo "<pre>";
    //echo $jresulttrim;
    //print_r($jresultset);
    //echo "</pre>";

    // Debug Limit
    if ( $ranking >= 1) {
        break;
    }

    echo "<br><hr><br>";

    // TODO Exclude configuration (api-key) before pushing it to github!!! Means edit gitignore!!!!

    // TODO Links (Github, Designer) like https://github.com/search?q=roboto maybe extracted from text.

    // TODO Write to database, update / Maybe a one-button thingy / prefer JSON to DB?
    // TODO Font table
    // TODO Font Styles table or flat table?
    // TODO Font Designer table
    // TODO convert to json: https://stackoverflow.com/questions/2467945/how-to-generate-json-file-with-php

    // TODO Use with webpack like https://github.com/gabiseabra/google-fonts-webpack-plugin
    
    // TODO Other ressources like https://www.dafont.com or http://www.astigmatic.com/freeware.html (check license or ask) or https://www.myfonts.com/ or
    // TODO https://www.fonts.com/ or https://www.fontsquirrel.com/ or https://fontlibrary.org or https://www.fontspace.com/ or "free fonts" ... tbc

    // TODO Add icon fonts like fontawesome, glyphicons etc., see http://fontello.com/, https://icofont.com/, http://weloveiconfonts.com/ and https://glyphter.com/

    // TODO Configure Browser support, CDN and Folder prefix, Search filter globally and with cookie

    // TODO Create a "cart" like on Google Fonts but with more options like Styles and Language support to reduce page load, also offer minified files
    // TODO Check https://fonts.googleapis.com/css?family=Open+Sans|Roboto for example

    // TODO Get to know Unicode Range - https://css-tricks.com/almanac/properties/u/unicode-range/
}
