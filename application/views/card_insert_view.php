
<!-- Title bar -->
<header role="banner" id="title-bar" xmlns="http://www.w3.org/1999/html">
    <h2>Ajouter une nouvelle carte</h2>
</header>

<!-- Button to open/hide menu -->
<a href="#" id="open-menu"><span>Menu</span></a>

<!-- Button to open/hide shortcuts -->
<a href="#" id="open-shortcuts"><span class="icon-thumbs"></span></a>

<!-- Main content -->
<section role="main" id="main">

    <hgroup id="main-title" class="thin">
        <h1>Ajouter une nouvelle carte:</h1>
    </hgroup>

    <div class="with-padding">


        <form class="columns" method="post" id="addcard" action="<?php echo base_url('add_card');?>">


            <div class="twelve-columns twelve-columns-tablet twelve-columns-mobile">

                <h3 class="thin underline">Complétez les informations ci-dessous:</h3>
            </div>

                <div class="four-columns twelve-columns-tablet twelve-columns-mobile">


                    <div class="block margin-bottom">
                        <h3 class="block-title blue-gradient glossy">Information Personnel</h3>

                        <div class="with-padding">



                            <p class="inline-large-label button-height">
                                <label for="nom" class="label">Nom:
                                    <small>(150 chars max.)</small>
                                </label>

                                <input type="text" name="nom" id="nom" class="input small-margin-right validate[required]" value="">

                                            <span class="info-spot">
                                                <span class="icon-info-round"></span>
                                                <span class="info-bubble">
                                                    Entrez votre NOM, les caractères spéciaux ne sont pas autorisés.
                                                </span>
                                            </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="prenom" class="label">Prenom:
                                    <small>(150 chars max.)</small>
                                </label>

                                <input type="text" name="prenom" id="prenom" class="input small-margin-right validate[required]"
                                       value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez votre PRENOM, les caractères spéciaux ne sont pas autorisés.
                                            </span>
                                        </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="nom_pere" class="label">Nom Père:
                                    <small>(100 chars max.)</small>
                                </label>

                                <input type="text" name="nom_pere" id="nom_pere" class="input small-margin-right validate[required]"
                                       value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez le NOM de votre père, les caractères spéciaux ne sont pas autorisés.
                                            </span>
                                        </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="prenom_pere" class="label">Prenom Père:
                                    <small>(100 chars max.)</small>
                                </label>

                                <input type="text" name="prenom_pere" id="prenom_pere" class="input small-margin-right validate[required]"
                                       value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez le PRENOM de votre père, les caractères spéciaux ne sont pas autorisés.
                                            </span>
                                        </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="nom_mere" class="label">Nom Mère:
                                    <small>(100 chars max.)</small>
                                </label>

                                <input type="text" name="nom_mere" id="nom_mere" class="input small-margin-right validate[required]"
                                       value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez le NOM de votre mère, les caractères spéciaux ne sont pas autorisés.
                                            </span>
                                        </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="prenom_mere" class="label">Prenom de la Mère:
                                    <small>(100 chars max.)</small>
                                </label>

                                <input type="text" name="prenom_mere" id="prenom_mere" class="input small-margin-right validate[required]" value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez le PRENOM de votre mère, les caractères spéciaux ne sont pas autorisés.
                                            </span>
                                        </span>
                            </p>


                        </div>

                    </div>


                </div>
                <div class="four-columns twelve-columns-tablet twelve-columns-mobile">


                    <div class="block margin-bottom">
                        <h3 class="block-title blue-gradient glossy">Adresse du contribuable</h3>

                        <div class="with-padding">

                            <p class="inline-large-label button-height">
                                <label for="commune" class="label">Commune / Localite:
                                    <small>(200 chars max.)</small>
                                </label>
                                <input type="text" name="commune" id="commune" class="input small-margin-right validate[required]" value="">

                                                        <span class="info-spot">
                                                            <span class="icon-info-round"></span>
                                                            <span class="info-bubble">
                                                                Entrez la Commune/Localite de votre résidence actuelle.
                                                            </span>
                                                        </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="quartier" class="label">Quartier: <small>(200 chars max.)</small></label>
                                <input type="text" name="quartier" id="quartier" class="input small-margin-right validate[required]" value="">

                                                        <span class="info-spot">
                                                            <span class="icon-info-round"></span>
                                                            <span class="info-bubble">
                                                                Entrez le Quartier de votre résidence actuelle.
                                                            </span>
                                                        </span>
                            </p>


                            <p class="inline-large-label button-height">
                                <label for="immeuble" class="label">Immeuble: <small>(200 chars max.)</small></label>
                                <input type="text" name="immeuble" id="immeuble" class="input small-margin-right validate[required]" value="">

                                                        <span class="info-spot">
                                                            <span class="icon-info-round"></span>
                                                            <span class="info-bubble">
                                                                Entrez l'immeuble de votre résidence actuelle.
                                                            </span>
                                                        </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="rue" class="label">Nom de la Rue: <small>(200 chars max.)</small></label>
                                <input type="text" name="rue" id="rue" class="input small-margin-right validate[required]" value="">

                                                        <span class="info-spot">
                                                            <span class="icon-info-round"></span>
                                                            <span class="info-bubble">
                                                                Entrez le Nom de la Rue de votre résidence actuelle.
                                                            </span>
                                                        </span>
                            </p>


                            <p class="inline-large-label button-height">
                                <label for="numero_rue" class="label">Numero Rue: <small>(10 chars max.)</small></label>
                                <input type="text" name="numero_rue" id="numero_rue" class="input small-margin-right validate[required]" value="">

                                                        <span class="info-spot">
                                                            <span class="icon-info-round"></span>
                                                            <span class="info-bubble">
                                                                Entrez le Numero Rue de votre résidence actuelle.
                                                            </span>
                                                        </span>
                            </p>

                            <p class="inline-large-label button-height">
                                <label for="numero_porte" class="label">Numero Porte: <small>(10 chars max.)</small></label>
                                <input type="text" name="numero_porte" id="numero_porte" class="input small-margin-right validate[required]" value="">

                                                        <span class="info-spot">
                                                            <span class="icon-info-round"></span>
                                                            <span class="info-bubble">
                                                                Entrez le Numero Porte de votre résidence actuelle.
                                                            </span>
                                                        </span>
                            </p>


                        </div>

                    </div>

                </div>

            <div class="four-columns twelve-columns-tablet twelve-columns-mobile">


                <div class="block margin-bottom">
                    <h3 class="block-title blue-gradient glossy">Date et lieu de naissance</h3>

                    <div class="with-padding">

                <p class="inline-large-label button-height">
                    <label for="date" class="label">Date de Naissance:
                        <small>(AAAA-MM-JJ)</small>
                    </label>

                        <span class="input" style="width: 80%">
							<span class="icon-calendar"></span>
							<input type="text" name="date" id="date" class="input-unstyled datepicker validate[required]" value="" style="width: 80%">
						</span>

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez votre Date de Naissance, format AAAA-MM-JJ.
                                            </span>
                                        </span>
                </p>

                <p class="inline-large-label button-height">
                    <label for="lieu" class="label">Lieu de Naissance:
                        <small>(255 chars max.)</small>
                    </label>

                    <input type="text" name="lieu" id="lieu" class="input small-margin-right validate[required]" value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez votre Lieu de Naissance, les caractères spéciaux ne sont pas autorisés.
                                            </span>
                                        </span>
                </p>

                        <p class="inline-large-label button-height">
                            <label for="nina" class="label">Nina:
                                <small>(50 chars max.)</small>
                            </label>

                            <input type="text" name="nina" id="nina" class="input small-margin-right validate[required]"
                                   value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez le Nina.
                                            </span>
                                        </span>
                        </p>



                    </div>
                    </div>

                <div class="block margin-bottom">
                    <h3 class="block-title blue-gradient glossy">Sexe et Situation Matrimoniale</h3>

                    <div class="with-mid-padding" style="padding-left: 20px!important;">
                        <p class="inline-large-label ">
                            <label for="sexe" class="label">Sexe: <small>Sélectionnez une option</small></label>


                            <select class="select blue-gradient check-list" style="width: 180px;" name="sexe" id="sexe">
                                <option value="M">M</option>
                                <option value="F">F</option>


                            </select>


                        </p>

                        <p class="inline-large-label ">
                            <label for="situation_matrimoniale" class="label">Situation Matrimoniale: <small>Sélectionnez une option</small></label>


                            <select class="select blue-gradient check-list" style="width: 180px;" name="situation_matrimoniale" id="situation_matrimoniale">
                                <option value="Marié(e)">Marié(e)</option>
                                <option value="Veuf(ve)">Veuf(ve)</option>
                                <option value="Séparé(e)">Séparé(e)</option>
                                <option value="Divorcé(e)">Divorcé(e)</option>
                                <option value="Célibataire">Célibataire</option>



                            </select>


                        </p>
                        </div>
                </div>
            </div>


            <div class="new-row-desktop six-columns twelve-columns-tablet twelve-columns-mobile">


                <div class="block margin-bottom">
                    <h3 class="block-title blue-gradient glossy">Autres informations</h3>

                    <div class="with-padding">

                        <p class="inline-large-label button-height">
                            <label for="telephone_mobile" class="label">Telephone Mobile:
                                <small>(15 chars max.)</small>
                            </label>

                            <input type="text" name="telephone_mobile" id="telephone_mobile" class="input small-margin-right validate[required]" style="width: 30%"
                                   value="">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Entrez le telephone mobile.
                                            </span>
                                        </span>
                        </p>

                        <p class="inline-large-label button-height">
                            <label for="profession" class="label">Profession:
                                <small>(250 chars max.)</small>
                            </label>

                            <input type="text" name="profession" id="profession" class="input small-margin-right validate[required]" value="" style="width: 90%">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Faire une description brève de votre profession.
                                            </span>
                                        </span>
                        </p>



                        <p class="inline-large-label button-height">
                            <label for="activite" class="label">Activité Principale:
                                <small>(250 chars max.)</small>
                            </label>

                            <input type="text" name="activite" id="activite" class="input small-margin-right validate[required]" value="" style="width: 90%">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Faire une description brève de votre Activité Principale.
                                            </span>
                                        </span>
                        </p>


                    </div>
                </div>

            </div>


            <div class="six-columns twelve-columns-tablet twelve-columns-mobile">


                <div class="block margin-bottom" style="min-height: 295px;">
                    <h3 class="block-title blue-gradient glossy">Numero d'identification fiscal</h3>

                    <div class="with-padding">

                        <p class="inline-large-label button-height">
                            <label for="nif" class="label">NIF:
                                <small>(255 chars max.)</small>
                            </label>

                            <input type="text" name="nif" id="nif" class="input small-margin-right validate[required]" value="" style="width: 70%">

                                        <span class="info-spot">
                                            <span class="icon-info-round"></span>
                                            <span class="info-bubble">
                                                Enter your name, special characters are not allowed.
                                            </span>
                                        </span>


                            <button class="button glossy small-margin-top small-margin-left float-right" id="generate">
                                <span class="button-icon"><span class="icon-tick"></span></span>
                                Generate
                            </button>



                        <p class="wrapped relative" style="height: 65px">
                            <span class="ribbon"><span class="ribbon-inner">Note!</span></span>
                                    <br>
                                Veuillez fournir votre numero d'identification fiscale.
                                    <br>
                                En cas de nouvel enregistrement, veuillez générer votre numéro.
                        </p>

                        </p>
                        </div>
                    </div>
                </div>


                <div class=" new-row-desktop four-columns twelve-columns-tablet twelve-columns-mobile">
                </div>

                <div class="four-columns twelve-columns-tablet twelve-columns-mobile align-center">



                        <button type="submit" class="button glossy mid-margin-right big">
                            <span class="button-icon"><span class="icon-tick"></span></span>
                            Save
                        </button>

                        <button id="close" class="button glossy big">
                            <span class="button-icon red-gradient"><span class="icon-cross-round"></span></span>
                            Cancel
                        </button>




                </div>

                <div class="four-columns twelve-columns-tablet twelve-columns-mobile">
                </div>













                <div id="form-block"></div>


        </form>

    </div>
