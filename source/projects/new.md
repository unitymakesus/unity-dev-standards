---
title: New Projects
description:
extends: _layouts.main
section: content
---

# Creating a New Project

Use this workflow if you are starting a project from scratch. If you need to work on a project that already has an established Git repository and staging server, use the [Existing Projects](/projects/existing) workflow.

## 1. Pre-Build Checklist

[Complete the Pre-Build Checklist](https://forms.gle/vreZiAdHggATknt7A): This checklist will walk you through adding a new project to Local. The answers you record in this form will allow other developers on our team to collaborate with consistent Local environments.

## 2. Install Starter Theme

Download the latest copy of our [Starter Theme](https://github.com/unitymakesus/starter-theme-next/archive/refs/heads/main.zip) to the WordPress themes directory and install any dependencies by running the following command:

```
composer install && yarn
```

## 3. Set up Git Repository

Before proceeding, be sure to add our standard [.gitignore](https://github.com/unitymakesus/.github/blob/main/.gitignore) and [workflows](https://github.com/unitymakesus/.github/tree/main/.github/workflows) to your project. The .gitignore file should be placed at the root of your project's repository and workflows for GitHub Actions need to be placed inside of a **.github/workflows/** directory.

For more information on how we use and configure these workflows, check the [Deployments](/projects/deployments) page.

```
git init
git add .
git commit -m "Initial commit"
git remote add origin [replace with remote repository URL]
git push -u origin main
```

After the initial repository is created, switch to a new `dev` branch.

```
git checkout -b dev
git push origin dev
```

Set `dev` as the default branch in GitHub and continue development!

## Resources
* [Ignoring Files](https://docs.github.com/en/get-started/getting-started-with-git/ignoring-files)
* [GitHub Actions](https://docs.github.com/en/actions)
