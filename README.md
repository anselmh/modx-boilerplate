## "MODX Boilerplate" is a HTML5/CSS3/jQuery based frontend template for further usage.

-----------------------------------------------------------------------------------------------------------

Please check all these files for changes and consider to not overwrite your own settings / changes / code! Be sure to check all important files before replacing them! I do not (and cannot) give warranty for that…

-----------------------------------------------------------------------------------------------------------

This template can be used with MODX CMF Revolution and is thought as a basic rock solid HTML5 website template. It has some speed improvements, fallbacks for old browsers and IE.

-----------------------------------------------------------------------------------------------------------

NOTE:  
It is not a direct clone of the original HTML5Boilerplate by Paul Irish. I've stripped some content which is not needed and implemented some other speedy scripts.

-----------------------------------------------------------------------------------------------------------

## HOW TO USE THE RIGHT THINGS:

If you want to use a Grid system, please take the files of the "main-grid" folder.

-----------------------------------------------------------------------------------------------------------

## WIKI / additional INSTRUCTIONS:

PLEASE NOTE THAT WE NOW HAVE A WIKI ON GITHUB: https://github.com/anselmh/modx-boilerplate/wiki

-----------------------------------------------------------------------------------------------------------

## SETUP:

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

## UPDATE instructions:

You can update the package manually. Download the new package and unpack it first.
You can override all files (no guarantee, please check if you've change one of them first) but not the following ones:
- site_header.html
- site_footer.html
- site_template.html
- all CSS-files
- js/scripts.js and js/plugins.js (if you use custom plugins in here)

Please check all these files for changes and consider to not overwrite your own settings / changes / code!!!
Be sure to check all important files before replacing them! I do not (and cannot) give warranty for that…

## IMPORTANT NOTICES FOR DEVELOPMENT:

- If you need more than basic HTML5 support enabling with modernizr please pack your own: http://modernizr.github.com/Modernizr/2.0-beta/ I only applied Audio,Cideo,Canvas,appCache,postMessage,InputTypes,InputAttributes.  No GeolocAPI,SVG,WebGL, SMIL support is enabled, too.
- for how-to use the modernizr please read this: http://blogs.sitepoint.com/2011/03/08/regressive-enhancement-with-modernizr-and-yepnope/
+ added monderizr blog entry

## CREDITS GO TO:

ALL supporters and contributors of the great HTML5Boilerplate:
- https://github.com/h5bp/html5-boilerplate for the initial base and idea
- https://github.com/modernizr for Modernizr
- Anselm Hannemann, http://anselm-hannemann.com/

## BUGS and FEATURE REQUESTS:

Please file all bugs, improvements or feature-requests in GitHub Issue Tracker! Thank you!