</section>


<!-- jQuery Form Validation -->
<script src="<?php echo base_url();?>assets/js/libs/formValidator/jquery.validationEngine.js?v=1"></script>
<script src="<?php echo base_url();?>assets/js/libs/formValidator/languages/jquery.validationEngine-fr.js?v=1"></script>
<script src="<?php echo base_url();?>assets/js/developr.message.js"></script>

<script src="<?php echo base_url();?>assets/js/libs/glDatePicker/glDatePicker.js?v=1"></script>

<script>



    var doc = $('html').addClass('js-login'),
        container = $('#container'),
        formBlock = $('#form-block');

    // Date picker
    $('.datepicker').glDatePicker(
    {

        zIndex: 100,

        onClick: function(target, cell, date, data) {
            var month = date.getMonth()+1;
            target.val(date.getFullYear() + '-' +
                month + '-' +
                date.getDate());

            if(data != null) {
                alert(data.message + '\n' + date);
            }
        }

    });


    $("#addcard").validationEngine();

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


    function check_nif(nif)
    {


        $.ajax({
            method: 'POST',
            url: '<?php echo base_url("check_nif"); ?>',
            async: false,
            data: {
                nif: nif
            },
            success: function(data)
            {

                if(data == true)
                {
                    return true;

                }
                else
                {
                    return false;
                }


            }
        });

    }



    $('#generate').click(function(e){

        e.preventDefault();

        var letterpart = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

        var nif;

        do
        {
            nif = parseInt(Math.random() *1000000000) + letterpart[Math.floor(Math.random() * 26)];

        }
        while (check_nif(nif))  //return true if the nif is already in use


        $('#nif').val(nif);

        $('#generate').attr("disabled","disabled");
        $('#nif').attr("readonly","true");

    });


    $("#close").click(function(e){

            e.preventDefault();
            window.location.href = '<?php echo base_url('cardtable'); ?>';

    });







</script>