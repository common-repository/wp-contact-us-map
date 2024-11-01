=== wp contact us map ===
Contributors: allentuan
Donate link: 
Tags: google map
Requires at least: 3.3
Tested up to: 3.4
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin is about the simplest way to get a Google Map, displayed with your customized icon/marker. No Google Maps API, JavaScript downloads, etc. are required.

== Description ==

This plugin is about the simplest way to get a Google Map, displayed with your customized icon/marker. It provides a simple code that you can add into any post/page of your WordPress website to display the map, such as [WP_Contact_Us_Map id="WP_Contact_Us_Map_1" zoom="4" lat="-26.8369" lon="147.0524" w="600" h="450" icon="" popinfo="" popinfodefaultopen='1']. You can change the Map id to allow display more maps displayed on the same page. That "lat" and "lon" means the coordinates of the position you want to be marked on the map. In the "icon" filed you can fill in a customized icon by adding whatever URL of that icon.

No Google Maps API, JavaScript downloads, etc. are required. You can visit http://www.joomlacreator.com/downloads/wordpress-extensions/wp-contact-us-map for more information.

== Installation ==

1. Upload the wp-contact-us-map directory to the /wp-content/plugins/ directory 
2. Activate the plugin through the Plugins menu in WordPress
3. Add shortcodes in your posts, e.g. [WP_Contact_Us_Map id="WP_Contact_Us_Map_1" zoom="4" lat="-26.8369" lon="147.0524" w="600" h="450" icon=""  popinfo=""]

== Frequently asked questions ==

= add more to one page or post does not show map =

don't forget to change the argument id: id="WP_Contact_Us_Map_2",
 e.g: [WP_Contact_Us_Map id="WP_Contact_Us_Map_2" zoom="4" lat="-26.8369" lon="147.0524" w="600" h="450" icon=""  popinfo=""]

== Screenshots ==



== Changelog ==

2012-11-27 version 1.0

2012-12-14 add popup info window

2013-05-18 fix popup info window style, and add flag to set default info window open. Thanks for Schalk Joubert advice !

== Upgrade notice ==