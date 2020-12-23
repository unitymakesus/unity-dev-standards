---
title: Beta Sites
description:
extends: _layouts.main
section: content
---

# Setting up a Beta Site

Create new account on server with domain: `sitename`.unitybeta.site

## Install SSL on new account
  * WHM > Install an SSL Certificate on a Domain
  * Browse Certificates
  * Browse Account: unitywebagency
  * Select non-expired Let's Encrypt certificate for *.unitybeta.site
  * Change domain to `sitename`.unitybeta.site

## Enable shell access
  * WHM > Modify an Account
  * Select account
  * Under Privileges, check the box for "Shell Access"

## Install WordPress
  * cPanel > WordPress Manager
  * Installation URL: https://
  * Skip sitename
  * No plugins
  * Advanced > Table Prefix: wp_

## Change PHP version

The native version of PHP enabled on the server does not include support for certain required PHP extensions. By changing the version to the latest installed version, we can modify the extensions as necessary.

  * cPanel > Select PHP Version
  * Change to latest installed PHP (not native), and click "Set as current" link

## Set up Git deploy

1. Generate an SSH key
    * cPanel > Terminal
    * Enter the following command:
    ```
    ssh-keygen -t rsa -b 4096 -C "username@example"
    ```
    In this example, `username` represents the cPanel account username and `example` represents the domain name.

    _Note: Save file in default location, and press Enter to continue.
    Do not enter a passphrase, and press Enter to continue (2x)._

    * Get the public key by entering the following command and copying the result:
    ```
    cat ~/.ssh/id_rsa.pub
    ```
    The output should resemble the following example, where AAAAB3Nza... represents a valid SSH key:
    ```
    ssh-rsa AAAAB3Nza...
    ```

2. Add deploy key to Github

In the Github repository for this project, go to Settings > Deploy Keys. Create a new key and paste the public key from step 1.

_Note: You do not need to select the "Allow write access" checkbox._

3. Add Git repo to cPanel

    * In repo, update line 3 of .cpanel.yml file with the correct deploy location by replacing `user` with the cPanel account username.
    * cPanel > Git Version Control
    * Create repo. Past in the Github clone URL. The following should be automatically populated:
        * Repo path: `home/clientname/repository/projectname`
        * Repo name: `projectname`
    * Click on `Manage` then the `Pull or Deploy` tab then `Deploy HEAD Commit`.
