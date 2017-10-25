<!-- Title bar -->
<header role="banner" id="title-bar">
    <h2>Accueil</h2>
</header>

<!-- Button to open/hide menu -->
<a href="#" id="open-menu"><span>Menu</span></a>



<!-- Main content -->
<section role="main" id="main">

    <hgroup id="main-title" class="thin">
        <h1>Accueil</h1>
        <h2 id="currentdate"> mar <strong><?php echo date('d'); ?></strong></h2>
    </hgroup>


    <div class="dashboard">

        <div class="columns">

            <div class="nine-columns twelve-columns-mobile" id="demo-chart">
                <!-- This div will hold the chart generated in the footer -->
            </div>

            <div class="three-columns twelve-columns-mobile new-row-mobile">
                <ul class="stats split-on-mobile">
                    <li><a href="#">
                            <strong>21</strong> new <br>accounts
                        </a></li>
                    <li><a href="#">
                            <strong>15</strong> referred new <br>accounts
                        </a></li>
                    <li>
                        <strong>5</strong> new <br>items
                    </li>
                    <li>
                        <strong>235</strong> new <br>comments
                    </li>
                </ul>
            </div>

        </div>

    </div>


    <div class="with-padding">

        <fieldset class="fieldset fields-list">

            <legend class="legend">Legend</legend>

            <!-- Standard line -->
            <div class="field-block button-height">
                <small class="input-info">Info above input</small>
                <label for="input-1" class="label"><b>Label</b> (tip)</label>
                <input type="text" name="input-1" id="input-1" value="" class="input">
                <small class="input-info">Info below input</small>
            </div>

            <!-- Carved line -->
            <div class="field-drop button-height black-inputs">
                <label for="input-2" class="label"><b>Label</b> (tip)</label>
                <input type="text" name="input-2" id="input-2" value="" class="input">
                <small class="input-info">Info below input</small>
            </div>



        </fieldset>





    </div>

</section>

