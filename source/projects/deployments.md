---
title: Deployments
description:
extends: _layouts.main
section: content
---

# Deploying from GitHub to Server

The steps on this page assume the project's GitHub repo is already connected to the website's cPanel account. Instructions for setting that up are on the [Beta Sites](/projects/beta-sites) page.

This deployment process includes two different Workflows for [GitHub Actions](https://github.com/actions): Deploy Themes and Deploy Plugin(s).

The reason for this separation is to support the multiple technologies we are using to keep websites up-to-date. On each website's cPanel account, we are using Softaculous to install WordPress and perform automatic minor version updates, so the WP core files do not need to be committed to the repository. We are also using ManageWP to perform centralized updates, so we do not want deployments to unnecessarily overwrite plugin updates.

## Deploying Themes

You may optionally deploy theme files from the GitHub repo to the server at any point. It will always overwrite the entire `wp-content/themes` directory (except for the `vendor` directory inside any theme) with the HEAD commit on the selected branch.

1. GitHub Repo > Actions
2. Workflow > Deploy Themes
3. Run workflow
    * Select branch

## Deploying Plugin(s)

You may optionally deploy either all plugins or a specific plugin from the GitHub repo to the server at any point.

If you wish to deploy all plugins, it will overwrite the entire `wp-content/plugins` directory and will remove any plugins that are not tracked in the repo.

If there is a specific plugin that you wish to deploy to the server, you may enter that plugin's folder name and the deployment process will only overwrite that plugin's folder, leaving the rest of the plugins on the server as-is.

1. GitHub Repo > Actions
2. Workflow > Deploy Plugin(s)
3. Run workflow
    * Select branch
    * Which plugins to deploy? (Enter folder name or leave blank to deploy all)
