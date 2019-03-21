# DGC Style Guide

## Jekyll & Github Pages
This styleguide uses Jekyll (https://jekyllrb.com) as the templating engine so the styleguide can be hosted on GitHub Pages (https://pages.github.com/).

Any changes made to the master branch will be viewable on the styleguide url - https://destinationgoldcoast.github.io/styleguide/

## CSS Preprocessor - SASS
Please refer to https://sass-lang.com/

## Task Runner - Gulp
Please refer to https://gulpjs.com/

## Development Workflow
### Jekyll - Local server
Once you have Jekyll set up on your machine and want to spin up a local host, run from the terminal:
- bundle exec jekyll serve
- visit http://127.0.0.1:4000

### SASS - Structure of Style Guide
From the terminal, cd into the styleguide directory and use the following command to get sass to dance:
sass --watch assets/css/sass/structure.scss:assets/css/structure.css

## Code Editor
If you are using VS Code, I recommend installing vscode-prettydiff (https://marketplace.visualstudio.com/items?itemName=HexcodeTechnologies.vscode-prettydiff) to help with Jekyll in your html pages.
