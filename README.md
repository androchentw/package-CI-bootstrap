# [Package] CodeIgniter + Bootstrap #


Version: 1.0.0

Date: 2013-04-13

Comment: **CodeIgniter\_2.1.3** + **Bootstrap\_2.3.1**

----------

# Description #

## Quick Setup Template ##

Unzip contents in `template` folder to create a workable localhost www folder instantly. 

Some necessary setup are pre-made to achieve this. Those settings are described below. Optional means settings premade in template but not necessary when you're building your own website.

## Original Package Included ##

If you feel uncomfortable to the settings made by me, or simply want to see what does the original package look like, they are included in seperate folders, too.

## CI-Init-Setup ##

1. **application/config/database.php**


		// SETUP YOUR DATABASE

2. **application/config/autoload.php**

		// Enable site_url() and base_url()
		$autoload['helper'] = array('url'); 
		$autoload['libraries'] = array('database');

	
3. **[Optional] application/core/**
	
		// Automatic enable session_start()
		1. Create application/core/MY_Controller.php
		2. Setting each controller from extend CI_Controller to MY_Controller
			Ex: class User extends CI_Controller
			  -> class User extends MY_Controller
		3. Remove `session_start()` from related controller method 
	

## [Optional] URL Rewrite ##

1. **.htaccess**

		# Use suPHP_ConfigPath to set path to .htacees on virtual host
		# Needless on localhost 
		RewriteEngine on
		RewriteBase /
		RewriteCond $1 !^(index\.php|img|css|js|robots\.txt|favicon\.ico|$)
		RewriteRule ^(.*)$ index.php/$1 [L]     
		
		# Write your own rewrite rules
		# MAKE SURE have corresponding settings in application/config/routes.php
		RedirectMatch 301 ^/page1.php$ /page1
		RedirectMatch 301 ^/page2.php$ /page2
	
2. **application/config/routes.php**

		// create site.php as controller
		$route['default_controller'] = "site";
		
		# Write your own rewrite rules
		# MAKE SURE have corresponding settings in /.htaccess
		# This example use this->load->view("page1") in application/controllers/site.php
		$route["page1"] = "site/page1";
		$route["page2"] = "site/page2";
	
3. **application/config/config.php**

		$config['index_page'] = '';
	
4. **Reference**: 
	[Routing](http://www.codeigniter.org.tw/user_guide/general/routing.html)
	[URLs](http://www.codeigniter.org.tw/user_guide/general/urls.html)

Complete and colored description also lies in /CI-Init-Setup.pdf


## Reference ##

1. [CodeIgniter](http://www.codeigniter.org.tw)
2. [Twitter Bootstrap](http://twitter.github.io/bootstrap/)