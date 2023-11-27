<?php 
function custom_menu() {
    add_menu_page(
        'Custom Database Table', //page Title
        'Custom Database Table', //Menu Title
        'manage_options', //User Capability 
        'custom-database-table', //Menu Slug 
        'custom_database_page', //Callback Function
		'dashicons-database' //Icon
    );
}
add_action('admin_menu', 'custom_menu');

function custom_database_page() {
    echo "This will display when you click on Custom Database Table Menu in the admin panel.";
}