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

This code is Open Source, see LICENSE for more information. Check https://fonts.google.com/attribution to check the licenses of the fonts for special usage.

## Known issues

I hate Internet Explorer. I do not support older browser versions with TTF, SVG and EOT. There are only the WOFF and WOFF2 versions included.

I need only latin fonts. For me there was no reason to add other charsets. But it should be no problem to add cyrillic, greek, vietnamese or other charsets. Fork this repo and add the fonts with additional charsets. Adapt your code to select the fonts. Hey, it would be nice, if you create a PR for me to add this feature here.

## Thanks

Thanks a million to any font creator sharing his unique font. It is a pleasure to use so many different fonts to create cool blog articles and stunning travel stories. Thanks to Google and Font Library for the free collections of beautiful fonts. Thanks Majodev for the great Google Webfonts Helper API. Thanks mum and dad for letting me learn this computer thing 30 years ago. Thanks Jana for letting me click click click while you sleep with Oropax.

## Todo

- Test (incl. font-weights)
- What about CDN support?
- Complete the fonts (900+++)
- Make the dyna child-theme available
- Write a blogpost about it
- See what I can do with icon fonts
