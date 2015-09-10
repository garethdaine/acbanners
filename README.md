# AC Banners

A banner extension for Magento 1.9 using NivoSlider and integrated for use with Bootstrap 3.

* Sliding home page banner
* Sliding sidebar banners
* Banner buttons

Needs completely refactoring and updating to make the code more modular, include tests and improve functionality.

## Installation

Copy the 'app' and 'skin' folders to your Magento root directory.

**NOTE**: If you are using a custom theme, it's probably best to move the layouts, templates and skin assets to your theme's folder structure, for example:

### App Folder

`app/design/frontend/[your-package]/[your-theme]/layout`
`app/design/frontend/[your-package]/[your-theme]/template`

### Skin Folder

`skin/frontend/[your-package]/[your-theme]/affinitycloud/acbanners`
`skin/frontend/[your-package]/[your-theme]/affinitycloud/acbanners`

Once you have copied all files to your Magento root, log out of the admin and log back in to enable the plugin.

To setup the plugin correctly you must make sure that jQuery is setup to use no conflict mode:

`jQuery.noConflict()`

## Frontend Usage

This plugin uses [NivoSlider](https://github.com/gilbitron/Nivo-Slider) and the default slider theme.

In order to use the plugin, you'll need to include the following within your footer template in order to pull through the plugins JavaScript files.

`<?php echo $this->getChildHtml('banner.scripts') ?>`

If you want to include the JS elsewhere in your theme (e.g. your head), you'll need to modify the XML layout file located at:

`app/design/frontend/[your-package]/[your-theme]/layout/acbanners.xml`

To include the banner within your template, simply copy and paste the following code where you'd like it to appear:

`<?php echo $this->getChildHtml('slider') ?>`

## Admin Usage

Adding images to the plugin is quite easy. Simply log in to your Magento admin and you'll notice a new menu item called **'Banners'**.

**NOTE**: At the moment the side banners and banner buttons should not be used as they have not yet been updated to use the NivoSlider jQuery plugin or Bootstrap.

Follow these steps to add a banner to the slider:

1. Hover over the 'Banners' menu item.
2. Click 'Manage Banners'.
3. Click 'Add Banner'.
4. Give your banner a title, description, a URL if required, a sort order (to allow sorting of banners), and upload an image.
5. Set the banner to 'Active' in order to show it on the frontend.
6. Click 'Save Banner'

Your new banner should now show on the frontend of your store wherever you chose to include the slider.