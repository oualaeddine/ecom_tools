<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v9.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/ar_AR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="118028346695107"
     logged_in_greeting="السلام عليكم, هل يمكنني مساعدتك؟"
     logged_out_greeting="السلام عليكم, هل يمكنني مساعدتك؟"
>
</div>
