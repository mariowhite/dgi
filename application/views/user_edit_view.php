<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Developr</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- http://davidbcalhoun.com/2010/viewport-metatag -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ and http://darkforge.blogspot.fr/2010/05/customize-android-browser-scaling-with.html -->
    <meta name="viewport" content="user-scalable=0, initial-scale=1.0, target-densitydpi=115">

    <!-- For all browsers -->
    <link rel="stylesheet" href="../../assets/css/reset.css?v=1">
    <link rel="stylesheet" href="../../assets/css/style.css?v=1">
    <link rel="stylesheet" href="../../assets/css/colors.css?v=1">
    <link rel="stylesheet" media="print" href="../../assets/css/print.css?v=1">
    <!-- For progressively larger displays -->
    <link rel="stylesheet" media="only all and (min-width: 480px)" href="../../assets/css/480.css?v=1">
    <link rel="stylesheet" media="only all and (min-width: 768px)" href="../../assets/css/768.css?v=1">
    <link rel="stylesheet" media="only all and (min-width: 992px)" href="../../assets/css/992.css?v=1">
    <link rel="stylesheet" media="only all and (min-width: 1200px)" href="../../assets/css/1200.css?v=1">
    <!-- For Retina displays -->
    <link rel="stylesheet" media="only all and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="../../assets/css/2x.css?v=1">

    <!-- Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- Additional styles -->
    <link rel="stylesheet" href="../../assets/css/styles/form.css?v=1">
    <link rel="stylesheet" href="../../assets/css/styles/switches.css?v=1">
    <link rel="stylesheet" href="../../assets/css/styles/table.css?v=1">

    <!--glDatePicker -->
    <link rel="stylesheet" href="../../assets/js/libs/glDatePicker/developr.fixed.css?v=1">

    <!-- jQuery Form Validation -->
    <link rel="stylesheet" href="../../assets/js/libs/formValidator/developr.validationEngine.css?v=1">

    <!-- Scripts -->

    <script src="../../assets/js/libs/jquery-1.10.2.min.js"></script>


    <!-- DataTables -->
    <link rel="stylesheet" href="../../assets/js/libs/DataTables/jquery.dataTables.css?v=1">

    <!-- JavaScript at bottom except for Modernizr -->
    <script src="../../assets/js/libs/modernizr.custom.js"></script>

    <!-- For Modern Browsers -->
    <link rel="shortcut icon" href="../../assets/img/favicons/favicon.png">

    <!-- For everything else -->
    <link rel="shortcut icon" href="../../assets/img/favicons/favicon.ico">

    <!-- iOS web-app metas -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- iPhone ICON -->
    <link rel="apple-touch-icon" href="../../assets/img/favicons/apple-touch-icon.png" sizes="57x57">
    <!-- iPad ICON -->
    <link rel="apple-touch-icon" href="../../assets/img/favicons/apple-touch-icon-ipad.png" sizes="72x72">
    <!-- iPhone (Retina) ICON -->
    <link rel="apple-touch-icon" href="../../assets/img/favicons/apple-touch-icon-retina.png" sizes="114x114">
    <!-- iPad (Retina) ICON -->
    <link rel="apple-touch-icon" href="../../assets/img/favicons/apple-touch-icon-ipad-retina.png" sizes="144x144">

    <!-- iPhone SPLASHSCREEN (320x460) -->
    <link rel="apple-touch-startup-image" href="../../assets/img/splash/iphone.png" media="(device-width: 320px)">
    <!-- iPhone (Retina) SPLASHSCREEN (640x960) -->
    <link rel="apple-touch-startup-image" href="../../assets/img/splash/iphone-retina.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
    <!-- iPhone 5 SPLASHSCREEN (640×1096) -->
    <link rel="apple-touch-startup-image" href="../../assets/img/splash/iphone5.png" media="(device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
    <!-- iPad (portrait) SPLASHSCREEN (748x1024) -->
    <link rel="apple-touch-startup-image" href="../../assets/img/splash/ipad-portrait.png" media="(device-width: 768px) and (orientation: portrait)">
    <!-- iPad (landscape) SPLASHSCREEN (768x1004) -->
    <link rel="apple-touch-startup-image" href="../../assets/img/splash/ipad-landscape.png" media="(device-width: 768px) and (orientation: landscape)">
    <!-- iPad (Retina, portrait) SPLASHSCREEN (2048x1496) -->
    <link rel="apple-touch-startup-image" href="../../assets/img/splash/ipad-portrait-retina.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2)">
    <!-- iPad (Retina, landscape) SPLASHSCREEN (1536x2008) -->
    <link rel="apple-touch-startup-image" href="../../assets/img/splash/ipad-landscape-retina.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 2)">

    <!-- Microsoft clear type rendering -->
    <meta http-equiv="cleartype" content="on">
</head>
<body>

<!-- Main content -->
<section role="main" id="main">

    <hgroup id="main-title" class="thin">
        <h1>Edit user:</h1>
    </hgroup>

    <div class="with-padding">
        <form method="post" id="update_user">
            <div class="columns">





