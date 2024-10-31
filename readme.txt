=== Random Auto Featured Image ===
Contributors: glowrocks
Donate link: http://www.allthepages.org/
Tags: featured image, random image
Requires at least: 3.0.1
Tested up to: 6.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

For posts/pages with no featured image, & no images associated with the entry, a random image is selected from media library & set as featured image.

== Description ==

For posts and pages with no featured image, and no images associated with the entry, a random image is selected from the media library and set as the featured image.

The plugin currently does not test for images associated with the entry.

Instead, install and run the Easy Add Thumbnail plugin (https://wordpress.org/plugins/easy-add-thumbnail/).

That plugin will set the featured image on all entries that both have no featured image AND have an image associated with the post.

What is left is entries without featured images and without any images.

This plugin provides a random image from the sites media library so that index pages look more interesting (and possibly confusing/humorous depending on which image is randomly selected.)

There is a notice at the bottom of each post the plugin has updated noting the random image. In a future release, this note will be optional via the standard user interface, but for now one has to edit the plugin and remove the last "filter" line. This notice is not displayed if the plugin is removed.


== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.

2. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

= Are posts "marked" in some way after the featured image is set? =


Yes. The wp_postmeta table has the RandFeat key set with a value of 1 after the image is set.

The notice displayed at the bottom of the entry is not permanent and is only displayed when the plugin is installed and activated.


== Screenshots ==

1. Before and after archive index pages

== Changelog ==

= 1.0 =
* Initial release


== Upgrade Notice ==

= 1.1 =
* Minor fixes