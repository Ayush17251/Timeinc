<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="root">
	<?php if($page['header']): ?>
		<div class="header">
			<?php print render($page['header']); ?>
		</div>
	<?php endif; ?>


	<div class="wrapper">
		<?php if($page['navbar']): ?>
			<div class="nav_bar">
				<div class="header_bar">
					<div id="logo" class="inline_div">
						
						<?php if (theme_get_setting('logo','united')): ?>
					    <?php if ($logo): ?><div class="site-img-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">

					     <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
					    </a></div><?php endif; ?>
					    <?php else: ?>
					    <div>
					     	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
					      	<?php if ($site_slogan): ?><div class="blog-description"><?php print $site_slogan; ?></div><?php endif; ?>
					    </div>
					    <?php endif; ?>					        
			      	</div>

			      	<?php if($page['search_block']): ?>
			    		<aside id="search_bar" class="inline_div">
			    				<?php print render($page['search_block']); ?>
			    		</aside>
			    	<?php endif; ?>

				</div>
				<nav class="navigation">
					<div id="main_menu">
						<?php 
			                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
			              	print drupal_render($main_menu_tree);
			            ?>
					</div>
				</nav>
			</div>

		<?php endif; ?>

	
		<div class="slide_show">
			<img src="http://web.dd:8083/sites/web.dd/files/styles/thumbnail/public/imagefield_LlvmLm.jpeg?itok=EvUo7xsX" id="slideshow"/>
			<?php print render($page['main_contents']); ?>
		</div>

		<div class="popular_links">
			<?php print render($page['popular_categories']); ?>
		</div>

		<div class="a">
			<div class="event">
				<?php print render($page['event_type']); ?>
				
			</div>
			<div class="sidebar">
				<?php print render($page['sidebar']); ?>
			</div>
		</div>

		

		<div class="brands">
			<?php print render($page['brands']); ?>
		</div>
	</div>
</div>

<footer class="footer">
	<?php print render($page['footer']); ?>		
</footer>


		
			