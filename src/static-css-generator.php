<?php
/**
 * Read the font csv and create individual css-files for each font.
 * Really simple code. Just a 10 minutes job, not for production!
 * 
 * Delete *.css in the webfonts-folder before using this script.
 */

$row = 1;
if (($handle = fopen("all-fonts.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $counter = $row;
        $row++;
        for ($c=0; $c < $num; $c++) {

            // split the row into four values
            $datarray = explode( ";", $data[$c]);
            $slug =  $datarray[0];
            $family = $datarray[1];
            $type = $datarray[2];
            $subset = $datarray[3];

            // italic or normal
            if (strpos($type, 'italic') !== false) {
                $style = 'italic';
            } else {
                $style = 'normal';
            }

            // font weight and font style
            if (strpos($type, '100') !== false) {
                $weight = '100';
                $bstyle = 'Thin';
            } elseif (strpos($type, '200') !== false) {
                $weight = '200';
                $bstyle = 'ExtraLight';
            } elseif (strpos($type, '300') !== false) {
                $weight = '300';
                $bstyle = 'Light';
            } elseif (strpos($type, 'regular') !== false) {
                $weight = '400';
                $bstyle = 'Regular';
            } elseif (strpos($type, '500') !== false) {
                $weight = '500';
                $bstyle = 'Medium';
            } elseif (strpos($type, '600') !== false) {
                $weight = '600';
                $bstyle = 'SemiBold';
            } elseif (strpos($type, '700') !== false) {
                $weight = '700';
                $bstyle = 'Bold';
            } elseif (strpos($type, '800') !== false) {
                $weight = '800';
                $bstyle = 'ExtraBold';
            } else {
                $weight = '900';
                $bstyle = 'Black';
            }

            // add italic to the style
            if ( $style == "italic" ) {
                $bstyle = $bstyle . " " . ucfirst($style);
            }

            // build the local font names and the url
            $local1 = $family . " " . $bstyle; // Abhaya Libre Regular
            $local2 = str_replace( " ", "", $family ) . "-" . str_replace( " ", "", $bstyle ); // AbhayaLibre-Regular
            $url = $slug . "-" . $subset . "-" . $type; // abhaya-libre-latin/abhaya-libre-latin-regular

            // build the css-template with all values
            $template = "@font-face {
    font-family: '" . $family . "';
    font-style: '" . $style . "';
    font-weight: " . $weight . ";
    src: local('" . $local1 . "'), local('" . $local2 . "'),
         url('" . $url . ".woff2') format('woff2'),
         url('" . $url . ".woff') format('woff');
}";

            // css-filename and path to be created
            $file = "../webfonts/" . $slug . "-" . "$subset" . "/" . $slug . "-" . $subset . "-" . $type . ".css";
            
            // See what is written to file
            echo "<h2> ( " . $counter . " ) - <a href='static-css-tester.php?font=" . $family . "&style=" . $bstyle . "&file=" . $file . "' target='_blank'>" . $local1 . "</a> " . $subset . "</h2>";            
            echo "<p>Based on data: <b>$data[$c]</b> we create the CSS-File <b><a href='$file' target='_blank'>$file</a></b> with following contents:";
            echo "<pre>" . $template . "</pre>";
            
             // Create a css-file for every font-variant
             //$cssfile = fopen($file,"w");
             //echo fwrite($cssfile, $template);
             //fclose($cssfile);
        }
    }
    fclose($handle);
}