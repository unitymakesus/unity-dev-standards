---
extends: _layouts.main
section: content
---

# Collaboration

This page is mostly about how we use Git and GitHub as a development team.

## Git & GitHub

### Issues
Issues should be added throughout a project track and discuss bugs, new features, or any kind of work that should be assigned to a person to work on.

[Labels](https://docs.github.com/en/free-pro-team@latest/github/managing-your-work-on-github/about-labels) should be used to help identify and organize issues. This is especially true as the number of open issues grows. Rather than using the default labels, our team has put together a nice GitHub [label list](https://github.com/unitymakesus/github-labels) to use with [git-labelmaker](https://github.com/himynameisdave/git-labelmaker).

### Branches
Working on unique branches is highly encouraged when there are two or more developers actively working on a project. By setting a default branch (either `main` or `dev`) for a project, developers can then create new branches to work independently on their delegated tasks with less of a worry about overriding each other. The standard naming convention for default project branches is as follows:

* `main`: this branch is for the production environment.
* `dev`: this branch is for the staging environment.

#### Naming Branches
In general, branches beyond these two should be named after the type of work you are doing to help with branch identification.

* Working on a feature? `feature/my-awesome-feature-name`.
* Specific bug or issue? Reference the issue in the branch: `issue/#48`. If there's a bunch of issues, just generalize the branch name and be sure to still reference issues in commit messages.
* Updating WordPress? `updates/10.11.20` or `updates/wp-5.5`.

Of course, the branch is entirely dependent on the type of work you are doing. The important thing is that we are siloing off delegated parts of work until it ready to be pulled into the main codebase.

### Pull Requests
When a branch is ready to be merged back into the active default branch (typically `main` or `master` if production, `dev` if staging), open a Pull Request. This presents an opportunity to request a review from another developer.

## Best Pratices
* Write short and sweet commit messages (using all lowercase characters).
* All client project repositories should be set to **Private**.
* Reference issue numbers in commit messages for a richer project history.
* Project dependencies and other unnecessary files for production environments should be added to a `.gitignore` file.
* Communicate openly and often with one another. Git is an excellent version control system but it's only as effective as the level of communication used with it.
* Archive or remove old repositories.
