<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* BO */

if ( ! function_exists('bo_css_url')){
	function bo_css_url($nom)
	{
		return base_url() . 'assets/bo/css/' . $nom . '.css';
	}
}

if ( ! function_exists('bo_js_url')){
	function bo_js_url($nom)
	{
		return base_url() . 'assets/bo/js/' . $nom . '.js';
	}
}

if ( ! function_exists('bo_img_url')){
	function bo_img_url($nom)
	{
		return base_url() . 'assets/bo/img/' . $nom;
	}
}

if ( ! function_exists('bo_img')){
	function bo_img($nom, $alt = '')
	{
		return '<img src="' . bo_img_url($nom) . '" alt="' . $alt . '" />';
	}
}

/* FRONT */

if ( ! function_exists('css_url')){
	function css_url($nom)
	{
		return base_url() . 'assets/front/css/' . $nom . '.css';
	}
}

if ( ! function_exists('js_url')){
	function js_url($nom)
	{
		return base_url() . 'assets/front/js/' . $nom . '.js';
	}
}

if ( ! function_exists('img_url')){
	function img_url($nom)
	{
		return base_url() . 'assets/front/img/' . $nom;
	}
}

if ( ! function_exists('img')){
	function dimg($nom, $alt = '')
	{
		return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
	}
}

/* PLUGINS */

if ( ! function_exists('plug_css_url')){
	function plug_css_url($nom)
	{
		return base_url() . 'assets/plugins/' . $nom . '.css';
	}
}

if ( ! function_exists('plug_js_url')){
	function plug_js_url($nom)
	{
		return base_url() . 'assets/plugins/' . $nom . '.js';
	}
}

/* =============================================
	name : 				assets
	description : helper permettant d'intégrer les différents images, fichier css / js etc ...
								dans le dossier assets correspondant
	author : 			leradiologue
	création : 		2017-07-28
	modifier le : 2017-07-28
	url : 				http://www.lrdlg.eu
============================================== */
