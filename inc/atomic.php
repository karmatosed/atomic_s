<?php
/**
* Custom functions to load atomic parts into theme
*
* @package atomic_s
*/
// For now lets go ghetto and just include each atom

require get_template_directory() . '/elements/buildings/forms/search-form.php';
require get_template_directory() . '/elements/buildings/navigation/nav-post.php';
require get_template_directory() . '/elements/buildings/text/entry-footer.php';
require get_template_directory() . '/elements/buildings/text/posted-on.php';

require get_template_directory() . '/elements/structures/comments/comments-list.php';
require get_template_directory() . '/elements/structures/comments/comments-title.php';
require get_template_directory() . '/elements/structures/comments/nav-comment-below.php';
require get_template_directory() . '/elements/structures/comments/nav-comment-above.php';
require get_template_directory() . '/elements/structures/global/branding.php';
require get_template_directory() . '/elements/structures/global/site-info.php';
require get_template_directory() . '/elements/structures/sections/archive-description.php';
require get_template_directory() . '/elements/structures/sections/archive-title.php';
require get_template_directory() . '/elements/structures/sections/not-found.php';
