# Earmilk
Earmilk redesign project

<h2 id="table-of-contents">Table of Contents</h2>

1. [To Do](#to-do-sec)   
2. [Theme Changes](#theme-changes-sec)   
3. [SEO Work](#seo-work-sec)   
    *  [Fixing Incomplete, Missing, or Broken hAtom hEntries](#seo-hatom-sec)   
    *  [Schema.org Markup](#seo-schema-sec)   
    *  [Other SEO Improvements](#seo-other-sec)   
4. [Miscellaneous Work](#misc-work-sec)   
5. [EARMILK Links](#earmilk-links)   
6. [EARMILK License](#earmilk-license)   



----------

<h2 id="to-do-sec">To Do</h2>

- [x] Implement new header
- [x] Restructure new header further to remove unnecessary actions and make more compatible with all pages
- [x] Remove Main Stage from all pages but the Front
- [x] Normalize posts on Videos, Album Reviews and others
- [x] Widen Latest Posts on mobile view
- [x] Improve layout of Author Pages
- [x] Added spotify playlists to hiphop category genre header
- [x] Fix sitemap (fixed but how?)
- [x] Add Facebook Like Buttons to Social Sidebar
- [x] Add Google+ Buttons to Social Sidebar
- [x] Add Snapchat Snapcode
- [x] Add Funtime Out Events Festivals to the nav menu
- [x] Write a script that will make the first word interview/er/ee name bold on Interview Posts
- [x] Add sliding slide out facebook like box (desktop)
- [x] Place ads
- [x] Set up auto-posting for Google+
- [x] Split Main Stage area, make Main Stage smaller, and add VOICES and SCOOPS sections
- [x] Code keyboard control of Next/Prev of Main Stage
- [x] Fix Favicon icon issue for Apple
- [x] Install mobile app view manifest.json
- [x] Install full favicon suite for all devices
- [x] New 404 page
- [x] Implement new bottle favicon
- [x] Show year of post on Author Pages if not current year
- [x] Make YouTube embed size more responsive to different screen sizes
- [x] Look into Facebook native comments solution
- [x] Make all facebook comment count reflect in the posts-grid comment count
- [x] Make all comment-counts (facebook, disqus, native) reflect in the posts-grid comment count
- [x] Remove duplicate, error-prone Events ld+json schema block
- [x] Implement Colorful Genre Bar from old.V2
- [x] Get into [Google News](https://support.google.com/news/publisher/answer/40787?hl=en#general)
- [x] Author Page pagination needs to be fixed
- [x] Album Review Details custom Schema + HTML details table widget
- [x] Change/improve gray section headers
- [x] Improve mobile font styles and sizes (atleast on i6-size)
- [x] Fix mobile width on Firefox
- [x] Create and style basic List of Authors Page
- [x] New styling for About Page
- [x] Move all custom style CSS to style.css and disable call to theme-folder/css/colors/default.css
- [x] Make Interview Question?Answer as buttons instead of dropdown menu items
- [x] Make article-category dates into an anchor on all archive pages
- [x] Restructure post grids into post lists with much larger images
- [x] Add EARMILK Album Review Rating bottle image to album review archive and single pages
- [x] prepend "Album Review: " to album review post titles for social sharing plugin's use
- [x] RSS feed to output images along with content
- [x] Extend Related Posts function to include Category-related posts if there aren't enough in Tag-related posts
- [ ] Implement RSS Feeds outputting post categories and tags with hashes (#s) in front of them
- [x] Implement system to automatically color site elements (ie, image meta info color line) to match genre class
- [ ] Improve Harlem Shake CSS animation timing
- [x] Develop some unifying site design elements
- [x] Add Schema to all standard `index.php` and `single.php` posts and pages (single and archive)
- [x] Add Schema to `/events/` page (single and archive)
- [x] Add Schema to `/news/` page (single and archive)
- [x] Add Schema to `/voices/` page (single and archive)
- [x] Add Schema to `/album-reviews/` page (single and archive)
- [x] Add Schema to `/gear/` page (archive)
- [x] Add Schema to `/gear/` page (single)
- [x] Add Schema to all single posts
- [x] Add Schema to all archive pages
- [ ] Add Schema to all unique type posts (ie, events, reviews, news articles, music recordings, premieres, etc)
- [x] Fix ImageObject on all schemas
- [x] Add Schema'd up breadcrumbs
- [x] Finish Schema.org markup
- [ ] Add unique headers to individual category pages
- [ ] Overhaul/improve/enahcne/tighten up/stlye/restyle/redesign/make hot/hot up [EARMILK MP3 Player](http://earmilk.com/2012/10/02/zz-ward-cryin-wolf-feat-kendrick-lamar/) style
- [ ] Re-style re-design [MP3 Player](http://earmilk.com/2012/10/02/zz-ward-cryin-wolf-feat-kendrick-lamar/) ([1](https://starslingeruk.bandcamp.com/album/sketchy-ep))
- [ ] Look into [AppCache](http://docs.webplatform.org/wiki/apis/appcache/ApplicationCache)
- [ ] New Live Search function
- [ ] Add Previous Next navigation to bottom of single posts
- [ ] Implement new Sharrre Open source, share-count aggregating, and lazyloading "plugin" by building custom plugin
- [ ] Pull share count to posts grid (this could be untenable due to response time contraints for multiple social networks)
- [ ] Look into and stop Google indexing post attachments / robots.txt
- [ ] Change all image attachments image-link-type's in posts to file or none
- [ ] Add Extra AUthor Disclosure info to author meta
- [ ] Remove all MP3 links from posts
- [ ] Changes "archives" to "crates" for archive links of tags/categories
- [ ] iOS App
- [ ] Android App
- [ ] Implement backend templating capability for Events
- [ ] Implement a solution for Hreflang tags for indexing in foreign languages
- [ ] Backend/Front end widget to give photographers credit for their photos
- [ ] A solution for photo sourcing (possible a community effort or a filtering functionality plugn)
- [ ] Remove all `&quot;`s from posts in `src="&quot;http...`
- [ ] LazyLoader for SoundCloud embeds
- [ ] Look into how Writer tools for posts like Interviews and Events can be improved for posting ease and style consistency
- [ ] Ability to play a post's first song right from the posts grid
- [ ] Ability to play a post's first video right from the posts grid
- [ ] START ALL OVER :D -- New Well-planned Theme and Infrastructure
- [ ] AJAX site navigation engine
- [ ] Site wide persistent MP3 player
- [ ] ...

- [Back to top ^](#table-of-contents)  

----------

<h2 id="theme-changes-sec">Theme Changes - UX/UI</h2>

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
14.  Fixed up footer: [left Trending posts widget](Fixed up latest posts left Footer widget), Google Translator plugin, Music Vibes links and Music Magazine Subscription text
15.  Applied New ["Quantum Paper Input Style" to Search](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/bb457e91b08bfd7a71cec4422062272358cb615a)
16.  Header Overhaul ([strucutre](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4a20c510c1dd740cfc7445d8216d5929f8d6771b), [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/2097af47067b36670ef11db1268e621210aef968))
17.  "Main Stage" Overhaul ([strucutre](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4a20c510c1dd740cfc7445d8216d5929f8d6771b), [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/2097af47067b36670ef11db1268e621210aef968))
18.  Restructured new header further to [remove unnecessary actions](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/6ae1a7ce8cde345982acfc416943b790d855e4fb) and make more compatible with all pages
19.  Main Stage [removed](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/6560cb4b35fc0610dff64dd6e01536849126eeb7) from all pages but the Home
20.  Removed Main Srage [from all pages](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/6560cb4b35fc0610dff64dd6e01536849126eeb7) but Home
21.  Widened [front page posts](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/220644980edf6d4fa9c1dfba2c176a1aba6d9b98) on mobile
22.  Purrtied up and normalized [Album Review](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/92fefc630cbcbdc4b51e23a8896afca533aa443d), [VOICES](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/06f704e4df608f38d7fba7378999709ed5922686),  [Gear](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/8c37de1f60429aa6e68b09205317f9024e708358), and [News](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/3f7c5e7a990efe851e81765a114e7ea82e57c63c) post type grids 
23.  Prettied and restructured single post's [Title and Author Meta](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/86f4d24bbf749956ae1225728aa7cc93161af5c4)
24.  Changed [site-wide font to Helvetica](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/3ebecc827ab4a8de65f0c4e574a76611211de7c2) for aesthetics and better readibility
25.  Improved [single post view on mobile](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a6fb8c94025b5a23b1acdc3610ed7356ea5764a1)
26.  Jazzed up and updated [structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a9050e0ebf33a15d482164d4ae2648c2d394552b) and [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/fec9fcc7313f605d20e5812b06e8a81622a52be3) of Author Pages
27.  Slicked up and pdated [structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a9050e0ebf33a15d482164d4ae2648c2d394552b) and [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/fec9fcc7313f605d20e5812b06e8a81622a52be3) of Archive Pages
28.  Restructutred, simplified and improved the main [Fixed Header](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/845d4f3b80aa6df664ae812888e3431fdfe0e2fb)
29.  Implemented colorful category navigation [Genre Bar](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/5fb3cf07a1abf18eb08732d798a13d797f932362)
30.  Added custom [thumbnail pagination](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/37dc7ba8d8782268cea3d0bbf0c0889143542ee6) to Main Stage Owl Carousel
31.  Fixed and doped out the broken [transitional fade-in](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/ab81616d9761e61e8e4a146e668af656723ae609) of the Main Stage Owl Carousel
32.  Added *hot* [animated loading thematic 'music equalizer' animation](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/574681198b2bed7a54d431f6a7b2b41449cee39a)  to the Main Stage as it initializes on page open
33.  Added nifty Left Stage to the ... left of Main Stage on the front page ([Left Stage structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/5240444a93de1c9fa2b2b412a9600db9b4af757c), [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/574681198b2bed7a54d431f6a7b2b41449cee39a))
34.  Coded a [basic function](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/88a8a4d822428c26e183dae080a66f94386f7283) to trigger Next and Previous of Owl Carousel with keyboard keys
35.  New Interview Post question and answer [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/7acd32bc47f979a3fff4573bb407cafade2cfb2f)
36.  New [404 page](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/11d1e0f0b0d8a86e0bca3d1f3f5698d858862e78) according to design from [EARMILK 2.0](http://old.earmilk.com:81/favicon.ico2)
37.  Interviewer and Interviewee names in Interview posts [will now have their names boldened](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/ae468d5bf8d03c7a8f43074204158cf0655a8b5f) even if the markup protocol is not followed properly by the writer
38.  Implemented unique Spotify Playlists for respective Genre Category Headers (ie, hiphp, dance, etc) ([JSON iFrame URL data](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/0ee69bbbecd6547a14ba650642133ca7e673eed6), [structure and function](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a4437c58146d3263320efd3316701af33711ac1f), [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/36b17364fd7f595aa4a3c3bef6abab462ee6ac56))
39.  Facebook Like Box [slideout](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/cdf7ce2388b1fa57acda08a2a0a1bc61450920a6)
40.  Genre Category Archive Page header Soundcloud and Spotify tabbed playlists ([structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a4437c58146d3263320efd3316701af33711ac1f), [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/36b17364fd7f595aa4a3c3bef6abab462ee6ac56), [data in JSON](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/0ee69bbbecd6547a14ba650642133ca7e673eed6))
41.  Type Anywhere Search ([structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/1e6e11c12f37930d05af74c97542941fea59b994), [functionality](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/67235e8694c68d170e0bb6d925b55ae80ce214af), [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/e3f88ebc6c6aa2988abbbe197d4a92b8712ef81c))
42.  Album Review Single Post Details Box Redone ([HTML structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/e3873b4ab17a27f04a10912c820dc38f488ca2d8), [CSS style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/5c9f9aee696497d421ae3ee9eee749e7cf346654); [dynamic rating stars structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/519e3af0a3c7364c818b7e323e02b2a3e9fa4b58) and [dynamic rating stars style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/49d193117d5b21e55bff1f78d4e489c1a044b750))
43.  Re-styled drab, gray [section headers](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/33d85cd362db70fe61bb88c529af447ee3b07a4a)
44.  Styled up About Us page ([style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/e642287b398915bb0b675be6c44c9fa487b4fa00), [structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/ebefc557c906f6240da0f0a3ac33bfec17b8bc58))
45.  Custom [404](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/11d1e0f0b0d8a86e0bca3d1f3f5698d858862e78) page
46.  Styled up [Photo Journal Posts](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/4d6c85f33d751656d21b96613bbd198ae37172c4)
47.  ...



- [Back to top ^](#table-of-contents)  

--------


<h2 id="seo-work-sec">SEO Work</h2>

<h3 id="seo-hatom-sec">Fixing Incomplete, Missing, or Broken hAtom hEntries</h2>

1.  [Commented](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/f739b32c3a899139df1f09f8503bb7e3b889c595) out line 481 in wp-includes/post-template.php * **
	*this is the line that was commented out
	```php
		// hentry for hAtom compliance
		$classes[] = 'hentry';
	```
	
	**for a new, modern, properly coded theme, it'd be a bit cleaner to use the following PHP filter to remove broken WP-default hentry
	```php 
	function remove_hentry( $classes ) {
	
		$classes = array_diff($classes, array('hentry'));	
	
		return $classes;
	}
	```
2.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/ee7a6f878ce6059e7928fb035c7097e1c8af71af) hEntry tags to single.php for hAtom compliance 
3.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a8d43e50ff6e36abbb060696bdd341c515830e96) hEntry tags to single-album_review.php for hAtom compliance
4.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a019edc974797065dc7907d668cce4cd1db23161) hEntry tags to single-gear_review.php for hAtom compliance
5.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/85dff92be297808caad3ca5669d8df8f64fba686) hEntry tags to single-news.php for hAtom compliance
6.  [Fixed/added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/9ee1ce9fad6d9873e0a89fce5949e414215239e0) hEntry tags to single-opinion_post.php for hAtom compliance
7.  [Upgraded](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/428245db1b09509477f1083e7074fb6fc27b3d55) hAtom markup to h-Atom micro formats draft 2.0  
8.  [Added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/7c3ffe91e9356fb5eaf6f0a2809c13850683fc6f) hAtom to more template files  
9.  [Added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/650f67978b9d55bf8d4ffbe4318096a73909161a) hAtom to Main Stage  
10.  [Added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/13444148516b57421122eebdcd23801f8a397721) hAtom to main index.php file, which affects most posts
11.  Fixed broken hAtom entries in [Ultimate Posts Widget](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/8c3de90e46576ab4cb04c91aa186def3fdd4d0ad)
12.  [Coded and added](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/88a8a4d822428c26e183dae080a66f94386f7283) a functions.php function and index.php reference for a custom, new `get_post_class()` function that eliminates the `hentry` class from the array - the new function is called `andre_get_post_class_without_hentry()`
13.  Added [hEntry and h-Entry](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/02c5d8f62cec4aaac124db7942a4005e217ff478) to *Left Stage* VOICES and SCOOPS
14.  ...



<h3 id="seo-schema-sec">Schema.org Markup</h2>

1.  Added [Organization](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a2bf2a07e859375ba648f950fbb9191dba17ddb9) to header.php `<head>` 
2.  Added [WPHeader](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/3050ed60394655363ed560486c89b06cade8370e) to header.php 
3.  Added [WPFooter](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/27d372ccd87769f519af096f281c88e1140f6b22) to footer.php
4.  Added [SiteNavigationElement](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/c1aa8d1a4d10f8d75ef0ae884eb337c03690587c) to re-structured Header
5.  Added [mainContentOfPage](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/c2aa3a2b4516c9764dd8d9267623437204e864db) to all the single post pages -- index.php, page.php, single.php and single*.php
6.  Added [WPSideBar](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/8cf705bf2aebc25016b799bfa3a06d338e7fdf8b) Schema to all pages (I think)
7.  Added [Publisher](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/3a4bc9fe36031f5085b0e954ac4f8fa4e0770c87) Schema to WPHeader
8.  Added Event Schema to [Events Archive](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/ad9113728701a6ec362ab08e1dad769cfbf84380) and to [Single Event Posting Pages](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4ac2ff1f1b099902267099b77f44fd216506565e)
9.  Added BlogPosting Schema to [index.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/67db412c0a4acbb0b56cdad6142129ab8d845782), which will apply to a variety of archive pages and post grid types (eg, Hip-hop Category Page, Author Archive Pages, etc)
10.  Added [Image Object](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4519b255f09d2ce100d07d6ea17c7655d5e9662a) Schema added to NewsArticle index.php
11.  For Author Pages, added `CollectionPage` via [CollectionPage VS WebPage differentiation](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/d1f5146f08bdb231abd71535c2a82bc741b7fd19) to Main Site Header
12.  Added [Person](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4d89df66e88c819e695c84292ebc55cbd8c3a6b6) to Author Pages and made authors the mainEntity of the page.  Note: had to write [a custom PHP function](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/eb5c52886dcf07325e0e0465863b0d84ed856357) to inject `itemprop="image"` into the `<img>` tag of author photos, regardless of whether WP Social Avatar or default Gravatar is being used.
13.  Removed duplicate, error-prone The Events Calendar `ld+json` Schema.org markup block via [function.php function](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/c75745b607dc4a2318fcc817616c3c838c01edff)
14.  Album Review Single Post [Schema perfected](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/774ec382bf4e628671895db7513e09eef88aa484)
15.  BlogPosting Schema added to [single.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/043aabd8eb0759a8190bc29d8648bbcec7a4abfd)
16.  BlogPosting Schema added to [single-opinion_post.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/36d975c1343d024463d9fbc66f4464b5e0fd9775)
17.  NewsArticle Schema added to [single-news.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/69d7d7d049d0d8ad1c4e971893dc12583ca3743d)
18.  Added full BlogPosting list Schema to [archive-album_review.php / Album Review](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/bf9908ec8b3e7707492def5aaeab0a641132e0fb) Archive pages
19.  Added full BlogPosting list Schema to [archive-opinion_post.php / VOICES / Opinion Post](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/cc6519405368f832ac83b052fbd761d41c0957ee) Archive pages
20.  Added full BlogPosting list Schema to [archive-gear_post.php / VOICES / Opinion Post](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/59578cd58ebbacee7a8354563f68bf77d6ca5914) Archive pages
21.  Basic BlogPosting Schema added to [single-gear_post.php](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/28979f03f259354b45eb24d4b61f4066b54a6ac2) -- once [Issue #47](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/issues/47) is resolved, the Schema can be expanded to also include `Product / Offering` and `Review` schema itemscopes.
22.  ...



<h3 id="seo-other-sec">Other SEO Improvements</h2>

1.  Fixed [several SEO meta tags](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/e1c3ea5b8bec65dfd01133c80fed9b6ac2bc64fb) in the `<head>`
2.  Properly implemented [non-WWW to WWW](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/b8cf6d709cdbd301c313d19446f7e60b6babc4b9), fixing [a major issue](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/issues/7)
3.  Implemented WWW to non-WWW ([nginx conf file](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/4a8542f3e97eb5bbc1284fcaacf6fd9703c35d45) and [wp-config.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/53677c65e5cc31da7501774d5cdd86dcc0f1c38c))
4.  Disabled [Yoast Schema](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/d301eb3407232d5b013cca4d4cb0a49a3216740d) and some metas
5.  Fixed W3TC and nginx settings conflict ([issue #9](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/issues/9)) which resulted in vrious bugs ([1st attempt](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/052036f4d05161d8517bd753301017d95a527a0d), [removed faulty code](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/9dab1576dd21e8abb28171c09ad41d750f73aa22), [pre-re-installed W3TC nginx.conf](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/19563ceb9adb83931704c66386d7201cad678782), [new nginx.conf after re-install](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/726bec3e5e0ca09a04b82222f384d5ac1dcd4f57), [proper include to W3TC WP-root nginx.conf](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/f00971312eb2af3849e50f8bb73412ca2faa5744))
6.  Fixed Sitemap (several plugin issues were resolved to make it work)
7.  Added robot.txt to `file2.` (Montrey) and `mooks.` subdomains to prevent caching unnecessary files 
8.  WOOHOO! Auto-posting to [Google+](https://plus.google.com/+earmilk/posts) via [RSSFeed](http://earmilk/feed/) and [Hootsuite](https://hootsuite.com) finally setup!
9.  Fixed RSS Feed so that now it [loads ALL post types](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/2b32148db9ff1b50da83af54533ccf17944e0a2d), including the custom types
10.  Added func to functions.php to [prepend `"Album Review: "`](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/7de8559dd9da33d16521e361c11a29caee611ecd) to Album Review custom post_type titles
11.  ...



- [Back to top ^](#table-of-contents)  

--------

<h2 id="misc-work-sec">Misc Work</h2>

1.  Backups made ([Google Drive](https://drive.google.com/open?id=0B_40KgH9jS_Nckt0SW5JTFo0Qnc), [MEGA](http://mega.nz))
2.  [GitHub Project](https://github.com/iamandrebulatov/Earmilk) set up
3.  Clone set up at [allmilknoduds.com](http://allmilknoduds.com)
4.  Google Analytics [hardcoded](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/e1d21cade3c382300f30241dfcefe850a32d2dbd) into header.php
5.  Yoast Google Analytics plugin deactivated
6.  Fixed a CSS alignment of fields bug in [ALbum Review Details](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/c1aa8d1a4d10f8d75ef0ae884eb337c03690587c) backend plugin (Resolved [Issue #16](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/issues/16))
7.  Restructured [Header](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/845d4f3b80aa6df664ae812888e3431fdfe0e2fb) for flexibility, to fix Schema Nav and to allow Genre Bar
8.  Added functions.php filter to remove annoying, spammy, and meaningless [Yoast notifications](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/1efbc3c9675c6be5c9cfb52ec9e1543f432bf66d)
9.  Installed new suite of favicons for all devices and platforms ([files](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/2a4dd566cafeb9f6efc1ed01ae1392247714b902), [header.php references](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a668f4c262a64d01680da88b7197863e1d394498), [validation test](http://realfavicongenerator.net/favicon_checker?site=earmilk.com&ignore_root_issues=on#.VsA34JMrKHp))
10.  Set up EARMILK Bookmark on Android as Standalone App via `manifest.json` ([reference](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/a668f4c262a64d01680da88b7197863e1d394498), [file](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/2a4dd566cafeb9f6efc1ed01ae1392247714b902))
11.  Made Genre Bar Dynamic and editable from the backend ([functions.php registetration](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/68c41356fdaada4fce43cf4b2f83fb3b31b00c54), [structure](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/cfd52ca7df161b137e84d2bc6dd625e46e740754), [javascript](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/f43af698d3e7ff7255292db4540c52d59c898cc2), [style](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/8c8b6d11f6cb43ebd9d360e3caf19420a77f8e64))
12.  Placed ads ([header/header.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/00464a3f4bdd9f2e40e0d94ad1d3194c38f2f316))
13.  Added function to use a default fallback image when something goes wrong with the default `the_post_thumbnail()` WP function ([func in functions.php](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/079a18968558c7dd8be08dce3806bef243a11996), [index.php fixed](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/5dcfca072f3dc25c8d044490f6a2bf36ddbecff6))
14.  Created a dynamically generated pages of all EARMILK authors that have published 1 or more posts ([page start](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/f8af8fb27462a09c5f3d49e49e59c038bb83991f), [functions.php function to only output authors with 1 or more posts](), [page finished]())
15.  Appended to functions.php to create [shortcodes](https://github.com/iamandrebulatov/Theme-Redesign-and-SEO-Overhaul/commit/f33505375951bc66573147e915b4c89da78b0463) which enable outpitting WordPress user meta info (eg, like name and photo) from within WordPress pposts or pages
16.  [Transfered](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/7c66e1f690346f5333d296e0d20d2cbcd86f0093) all important CSS from default.css to style.css and [disabled](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/79acea579f9d02c4096d8f6cc45253cf09d86a5b) scripts.php registration and call to default.css
17.  Developed custom TinyMCE Interview Question and Interview Answer buttons for content writers post editting view ([functions.PHP](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/ae60bd271c443b9febb279ffb6fd2d0521aabb31), [JS](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/74af7390af2b22c18a7284fb6abe3e21d6e15c18), [CSS](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/30a4bdc01a2f1bd0a08c007c6ca9841369966dd2))
18.  New Related Posts function that first pulls tag-related posts, then category-related posts, up to 4 posts ([functions.php function](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/5930b2c37eeffe91ada92f2f650339a7c8f2ca61), [single-*.php template files reference call](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/commit/0e1f98790d92c77f4d2544040639211f05b6a958))
19.  Disabled [WP Emoji Release JS](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/issues/41)
20.  Image sizes in a [variety of locations on the site](https://github.com/montreyw/Theme-Redesign-and-SEO-Overhaul/issues/42) have been properly re-defined, re-sized, re-scaled and pulled
21.  Reduced [W3C Validator](https://validator.w3.org/nu/) errors for `http://earmilk.com/` from 103 erros to 8 errors
22.  ...



- [Back to top ^](#table-of-contents)  

--------

<h2 id="earmilk-links">EARMILK Links</h2>

#### Earmilk Development Enviornment Clone Site
-- [allmilknoduds.com](http://allmilknoduds.com)


#### Earmilk "throwaway" email account
login:  allmilknoduds@gmail.com  
password:  [a truth we share]


#### Earmilk Asset Storage
-- [Earmilk project assets cloud folder](https://drive.google.com/open?id=0B_40KgH9jS_Nckt0SW5JTFo0Qnc)  
-- [Mega.nz](http://mega.nz) (large; full site backup for safe keeping)  
----- Mega login:  allmilknoduds@gmail.com  
----- Mega password:  [a truth we share]


#### Earmilk GitHub
- https://github.com/iamandrebulatov/Earmilk

- [Back to top ^](#table-of-contents)  

----------

<h2 id="earmilk-license">EARMILK License</h2>

Copyright (c) 2016 Earmilk.com. All rights reserved.
