<?php
/**
 * Plugin Name: Montevideo Temperature
 * Description: SImple plugin to display current Montevideo Temperature
 * Version: 1.0
 * Author: Angel Salas
 **/

function as_show_temperature(){
	$city = 'Montevideo,Uy';
	$apiKey = '4af13c4f52e51ce161784b0f835cd6e1';
	$url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$apiKey;

	$response = wp_remote_get($url);

	$showCity = json_decode($response['body'])->name;
	$showCountry = json_decode($response['body'])->sys->country;
	$temperatureOnKelvin = json_decode($response['body'])->main->temp;
	$temperatureOnCelsius = number_format($temperatureOnKelvin-273.15, 1);

	echo '<div class="header-temperature">
            <span>'.$showCity.', '.$showCountry.'. Temp '.$temperatureOnCelsius.' °C</span>
          </div>';
}

//hooks
function before_menu_hook() {
	do_action('before_menu_hook');
}

wp_enqueue_style('montevideo_temperature_styles',plugin_dir_url( __FILE__ ).'css/style.min.css',NULL,microtime());

add_action( 'before_menu_hook', 'as_show_temperature',1 );
