<?php
/**
 * Read the font csv and create individual css-files for each font.
 * Really simple code. Just a 10 minutes job, not for production!
 */

$row = 1;
if (($handle = fopen("all-fonts.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
            $datarray = explode( ";", $data[$c]);
            $slug =  $datarray[0];
            $family = $datarray[1];
            $type = $datarray[2];
            $subset = $datarray[3];

            // italic or normal?
            if (strpos($type, 'italic') !== false) {
                $style = 'italic';
            } else {
                $style = 'normal';
            }

            // font weight?
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

            if ( $style == "italic" ) {
                $bstyle = $bstyle . " " . ucfirst($style);
            }

            $local1 = $family . " " . $bstyle; // Abhaya Libre Regular
            $local2 = str_replace( " ", "", $family ) . "-" . str_replace( " ", "", $bstyle ); // AbhayaLibre-Regular
            $url = $slug . "-" . $subset . "-" . $type; // abhaya-libre-latin/abhaya-libre-latin-regular

            // Create a css-file in every webfonts-folder
            $template = "
            @font-face {
                font-family: '" . $family . "';
                font-style: '" . $style . "';
                font-weight: " . $weight . ";
                src: local('" . $local1 . "'), local('" . $local2 . "'),
                    url('" . $url . ".woff2') format('woff2'),
                    url('" . $url . ".woff') format('woff');
            </pre>
                }";

            echo "<pre>" . $template . "</pre>";

            // Warning: fopen failed to open stream: Protocol error
            $file = "C:\\Users\\alf\\Local Sites\\catch-life\\app\\public\\wp-content\\themes\\dyna-custom\\fonts\\webfonts\\" . $slug . "-" . "$subset" . "\\fontload.css";

            echo "<p>Creating CSS-File " . $file;

            $cssfile = fopen($file,"w");
            echo fwrite($datei, $template,100);
            fclose($cssfile);
        }
    }
    fclose($handle);
}