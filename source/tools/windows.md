---
title: Windows
description:
extends: _layouts.main
section: content
---

# Tools for Windows OS

The following are tools for Windows users (Windows 10+) that will provide supplemental functionality that may already be native to macOS users. The intent is to ensure that all team members have the same or similar capabilities in their development environments, regardless of operating system.

## Chocolatey
This tool provides Windows users a way to easily install PHP packages onto their machine.

### 1. Installation

To install Chocolatey on your machine, follow [these step-by-step instructions](https://chocolatey.org/install). Under the first step of the installation instructions, make sure 'Individual' is selected.

### 2. Adding PHP Packages

To add the most recent version of PHP, run the following command:

```
choco install php
```

To add a specific version of PHP, run the following command (using 7.4.13 as an example):

```
choco install php --version=7.4.13
```

In order to install a new PHP package without deleting previous packages, you will need to add the ```--side-by-side``` flag.

For example:

```
choco install php --version=7.4.13 --side-by-side
```


## PVM for Windows
This tool allows a Windows user to switch between PHP versions quickly and easily.

### 1. Installation

To install PVM for Windows, follow the steps below (check out [these instructions](https://github.com/hjbdev/pvm) for more detail):

Run the following command:

```
composer global require hjbdev/pvm
```

Copy the path for your PHP package folder (PHP packages should be installed to the following location by default: ```C:/tools/```) and run the following command:

```
pvm discover <path>
```

### 2. Switching between PHP versions

In order to view all available PHP versions on your machine, use this command:

```
pvm list
```

To switch to a desired PHP version, run the following command (using 8.0 as an example):

```
pvm use 8.0
```
