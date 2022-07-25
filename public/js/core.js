(function() {
    var init = false;
    window.onhashchange = function() {
        console.log('Onhaschange trigger');
    };
    window.onpopstate = function() {
        console.log('onpopstate trigger');
    };
    window.onunload = function() {
        console.log('onunload trigger');
    };
    window.onload = function() {
        console.log('onload trigger');
        init = true;
    };
    window.onbeforeunload = function() {
        console.log('BeforeUnload disparado');
    };

    $(document).ready(async function() {
        await initComplete();
        // Toggle to collapse things like hamburger menu
        bindAllCollapse();

        // Toggle to collapse dropdowns menus
        bindAllDropdown();
    });

    function initComplete() {
        return new Promise((resolve, reject) => {
            var interval = setInterval(function() {
                if (init) {
                    clearInterval(interval);
                    $('#app').show();
                    $('#_loading_bar').hide();
                }
            }, 1000); // check every 50ms
            resolve();
        });
    }

    function bindAllCollapse() {

        $('*[data-collapse-toggle]').each(function() {
            var id = $(this).attr('data-collapse-toggle');
            var mouseInside = true;

            $('[data-collapse-toggle=' + id + ']').unbind().bind('click', function() {
                var toggler = $('#' + id);
                var isShowing = toggler.hasClass('show');
                if (isShowing) toggler.removeClass('show');
                else toggler.addClass('show');
                mouseInside = true;
                console.log('Show ' + id + ': ' + !isShowing);
            });


            $('#' + id).mouseenter(function() {
                mouseInside = true;
            }).mouseleave(function() {
                mouseInside = false;
            });

            $("html").click(function() {
                var hasClass = $('#' + id).hasClass('show');

                if (!mouseInside && hasClass) {
                    console.log('fechar ' + id);
                    $('#' + id).removeClass('show');
                }
            });

        });
    }

    function bindAllDropdown() {
        let mouseHover = null;
        let mouseInside = false;
        let lastMousePosition = null;
        let lastClickedPosition = null;

        $('*[data-dropdown-toggle]').each(function() {
            var id = $(this).attr('data-dropdown-toggle');
            $('[data-dropdown-toggle=' + id + ']').unbind().bind('click', function() {
                // Fecha outros dropdowns
                closeAllDropdown(id);
                // Guarda a ultima posição clicada do mouse
                var samePosition = lastClickedPosition === lastMousePosition;
                // Verifica se vai abrir ou fechar o dropdown
                var dropdownToggler = $(this);
                var isShowingForDropdown = dropdownToggler.hasClass('show');
                if (isShowingForDropdown && (mouseHover === false || samePosition)) dropdownToggler.removeClass('show');
                else dropdownToggler.addClass('show');

                var dropdownMenuToggler = $('#' + id);
                var isShowingForDropdownMenu = dropdownMenuToggler.hasClass('show');
                if (isShowingForDropdownMenu && (mouseHover === false || samePosition)) dropdownMenuToggler.removeClass('show');
                else dropdownMenuToggler.addClass('show');

                console.log(lastMousePosition, samePosition, mouseHover, isShowingForDropdownMenu && (mouseHover === false || samePosition));
                mouseHover = true;
                lastClickedPosition = lastMousePosition;
                // console.log('Show ' + id + ': ' + !isShowingForDropdownMenu);
            });
            var element = $('#' + id);

            element.mouseenter(function() {
                mouseInside = true;
            }).mouseleave(function() {
                mouseInside = false;
            });

            $("html").mousemove(function(event) {
                lastMousePosition = event.pageX + ", " + event.pageY;

                if ($('#' + id + ':hover').length != 0) {
                    mouseHover = true;
                } else {
                    mouseHover = false;
                }
            });

            $("html").click(function() {
                var hasClass = element.hasClass('show');
                var canCloseOnLeave = element.attr('dont-close-on-leave') === undefined;

                if ((mouseHover === false && mouseInside === false) && hasClass && canCloseOnLeave) {
                    console.log('closed', mouseHover);
                    element.removeClass('show');
                }
            });
        });
    }

    function closeAllDropdown(openId) {
        $('*[data-dropdown-toggle].show').each(function() {
            var id = $(this).attr('data-dropdown-toggle');
            if (id == openId) return;
            $(this).removeClass('show');
            $('#' + id).removeClass('show');
        });
    }


})()