---
title: Beta Sites
description:
extends: _layouts.main
section: content
---

# Setting up a Beta Site

Create new account on server with domain: `sitename`.unitybeta.site

## 1. Install SSL on new account
  * WHM > Install an SSL Certificate on a Domain
  * Browse Certificates
  * Browse Account: unitywebagency
  * Select non-expired Let's Encrypt certificate for *.unitybeta.site
  * Change domain to `sitename`.unitybeta.site

## 2. Enable shell access
  * WHM > Modify an Account
  * Select account
  * Under Privileges, check the box for "Shell Access"

## 3. Install WordPress
  * cPanel > WordPress Manager
  * Installation URL: https://
  * Skip sitename
  * No plugins
  * Advanced > Table Prefix: wp_
  * Advanced > Auto Upgrade WordPress Core: Upgrade to Minor versions only

## 4. Change PHP version

The native version of PHP enabled on the server does not include support for certain required PHP extensions. By changing the version to the latest installed version, we can modify the extensions as necessary.

  * cPanel > Select PHP Version
  * Change to latest installed PHP (not native), and click "Set as current" link

## 5. Set up Git deploy

1. Generate an SSH key
    * cPanel > Terminal
    * Enter the following command:
    ```
    ssh-keygen -t rsa -b 4096 -C "username@example"
    ```
    In this example, `username` represents the cPanel account username and `example` represents the domain name.

    * Enter file in which to save the key:
    ```
    /home/[username]/.ssh/github_rsa
    ```
    In this example, `username` represents the cPanel account username.

    _Note: Do not enter a passphrase, and press Enter to continue (2x)._

    * Get the private key by entering the following command and copying the full result (including the first and last line):
    ```
    cat ~/.ssh/github_rsa
    ```
    The output should resemble the following example, where AAAAB3Nza... represents a valid SSH key:
    ```
    -----BEGIN RSA PRIVATE KEY-----
    AAAAB3Nza...
    -----END RSA PRIVATE KEY-----
    ```

2. Add secrets to GitHub
    * In the GitHub repository for this project, go to Settings > Secrets. Create the following new repository secrets:

      * REMOTE_HOST: [account IP address]
      * REMOTE_USER: [cPanel account name]
      * SSH_PRIVATE_KEY: [Paste the private key from step 1]
