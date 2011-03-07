// load all inline scripts here

// Code for Google Analytics | Change UA-XXXXX-X to be your site's ID
var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));


// PIWIK Analytics  | Please setup for your own and change URL
var _paq = _paq || [];
(function(){
    var u=(("https:" == document.location.protocol) ? "https://www.domain.com/piwik" : "http://www.domain.com/piwik");
    _paq.push(['setSiteId','ID']); // set 'ID' to your Piwik's site ID. e.g: '1'
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['trackPageView']);
    var d=document,
        g=d.createElement('script'),
        s=d.getElementsByTagName('script')[0];
        g.type='text/javascript';
        g.defer=true;
        g.async=true;
        g.src=u+'piwik.js';
        s.parentNode.insertBefore(g,s);
})();


//Code for Facebook XBML implementation. Cut off if not needed. Please paste your own App-ID at 'AppID' to get it working
window.fbAsyncInit = function() {
	FB.init({appId: 'AppID', status: true, cookie: true,
	xfbml: true});
};
(function() {
	var e = document.createElement('script'); e.async = true;
	e.src = document.location.protocol +
	'//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);
}());
