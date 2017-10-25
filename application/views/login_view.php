<!DOCTYPE html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie linen"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie linen" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie linen" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie9 linen" lang="en"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)]><!--><html class="no-js linen" lang="en"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>DGI</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- http://davidbcalhoun.com/2010/viewport-metatag -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ and http://darkforge.blogspot.fr/2010/05/customize-android-browser-scaling-with.html -->
	<meta name="viewport" content="user-scalable=0, initial-scale=1.0, target-densitydpi=115">

	<!-- For all browsers -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/reset.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colors.css?v=1">
	<link rel="stylesheet" media="print" href="<?php echo base_url();?>assets/css/print.css?v=1">
	<!-- For progressively larger displays -->
	<link rel="stylesheet" media="only all and (min-width: 480px)" href="<?php echo base_url();?>assets/css/480.css?v=1">
	<link rel="stylesheet" media="only all and (min-width: 768px)" href="<?php echo base_url();?>assets/css/768.css?v=1">
	<link rel="stylesheet" media="only all and (min-width: 992px)" href="<?php echo base_url();?>assets/css/992.css?v=1">
	<link rel="stylesheet" media="only all and (min-width: 1200px)" href="<?php echo base_url();?>assets/css/1200.css?v=1">
	<!-- For Retina displays -->
	<link rel="stylesheet" media="only all and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="<?php echo base_url();?>assets/css/2x.css?v=1">

	<!-- Additional styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles/form.css?v=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles/switches.css?v=1">

	<!-- Login pages styles -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/login.css?v=1">

	<!-- JavaScript at bottom except for Modernizr -->
	<script src="<?php echo base_url();?>assets/js/libs/modernizr.custom.js"></script>

	<!-- For Modern Browsers -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicons/favicon.png">
	<!-- For everything else -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicons/favicon.ico">

	<!-- iOS web-app metas -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- iPhone ICON -->
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/favicons/apple-touch-icon.png" sizes="57x57">
	<!-- iPad ICON -->
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/favicons/apple-touch-icon-ipad.png" sizes="72x72">
	<!-- iPhone (Retina) ICON -->
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/favicons/apple-touch-icon-retina.png" sizes="114x114">
	<!-- iPad (Retina) ICON -->
	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/img/favicons/apple-touch-icon-ipad-retina.png" sizes="144x144">

	<!-- iPhone SPLASHSCREEN (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/img/splash/iphone.png" media="(device-width: 320px)">
	<!-- iPhone (Retina) SPLASHSCREEN (640x960) -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/img/splash/iphone-retina.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
	<!-- iPhone 5 SPLASHSCREEN (640×1096) -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/img/splash/iphone5.png" media="(device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
	<!-- iPad (portrait) SPLASHSCREEN (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/img/splash/ipad-portrait.png" media="(device-width: 768px) and (orientation: portrait)">
	<!-- iPad (landscape) SPLASHSCREEN (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/img/splash/ipad-landscape.png" media="(device-width: 768px) and (orientation: landscape)">
	<!-- iPad (Retina, portrait) SPLASHSCREEN (2048x1496) -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/img/splash/ipad-portrait-retina.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2)">
	<!-- iPad (Retina, landscape) SPLASHSCREEN (1536x2008) -->
	<link rel="apple-touch-startup-image" href="<?php echo base_url();?>assets/img/splash/ipad-landscape-retina.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 2)">

	<!-- Microsoft clear type rendering -->
	<meta http-equiv="cleartype" content="on">
</head>

<body>

<div id="container">

	<hgroup id="login-title" class="large-margin-bottom">
		<h1 class="login-title-image">DGI</h1>
		<h5>&copy; DIRECTION GENERALE DES IMPOTS</h5>
	</hgroup>

	<div id="form-block" class="scratch-metal">
		<form method="post" action="" id="form-login" class="input-wrapper blue-gradient glossy" title="Login">
			<ul class="inputs black-input large">
				<!-- The autocomplete="off" attributes is the only way to prevent webkit browsers from filling the inputs with yellow -->
				<li><span class="icon-user mid-margin-right"></span>
					<input type="text" name="username" id="login" value="" class="input-unstyled" placeholder="Nom d'utilisateur" autocomplete="off">
				</li>
				<li><span class="icon-lock mid-margin-right"></span>
					<input type="password" name="password" id="pass" value="" class="input-unstyled" placeholder="Mot de passe" autocomplete="off">
				</li>
			</ul>

			<p class="button-height align-center">

				<button type="submit" class="button glossy green-gradient" id="login">Connexion</button>
				<a href="<?php echo base_url('register')?>" class="button glossy grey-gradient" style="width: 80px;">Enregistrer</a>
			</p>
		</form>
	</div>
<br><br>


</div>




<!-- JavaScript at the bottom for fast page loading -->

<!-- Scripts -->
<script src="<?php echo base_url();?>assets/js/libs/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>assets/js/setup.js"></script>

<!-- Template functions -->
<script src="<?php echo base_url();?>assets/js/developr.input.js"></script>
<script src="<?php echo base_url();?>assets/js/developr.message.js"></script>
<script src="<?php echo base_url();?>assets/js/developr.notify.js"></script>
<script src="<?php echo base_url();?>assets/js/developr.tooltip.js"></script>

<script>

	$(document).ready(function()
	{
		/*
		 * JS login effect
		 * This script will enable effects for the login page
		 */
		// Elements
		var doc = $('html').addClass('js-login'),
				container = $('#container'),
				formBlock = $('#form-block'),

		// If layout is centered
				centered;

		/******* EDIT THIS SECTION *******/

		/*
		 * AJAX login
		 * These functions will handle the login process through AJAX
		 */
		$('#form-login').submit(function(event)
		{
			// Values
			var login = $.trim($('#login').val()),
					pass = $.trim($('#pass').val());

			// Check inputs
			if (login.length === 0)
			{
				// Display message
				displayError('Veuillez entrer votre identifiant.');
				return false;
			}
			else if (pass.length === 0)
			{
				// Remove empty login message if displayed
				formBlock.clearMessages('Veuillez entrer votre identifiant.');

				// Display message
				displayError('Veuillez entrer votre mot de passe.');
				return false;
			}
			else
			{
				// Remove previous messages
				formBlock.clearMessages();

				// Show progress
				displayLoading('Vérification des informations...');

				// Stop normal behavior
				event.preventDefault();

				 // This is where you may do your AJAX call, for instance:
				 $.ajax({
					 	method: 'POST',
						url: '<?php echo base_url("logmein"); ?>',
				 		data: {
				  			username:	login,
				  			password:	pass
				  		},
				  		success: function(data)
				  		{
				  			console.log(data);

							if (data.logged_in)
				  			{
								if(data.status == 'active') {


									// Simulate server-side check
									setTimeout(function() {
										document.location.href = './'
									}, 2000);

									if (data.account_type == 'Admin')
										document.location.href = '<?php echo site_url('cardtable'); ?>';
									else
										document.location.href = '<?php echo site_url('dashboard'); ?>';
								}
								else
								{
									//account no-active
									formBlock.clearMessages();
									displayError(
											'Votre compte n\'est pas encore actif.' +
											'<br>' +
											'Cliquez ici <a class="button tiny blue-gradient" href="<?php echo base_url();?>email_me_again/'+data.email+'/'+data.nif+'/'+ data.access_code+'">LINK</a> pour recevoir un courriel contenant des instructions sur l\'activation de votre compte.'
									);

								}
				  			}
				 			else
							{
				 				formBlock.clearMessages();
				  				displayError('Mot de passe ou utilisateur non valide, veuillez réessayer.');


							}
				  		},
				 		error: function()
				  		{
				  			formBlock.clearMessages();
				  			displayError('Erreur lors du contact avec le serveur, veuillez réessayer.');
				  		}
				  });


			}
		});

		/******* END OF EDIT SECTION *******/

		// Handle resizing (mostly for debugging)
		function handleLoginResize()
		{
			// Detect mode
			centered = (container.css('position') === 'absolute');

			// Set min-height for mobile layout
			if (!centered)
			{
				container.css('margin-top', '');
			}
			else
			{
				if (parseInt(container.css('margin-top'), 10) === 0)
				{
					centerForm(false);
				}
			}
		};

		// Register and first call
		$(window).on('normalized-resize', handleLoginResize);
		handleLoginResize();

		/*
		 * Center function
		 * @param boolean animate whether or not to animate the position change
		 * @param string|element|array any jQuery selector, DOM element or set of DOM elements which should be ignored
		 * @return void
		 */
		function centerForm(animate, ignore)
		{
			// If layout is centered
			if (centered)
			{
				var siblings = formBlock.siblings(),
						finalSize = formBlock.outerHeight();

				// Ignored elements
				if (ignore)
				{
					siblings = siblings.not(ignore);
				}

				// Get other elements height
				siblings.each(function(i)
				{
					finalSize += $(this).outerHeight(true);
				});

				// Setup
				container[animate ? 'animate' : 'css']({ marginTop: -Math.round(finalSize/2)+'px' });
			}
		};

		// Initial vertical adjust
		centerForm(false);

		/**
		 * Function to display error messages
		 * @param string message the error to display
		 */
		function displayError(message)
		{
			// Show message
			var message = formBlock.message(message, {
				append: false,
				arrow: 'bottom',
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

		/**
		 * Function to display loading messages
		 * @param string message the message to display
		 */
		function displayLoading(message)
		{
			formBlock.clearMessages();

			// Show message
			var message = formBlock.message('<strong>'+message+'</strong>', {
				append: false,
				arrow: 'bottom',
				classes: ['blue-gradient', 'align-center'],
				stripes: true,
				darkStripes: false,
				closable: false,
				animate: false					// We'll do animation later, we need to know the message height first
			});

			// Vertical centering (where we need the message height)
			centerForm(true, 'fast');

			// Watch for closing and show with effect
			message.on('endfade', function(event)
			{
				// This will be called once the message has faded away and is removed
				centerForm(true, message.get(0));

			}).hide().slideDown('slow');
		}
	});



</script>

</body>
</html>