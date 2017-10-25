

<!-- Title bar -->
<header role="banner" id="title-bar">
    <h2>Liste de Cartes</h2>
</header>

<!-- Button to open/hide menu -->
<a href="#" id="open-menu"><span>Menu</span></a>

<!-- Button to open/hide shortcuts -->
<a href="#" id="open-shortcuts"><span class="icon-thumbs"></span></a>

<!-- Main content -->
<section role="main" id="main">
    <noscript class="message black-gradient simpler">Your browser does not support JavaScript! Some features won't work as expected...</noscript>

    <hgroup id="main-title" class="thin">
        <h1>Liste de Cartes</h1>
        <h2>mar <strong><?php echo date('d'); ?></strong></h2>
    </hgroup>


<div class="with-padding">



    <h2>Personnes Morales</h2>



    <p class="button-height align-right" >

        <a href="<?php echo base_url('insert_card'); ?>" class="button big">
            Ajouter une Carte
            <span class="button-icon right-side green-gradient glossy"><span class="icon-star"></span></span>

        </a>

    </p>

    <table class="table responsive-table" id="sorting-advanced2">

        <thead>
        <tr>

            <th scope="col"  class="align-center hide-on-mobile">NIF</th>
            <th scope="col"  class="align-center hide-on-mobile-portrait">Nom et Prenom</th>
            <th scope="col"  class="hide-on-tablet">Sexe</th>
            <th scope="col"  class="align-center">Situation Matrimoniale</th>
            <th scope="col"  class="align-center">Date de Naissance</th>
            <th scope="col"  class="align-center">Lieu Naissance</th>
            <th scope="col"  class="align-center">Profession</th>


            <th scope="col" style="width: 185px;" class="align-center">Actions</th>

        </tr>
        </thead>

        <tfoot>
        <tr>
            <td colspan="10">
                <?php echo $elements_morales; ?> entries found
            </td>
        </tr>
        </tfoot>

        <tbody>

        <?php foreach($personnes_morales as $card): ?>

            <tr>


                <th><?php echo $card['nif']; ?></th>
                <td><?php echo $card['nom']." ".$card['prenom']; ?></td>
                <td><?php echo $card['sexe']; ?></td>
                <td><?php echo $card['situation_matrimoniale']; ?></td>
                <td><?php echo $card['date_naissance']; ?></td>
                <td><?php echo $card['lieu_naissance']; ?></td>
                <td><?php echo $card['profession']; ?></td>


                <td class="vertical-center align-center">
							<span class="button-group compact">
                                <a class="button icon-eye" href="<?php echo base_url('load_review_card/'.$card['nif']); ?>">View</a>
								<a class="button icon-pencil" href="<?php echo base_url('load_edit_card/'.$card['nif']); ?>">Edit</a>
								<a href="#" onclick="openConfirm('<?php echo $card['nif']; ?>');" class="button icon-trash with-tooltip confirm" title="Delete">Delete</a>
							</span>
                </td>

            </tr>

        <?php endforeach ?>


        </tbody>

    </table>


</div>





</section>





<!-- End main content -->

<!-- JavaScript at the bottom for fast page loading -->

<script src="<?php echo base_url();?>assets/js/setup.js"></script>
<!-- Template functions -->
<script src="<?php echo base_url();?>assets/js/developr.input.js"></script>

<script src="<?php echo base_url();?>assets/js/developr.navigable.js"></script>
<script src="<?php echo base_url();?>assets/js/developr.notify.js"></script>
<script src="<?php echo base_url();?>assets/js/developr.scroll.js"></script>
<script src="<?php echo base_url();?>assets/js/developr.tooltip.js"></script>
<script src="<?php echo base_url();?>assets/js/developr.table.js"></script>

<!-- Plugins -->
<script src="<?php echo base_url();?>assets/js/libs/jquery.tablesorter.min.js"></script>
<script src="<?php echo base_url();?>assets/js/libs/DataTables/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url();?>assets/js/developr.modal.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles/modal.css">




<script>

    // Call template init (optional, but faster if called manually)
    $.template.init();



    // Table sort - DataTables
    var table = $('#sorting-advanced1');


    table.dataTable({
        'aoColumnDefs': [
            { 'bSortable': false, 'aTargets': [ 0, 5 ] }
        ],
        'sPaginationType': 'full_numbers',
        'sDom': '<"dataTables_header"lfr>t<"dataTables_footer"ip>',
        'fnInitComplete': function( oSettings )
        {
            // Style length select
            table.closest('.dataTables_wrapper').find('.dataTables_length select').addClass('select blue-gradient glossy').styleSelect();
            tableStyled = true;
        }
    });


    // Table sort - DataTables
    var table = $('#sorting-advanced2');


    table.dataTable({
        'aoColumnDefs': [
            { 'bSortable': false, 'aTargets': [ 0, 5 ] }
        ],
        'sPaginationType': 'full_numbers',
        'sDom': '<"dataTables_header"lfr>t<"dataTables_footer"ip>',
        'fnInitComplete': function( oSettings )
        {
            // Style length select
            table.closest('.dataTables_wrapper').find('.dataTables_length select').addClass('select blue-gradient glossy').styleSelect();
            tableStyled = true;
        }
    });



    // Table sort - styled
    $('#sorting-example1').tablesorter({
        headers: {
            0: { sorter: false },
            5: { sorter: false }
        }
    }).on('click', 'tbody td', function(event)
    {
        // Do not process if something else has been clicked
        if (event.target !== this)
        {
            return;
        }

        var tr = $(this).parent(),
            row = tr.next('.row-drop'),
            rows;

        // If click on a special row
        if (tr.hasClass('row-drop'))
        {
            return;
        }

        // If there is already a special row
        if (row.length > 0)
        {
            // Un-style row
            tr.children().removeClass('anthracite-gradient glossy');

            // Remove row
            row.remove();

            return;
        }

        // Remove existing special rows
        rows = tr.siblings('.row-drop');
        if (rows.length > 0)
        {
            // Un-style previous rows
            rows.prev().children().removeClass('anthracite-gradient glossy');

            // Remove rows
            rows.remove();
        }

        // Style row
        tr.children().addClass('anthracite-gradient glossy');

        // Add fake row
        $('<tr class="row-drop">'+
            '<td colspan="'+tr.children().length+'">'+
            '<div class="float-right">'+
            '<button type="submit" class="button glossy mid-margin-right">'+
            '<span class="button-icon"><span class="icon-mail"></span></span>'+
            'Send mail'+
            '</button>'+
            '<button type="submit" class="button glossy">'+
            '<span class="button-icon red-gradient"><span class="icon-cross"></span></span>'+
            'Remove'+
            '</button>'+
            '</div>'+
            '<strong>Name:</strong> John Doe<br>'+
            '<strong>Account:</strong> admin<br>'+
            '<strong>Last connect:</strong> 05-07-2011<br>'+
            '<strong>Email:</strong> john@doe.com'+
            '</td>'+
            '</tr>').insertAfter(tr);

    }).on('sortStart', function()
    {
        var rows = $(this).find('.row-drop');
        if (rows.length > 0)
        {
            // Un-style previous rows
            rows.prev().children().removeClass('anthracite-gradient glossy');

            // Remove rows
            rows.remove();
        }
    });

    // Table sort - simple
    $('#sorting-example2').tablesorter({
        headers: {
            5: { sorter: false }
        }
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