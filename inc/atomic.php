<?php
/**
* Custom functions to load atomic parts into theme
*
* @package atomic_s
*/
// For now lets go ghetto and just include each atom
require get_template_directory() . '/elements/molecules/navigation/nav-post.php';
require get_template_directory() . '/elements/molecules/text/posted-on.php';
