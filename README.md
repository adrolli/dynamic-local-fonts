# Dynamic Local Fonts

Using free fonts (Google Fonts and others) locally and dynamically. I use them directly in my WordPress Theme but you may do other fonty things.

## Why?

I love fonts. For my own project I wanted to use Google Fonts as well as some icon fonts without using the Google Fonts CDN. There are good plugins and code snippets for WordPress and hosting Google Fonts locally became very popular because of this GDPR / DSGVO thing. But I wanted to be able to use the fonts dynamically per page, post or archive. So I started to develop my own solution selecting one of the 900 available Google Fonts in WordPress and loading only this Font (plus my default font) for this single page.

## Usage

I use dynamic local fonts with my child-theme (will publish the code as soon as it is finished). You may adapt it to your own needs and use it in your WordPress Plugin, Dyna or any other Starter Theme or in other CMS or Frameworks.

### Get started using WordPress

1) Copy one, some or all fonts into your theme, plugin or web-project.
2) Use (parts of) the file [font-list-copy.txt](font-list-copy.txt) to build your font-selector dropdown*.
3) Copy the code from [functions.php](functions.php) into the functions.php of your child-theme.
4) Copy the code from [header.php](header.php) into the header.php of your child theme.

If you don't know how to create a dropdown within your posts, pages, custom post types, categories, tags or other taxonomies you may use Advanced Custom Fields. It is very easy to create a field named "font" and to use it as the above mentioned font-selector where ever you want to make fontastic things.

### Get started using $whatever

1) Copy one, some or all fonts into your theme, plugin or web-project.
2) Use (parts of) the file [font-list-copy.txt](font-list-copy.txt) to build your font-selector dropdown.
3) Have a look at functions.php, header.php and the src-directory on how to write your dynamic font code. 

## Licence

All code is free under [GNU General Public License v3.0](LICENSE). All included fonts are free under one of these licenses:

- [SIL Open Fonts License 1.1](https://opensource.org/licenses/OFL-1.1)
- [Apache License V2.0](https://www.apache.org/licenses/LICENSE-2.0)
- [Ubuntu Font License 1.0](https://www.ubuntu.com/legal/terms-and-policies/font-licence)

Check [the full list of used fonts](all-fonts.csv) to see which license a font uses.

## Known issues

I hate Internet Explorer. I do not support older browser versions with TTF, SVG and EOT. There are only the WOFF and WOFF2 versions included.

I need only latin fonts. For me there was no reason to add other charsets. I added some of them for completeness of language support and as a demo. See the [list of special subsets](SUBSETS.md) for details. It is no problem to add cyrillic, greek, vietnamese or other charsets. Fork this repo and add the fonts with additional charsets. It would be nice, if you create a PR for me to add the fonts, too.

## Thanks

Thanks a million to any font creator sharing his unique font. It is a pleasure to use so many different fonts to create cool blog articles and stunning travel stories. Thanks to [Google Fonts](https://fonts.google.com) and [Font Library](https://fontlibrary.org) for the free collections of beautiful fonts. Thanks Majodev for the helpful [Google Webfonts Helper API](https://github.com/majodev/google-webfonts-helper/). Thanks mum and dad for letting me learn this computer thing 30 years ago. Thanks Jana for letting me click click click while you sleep with earplugs.

## Contributions, Support

Questions, ideas, need Composer or NPM? Want to add a font or features? No problem. Make an issue or craft a PR. I am happy to help you.

## Todo and ideas

- Create dynamic CSS
- Dyna child-theme
- Font CDN Builder
- Write a blogpost about it
- Work with it & Showcase
- Make a beatiful font demo
