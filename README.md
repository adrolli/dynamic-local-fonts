# Dynamic Local Fonts

Using free fonts (Google Fonts and others) locally and dynamically. I use them directly in my WordPress Theme but you may do other fonty things.

## Why?

I love fonts. For my own project I wanted to use Google Fonts as well as some icon fonts without using the Google Fonts CDN. There are good plugins and code snippets for WordPress and hosting Google Fonts locally became very popular because of this GDPR / DSGVO thing. But I wanted to be able to use the fonts dynamically per page, post or archive. So I started to develop my own solution selecting one of the 900 available Google Fonts in WordPress and loading only this Font (plus my default font) for this single page.

## Usage

### Use my WordPress Child Theme

You may use my child theme (coming soon) as starting point or develop your own thing. WORK IN PROGRESS.

### With a WordPress Plugin, Starter Theme or other Websoftware

Use it in your WordPress Plugin, Dyna or any other Starter Theme or in other CMS or Frameworks.

#### Get started

1) Use the file [font-list-copy.txt](font-list-copy.txt) to build your font-selector dropdown. You can use an ACF-field for that.
2) Copy the code from [functions.php](functions.php) into your functions.php (only WordPress of course). - UNFINISHED WORK!
3) Copy one or more fonts or even the complete webfonts-folder into your theme, plugin or web-project.
4) Use the static code example [static.css](static.css) to use the fonts within your website or application. - UNFINISHED WORK!

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

## Ideas, Contributions, Support

Questions, ideas, need Composer or NPM? Want to add a font or features? No problem. Make an issue or craft a PR. I am happy to help you.

## Todo

- Create the static CSS version(S)
- Create the dynamic CSS version
- Create the full-dynamic ...???
- Test (incl. font-weights)
- What about CDN support?
- Make the dyna child-theme available
- Write a blogpost about it
- Work with it & Showcase
