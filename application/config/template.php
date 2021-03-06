<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Active template
|--------------------------------------------------------------------------
|
| The $template['active_template'] setting lets you choose which template 
| group to make active.  By default there is only one group (the 
| "default" group).
|
*/
//$template['active_template'] = 'admin';
$template['active_template'] = 'front';
/*
|--------------------------------------------------------------------------
| Explaination of template group variables
|--------------------------------------------------------------------------
|
| ['template'] The filename of your master template file in the Views folder.
|   Typically this file will contain a full XHTML skeleton that outputs your
|   full template or region per region. Include the file extension if other
|   than ".php"
| ['regions'] Places within the template where your content may land. 
|   You may also include default markup, wrappers and attributes here 
|   (though not recommended). Region keys must be translatable into variables 
|   (no spaces or dashes, etc)
| ['parser'] The parser class/library to use for the parse_view() method
|   NOTE: See http://codeigniter.com/forums/viewthread/60050/P0/ for a good
|   Smarty Parser that works perfectly with Template
| ['parse_template'] FALSE (default) to treat master template as a View. TRUE
|   to user parser (see above) on the master template
|
| Region information can be extended by setting the following variables:
| ['content'] Must be an array! Use to set default region content
| ['name'] A string to identify the region beyond what it is defined by its key.
| ['wrapper'] An HTML element to wrap the region contents in. (We 
|   recommend doing this in your template file.)
| ['attributes'] Multidimensional array defining HTML attributes of the 
|   wrapper. (We recommend doing this in your template file.)
|
| Example:
| $template['default']['regions'] = array(
|    'header' => array(
|       'content' => array('<h1>Welcome</h1>','<p>Hello World</p>'),
|       'name' => 'Page Header',
|       'wrapper' => '<div>',
|       'attributes' => array('id' => 'header', 'class' => 'clearfix')
|    )
| );
|
*/

/*
|--------------------------------------------------------------------------
| Default Template Configuration (adjust this or create your own)
|--------------------------------------------------------------------------
*/
//$template['admin']['template'] = 'templates/admin'; 
$template['login']['template'] 	    = 'templates/back_end/admin_login';
$template['admin']['template'] 	    = 'templates/back_end/admin_layout';
$template['front']['template'] 	    = 'templates/front_end/front_layout';

//$template['admin']['regions'] = array('header', 'title', 'sidebar', 'content', 'table_tab_content', 'form_tab_content', 'footer');
$template['login']['regions'] = array( 'title', 'login_top', 'login_panel' );
$template['admin']['regions'] = array( 'title', 'side_bar', 'header', 'main_content', 'left_content', 'right_content', 'notifications', 'footer' );
$template['front']['regions'] = array( 'title', 'menu', 'header', 'rotating_news', 'home_main_content', 'home_page_bottom', 'footer' );

$template['login']['parser']         = 'parser';
$template['login']['parser_method']  = 'parse';
$template['login']['parse_template'] = FALSE;

$template['admin']['parser'] 	     = 'parser';
$template['admin']['parser_method']  = 'parse';
$template['admin']['parse_template'] = FALSE;

$template['front']['parser'] 	     = 'parser';
$template['front']['parser_method']  = 'parse';
$template['front']['parse_template'] = FALSE;

//$template['default']['regions']['header'] = array('content' => array('<h1>CI Rocks!</h1>'));
//$template['default']['regions']['footer'] = array('content' => array('<p id="copyright">© Our Company Inc.</p>'));

/*$template['default']['template'] = 'templates/template';
$template['default']['regions'] = array(
   'header',
   'content',
   'footer',
);*/
/*
$template['default']['parser'] = 'smarty_parser';
// Template will call smarty_parser::parse()

$template['default']['parser'] = 'frog_parser';
$template['default']['parser_method'] = 'frog';

$template['default']['parse_template'] = TRUE;
*/
// Template will call frog_parser::frog()

/* End of file template.php */
/* Location: ./system/application/config/template.php */
