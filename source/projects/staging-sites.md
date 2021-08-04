---
title: Staging Sites
description:
extends: _layouts.main
section: content
---

# Setting up a Staging Site

Use this workflow if you need to create a staging site for a live/production website on our server. This may be used for testing upgrades before applying them on the production site.

If this is the first time a staging site has been made for this website, start at Step 1. If a staging site was previously set up for this website, you can skip to Step 3.

## 1. Add DNS record for "staging" subdomain
  * Cloudflare > DNS
  * Add Record
    * Type: A
    * Name: staging
    * IPV4 address: [our server's IP]
    * Proxied: Yes

## 2. Add server record for "staging" subdomain
  * cPanel > Subdomains
  * Create a Subdomain
    * Subdomain: staging
    * Domain: [default]
    * Document root: [default]

## 3. Create staging site
  * cPanel > WordPress Manager
  * Expand main WP site install
  * Click "Staging" button
  * Staging Installation Details:
    * Installation URL: https://staging.[domain]
    * Disable search engine visibility: Yes
    * All other settings: [default]

## Important: Delete the staging site when you are finished
  * cPanel > WordPress Manager
  * Expand staging site install
  * Click "Uninstall" button
  * Ensure the path and URL are for the staging site, _not the production site!_
  * Remove Installation
