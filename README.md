# WPZA-Maintenance-And-Development-Plugin
WordPress Plugin used to create maintenance page while site is parked or in development, currently we also use it has a landing page for sites that are hosted with us.

The plugin shows a landing page for maintenance, but when you log in the active template is shown.

## Installation

### Via ZIP package


1. [Download ZIP package](https://wpza.co.za).
2. In your WP administration go to *Plugins* / *Add New* / *Upload plugin*.
3. Select the ZIP package you've downloaded in step 1.
4. Go to *Plugins* and enable Maintenance & Development Mode.

## Usage

### Default Template

The plugin uses a default template stored in /includes/default-template/default-template.php.
If there is no custom template available this is the default template used. Our suggestion if you are a developer, is to modify the default files for your agency, and then use the custom template for your client.

### Custom Template

To use a custom template create a file in /includes/custom-template/custom-template.php.
What we find helpful s to copy the contents of the default-template folder to custom-template folder.
Then edit what ever you want.