* Web root is /
* WordPress runs from /wordpress but serves pages from /
* wp-content moved one directory above wordpress and renamed /content
* wp-config.php moved one directory above wordpress
* /wordpress only contains core WordPress files

Installation
============

Make necessary changes to wp-config.php. The do one of the following:

* visit http://example.com/wordpress and complete installation there. Then login to the control panel, go to Settings > General and change the Site Address (URL) to http://example.com/ to make sure WordPress serves pages from root
* uncomment the lines in wp-config.php to define WP_SITEURL and WP_HOME. visit http://example.com/ and complete installation there. Uncomment the lines after install. Then login to control panel, go to Settings > General and ensure Site Address (URL) is http://example.com/

Upgrading WordPress
==================

    git checkout master
    git pull
    git checkout version

where `version` is the WordPress version you want to use
