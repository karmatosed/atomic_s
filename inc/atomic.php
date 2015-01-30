<?php
/**
* Custom functions to load atomic parts into theme
*
* @package atomic_s
*/
// For now lets go ghetto and just include each atom

require get_template_directory() . '/elements/molecules/forms/search-form.php';
require get_template_directory() . '/elements/molecules/navigation/nav-post.php';
require get_template_directory() . '/elements/molecules/text/entry-footer.php';
require get_template_directory() . '/elements/molecules/text/posted-on.php';

require get_template_directory() . '/elements/organisms/comments/comments-list.php';
require get_template_directory() . '/elements/organisms/comments/comments-title.php';
require get_template_directory() . '/elements/organisms/comments/nav-comment-below.php';
require get_template_directory() . '/elements/organisms/comments/nav-comment-above.php';
require get_template_directory() . '/elements/organisms/global/branding.php';
require get_template_directory() . '/elements/organisms/global/site-info.php';
require get_template_directory() . '/elements/organisms/sections/archive-description.php';
require get_template_directory() . '/elements/organisms/sections/archive-title.php';
require get_template_directory() . '/elements/organisms/sections/not-found.php';
