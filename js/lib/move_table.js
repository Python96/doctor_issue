/* 
 * THIS IS THE LIBRARY FOR MOVE THE DATATABLE AND RESIZE HER
 */
  /*--------------------------------------------------------------------*/
/*
 * THIS IS THE CODE FOR RESIZE BOX
 * 
 */
$.getScript('../../database-perl/js/interactive.js', function ()
{
    interact('.draggable')
            .draggable({
                onmove: window.dragMoveListener
            })
            .resizable({
                preserveAspectRatio: true,
                edges: {left: true, right: true, bottom: true, top: true}
            })
            .on('resizemove', function (event) {
                var target = event.target,
                        x = (parseFloat(target.getAttribute('data-x')) || 0),
                        y = (parseFloat(target.getAttribute('data-y')) || 0);

                // update the element's style
                target.style.width = event.rect.width + 'px';
                target.style.height = event.rect.height + 'px';

                // translate when resizing from top or left edges
                x += event.deltaRect.left;
                y += event.deltaRect.top;

                target.style.webkitTransform = target.style.transform =
                        'translate(' + x + 'px,' + y + 'px)';

                target.setAttribute('data-x', x);
                target.setAttribute('data-y', y);
            });

    /*
     * 
     * FINISH
     * 
     */

    /*--------------------------------------------------------------------*/
    /*
     * THIS IS THE CODE FOR DRAG AND DROP THE WINDOWS 
     */
    
    interact('.draggable')
            .draggable({
                // enable inertial throwing
                inertia: true,
                // keep the element within the area of it's parent
                restrict: {
                    restriction: "parent",
                    endOnly: true,
                    elementRect: {top: 0, left: 0, bottom: 1, right: 1}
                },
                // enable autoScroll
                autoScroll: true,
                // call this function on every dragmove event
                onmove: dragMoveListener,
                // call this function on every dragend event
                onend: function (event) {
                    var textEl = event.target.querySelector('p');

                    textEl && (textEl.textContent =
                            'moved a distance of '
                            + (Math.sqrt(event.dx * event.dx +
                                    event.dy * event.dy) | 0) + 'px');
                }
            });

    function dragMoveListener(event) {
        var target = event.target,
                // keep the dragged position in the data-x/data-y attributes
                x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
                y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

        // translate the element
        target.style.webkitTransform =
                target.style.transform =
                'translate(' + x + 'px, ' + y + 'px)';

        // update the posiion attributes
        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
    }

    // this is used later in the resizing and gesture demos
    window.dragMoveListener = dragMoveListener;
    
    /**
     * FINISH
     */
    
    
/*
 * Start script for pagination table
 */
    $('td', 'table').each(function(i) {
//    $(this).text(i+1);
});



$('table.paginated').each(function() {
    var currentPage = 0;
    var numPerPage = 10;
    var $table = $(this);
    $table.bind('repaginate', function() {
        $table.find('tbody tr').hide().slice(currentPage * numPerPage, (currentPage + 1) * numPerPage).show();
    });
    $table.trigger('repaginate');
    var numRows = $table.find('tbody tr').length;
    var numPages = Math.ceil(numRows / numPerPage);
    var $pager = $('<div class="pager"></div>');
    for (var page = 0; page < numPages; page++) {
        $('<span class="page-item"></span>').text(page + 1).bind('click', {
            newPage: page
        }, function(event) {
            currentPage = event.data['newPage'];
            $table.trigger('repaginate');
            $(this).addClass('active').siblings().removeClass('active');
        }).appendTo($pager).addClass('clickable');
    }
    $pager.insertAfter($table).find('span.page-item:first').addClass('active');
});
});
/*
 * 
 * FINISH
 * 
 */