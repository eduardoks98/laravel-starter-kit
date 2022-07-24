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
            $('[data-collapse-toggle=' + id + ']').unbind().bind('click', function() {
                var toggler = $('#' + id);
                var isShowing = toggler.hasClass('show');
                if (isShowing) toggler.removeClass('show');
                else toggler.addClass('show');
                console.log('Show ' + id + ': ' + !isShowing);
            });
        });

    }

    function bindAllDropdown() {
        $('*[data-dropdown-toggle]').each(function() {
            var id = $(this).attr('data-dropdown-toggle');
            $('[data-dropdown-toggle=' + id + ']').unbind().bind('click', function() {

                closeAllDropdown(id);

                var dropdownToggler = $(this);
                var isShowingForDropdown = dropdownToggler.hasClass('show');
                if (isShowingForDropdown) dropdownToggler.removeClass('show');
                else dropdownToggler.addClass('show');

                var dropdownMenuToggler = $('#' + id);
                var isShowingForDropdownMenu = dropdownMenuToggler.hasClass('show');
                if (isShowingForDropdownMenu) dropdownMenuToggler.removeClass('show');
                else dropdownMenuToggler.addClass('show');

                console.log('Show ' + id + ': ' + !isShowingForDropdownMenu);
            });
        });
    }

    function closeAllDropdown(openId) {
        $('*[data-dropdown-toggle].show').each(function() {
            var id = $(this).attr('data-dropdown-toggle');
            if(id == openId) return;
            $(this).removeClass('show');
            $('#' + id).removeClass('show');
        });
    }
})()