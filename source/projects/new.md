---
title: New Projects
description:
extends: _layouts.main
section: content
---

# Creating a New Project

Use this workflow if you are starting a project from scratch and there is no repository or local site set up. If you need to work on a project that already has a Git repo, use the [Existing Projects](/projects/existing) workflow.

## 1. Pre-Build Checklist

[Complete the Pre-Build Checklist](https://forms.gle/vreZiAdHggATknt7A): This checklist will walk you through adding a site to Local. The answers you record in this form will allow other developers on our team to collaborate!

## 2. Add Starter Template

1. In terminal, CD to the `app/public/` directory for the new project you created in Local.

2. Run the following command to clone the starter-template repo into your project without a commit history:

```
git clone --depth 1 https://github.com/unitymakesus/starter-template.git
```

3. Run the following commands to move the starter-template files into the correct place in your project and remove the starter-template folder.

```
rm -rf starter-template/.git
cp -r starter-template/. .
rm -rf starter-template
```

## 3. Set up Git Repository

1. Create a local repo and add the GitHub repo as a remote:

```
git init
git remote add origin [replace with remote repository URL]
```

3. Make your initial commit

```
git add .
git commit -m "Initial commit"
git push -u origin main
```

4. Switch to `dev` branch

```
git branch main dev
```

## 4. Initialize Unity Themes

1. In the `unity-child` theme directory:

- Run the following command in terminal:
```
composer install & yarn
```

- Update `resources/assets/config.json` for Browsersync:
    - `devUrl` should be your local dev url
    - `proxyUrl` should be localhost:3000

2. In the `unity-core` theme directory:
```
composer install
```

3. Login and active the Unity Child theme. Once you do this, the starter theme should be working.
