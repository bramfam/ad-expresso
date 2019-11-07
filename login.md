Try this:


<a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.manojyadav.co.in" target="_blank">
    Share on Facebook
</a>


jQuery
```js
$(document).ready(function() {
    $('.fb-share').click(function(e) {
        e.preventDefault();
        window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        return false;
    });
});
```
Demo Link

Example Using Facebook JavaScript SDK

HTML

<a href="#" class="fb-share">Share on Facebook</a>
<div id="fb-root"></div>

JavaScript & jQuery

```js
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
        return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

window.fbAsyncInit = function() {
    FB.init({
        appId: '409742669131720',  // Change appId 409742669131720 with your Facebook Application ID
        status: true,
        xfbml: true,
        cookie: true
    });
};

$(document).ready(function() {
    $('.fb-share').click(function() {
        FB.ui({
            method: 'feed',
            name: 'Manoj Yadav',
            link: 'http://stackoverflow.com/users/2502457/manoj-yadav',
            picture: 'https://www.gravatar.com/avatar/119a8e2d668922c32083445b01189d67',
            description: 'Manoj Yadav from Mumbai, India'
        });
    });
});
```


To use the Facebook JavaScript SDK you will need to create a Facebook App and replace appId 409742669131720 with your appId
```js
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});```