CHANGELOG for MODX-Boilerplate


Version:

1.0		initial commit

1.0.1		
+ added CSSGrid (1140px) as optional Stylesheet / site_header

1.0.2
+ added Canonical Tag for Multi-Domain setup
* changed Charset from "utf-8" to MODX-own "++modx_charset:lcase"
* changed meta-author to "publishedby" output from MODX
[Thanks to Romain from 'modxcms.com/forums']

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

1.1.1 (2011-03-11)
* added a fix for Android 2.2/2.3 browsers that prevent loading of @media-queries.

1.1.2 (2011-03-18)
+ added support for 987px "the simpler grid" system

1.2 (2011-03-19)
+ added accessifyhtml5.js to plugins.js ( https://github.com/yatil/accessifyhtml5.js ) [Issue: #13]
+ added CSS3PIE for IE-CSS3-properties [Issue: #5]
- kill handheld.css (which already hadn't been referenced by me in <head> - oops) [Issue: #15]
* improved setup docs (sorry folks, no real documentation before 1.5 as it needs a package for official RTFM in my eyes) [Issue: #12]

1.3 (2011-03-22)
* #19: moved PIE.htc to template folder
* #17: improved IE CC for latest engine
* #8: improved meta-author tag

(2011-03-24)
* improved yepnopejs-load of scripts.js and plugins.js
* fixed an error with scripts.js and plugins.js load-order

(2011-03-28)
* fixed #22

(2011-03-29)
+ added box-sizing CSS3 property to .container for small screens

(2011-04-11)
* updated to jQuery 1.5.2

(2011-05-02)
* updated style.css with some minor css-fixes
* updated site_header.html: removed robots-info, etc.
* fixed #25 (ht.access-file)
* updated to jQuery 1.6

(2011-05-17)
* updated to jQuery 1.6.1
* updated to PIE.htc (1.0beta4)

(2011-06-09)
* split into Revo and Evo repository

(2011-06-10)
* fixed #41

(2011-06-21)
* updated webfontloadenhancer to v1.1 #58
* change from reset.css to normalize.css #50

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

(2011-07-01)
* update to jQuery 1.6.2
* Chrome Frame update to 1.0.3
* removed print style duplicate-style
* move to responsive media-queries (test)

(2011-07-10)
* some changes to responsive media-queries
* added max-width for responsive images
* added some basic default styles for mobile devices
* added inuit.css framework (this differs completely in usage as it provides all defualt styles etc.)

(2011-07-13)
* some fix to target table-buttons
* 320up concept for grids
* edited the wiki (github)