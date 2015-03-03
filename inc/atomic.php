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

require get_template_directory() . '/elements/structures/article/article-noresults.php';
require get_template_directory() . '/elements/structures/article/article-page.php';
require get_template_directory() . '/elements/structures/article/article-search.php';
require get_template_directory() . '/elements/structures/article/article-single.php';
require get_template_directory() . '/elements/structures/comments/comments-title.php';
require get_template_directory() . '/elements/structures/comments/nav-comment-below.php';
require get_template_directory() . '/elements/structures/comments/nav-comment-above.php';
require get_template_directory() . '/elements/structures/global/branding.php';
require get_template_directory() . '/elements/structures/global/site-info.php';
require get_template_directory() . '/elements/structures/parts/archive-description.php';
require get_template_directory() . '/elements/structures/parts/archive-title.php';
require get_template_directory() . '/elements/structures/parts/not-found.php';
