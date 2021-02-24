---
title: New Simple Site
description:
extends: _layouts.main
section: content
---

# Initializing a New Simple Site

Use this workflow if you are setting up a new Simple website.

## 1. Add new site

Login to the Just Get Simple dashboard. From the top bar go to My Sites > Network Admin > Sites. Then click the "Add New" button.

- Site Address (URL): justgetsimple.com/`clientname`
- Site Title: `Client Name`
- Site Language: English (United States)
- Admin Email: `admin@unitywebagency.com`

## 2. Configure site settings

Click "Edit Site." On the settings tab, change the following:

- Blog Description: Change to something relevant
- Start Of Week: 0
- Use Smilies: 0
- Require Name Email: leave empty
- Comments Notify: 0
- Default Comment Status: closed
- Default Ping Status: closed
- Default Pingback Flag: leave empty
- Comment Moderation: 1
- Moderation Notify: leave empty
- GMT Offset: leave empty
- Template: simple-unity/resources
- Stylesheet: simple-unity/resources
- Comment Registration: 1
- Show Avatars: 0
- Thumbnail Size W: 300
- Thumbnail Size H: 300
- Medium Size W: 600
- Medium Size H: 600
- Thread Comments: leave empty
- Page Comments: leave empty
- Timezone String: America/New_York (or the client's timezone string)

## 3. Clean up defaults

1. Delete “Hello World!” post and empty trash.
2. Delete “Sample Page” page and empty trash.

## 4. Set up basic site config

1. Add home page:
    - Title: Home
    - Page Attributes > Template: Full Width Without Title
    - Publish
2. Customizer > Site Identity
    - Upload logo
    - Upload favicon
3. Customizer > Simple Settings
    - Set Font Pairing
    - Set Color Scheme
4. Customizer > Header Settings
    - Logo Width (make sure it's legible, but not overly large)
    - Align Logo:
        - Inline Left (Logo is to the left of the navigation)
        - Float Left (Logo is above navigation bar, aligned left)
        - Float Center (Logo is above navigation bar, centered)
        - Hide Logo (Logo is not present)
5. Customizer > Footer Settings AND Customizer > Widgets
    - Set Footer Color
    - Add widgets for 3 columns in footer
6. Customizer > Menus
    - Primary Navigation: appears at top of site
    - Social Links: Use in widget to place in footer
    - Footer Links: Replaces default "Privacy Policy"
7. Customizer > Additional CSS
    - AAAAAaaalllll the overrides.
