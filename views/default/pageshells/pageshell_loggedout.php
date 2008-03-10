<?php

	/**
	 * Elgg pageshell when logged out
	 * The standard HTML page shell that everything else fits into
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 * @uses $vars['config'] The site configuration settings, imported
	 * @uses $vars['title'] The page title
	 * @uses $vars['body'] The main content of the page
	 * @uses $vars['messages'] A 2d array of various message registers, passed from system_messages()
	 */

	// Set title
		if (empty($vars['title'])) {
			$title = $vars['sitename'];
		} else if (empty($vars['sitename'])) {
			$title = $vars['title'];
		} else {
			$title = $vars['sitename'] . ": " . $vars['title'];
		}

?>

<!-- include the header -->
<?php echo elgg_view('header'); ?>

    <!-- main contents -->
    <!-- display the page title -->
    <h1><?php echo $title; ?></h1>
    
    <!-- display any system messages -->
    <?php echo elgg_view('messages/list', array('object' => $vars['sysmessages'])); ?>
	
    <!-- get the main body -->
    <?php echo $vars['body']; ?>

<!-- include the footer -->
<?php echo elgg_view('footer'); ?>