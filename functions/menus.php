<?php
/*-----------------------------------------------------------------------------------*/
/* Menu functions
/*-----------------------------------------------------------------------------------*/

register_nav_menus(
	array(
		'top'	=>	__( 'Top Menu', 'landair' ),
		'main'	=>	__( 'Main Menu', 'landair' ),
		'footer'	=>	__( 'Footer Menu', 'landair' ),
		'page-sidebar-menu'	=>	__( 'Page Sidebar Menu', 'landair' ),
	)
);
