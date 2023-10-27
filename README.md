## Wirral Summer Hops Website

This site is built using the [tighten/jigsaw](https://github.com/tighten/jigsaw) static site builder.

### Development

Clone the project and install the PHP dependencies:

```shell
git clone git@github.com:hawk-rt/wirral-summer-hops-website.git
composer install
```

Build the frontend resources and preview changes live in the browser: 

```shell
nvm use
npm install
npm run watch
```

You can now view the site at http://localhost:3000 in your browser.

Visit the [jigsaw docs](https://jigsaw.tighten.com/docs/installation/) for more detail.

### Deployment to GitHub Pages

```shell
npm run prod
git add build_production && git commit -m "Build for deploy"
git subtree push --prefix build_production origin gh-pages
```

Git can be a pain so if you get an error about "Updates were rejected because a pushed branch tip is behind its remote" then this seems to sort it...

```
git push origin `git subtree split --prefix build_production master`:gh-pages --force
```

Ref: https://stackoverflow.com/a/15623469/2929617