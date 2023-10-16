<?php
/**
* Plugin Name: Add Custom Class on Body
* Description: The "URL Slug Body Class" plugin adds a dynamic CSS class to the <body> 
* Version: 1.0.0
* Author: Daniel Alves Pereira
* License: GPL v2 or later
*/ 


include_once('includes/models/CustomBodyClassModel.php');
include_once('includes/views/CustomBodyClassView.php');
include_once('includes/controllers/CustomBodyClassController.php');

$customBodyClassPlugin = new CustomBodyClassController();