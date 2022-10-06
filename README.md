# Unity Developer Handbook
Our nifty static site powered by [Jigsaw](https://jigsaw.tighten.co/)!

## Getting Started

**System Requirements**
* PHP 8.0
* Node > 8
* npm
* Composer

After all system requirements are met, use git to clone the repository to your local machine and run the following command to install all the project dependencies in one swoop.

* `npm install && composer install`

This sets up everything needed for running Jigsaw as well as the asset build tools (Laravel Mix).

## Adding Content
In progress...check back soon!

## Build Tasks
* Dev: `npm run dev`
* Dev + Browsersync: `npm run watch`
* Production: `npm run production`

## Deploying
This static site is hosted on Netlify and it is set up with continous deployment. There's nothing you need to do other than push your changes to `master`. Netlify will read the `netlify.toml` file in this repository and run a full build to generate the static site and compile assets. Awesome!
