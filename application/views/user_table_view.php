
<!-- Title bar -->
<header role="banner" id="title-bar">
    <h2>User Table</h2>
</header>

<!-- Button to open/hide menu -->
<a href="#" id="open-menu"><span>Menu</span></a>

<!-- Button to open/hide shortcuts -->
<a href="#" id="open-shortcuts"><span class="icon-thumbs"></span></a>

<!-- Main content -->
<section role="main" id="main">
    <noscript class="message black-gradient simpler">Your browser does not support JavaScript! Some features won't work as expected...</noscript>

    <hgroup id="main-title" class="thin">
        <h1>Users Table</h1>
    </hgroup>

    <div class="with-padding">

        <p class="wrapped left-icon icon-info-round">
            Tables are responsive, too! Try resizing your browser
        </p>

        <h4>Styled table with advanced sorting</h4>

        <p>This example uses the plugin <a href="http://datatables.net">DataTables</a>:</p>

        <table class="table responsive-table" id="sorting-advanced">

            <thead>
            <tr>
                <th scope="col"><input type="checkbox" name="check-all" id="check-all" value="1"></th>

                <th scope="col">Name</th>
                <th scope="col" width="15%" class="align-center hide-on-mobile">Last Name</th>
                <th scope="col" width="15%" class="align-center hide-on-mobile-portrait">Email</th>
                <th scope="col" width="15%" class="hide-on-tablet">Username</th>
                <th scope="col" width="60" class="align-center">Password</th>
                <th scope="col" width="180" class="align-center">Type</th>
                <th scope="col" width="100" class="align-center">Actions</th>

            </tr>
            </thead>

            <tfoot>
            <tr>
                <td colspan="8">
                    <?php echo $elements; ?> entries found
                </td>
            </tr>
            </tfoot>

            <tbody>

                <?php foreach($users as $user): ?>

                    <tr>
                        <th scope="row" class="checkbox-cell">
                            <input type="checkbox" name="checked[]" id="check-1" value="<?php echo $user['username']; ?>">
                        </th>

                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['lastname']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td class="align-center">
                            <?php
                                if($user['type'] == "Administrator")
                                   echo '<small class="tag red-bg">Administrator</small>';
                                else
                                   echo '<small class="tag blue-bg">User</small>';
                            ?>
                        </td>

                        <td class="align-right vertical-center align-center">
							<span class="button-group compact">
								<a href="#" class="button icon-pencil" onclick="javascript: open_edit_modal('<?php echo $user['username']; ?>');">Edit</a>
								<a href="#" onclick="openConfirm('<?php echo $user['username']; ?>');" class="button icon-trash with-tooltip confirm" title="Delete"></a>
							</span>
                        </td>

                    </tr>

                <?php endforeach ?>


            </tbody>

        </table>


        <p class="button-height" style="margin-top: 20px;">
            <a href="<?php echo base_url('insert_user'); ?>" class="button huge full-width">Add User</a>
        </p>




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
    var table = $('#sorting-advanced');
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


    function open_edit_modal(username){


        $.modal({
            title: 'Edit User',
            url: '<?php echo base_url();?>assets/modals/edit_user.php?username='+username,
            useIframe: true,
            width: 350,
            height: 600
        });
    }


    // Demo confirm
    function openConfirm(username)
    {
        $.modal.confirm('Are you sure?', function()
        {
            var newlocation = '<?php echo base_url() . "delete_user/"; ?>';
            window.location.href = newlocation+username;

        }, function()
        {
            return false;
        });
    }

</script>