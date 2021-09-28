---
title: New Simple Site
description:
extends: _layouts.main
section: content
---

# Initializing a New Simple Site

Use this workflow if you are setting up a new Simple website.

## 1. Add new site from template

Login to the Just Get Simple dashboard. From the top bar go to My Sites > Network Admin > NS Cloner.

- Use Standard Clone
- Select “Simple Starter Template” as the source to clone
- Enter the site’s title and address.
- Keep all other default settings.
- Click “Clone Query” at the bottom of the page.
- Once the clone has completed, close the overlay.
- In the top bar, go to My Sites and select the new site you just created!


## 2. Add Userback

1. Log into https://app.userback.io/
2. From the projects dropdown, click on “View All Projects”
3. Create a new Project:
    - Set the project name
    - Add the beta site URL
    - Feedback Type: Website Design Feedback
    - Keep the rest of the default settings
4. In the Widget settings accordions:
    - Widget Button:
        - Change color to make sure it stands out
        - Change position if necessary for design
    - Feedback Selection:
        - Screenshot feedback: On
        - General feedback: Off
        - View existing feedback: On
        - Contact us: Off
    - Feedback Form:
        - Rating type: On and select emojis
        - Name: On and required
        - Email: On and required
        - Comment: On but not required
        - Category: On and required
        - Leave the rest default
    - Additional Tweaks:
        - Always include a screenshot
        - Show help in annotation tools: First time only
    - Thank You Message:
        - Can adjust this if you want, but don’t need to!
    - Don’t need to change any of the other settings
    - Save!
5. Copy the widget code from that accordion and add to WordPress:
    - In the website’s WP admin dashboard, go to HFCM (towards the bottom of the menu)
        - If the menu isn’t displaying, go to Plugins -> Header Footer Code Manager and click the Activate button.
    - Add New Snippet
        - Snippet Name: Userback
        - Keep the defaults
        - Paste the widget code in “Snippet/Code” field.
        - Save!

## 3. Configure global site areas (Header and Footer):
1. Bulk create all pages in navigation using Tools > Quick Post Creator
    - Change post type to "Pages"
    - Enter list of all page titles on individual lines.
        - *__NOTE:__ You do not need to add Home, Privacy Policy, Terms of Use, or Accessibility (these are included in the starter template by default).*
2. In Appearance > Menus
    - Create new menu: “Primary Navigation”
        - Check Display location: Primary Navigation
        - Add pages based on information architecture (IA) document
        - If a menu item is marked "dropdown only" in the IA document, use Custom Links:
            - Change URL to: #
            - Add Link Text
    - Create new menu: “Social”
        - Check Display location: Social Links
        - Add links to social media profiles using Custom Links.
            - Link text should be the name of the social channel only (e.g. Twitter, Instagram, Facebook, etc) — NOT the social media handle.
        - After each link is added to the menu, expand each link card to show the link item's settings. Add a CSS class using the following format: icon-[channel]. Examples:
            - icon-twitter
            - icon-linkedin
            - icon-facebook
            - icon-youtube
            - icon-instagram
3. In Appearance > Customize
    - Site Identity:
        - Logo: Upload logo that will go in header
        - Site Icon: Upload favicon in PNG format
    - Simple Settings:
        - Select font pairing
        - Select color scheme
        - Select button font to use either body or header font
    - Header Settings:
        - Adjust width of logo
        - Set logo alignment
        - Set CTA button (if applicable)
        - Set header color
        - Set header text color (light or dark)
        - Set header navbar color (if different from header color)
    - Footer Settings:
        - Select footer color
    - Widgets:
        - Use the 3 available widget areas to create the site footer. Examples of the kinds of widgets that may be used in the footer include:
            - Image (logo)
            - Gallery (membership badges, awards, etc)
            - Text (contact information, short blurb, etc)
            - Navigation Menu (page links, social media links)
    - Homepage Settings:
        - Set homepage to display: "A static page" and select "Home" from the homepage dropdown. If the website has a blog or a news page, select the corresponding page from the dropdown for Posts page.
    - Additional CSS may be necessary to customize the global site areas further, but this is it for now!
