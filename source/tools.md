---
extends: _layouts.main
section: content
---

# Tools

## WordPress Development
As a WordPress agency, our development team has adopted using [Local](https://localwp.com/) for all WordPress projects. Local offers SSH access, WP-CLI, Mailhog, and the ability to change to different versions of PHP with zero effort. New projects can be created within minutes and shared between team members (as project exports) to match the same project configuration as the original.

Additional software you'll find useful on a daily basis:

* A file transfer application, such as Transmit or FileZilla
* Sequel Pro (access MySQL databases)
* Sourcetree (if a GUI for git is your thing)
* ImageOptim (quicky optimize images)
* SVGOMG (quickly optimize SVGs)

We don't have a requirement for using one software over another (example: doing git via the command line or Sourcetree), so long as you are comfortable and efficient with your software of choice!

## Command Line
A working familiarity with using the command line and the following command line tools is required to work on our WordPress starter theme as well as the different hats of a day in the life of a Unity developer (sometimes you just gotta SSH in and get stuff done):

* [Yarn](https://yarnpkg.com/): Dependency management for front-end packages
* [npm](https://www.npmjs.com/): Dependency management for front-end packages (for projects not using Yarn)
* [Composer](https://getcomposer.org/): Dependency management for PHP
* [WP-CLI](https://wp-cli.org/): Command-line interface for WordPress
* [nvm](https://github.com/nvm-sh/nvm): Manage multiple versions of Node.js on your system

## Code Editors & IDEs
Use the code editor or IDE you feel most comfortable in!

We use [EditorConfig](https://editorconfig.org/) for consistent indenting across projects and different editors, so depending on the editor or IDE you use, you may need to install an extension or a plugin to take advantage of an `.editorconfig` file (typically found at the root of a WordPress theme or plugin we build).

## Best Pratices
* FTP should be never be used. Always use **secure** file transfer protocol (SFTP) or SSH.
* Use the **WP-CLI**. It is literally your best friend while developing for WordPress and handles a lot of the tasks where a plugin or third-party script was required (example: regenerating thumbnails, search and replace database, etc).