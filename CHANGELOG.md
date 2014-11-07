# CHANGELOG for MODX-Boilerplate
==================================================================
==================================================================

### HEAD
* Add deprecation note. Repo not actively maintained anymore.

### 6.0 (2013-11-18)

* Updated normalize.css to 2.1.3
* Updated jQuery to 2.0.3
* Updated [Modernizr to 2.7.0](http://modernizr.com/download/)
* Updated ht.access to [Apache Server Configs 2.0](https://github.com/h5bp/server-configs-apache)
* Converted from Chromeframe to Browsehappy
* Added .editorconfig file
* Updated Google Analytics snippet
* Updated viewport rules (meta, main.css)

### 5.0.1 (2013-07-03)

* Updated jQuery to 2.0.2

### 5.0 (2013-05-02)

* updated jQuery to 2.0.0
* updated README with information regarding jQuery 2.0
* updated normalize.css
* updated GA snippet to be protocol relative (now supported by GA itself)
* now using the [<main> element](http://helloanselm.com/2013/main-element/)

### 4.0.2 (2013-02-05)

* updated to latest jQuery 1.9.1 including source maps

### 4.0.1 (2013-01-22)

* updated jQuery to 1.9.0

### version 4.0 (2012-11-25)

* many updates coming from HTML5Boilerplate
* dropped MODX-Package support
* NOW again a CLEAN MODX template – simple and up-to-date
* added "dead-simple" grid
* dropped unmaintained 1140px grid
* dropped 978px grid as I cannot recommend static grids anymore
* Further improvements to `console` method stubbing
* Update to jQuery 1.8.3
* Update to Modernizr 2.6.2
* restructured CSS directory
* refactored head-files
* changed main-div to class="main" from id="content" in favour of upcoming <main> element
* added @viewport rule in CSS

==================================================================

### version: 3.5 (2012-07-30)

* minor updates from HTML5Boilerplate
* Modernizr 2.6.1
* jQuery 1.8
* added SASS CSS, maximized CSS, compressed CSS
* PIE.js/.htc 1.0.0
* removed polyfills.js
* updated plugins.js
* removed iphone4.css + MQ due to massive failure on HighRes MacBookPro
* updated grid CSS to minimized output
* updated ancient browser dialog

==================================================================

### version: 3.0-dev (2012-02-06)

* major updates from HTML5Boilerplate3.0
* CSS improvements:
	* no more forced scrollbars (fixes some issues with JS)
	* more robust .ir class
	* better default typo
	* removed default font-size, line-heights to provide more robust default
* Chromeframe now serving as static IE-CC instead of JS
* dropped defer attribute from JS in footer to avoid IE legacy bugs
* meta viewport update to prevent iOS scaling bug

**version: 3.0-dev** (2012-02-02)
* drop inuit.css support
* move GA to embed script
* updated plugins.js's devtools snippet
* updated MOdernizr tests
* updated CCs to be more granular
* removed favicons (should always be in root)
* improve ChromeFrame
* updated mobile viewport tag
* initial MODX-package release

==================================================================

### version: 2.5-dev (2012-01-11)

* updated htaccess to work with MODX
* optimized GA snippet to work asynchron

### version: 2.5-dev (2011-12-21)

* change paths
* change dirs for a components compliant system
* updated local jQuery

(2011-12-16)
* fixed a script error

(2011-12-05)
* updated htaccess
* updated css classes from h5bp
* changed initial font values
* added notice for offline manifest
* update Modernizr to 2.1pre
* update accessify and update GA snippet
* update PIE and move
* Remove yep nope and change modx-path-var
* change clearfix for i.e.

(2011-09-20)
* fixes #71 SEO title tag improvement

(2011-09-12)
* Correct Expires header to `application/x-font-ttf
* jQuery free version of accessify.js
* update to jQuerry 1.6.3
* added new console api methods to console.log protection

(2011-08-14)
* enabled gzip for favicon

(2011-08-10)
* minified plugins.js basic javascripts

(2011-07-18)
* updated / changed icons
* added helper selector [hidden] to helper classes

(2011-07-13)
* some fix to target table-buttons
* 320up concept for grids
* edited the wiki (github)

(2011-07-10)
* some changes to responsive media-queries
* added max-width for responsive images
* added some basic default styles for mobile devices
* added inuit.css framework (this differs completely in usage as it provides all defualt styles etc.)

(2011-07-01)
* update to jQuery 1.6.2
* Chrome Frame update to 1.0.3
* removed print style duplicate-style
* move to responsive media-queries (test)

(2011-06-27)
* fixed #62: added <svg> overflow fix for IE9 / Add {cursor:pointer} to <label> / Group <img> and <svg> rules in an 'embedded content' section of CSS file
* fixed #63: <input type=search> then you're getting a search input WARNING: is unstylable in webkit now.
* fixed #61: move x-ua to htacess to not break validation and to not let ie fall into compat-mode
* added Chrome frame for IE6
* fixed #54: added license information.
* quick fix on 978px grid
* changes to README
* fixed #64: Modernizr update to 2.0.6
* fixed #53: now using own icons + added iPad retina
* updated icon-queries

(2011-06-21)
* updated webfontloadenhancer to v1.1 #58
* change from reset.css to normalize.css #50

(2011-06-10)
* fixed #41

(2011-06-09)
* split into Revo and Evo repository

(2011-05-17)
* updated to jQuery 1.6.1
* updated to PIE.htc (1.0beta4)

(2011-05-02)
* updated style.css with some minor css-fixes
* updated site_header.html: removed robots-info, etc.
* fixed #25 (ht.access-file)
* updated to jQuery 1.6

(2011-04-11)
* updated to jQuery 1.5.2

(2011-03-29)
+ added box-sizing CSS3 property to .container for small screens

(2011-03-28)
* fixed #22

(2011-03-24)
* improved yepnopejs-load of scripts.js and plugins.js
* fixed an error with scripts.js and plugins.js load-order

1.3 (2011-03-22)
* #19: moved PIE.htc to template folder
* #17: improved IE CC for latest engine
* #8: improved meta-author tag

1.2 (2011-03-19)
+ added accessifyhtml5.js to plugins.js ( https://github.com/yatil/accessifyhtml5.js ) [Issue: #13]
+ added CSS3PIE for IE-CSS3-properties [Issue: #5]
- kill handheld.css (which already hadn't been referenced by me in <head> - oops) [Issue: #15]
* improved setup docs (sorry folks, no real documentation before 1.5 as it needs a package for official RTFM in my eyes) [Issue: #12]

1.1.2 (2011-03-18)
+ added support for 987px "the simpler grid" system

1.1.1 (2011-03-11)
* added a fix for Android 2.2/2.3 browsers that prevent loading of @media-queries.

1.1
* applied some changes of HTML5Boilerplate v1.0rcstripped
	* HTML changes (better performance)
	* structral improvements
	- less code, less files
	+ humans.txt
* change from control.js (http://yepnopejs.com/) to yepnope.js (better integration with modernizr, easier to use)
* changes in modernizr library (only basic html5 support, touch events, full css3, HTML5Shim + Modernizr.load/yepnope.js) / revert to modernizr 1.7
* jQuery 1.5.1 update
+ added more apple-touch-icon examples for all i-touch-devices

1.0.2
+ added Canonical Tag for Multi-Domain setup
* changed Charset from "utf-8" to MODX-own "++modx_charset:lcase"
* changed meta-author to "publishedby" output from MODX
[Thanks to Romain from 'modxcms.com/forums']

1.0.1
+ added CSSGrid (1140px) as optional Stylesheet / site_header

1.0		initial commit
