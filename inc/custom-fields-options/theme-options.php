<?php
if (!defined('ABSPATH')) {
	exit; // exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make('theme_options', 'kapitalno_theme_settings',  'Content edit')
	->add_fields(array(
		Field::make('header_scripts', 'crb_header_script', 'Header Script'),
		Field::make('footer_scripts', 'crb_footer_script', 'Footer Script'),
	));

// Add second options page under 'Basic Options'
Container::make('theme_options', 'theme_options', 'Contacts')
	->set_page_parent($basic_options_container) // reference to a top level container
	->add_tab('Contacts', array(
		Field::make('text', 'instagram_url', 'Instagram')
			->set_width(50),
		Field::make('text', 'facebook_url', 'Facebook')
			->set_width(50),
		Field::make('text', 'youtube_url', 'Youtube')
			->set_width(50),
		Field::make('text', 'email', 'Email')
			->set_width(50),
		Field::make('text', 'phone', 'Phone')
			->set_width(50),
		Field::make('text', 'privacy_url', 'Privacy url')
			->set_width(50),
	));

Container::make('post_meta', 'landing', 'Landing')
	->where('post_id', '=', '6')
	->add_tab('Page settings', array(
		Field::make('text', 'page_title', 'Page title'),
		Field::make('textarea', 'page_description', 'Page description'),
		Field::make('image', 'og_image', 'og:image')
			->set_value_type('url'),
	))
	->add_tab('Reviews', array(
		Field::make('complex', 'reviews', 'Reviews')
			->setup_labels(array(
				'plural_name' => 'reviews',
				'singular_name' => 'review'
			))
			->add_fields(array(
				Field::make('image', 'review', 'Review')
					->set_value_type('url'),
			))
	))
	->add_tab('Programm', array(
		Field::make('complex', 'programm', 'Programm')
			->setup_labels(array(
				'plural_name' => 'Programms',
				'singular_name' => 'Programm'
			))
			->add_fields(array(
				Field::make('text', 'title', 'Title'),
				Field::make('complex', 'bullets', 'Bullets')
					->setup_labels(array(
						'plural_name' => 'bullets',
						'singular_name' => 'bullet'
					))
					->add_fields(array(
						Field::make('text', 'bullet', 'Bullet'),
					)),
				Field::make('textarea', 'program_results', 'Results'),
			))
	))
	->add_tab('Tariffs', array(
		Field::make('complex', 'tariffs', 'Tariffs')
			->setup_labels(array(
				'plural_name' => 'Tariffs',
				'singular_name' => 'Tariff'
			))
			->add_fields(array(
				Field::make('text', 'name', 'Name'),
				Field::make('complex', 'top_desc', 'Top Desciption')
					->setup_labels(array(
						'plural_name' => 'paragraphs',
						'singular_name' => 'paragraph'
					))
					->add_fields(array(
						Field::make('text', 'bullet', 'Paragraph'),
					)),
				Field::make('complex', 'bullets', 'Bullets')
					->setup_labels(array(
						'plural_name' => 'bullets',
						'singular_name' => 'bullet'
					))
					->add_fields(array(
						Field::make('text', 'bullet', 'Bullet'),
						Field::make('checkbox', 'is_negative', __('Is negative'))
							->set_option_value('yes')
					)),
				Field::make('complex', 'bottom_desc', 'Bottom Desciption')
					->setup_labels(array(
						'plural_name' => 'paragraphs',
						'singular_name' => 'paragraph'
					))
					->add_fields(array(
						Field::make('text', 'bullet', 'Bullet'),
					)),
				Field::make('text', 'duration', 'Duration'),
				Field::make('text', 'cost', 'Cost'),
				Field::make('text', 'cost_special', 'Cost special'),
				Field::make('text', 'avalaible', 'Avalaible'),
			))
	));
