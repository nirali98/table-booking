<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('debug'))
{
	function debug($data)
	{
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
}


if(!function_exists('view_loader')){

  function view_loader($view, $output = false){
    $CI = &get_instance();
    
    $CI->load->view('layouts/header', $output);
	$CI->load->view('layouts/nav', $output);
	//$CI->load->view('layouts/slider', $output);
	//$CI->load->view('layouts/features', $output);
	//$CI->load->view('layouts/catagories', $output);
	//$CI->load->view('layouts/products', $output);

	$CI->load->view($view, $output);

	$CI->load->view('layouts/partners', $output);
	$CI->load->view('layouts/footer', $output);

  }
}


if(!function_exists('view_loader_with_data')){

  function view_loader_with_data($view, $vars= array(), $output = false){
    $CI = &get_instance();
    
    $CI->load->view('layouts/header', $output);
	$CI->load->view('layouts/nav', $output);
	//$CI->load->view('layouts/slider', $output);
	//$CI->load->view('layouts/features', $output);
	//$CI->load->view('layouts/catagories', $output);
	//$CI->load->view('layouts/products', $output);

	$CI->load->view($view, $vars, $output);

	$CI->load->view('layouts/partners', $output);
	$CI->load->view('layouts/footer', $output);

  }
}

if(!function_exists('view_loader_with_data_simple')){

  function view_loader_with_data_simple($view, $vars= array(), $output = false){
    $CI = &get_instance();
    
    $CI->load->view('layouts/header', $output);
	$CI->load->view('layouts/nav', $output);
	//$CI->load->view('layouts/slider', $output);
	//$CI->load->view('layouts/features', $output);
	//$CI->load->view('layouts/catagories', $output);
	//$CI->load->view('layouts/products', $output);

	$CI->load->view($view, $vars, $output);

	//$CI->load->view('layouts/partners', $output);
	$CI->load->view('layouts/footer', $output);

  }
}

