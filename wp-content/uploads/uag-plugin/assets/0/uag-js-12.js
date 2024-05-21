document.addEventListener("DOMContentLoaded", function(){ var ssLinksParent = document.querySelector( '.uagb-block-1814e098' );
ssLinksParent?.addEventListener( 'keyup', function ( e ) {
var link = e.target.closest( '.uagb-ss__link' );
if ( link && e.keyCode === 13 ) {
	handleSocialLinkClick( link );
}
});

ssLinksParent?.addEventListener( 'click', function ( e ) {
var link = e.target.closest( '.uagb-ss__link' );
if ( link ) {
	handleSocialLinkClick( link );
}
});

function handleSocialLinkClick( link ) {
var social_url = link.dataset.href;
var target = "";
if ( social_url == "mailto:?body=" ) {
	target = "_self";
}
var request_url = "";
if ( social_url.indexOf("/pin/create/link/?url=") !== -1 ) {
	request_url = social_url + encodeURIComponent( window.location.href ) + "&media=" + '';
} else {
	request_url = social_url + encodeURIComponent( window.location.href );
}
window.open( request_url, target );
}
window.addEventListener( 'load', function() {
	UAGBCountdown.init( '.uagb-block-10d8447e', {"block_id":"10d8447e","endDateTime":"2024-07-11T12:55:58.000Z","showDays":true,"showHours":true,"showMinutes":true,"isFrontend":true,"timerEndAction":"zero","redirectURL":""} );
});
 });