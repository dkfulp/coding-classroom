<?php


$lms_education_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$lms_education_text_transform = get_theme_mod( 'menu_text_transform_lms_education','UPPERCASE');
    if($lms_education_text_transform == 'CAPITALISE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: capitalize ; font-size: 15px !important;';

		$lms_education_custom_css .='}';

	}else if($lms_education_text_transform == 'UPPERCASE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: uppercase ; font-size: 15px !important';

		$lms_education_custom_css .='}';

	}else if($lms_education_text_transform == 'LOWERCASE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: lowercase ; font-size: 15px !important';

		$lms_education_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$lms_education_container_width = get_theme_mod('lms_education_container_width');

		$lms_education_custom_css .='body{';

			$lms_education_custom_css .='width: '.esc_attr($lms_education_container_width).'%; margin: auto';

		$lms_education_custom_css .='}';
