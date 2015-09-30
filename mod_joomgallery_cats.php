<?php
error_reporting(E_ALL);
ini_set( 'display_errors','1');

include('helper.php');
//Param eg
$listclass = $params->get('listclass');
$catstodisplay = $params->get('categories');

$categories = new categories( $catstodisplay );
$cats = $categories -> getCategories();

//Layout eg
require JModuleHelper::getLayoutPath('mod_joomgallery_cats', $params->get('layout', 'default'));

