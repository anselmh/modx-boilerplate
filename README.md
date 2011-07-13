"MODX Boilerplate" is a HTML5/CSS3/jQuery based frontend template for further usage.

This package can be used with MODX CMF Revolution and is thought as a basic rock solid HTML5 website template. It has some speed improvements, fallbacks for old browsers and IE.

NOTE:
It is not a direct clone of the original HTML5Boilerplate by Paul Irish. I've stripped some content which is not needed and implemented some other speedy scripts.

CONTENT:

- HTML5 Boilerplate HTML Body
- jQuery 1.6.2
- basic CSS with normmalize.css
- .htaccess File (MODX + Boilerplate)
- favicon + apple touch icons
- robots.txt for SE-settings
- humans.txt for credits
- Modernizr with HTML5Shim + Modernizr.load/yepnope.js (JS-Loadhelper)
- webfontloadenhancer by Michael van der Laar
- CSS Grid 1140px (fluid)
- CSS Grid 978px (fixed)
- Inuit CSS (fluid, ready-to-start)

HOW TO USE THE RIGHT THINGS:

If you want to use one of the Grid systems, please take the files of the "main_fluid_grid" / "main_978_grid" folder and replace the original ones with them.
Important: Grid systems aren't optimized for the 320up concept. You have to adapt this from the default css.


-----------------------------------------------------------------------------------------------------------
WIKI / additional INSTRUCTIONS:

PLEASE NOTE THAT WE NOW HAVE A WIKI ON GITHUB: https://github.com/smooth-graphics/modx-boilerplate/wiki
-----------------------------------------------------------------------------------------------------------



SETUP:

1. Download all files and upload to your server in right folder structure:
   - .htaccess/ICO/Touch-Icons and humans.txt, PIE.htc into root directory of your webhosting setup
   - put the other files into your /assets/... structure as you need them or as it's given in my folder structure.
   - Please: If you change template folder name check to change template name in chunks, too!!! 
2. Customize all paths, URLs and App-IDs in the template files
3. Create the following new chunks in MODX Manager:
	- "site_header"
	- "site_footer"
   and paste code of the "site_header.html" / "site_footer.html" into.
4. Create the MODX template in MODX-Manager and paste code from "site_template.html"
5. Replace the Revolution .htaccess file with this one and customize it
6. Customize all the other files! Start coding your template layout. You can use Modernizr to add browser specific behavior!


UPDATE instructions:

You can update the package manually. Download the new package and unpack it first.
You can override all files (no guarantee, please check if you've change one of them first) but not the following ones:
- site_header.html
- site_footer.html
- site_template.html
- all CSS-files
- js/scripts.js and js/plugins.js (if you use custom plugins in here)
Please check all these files for changes and consider to not overwrite your own settings / changes / code!!!
Be sure to check all important files before replacing them! I do not (and cannot) give warranty for that…


IMPORTANT NOTICES FOR DEVELOPMENT:

- yepnope.js always executes things in the order they are listed. This is very important to know because it can hurt the speed of your website critically!

- If you need more than basic HTML5 support enabling with modernizr please pack your own: http://modernizr.github.com/Modernizr/2.0-beta/ I only applied Audio,Cideo,Canvas,appCache,postMessage,InputTypes,InputAttributes.  No GeolocAPI,SVG,WebGL, SMIL support is enabled, too.
- for how-to use the modernizr please read this: http://blogs.sitepoint.com/2011/03/08/regressive-enhancement-with-modernizr-and-yepnope/
+ added monderizr blog entry
- If you need more than basic HTML5 support enabling with modernizer please pack your own: http://modernizr.github.com/Modernizr/2.0-beta/ I only applied Audio,Cideo,Canvas,appCache,postMessage,InputTypes,InputAttributes.  No GeolocAPI,SVG,WebGL, SMIL support is enabled, too.

- If you want to add CSS3 behavior to IE<9 you can use the PIE.htc. You just have to add 
	behavior: url(path/to/PIE.htc);
  to your css properties. See here for more info: http://css3pie.com/documentation/getting-started/

- I provided support for different devices with @media-queries. Please consider to either use all that stylesheet links in "site_header.html" or remove them to avoid dead links!


CREDITS GO TO:

ALL supporters and contributors of the great HTML5Boilerplate:
- http://html5boilerplate.com/
- special thanks to: Paul Irish and Divya Manian for all they've done with HTML5Boilerplate
- https://github.com/paulirish/html5-boilerplate for the initial base and idea
- https://github.com/modernizr for MOdernizr
- https://github.com/yatil for https://github.com/yatil/accessifyhtml5.js
- https://github.com/scottjehl for https://github.com/scottjehl/Respond
- the MODX Revolution team for the whole MODX system
- Anselm Hannemann, http://anselm.novolo.de/


BUGS and FEATURE REQUESTS:

Please file all bugs, improvements or feature-requests in GitHub Issue Tracker! Thank you!