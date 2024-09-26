# wpapi-proxy
Forces WordPress.org traffic through remote proxy.
It makes use of the WordPress built in HTTP Proxy support, however it does modify behaviour so by default it assumes **ONLY** traffic going to WP.org is needed to be proxied. If this is not the intended behaviour then just set the WP_PROXY defines and off you go no need for this plugin. 

## Installation & Configuration
Recommend installing in mu-plugins

To get it working you will need to define the following:
```
define('WP_PROXY_HOST', 'dc.oxylabs.io');
define('WP_PROXY_PORT', 8000);
define('WP_PROXY_USER', 'USERNAME');
define('WP_PROXY_PASS', 'PASSWORD');
```
In wp-config.php or similar. 

IMPORTANT THIS PLUGIN DOES NOT PROVIDE THE PROXY

You will need to setup the proxy yourselves, for testing I used oxylabs.io I am in no way affiliated with them other then spending a few pennies to buy some of their datacentre proxies.

## Changelog
V0.0.1 - 26th September 2024
- Initial release


