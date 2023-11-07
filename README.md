# Technical Test - Wordpress Plugin
This is the third section of a technical test in 3 parts.
The aim of this section is to create a plugin for wordpress, that has a shortcode for displaying the NextJS render of the second section.

## Install the plugin
Add the repository in your existing wordpress here: `wordpress\app\public\wp-content\plugins`<br>
In your `wp-config`, add a global variable `CATFACT_URL` that contains nextJS render URL. 

## What it does
It creates a shortcode [fact], that will be replaced with an iframe that renders the nextJS.