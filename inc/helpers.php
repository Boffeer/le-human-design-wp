<?php
if (!function_exists('get_home_link')) {
	function get_home_link()
	{
		if (is_front_page()) {
			return home_url();
		} else {
			return '#';
		}
	}
}

if (!function_exists('get_vd')) {
	function get_vd($vd)
	{
		echo '<pre>';
		var_dump($vd);
		echo '</pre>';
	}
}

if (!function_exists('get_crb_contacts')) {
	function get_crb_contacts()
	{
		return array(
			'email' => carbon_get_theme_option('email'),
			'phone' => carbon_get_theme_option('phone'),
			'phone_raw' => '+' . preg_replace('/\D/i', '', carbon_get_theme_option('phone')),
			'instagram' => carbon_get_theme_option('instagram_url'),
			'facebook' => carbon_get_theme_option('facebook_url'),
			'youtube' => carbon_get_theme_option('youtube_url'),
			'privacy' => carbon_get_theme_option('privacy_url'),
		);
	}
}
