<?php
// Just a test, if the fonts are working
// Needs to be clicked in font-generator

$font = $_GET["font"];
$file = $_GET["file"];
$style = $_GET["style"];

?>

</<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Currently testing <?php echo $font . " " . $style ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $file ?>" />
        <style>
            h1, h2, h3, h4, p {
                font-family: '<?php echo $font ?>';
            }
        </style>
    </head>
    <body>
        <div style="padding:20px; margin:20px;">
            <h1><?php echo $font . " " . $style ?></h1>
            <p>We use <?php echo $file ?> to test the font <?php echo $font ?> in <?php echo $style ?>.</p>
            <br>
            <h2>There is some content</h2>
            <p>We write some text to see how good this font works with content.</p>
            <p>We also use some special chars to check the font.</p>
            <h3>Common special chars like §, $, € and @</h3>
            <p><b>The paragraph - § - the dollar - $ - the Euro - € - and mail like <a href="mailto:alf@drollinger.info">alf@drollinger.info</a> should work.</b></p>
            <h4>Special chars like ß, ä, ü, ö and á or à as well as â</h4>
            <p><i>OK, that's enough. If all German vowels and accents are here, the font is ready for use.</i></p>
        </div>
    </body>
</html>