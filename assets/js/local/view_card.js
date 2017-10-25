/**
 * Created by MARIOWHITE on 3/8/2017.
 */


$('input').attr("readonly","true");
$('select').attr("disabled","true");


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


$("#review").validationEngine();

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


