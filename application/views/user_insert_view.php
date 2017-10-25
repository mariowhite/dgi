<!-- Title bar -->
<header role="banner" id="title-bar" xmlns="http://www.w3.org/1999/html">
    <h2>Insert New User</h2>
</header>

<!-- Button to open/hide menu -->
<a href="#" id="open-menu"><span>Menu</span></a>

<!-- Button to open/hide shortcuts -->
<a href="#" id="open-shortcuts"><span class="icon-thumbs"></span></a>

<!-- Main content -->
<section role="main" id="main">

    <hgroup id="main-title" class="thin">
        <h1>Add User:</h1>
    </hgroup>

    <div class="with-padding">
        <form method="post" id="adduser" action="<?php echo base_url();?>add_user">
            <div class="columns">

                    <div class="six-columns twelve-columns-tablet">


                        <h3 class="thin underline">Complete the information below:</h3>



                        <div class="field-block button-height float-right">

                            <button type="submit" class="button glossy mid-margin-right">
                                <span class="button-icon"><span class="icon-tick"></span></span>
                                Save
                            </button>

                            <button type="reset" class="button glossy">
                                <span class="button-icon red-gradient"><span class="icon-cross-round"></span></span>
                                Cancel
                            </button>


                        </div>



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

                        <div id="form-block"></div>



                    </div>


            </div>
        </form>
    </div>

</section>

<!-- jQuery Form Validation -->
<script src="<?php echo base_url();?>assets/js/libs/formValidator/jquery.validationEngine.js?v=1"></script>
<script src="<?php echo base_url();?>assets/js/libs/formValidator/languages/jquery.validationEngine-fr.js?v=1"></script>
<script src="<?php echo base_url();?>assets/js/developr.message.js"></script>

<script>



    var doc = $('html').addClass('js-login'),
        container = $('#container'),
        formBlock = $('#form-block');


        $("#adduser").validationEngine();

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

/*
        $('#adduser').on('submit', function(e){


        });

*/



</script>