# DGC Style Guide

## Jekyll & Github Pages
This style guide uses Jekyll (https://jekyllrb.com) as the templating engine so GitHub Pages (https://pages.github.com/) can be used for hosting.

Any changes made to the master branch will be viewable on the style guide url - https://destinationgoldcoast.github.io/styleguide/

## CSS Preprocessor - SASS
Please refer to https://sass-lang.com/

## Task Runner - Gulp
Please refer to https://gulpjs.com/

## Development Workflow
### Git & Branching
- The master branch is used as the live style guide branch so only merge to master when the change is ready for public viewing. The live branch can be configured in GitHub settings in the styleguide repo.

- When branching please use the following naming conventions:
  - styleguide/name-of-feature
    - Use this convention when making changes that are directly related to DGC styles, images and content.
  - jekyll/name-of-feature
    - Use this convention when making changes to the Jekyll components.

### Say no to _site
When looking for code to change, DO NOT start changing things in the _site folder, _site is the location folder that Jekyll outputs the production files.

### Jekyll - Local server
Once you have Jekyll (https://jekyllrb.com) set up on your machine, to spin up a local host use the terminal to cd into your style guide directory and run:
- bundle exec jekyll serve
- visit http://127.0.0.1:4000

### SASS - Structure of Style Guide
From the terminal, cd into the style guide directory and use the following command to get sass to dance:
- sass --watch assets/css/sass/structure.scss:assets/css/structure.css

## Code Editor
If you are using VS Code, I recommend installing vscode-prettydiff (https://marketplace.visualstudio.com/items?itemName=HexcodeTechnologies.vscode-prettydiff) to help with Jekyll in your html pages.
