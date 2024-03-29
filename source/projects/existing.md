---
title: Existing Projects
description:
extends: _layouts.main
section: content
---

# Contributing to an Existing Project

Use this workflow if someone has already set up a project and there is an existing GitHub repo.

## 1. Set Up Local Environment

Create a new project in Local, using the information provided in the pre-build checklist for this project.

## 2. Clone Github Repo

In terminal, CD to the `app/public/` directory for the new project you created in Local.

Run the following command to clone the starter-template repo into your project without a commit history.

```
git clone https://github.com/unitymakesus/[PROJECT-NAME].git
```

Run the following commands to move the theme files into the correct place in your project.
```
cp -r [PROJECT-NAME]/. .
rm -rf [PROJECT-NAME]
```

## 3. Install Theme Dependencies

This process depends on the active WordPress theme. If the theme does not have a **composer.json** for required PHP dependencies or a **package.json** file in it for building front-end assets, you may skip this step.

### Sage 10 Themes 
Shell into your project using Local and run Composer from the active theme's directory to install any PHP dependencies.

```bash
composer install
```

Run `yarn` to install any dependencies for running build processes for front-end assets. Running this command is optional if you're not doing front-end work.

```bash
yarn
```

**Note:** Check the `package.json` and `composer.json` files in the theme for info about the minimum required versions of Node and PHP, respectively.

### Sage 9 Themes
In most cases, these older projects use a parent theme _(unity-core)_ and a child theme _(unity-child)_. Shell into your project using Local and run `composer install` from the parent theme's directory to install any PHP dependencies.

```bash
composer install
```

Run `yarn` to install any dependencies for running build processes for front-end assets. Running this command is optional if you're not doing front-end work.

```bash
yarn
```

**Note:** Some projects may deviate from this convention. Review the parent theme and child theme, or active theme, for `composer.json` and `package.json` files, which should contain info about the minimum required versions of Node and PHP, respectively.

## 4. Pull down the Staging Database

1. On your **local** site _(the .test url, not localhost)_, activate the “WP Migrate DB Pro” plugin. Enter the license key found in Google Drive.

2. On the **staging** site, login and go to `Tools > WP Migrate DB Pro`. From the settings tab, copy the connection info to your clipboard.

3. On your **local** site, go to `Tools > WP Migrate DB Pro` and select PULL. Enter the staging connection info. Click pull.

_NOTE: Be very very careful with this step so you don’t accidentally overwrite the staging site. Always pull from staging (to get latest local db) or local (to get latest staging db). Never push._

## 5. Point Media Library

Rather than pulling down the media library, we can use the .htaccess trick to locate images on the beta site when using Local.

Create an .htaccess file in `wp-content/uploads`:

```
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^([0-9]+/.*)$ https://[BETA-SITE]/wp-content/uploads/$1
</IfModule>
```
