
<!-- Title bar -->
<header role="banner" id="title-bar">
    <h2>Liste de Cartes</h2>
</header>

<!-- Button to open/hide menu -->
<a href="#" id="open-menu"><span>Menu</span></a>



<!-- Main content -->
<section role="main" id="main">
    <noscript class="message black-gradient simpler">Your browser does not support JavaScript! Some features won't work as expected...</noscript>

    <hgroup id="main-title" class="thin">
        <h1>Liste de Cartes</h1>
        <h2>mar <strong><?php echo date('d'); ?></strong></h2>
    </hgroup>

    <div class="with-padding">

        <p class="wrapped left-icon icon-info-round">
            Tables are responsive, too! Try resizing your browser
        </p>

        <h2>Personne Physiques</h2>



        <p class="button-height align-right" >

            <a href="<?php echo base_url('insert_card'); ?>" class="button big">
                Ajouter une Carte
                <span class="button-icon right-side green-gradient glossy"><span class="icon-star"></span></span>

            </a>

        </p>

        <table class="table responsive-table" id="sorting-advanced">
            <thead>
            <tr>
                <th scope="col" class="align-center hide-on-tablet">
                    <input name="check-all" id="check-all" value="1" type="checkbox">
                </th>
                <th scope="col"  class="align-center">NIF</th>
                <th scope="col"  class="align-center hide-on-mobile">Username</th>
                <th scope="col"  class="align-center hide-on-mobile-portrait">Nom et Prenom</th>
                <th scope="col"  class="hide-on-tablet">Sexe</th>

                <th scope="col"  class="align-center hide-on-tablet-landscape">Naissance</th>
                <th scope="col"  class="align-center hide-on-mobile-portrait">NINA</th>
                <th scope="col"  class="align-center hide-on-mobile-landscape">Contacts</th>

                <th scope="col"  class="align-center hide-on-tablet">Access Code</th>
                <th scope="col"  class="align-center hide-on-tablet">Account</th>

                <th scope="col" style="min-width: 80px;" class="align-center">Actions</th>

            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="13" class="align-left">
                    <?php echo $elements_physiques; ?> entries found
                </td>
            </tr>
            </tfoot>

            <tbody>
                <?php foreach($personnes_physiques as $card): ?>
                <tr class="vertical-center">
                    <td scope="row" class="checkbox-cell">
                        <input name="checked[]" id="<?php echo $card['nif']; ?>" value="<?php echo $card['nif']; ?>" type="checkbox">
                    </td>
                    <td><?php echo $card['nif']; ?></td>
                    <td><?php echo $card['username']; ?></td>
                    <td><?php echo $card['nom']." ".$card['prenom']; ?></td>
                    <td><?php echo $card['sexe']; ?></td>
                    <td>
                        <?php echo $card['date_naissance']; ?>
                        <br>
                        <?php echo $card['lieu_naissance']; ?>
                    </td>
                    <td><?php echo $card['nina']; ?></td>
                    <td>
                        <?php echo $card['telephone_mobile']; ?>
                        <br>
                        <?php echo $card['email']; ?>
                    </td>


                    <td><?php echo $card['access_code']; ?></td>
                    <td class="align-center">
                        <?php
                        //account type
                        if($card['account_type'] == "Admin")
                            echo '<small class="tag red-bg small-margin-right">Admin</small>';
                        else
                            echo '<small class="tag blue-bg small-margin-right">User</small>';
                        //account status
                        if($card['status'] == "active")
                            echo '<small class="tag green-bg-bg small-margin-right">Active</small>';
                        else
                            echo '<small class="tag red-bg small-margin-right">No-Active</small>';


                        ?>
                    </td>



                    <td class="vertical-center align-center">
							<span class="button-group compact">
                                <a class="button icon-eye with-tooltip" href="<?php echo base_url('load_review_card/'.$card['nif']); ?>" title="View"></a>
								<a class="button icon-pencil with-tooltip" href="<?php echo base_url('load_edit_card/'.$card['nif']); ?>" title="Edit"></a>
								<a href="#" onclick="openConfirm('<?php echo $card['nif']; ?>');" class="button icon-trash with-tooltip confirm" title="Delete"></a>
							</span>
                    </td>

                </tr>

            <?php endforeach ?>


            </tbody>

        </table>


    </div>



</section>


<script>

    $(document).ready(function() {
        $('#physiques').addClass('current navigable-current');


    });

    // Demo confirm
    function openConfirm(nif)
    {
        $.modal.confirm('Are you sure?', function()
        {
            var newlocation = '<?php echo base_url() . "delete_card/"; ?>';
            window.location.href = newlocation+nif;

        }, function()
        {
            return false;
        });
    }
</script>











