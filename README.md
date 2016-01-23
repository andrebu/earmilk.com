# Earmilk
Earmilk redesign project

----------

## Theme Changes

1.  All ads have been removed -- the list of ads and their respective code can be found [in this file](https://github.com/iamandrebulatov/Earmilk/blob/master/google_ad_code_removed.html)
2.  Black to White -- style [code has been added](https://github.com/iamandrebulatov/Earmilk/commit/76d8365db5bd6f39aee36620a45ac9f06ee1eb23) to default.css, in wp-mag > css > colors
3.  Custom JS file [edited](https://github.com/iamandrebulatov/Earmilk/commit/219c0c4fef38c5675267fbf6e0994ab2d9324c83) to add ".sticky" class to whole `<body>` as well as the `<header>` so that the jitteriness can be fixed when Sticky Nav Header is trigger on scroll down by user
4.  All mobile sizing issues resolved
5.  Broken behavior of Header and logo jerkiness fixed, especially on mobile
6.  Various texts, sizing, and minor spacing issues (particularly with sidebar widgets and texts) have been resolved
7.  Footer widgets re-arranged a bit, less posts in left column, and location of language-flag changed
8.  Main Stage centered and spacing above increased
9.  Header navigation dropdown [changed](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/2b238ca733386d81ee469e30a536f7d302fa3fd2) from black to white
10.  Fixed [Author Page Bio & Search Results Dropdown](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/daae898d119f05d3d2e1cdf7d70cd2fb0041a9d5) to go with new theme
11.  Overahued [Posts Layout Grid](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/9d4a1c6172d42ee777bccf3f3dc981f0ae6da540), then touched up [a bit](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/7957d6620180102b85bc20d26a4078bd3a53f53a)
12.  Milky Harlem Shake Easter Egg! ([uploaded](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/c4def416f5cbfe6b85892275aa9f64ab191108a7), [initialized](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/30dd4a130a6853e4cc22767904c770d0d4031ef5), [customized](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4299872c04786433a892952af7c290aa1776e767))
13.  Made the color of the [various title bars](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/f3eb88b5eca4e0e1528313411e9ba332c1017d06) and the [search field](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/bd9b43708e82a8ed9df30ad0b27c209678dc2bf5) a bit darker



--------


## SEO Work

### Fixing Incomplete, Missing, or Broken hAtom hEntries
1.  [Commented](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/f739b32c3a899139df1f09f8503bb7e3b889c595) out line 481 in wp-includes/post-template.php * **
2.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/ee7a6f878ce6059e7928fb035c7097e1c8af71af) hEntry tags to single.php for hAtom compliance 
3.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a8d43e50ff6e36abbb060696bdd341c515830e96) hEntry tags to single-album_review.php for hAtom compliance
4.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a019edc974797065dc7907d668cce4cd1db23161) hEntry tags to single-gear_review.php for hAtom compliance
5.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/85dff92be297808caad3ca5669d8df8f64fba686) hEntry tags to single-news.php for hAtom compliance
6.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/9ee1ce9fad6d9873e0a89fce5949e414215239e0) hEntry tags to single-opinion_post.php for hAtom compliance
7.  [Upgraded](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/428245db1b09509477f1083e7074fb6fc27b3d55) hAtom markup to h-Atom micro formats draft 2.0  
8.  [Added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/7c3ffe91e9356fb5eaf6f0a2809c13850683fc6f) hAtom to more template files  
9.  [Added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/650f67978b9d55bf8d4ffbe4318096a73909161a) hAtom to Main Stage  
10.  [Added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/13444148516b57421122eebdcd23801f8a397721) hAtom to main index.php file, which affects most posts  
11.  Added [Organization](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a2bf2a07e859375ba648f950fbb9191dba17ddb9), [WPHeader](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/3050ed60394655363ed560486c89b06cade8370e), and [WPFooter](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/27d372ccd87769f519af096f281c88e1140f6b22) Schema.org markup
12.  Fixed [several SEO meta tags](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/e1c3ea5b8bec65dfd01133c80fed9b6ac2bc64fb) in the <head>
13.  Properly implemented [non-WWW to WWW](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/b8cf6d709cdbd301c313d19446f7e60b6babc4b9), fixing [a major issue](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/issues/7)
14.  Implemented WWW to non-WWW ([nginx conf file](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4a8542f3e97eb5bbc1284fcaacf6fd9703c35d45) and [wp-config.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/53677c65e5cc31da7501774d5cdd86dcc0f1c38c))
15.  Disabled [Yoast Schema](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/d301eb3407232d5b013cca4d4cb0a49a3216740d) and some metas


*this is the line that was commented out
```php
	// hentry for hAtom compliance
	$classes[] = 'hentry';
```

**for a new, modern, properly coded theme, it'd be a bit cleaner to use the following PHP filter to remove hentry
```php 
function remove_hentry( $classes ) {

	$classes = array_diff($classes, array('hentry'));	

	return $classes;
}
```
....


--------


##Misc Work
1.  Backups made ([Google Drive](https://drive.google.com/open?id=0B_40KgH9jS_Nckt0SW5JTFo0Qnc), [MEGA](http://mega.nz))
2.  [GitHub Project](https://github.com/iamandrebulatov/Earmilk) set up
3.  Clone set up at [allmilknoduds.com](http://allmilknoduds.com)
4.  Google Analytics [hardcoded](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/e1d21cade3c382300f30241dfcefe850a32d2dbd) into header.php
5.  Yoast Google Analytics plugin deactivated



--------


##Earmilk Development Enviornment Clone Site
-- [allmilknoduds.com](http://allmilknoduds.com)


##Earmilk "throwaway" email account
login:  allmilknoduds@gmail.com  
password:  [a truth we share]


##Earmilk Asset Storage
-- [Earmilk project assets cloud folder](https://drive.google.com/open?id=0B_40KgH9jS_Nckt0SW5JTFo0Qnc)  
-- [Mega.nz](http://mega.nz) (large; full site backup for safe keeping)  
----- Mega login:  allmilknoduds@gmail.com  
----- Mega password:  [a truth we share]


##Earmilk GitHub
- https://github.com/iamandrebulatov/Earmilk


----------


##License

Copyright (c) 2016 Earmilk.com
