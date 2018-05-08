$(function() {

    // $('select').selectpicker();

    $('.btndrop').on('click', function() {
        $(this).toggleClass('open');
    });

    $('.btndrop .dropdown').on('mouseleave', function() {
        var trigger = $(this).parent()
        window.setTimeout(function() {
            trigger.removeClass('open');
        }, 500)
    });

    var options = {
        dateFormat: "d M yy",
        altField: "#actualDate",
        buttonImageOnly: true,
        autoSize: true
    };

    $(".datepicker").datepicker(options);

    var fontsize = 12;

    $('.fontsize .up').on('click', function() {
        if (fontsize <= 18) {
            fontsize += 1;
            $('.chatbox').css({ 'font-size': fontsize + 'px' })
        }
    })

    $('.fontsize .down').on('click', function() {
        if (fontsize > 10) {
            fontsize -= 1;
            $('.chatbox').css({ 'font-size': fontsize + 'px' });
        };
    })

    $('.navbar-nav').on('click', 'li a', function(e) {
        var menuobj = $('.sidebar-menu[data-menu=' + $(this).attr('rel') + ']');
        event.preventDefault();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            $(this).closest('ul').removeClass('loaded');
            $('.sidebar-menu').fadeOut('fast');
        } else {
            $(this).closest('ul').find('a.active').removeClass('active');
            $(this).closest('ul').addClass('loaded');
            $(this).addClass('active');
            $('.sidebar-menu').fadeOut('fast');
            menuobj.fadeIn('fast');
            $.sidebarMenu(menuobj);
        }

    })
});

$.sidebarMenu = function(menu) {

    var animationSpeed = 300;
    $(menu).unbind('click');
    $(menu).on('click', 'li a', function(e) {
        var $this = $(this);
        var checkElement = $this.next();

        if (checkElement.is('.treeview-menu') && checkElement.is(':visible')) {
            checkElement.slideUp(animationSpeed, function() {
                checkElement.removeClass('menu-open');
            });
            checkElement.parent("li").removeClass("active");
        } else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {
            var parent = $this.parents('ul').first();
            var ul = parent.find('ul:visible').slideUp(animationSpeed);
            ul.removeClass('menu-open');
            var parent_li = $this.parent("li");
            checkElement.slideDown(animationSpeed, function() {
                checkElement.addClass('menu-open');
                parent.find('li.active').removeClass('active');
                parent_li.addClass('active');
            });
        }
        if (checkElement.is('.treeview-menu')) {
            e.preventDefault();
        }
    });
}