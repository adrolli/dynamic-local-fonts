<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<?php 
		/**
         * Use the dynamic font in CSS
         * 
         * I want to create a better solution combined with SASS and generated CSS
         * but for the smart start this code produces few lines of inline-css and
         * works fine. 
         */ 

        // Just copy this part
		$fontarray = explode("-", get_field( 'font', get_queried_object()));
		$fontinfo = array_pop($fontarray);
		$fontsubset = array_pop($fontarray);
		$fontfamily = ucwords(implode(" ", $fontarray));

		echo '<style>
			h1, h2, h3, h4, h5, h6 {
				font-family: "' . $fontfamily . '";

			}
        </style>';
        // End of copy
	?>
</head>