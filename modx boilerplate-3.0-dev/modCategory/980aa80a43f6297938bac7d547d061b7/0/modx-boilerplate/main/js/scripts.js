// load all inline scripts here

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