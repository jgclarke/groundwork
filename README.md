# Groundwork - A WordPress starter theme for caring developers

## Introduction

Groundwork is an opinionated starter theme for WordPress-based sites. It includes some some great ideas for customizing the admin area, basic responsive elements, and other tweaks to help you make a customized, personal, and more complete final site. Groundwork is released under the GNU license. It's free to use and modify.

Groundwork includes:

* Custom wp-config and wp-config-dev files
* Tailored admin area with logo and simplified widget display
* Responsive, clean, HTML5+CSS3 code
* LESS for better stylesheets
* WordPress best practices

Many parts of the code are directly used and/or adapted from:

* Growth Spark's Starter Theme: https://github.com/growth-spark/gs-starter-theme
* Automatic/ThemeShaper's _s ("Underscores") theme: http://themeshaper.com/2012/02/21/getting-started-with-the-underscores-theme/
* Mark Jaquith's WordPress Skeleton: https://github.com/markjaquith/WordPress-Skeleton
* HTML5 Boilerplate: https://github.com/h5bp/html5-boilerplate

Thank you to those people and projects for sharing their work. Check them out!

## Setup

* Move the "wp-config.php" and "wp-config-dev.php" files out of your theme folder and into the root of your WordPress install. Update the values in both files to match your particular site. 

* Use the "wp-config.php" file to store basic WordPress settings, as well as production-specific settings. Use the "wp-config-dev.php" file to store development-specific settings (such as different database credentials, etc.). When the "wp-config-dev.php" file is present, it will take precedence over the "wp-config.php" file.

When publishing your site live, be sure to not upload the "wp-config-dev.php" file.

### Make groundwork into your own custom theme:

* You can re-name Groundwork to a custom name for your theme. Just follow these steps:
1) Rename the "groundwork" folder to "yourthemename".
2) Update the settings at the top of style.css to match your theme's info.
3) Run search and replace on the following strings to re-name groundwork to your own theme name:
** Replace 'groundwork' with 'yourthemename' (all lowercase, use _ for spaces)
** Replace 'Groundwork' with 'Your Theme Name'
4) Replace the default screenshot.png with your own theme's image.

### Set custom log in & admin area logo & styles:

* Replace the default "/img/logo.png" file with your project's logo.

* In "inc/admin/admin-login-config.php", edit the "THEME_LOGO_WIDTH" and "THEME_LOGO_HEIGHT" constants to match the width and height of your project's logo.

* In "inc/admin/login-admin-config.php", edit the $content_width value to match the width of the content area on your site. This will set the width of the editing window in the admin area to match so your users get a better sense of how their content will wrap when published to their site.

* In "style.less", edit the "@theme-color-primary" and @theme-color-secondary" values to the primary and secondary colors of your theme. 

* After installing the theme, view the /wp-login.php (Log in) and /wp-admin/index.php (Dashboard) screens to ensure that your style customizations match what you expect.

* Edit dashboard widgets:
In "inc/admin/remove-dashboard-widgets.php, comment out and/or un-comment-out to hide or show particular widgets on the dashboard. This is useful for un-cluttering the Dashboard screen by hiding widgets you (or your client) will never use.

* Edit default widgets:
In "inc/admin/remove-default-widgets.php, comment out and or un-comment-out to hide or show particular default widgets under Appearance -> Widgets. This is useful for un-cluttering the Appearance->Widgets screen by hiding widgets you (or your client) will never use.

### Setup sidebars, menus, and other configuration options:

* Go line-by-line through "functions.php", "inc/template-tags.php", and "inc/tweaks.php" to customize the menus, sidebars, custom excerpt length, thumbnail sizes, and other aspects of your unique project.

* Use the "inc/custom-widgets.php" file to store any custom widgets you create for your theme. If you don't create any, delete this file along with the reference to it in "functions.php".

* Use the "inc/cpt.sample.php" file as a template for your custom post type(s). You'll also need to un-comment the "require( get_template_directory() . '/inc/admin/cpt.sample.php' );" line in "functions.php" file (around line 73).

## Reminders

* Don't forget to add in your own unique meta "content" info! (header.php)
* Don't forget to add in your own Google Analytics code - or remove the snippet! (footer.php)
* Don't forget to customize the theme and the remainder of your site to match the unique needs of your project as much as possible. 

## Additional Tips

In addition to Groundwork, the following plugins are recommended to further customize your WordPress-based project:

* Admin Menu Editor: Use this plugin to re-arrange and optimize the admin menu that better fits the specific needs of your project.

* Debug Bar & Debug Bar Console: Use this plugin during theme/project development to debug quicker and easier.

* Advanced Custom Fields: Use this plugin to quickly and easily create and manage form fields on custom post types.

* Imsanity: Imsanity will automatically re-size upload images to a more reasonable (but still large enough) size.

* TinyMCE Advanced: Use this plugin to simplify and customize the editor toolbar.

* W3 Total Cache: When you're ready to go live, enable the W3 Total Cache plugin to improve site loading time.

## Contact me

If you have feedback on improving Groundwork, please contact me at jgc@jasonclarke.org. Thank you!

## Possibly-planned updates

* Updating core theme files to more closely mirror TwentyTwelve 
* Add basic theme customization options




