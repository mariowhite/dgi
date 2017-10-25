/**
 * Created by MARIOWHITE on 3/8/2017.
 */


// Call template init (optional, but faster if called manually)
//$.template.init();




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







