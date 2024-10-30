=== Contact Form 7: Support Deprecated Settings ===
Contributors: dmchale
Tags: contact, contact form, form, email, javascript
Requires at least: 4.0
Requires PHP: 5.3
Tested up to: 4.9
Stable tag: 0.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provide continued support for `on_sent_ok` and `on_submit` within Contact Form 7's Additional Settings

== Description ==

Contact Form 7 no longer supports the `on_sent_ok` and `on_submit` settings available on the Additional Settings screen as of version 5.0 of CF7. Both settings were deprecated before this release, which was why this plugin was first created. [https://contactform7.com/additional-settings/](https://contactform7.com/additional-settings/)

This plugin is meant to be a band-aid to quickly get your Additional Settings working. It reads the Additional Settings data and adds a javascript block when the form is output on the page, using DOM Events as suggested by the CF7 author. [https://contactform7.com/dom-events/](https://contactform7.com/dom-events/)

== Installation ==

1. Upload the `cf7-support-deprecated-settings` directory to the `/wp-content/plugins/` directory via FTP
1. Alternatively, upload the `cf7-support-deprecated-settings_v#.#.zip` file to the 'Plugins->Add New' page in your WordPress admin area
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can I install this plugin even if my version of CF7 currently supports these two settings? =

Yes! This plugin does two things - it adds the new javascript to the page where your forms are displayed, and disables the "old" way that CF7 handled these settings. By installing & activating this plugin you stop relying on Contact Form 7 to process your `on_sent_ok` and `on_submit` events, so this plugin should work seamlessly with any modern version of CF7 whether it natively supports these settings or not.

== Changelog ==

= 0.4 =
* Update to prevent PHP warning/notices on action/filters
* Tested with Contact Form 7 v5.0

= 0.3 =
* Initial release to the wordpress.org repository
