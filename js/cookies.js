var options = {
    title: '&#x1F36A; Accept Cookies & Privacy Policy?',
    message: 'This website uses cookies to ensure you get the best experience on our website.',
    delay: 600,
    onAccept: function(){
        var myPreferences = $.fn.ihavecookies.cookie();
        console.log('Yay! The following preferences were saved...');
        console.log(myPreferences);
    },
    acceptBtnLabel: 'Accept Cookies',
    cookieTypesTitle: 'Select which cookies you want to accept',
    fixedCookieTypeLabel: 'Essential',
    fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
}

$(document).ready(function() {
    $('body').ihavecookies(options);

    if ($.fn.ihavecookies.preference('marketing') === true) {
        console.log('This should run because marketing is accepted.');
    }

    $('#ihavecookiesBtn').on('click', function(){
        $('body').ihavecookies(options, 'reinit');
    });
});