<?php
if (!defined('ABSPATH')) {
	exit; // exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make('theme_options', 'kapitalno_theme_settings',  'Управление контентом')
	->add_fields(array(
		Field::make('header_scripts', 'crb_header_script', 'Header Script'),
		Field::make('footer_scripts', 'crb_footer_script', 'Footer Script'),
	));

// Add second options page under 'Basic Options'
Container::make('theme_options', 'theme_options', 'Контакты')
	->set_page_parent($basic_options_container) // reference to a top level container
	->add_tab('Contacts', array(
		Field::make('text', 'instagram', 'Instagram')
			->set_width(50),
		Field::make('text', 'facebook', 'Facebook')
			->set_width(50),
		Field::make('text', 'email', 'Email')
			->set_width(50),
		Field::make('text', 'phone', 'Phone')
			->set_width(50),
		Field::make('text', 'privacy', 'Privacy url')
			->set_width(50),
	));

Container::make('post_meta', 'landing', 'Landing')
	->where('post_id', '=', '6')
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
	->add_tab('Tariffs', array(
		Field::make('complex', 'tariffs', 'Tariffs')
			->setup_labels(array(
				'plural_name' => 'Tariffs',
				'singular_name' => 'Tariff'
			))
			->add_fields(array(
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
				Field::make('text', 'tariffs_duration', 'Duration'),
				Field::make('text', 'tariffs_cost', 'Cost'),
				Field::make('text', 'tariffs_avalaible', 'Avalaible'),
			))
	));
