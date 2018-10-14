# Dynamic Local Fonts

Using free fonts (Google Fonts and others) locally and dynamically.

## Why?

I love fonts. For my own project I wanted to use Google Fonts as well as some icon fonts without using the Google Fonts CDN. There are good plugins and code snippets for WordPress and hosting Google Fonts locally became very popular because of this GDPR / DSGVO thing. But I wanted to be able to use the fonts dynamically per page, post or archive. So I started to develop my own solution selecting one of the 900 available Google Fonts in WordPress and loading only this Font (plus my default font) for this single page.

## Usage

### Use my WordPress Child Theme

You may use my child theme (coming soon) as starting point or develop your own thing. WORK IN PROGRESS.

### With a WordPress Plugin, Starter Theme or other Websoftware

Use it in your WordPress Plugin, Dyna or any other Starter Theme or in other CMS or Frameworks.

#### Get started

1) Use the font-list copy to build your font-selector dropdown. I copied that in an ACF-Field that is used in Posts, Pages, Categories and other Taxonomies. That is extremely easy to do and to manage.

2) Copy the code from functions.php into your functions.php (only WordPress of course).

3) Copy the fonts-folder into your theme. You can clone it from Github.

## Ideas, Contributions

Need Composer or NPM? Want to add a font or features? No problem. Make an issue or PR.

## Licence

This code is Open Source, licensed with [GNU General Public License v3.0](LICENSE). All used and included fonts are using following free licenses:

- [SIL Open Fonts License 1.1](https://opensource.org/licenses/OFL-1.1)
- [Apache License V2.0](https://www.apache.org/licenses/LICENSE-2.0)
- [Ubuntu Font License 1.0](https://www.ubuntu.com/legal/terms-and-policies/font-licence)

Check [the full list of used fonts](all-fonts.csv) to see which license a font uses.

## Known issues

I hate Internet Explorer. I do not support older browser versions with TTF, SVG and EOT. There are only the WOFF and WOFF2 versions included.

I need only latin fonts. For me there was no reason to add other charsets. I added some of them for completeness of language support and as a demo. See the [list of special subsets](SUBSETS.md) for details. It is no problem to add cyrillic, greek, vietnamese or other charsets. Fork this repo and add the fonts with additional charsets. It would be nice, if you create a PR for me to add the fonts, too.

## Thanks

Thanks a million to any font creator sharing his unique font. It is a pleasure to use so many different fonts to create cool blog articles and stunning travel stories. Thanks to [Google Fonts](https://fonts.google.com) and [Font Library](https://fontlibrary.org) for the free collections of beautiful fonts. Thanks Majodev for the helpful [Google Webfonts Helper API](https://github.com/majodev/google-webfonts-helper/). Thanks mum and dad for letting me learn this computer thing 30 years ago. Thanks Jana for letting me click click click while you sleep with Oropax.

## Todo

<<<<<<< HEAD
- Add Font Library
- Add Font List CSV as working copy 
- Create the CSS code
- Test (incl. font-weights)
=======
- Add the subset fonts
- Add Static CSS
- Add Font Library
- Create dynamic CSS code (inline)
- Create dynamic external CSS (optional)
- Test (incl. font-weights + subsets)
>>>>>>> 0c5757e1329c00d02790b767c04bb471afd1d6fa
- What about CDN support?
- Make the dyna child-theme available
- Write a blogpost about it
- See what I can do with icon fonts