<p class="inline-large-label button-height">
    <label for="name" class="label">Name: <small>(255 chars max.)</small></label>

    <input type="text" name="name" id="name" class="input small-margin-right validate[required]" value="">

                                <span class="info-spot">
                                    <span class="icon-info-round"></span>
                                    <span class="info-bubble">
                                        Enter your name, special characters are not allowed.
                                    </span>
                                </span>
</p>

<p class="inline-large-label button-height">
    <label for="lastname" class="label">Last Name: <small>(255 chars max.)</small></label>

    <input type="text" name="lastname" id="lastname" class="input small-margin-right validate[required]" value="">

                                <span class="info-spot">
                                    <span class="icon-info-round"></span>
                                    <span class="info-bubble">
                                        Enter your last name, special characters are not allowed.
                                    </span>
                                </span>
</p>

<p class="inline-large-label button-height">
    <label for="email" class="label">Email <small>(255 chars max.)</small></label>

    <input type="text" name="email" id="email" class="input small-margin-right validate[required,custom[email]]" value="">

                                <span class="info-spot">
                                    <span class="icon-info-round"></span>
                                    <span class="info-bubble">
                                        Enter your email: example@domain.com
                                    </span>
                                </span>
</p>

<p class="inline-large-label button-height">
    <label for="username" class="label">Username: <small>(255 chars max.)</small></label>

    <input type="text" name="username" id="username" class="input small-margin-right validate[required,custom[onlyLetterNumber]]" value="">

                                <span class="info-spot">
                                    <span class="icon-info-round"></span>
                                    <span class="info-bubble">
                                        Create an username easy to remember.
                                    </span>
                                </span>
</p>

<p class="inline-large-label button-height">
    <label for="password" class="label">Password: <small>(255 chars max.)</small></label>

    <input type="password" name="password" id="password" class="input small-margin-right validate[required]" value="">

                                <span class="info-spot">
                                    <span class="icon-info-round"></span>
                                    <span class="info-bubble">
                                       Create your password, something easy to remember and hard for other to guess.
                                    </span>
                                </span>
</p>

<p class="inline-large-label button-height">
    <label for="password2" class="label">Repeat-Password: <small>(255 chars max.)</small></label>

    <input type="password" name="password2" id="password2" class="input small-margin-right validate[required]" value="">

                                <span class="info-spot">
                                    <span class="icon-info-round"></span>
                                    <span class="info-bubble">
                                        Repeat you password.
                                    </span>
                                </span>
</p>

<p class="inline-large-label button-height">
    <label for="type" class="label">Type of user: </label>


    <select class="select blue-gradient check-list" style="width: 180px;" name="type" id="type">
        <option value="Administrator">Administrator</option>
        <option value="User">User</option>


    </select>



</p>


                <div class="button-height">

                    <button type="submit" class="button glossy mid-margin-right">
                        <span class="button-icon"><span class="icon-tick"></span></span>
                        Save
                    </button>

                    <button type="reset" class="button glossy">
                        <span class="button-icon red-gradient"><span class="icon-cross-round"></span></span>
                        Cancel
                    </button>


                </div>

<div id="form-block"></div>

                </div>
            </form>
        </div>
    </section>



<!-- jQuery Form Validation -->
<script src="../../assets/js/libs/formValidator/jquery.validationEngine.js?v=1"></script>
<script src="../../assets/js/libs/formValidator/languages/jquery.validationEngine-fr.js?v=1"></script>
<script src="../../assets/js/developr.message.js"></script>

<script src="../../assets/js/setup.js"></script>
<!-- Template functions -->
<script src="../../assets/js/developr.input.js"></script>

<script src="../../assets/js/developr.navigable.js"></script>
<script src="../../assets/js/developr.notify.js"></script>
<script src="../../assets/js/developr.scroll.js"></script>
<script src="../../assets/js/developr.tooltip.js"></script>
<script src="../../assets/js/developr.table.js"></script>

<!-- Plugins -->
<script src="../../assets/js/libs/jquery.tablesorter.min.js"></script>
<script src="../../assets/js/libs/DataTables/jquery.dataTables.min.js"></script>

<script>



    var doc = $('html').addClass('js-login'),
            container = $('#container'),
            formBlock = $('#form-block');


    $("#update_user").validationEngine();

    /**
     * Function to display error messages
     * @param string message the error to display
     */
    function displayError(message)
    {
        // Show message
        var message = formBlock.message(message, {
            append: false,
            arrow: 'top',
            classes: ['red-gradient'],
            animate: false					// We'll do animation later, we need to know the message height first
        });

        // Vertical centering (where we need the message height)
        centerForm(true, 'fast');

        // Watch for closing and show with effect
        message.on('endfade', function(event)
        {
            // This will be called once the message has faded away and is removed
            centerForm(true, message.get(0));

        }).hide().slideDown('fast');
    }



    $('#update_user').on('submit', function(e){

            update_user();


    });





</script>
</body>
</html>