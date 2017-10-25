/**
 * Created by MARIOWHITE on 3/8/2017.
 */


// Call template init (optional, but faster if called manually)
//$.template.init();

/*
 * This is a example on how to achieve a full-height layout for content panels:
 */


$('#navmessage').addClass('current navigable-current');

// Cache elements
var titleBar = $('#title-bar'),
    panelNav = $('#panel-nav'),
    panelContent = $('#panel-content'),
    controlsSize = 43,        // Size of the panel-controls block and borders
    paddingSize = 40;        // Size of the padding on the panel content block

// Function to update panels size
updatePanelsSize = function()
{
    panelNav.height($.template.viewportHeight-titleBar.outerHeight()-controlsSize);
    panelContent.height($.template.viewportHeight-titleBar.outerHeight()-controlsSize-paddingSize);
};

// First call
updatePanelsSize();

// Refresh on resize
$(window).on('normalized-resize', updatePanelsSize);