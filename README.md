## Image preview:

[Freedo free theme](https://www.dropbox.com/s/asi303xdbzqicxx/Index.jpg?dl=0)

## Repository to clone as WordPress theme:

[DX Starter](https://www.dropbox.com/s/asi303xdbzqicxx/Index.jpg?dl=0)

## Quick steps for setup:

1. Install Node.js (to use npm) and whatever is required for it.
2. Install gulp globally ==> `$ npm install --global gulp-cli`
3. While in the theme directory (where package.json file is) run `& npm install`
4. After the install is done (it can take a few minutes) run `$ gulp`

After step 4 Gulp will start watching for changes to any `*.scss` file live and compile it to css file. No need to worry about linking them, the starter theme is doing it by default.

After you start working on the theme you can change the strings to match the theme name you are working on. In this case "Freedo". See `style.css` file for example as well as `functions.php`

## Directions on developing

Use Flex layout - 3 boxes for content | sidebar | sidebar with set max-width or flex-basis. You can use 100% width and x% max-width for each column.

## Some more other links to look into

 - [Sass](http://sass-lang.com/guide)
 - [Gulp](https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md)
 - [Git](https://confluence.atlassian.com/bitbucketserver/basic-git-commands-776639767.html) - We use github, but its the same for shell usage
 - [Foundation Grid system](http://foundation.zurb.com/sites/docs/v/5.5.3/components/grid.html) - We are using Foundation's grid system only. So no need to look into the other docs page, they are not included here.
 - [LoL champion select](https://www.livecoding.tv/xavortm/videos/) - 6 hours of creating champion select screen for LoL. I am not sure for the order or if there is missing video, but you can probably find something useful from what's on.

## Small frontend tips

 - Do not use !important. If you need, ask Alex or Fernando first.
 - Using background image for post featured images is often bad idea.
 - Do not nest too much with Sass. 3 levels deep max. If you need more consult
 - Use as little as possible external JS libs. Consult first
 - Use Owl.Carousel for sliders if needed.
 - Use float as little as possible. Flexbox is good thing to do.
 - Use google fonts when needed.
 -

##Copyright

Image used in comment-bubble.png: An image by Marian Sigler {bla} (Self-drawn using gedit and Inkscape) [Public domain], via Wikimedia Commons (https://commons.wikimedia.org/wiki/File%3ASpeech_balloon.svg)

Base theme used:
- Copyright: DevriX
- License: GNU General Public License v2 (http://www.gnu.org/licenses/gpl-2.0.html)
- Source: https://github.com/DevriX/DX-Starter
Fonts used:

Roboto:
- Copyright: Christian Robertson
- License: Apache License, Version 2.0 (http://www.apache.org/licenses/LICENSE-2.0)
- Source: https://fonts.google.com/specimen/Roboto?query=Roboto

Montserrat:
- Copyright: Julieta Ulanovsky
- License: Open Font License (http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL_web)
- Source: https://fonts.google.com/specimen/Montserrat?query=Montserrat



## Changelog

1.0
Released: datehere
Initial release
