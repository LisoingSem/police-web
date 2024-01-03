<section class="navbar">
    <nav class="container-lg max-w-screen-xl mx-auto navbar-wrapper">

        <div class="toggle block lg:hidden"><i class="fa-solid fa-bars"></i></div>
        <div class="bg-cover"></div>
        <div class="navbar-menu">
            <div class="navbar-menu-header">
                <img class="lg:hidden" src="{{ asset('assets/images/logo_police.png') }}" alt="">

                <div class="close block lg:hidden"><i class="fa-regular fa-circle-xmark"></i></div>
            </div>

            @include('website::components.navbar')

            <h3 class="category-title lg:hidden">មាតិការព័ត៌មាន</h3>

            <div class="category-master lg:hidden">
                @include('website::components.sidebar')
            </div>
        </div>
    </nav>
</section>

<script type="module">
    $(document).ready(function() {
        var stickyContainer = $('.navbar');
        var stickyHeight = stickyContainer.outerHeight();
        var stickyOffset = stickyContainer.offset().top;
        var navbar = $('.navbar-wrapper');

        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            var windowWidth = $(window).width();

            if (windowWidth >= 992) {
                if (scrollTop > stickyOffset) {
                    navbar.css({
                        'border-top': 'unset',
                        'border-bottom': 'unset'
                    });
                    stickyContainer.css({
                        'border-top': '1px solid #0a1e63',
                        'border-bottom': '1px solid #0a1e63',
                        'background-color': '#fad027'
                    }).addClass('sticky');
                } else {
                    navbar.css({
                        'border-top': '1px solid #0a1e63',
                        'border-bottom': '1px solid #0a1e63'
                    });
                    stickyContainer.css({
                        'border-top': 'unset',
                        'border-bottom': 'unset',
                        'background-color': 'unset'
                    }).removeClass('sticky');
                }
            } else {
                if (scrollTop > stickyOffset) {
                    stickyContainer.addClass('sticky');
                } else {
                    stickyContainer.removeClass('sticky');
                }
            }
        });

        var openMenu = $('.toggle');
        var closeMenu = $('.close');
        var menu = $('.navbar-menu');
        var bg = $('.bg-cover');
        var body = $('body');
        var html = $('html');

        function open() {
            menu.animate({
                left: '0%'
            }, 200);
            bg.animate({
                left: '0%'
            }, 0);
            body.css('overflow', 'hidden');
            html.css('overflow', 'hidden');
        }

        function close() {
            menu.animate({
                left: '-100%'
            }, 200);
            bg.animate({
                left: '-100%'
            }, 0);
            body.css('overflowY', 'unset');
            html.css('overflow', 'unset');
        }

        closeMenu.click(close);
        bg.click(close);
        openMenu.click(open);

        var windowWidth = $(window).width();
        $(window).resize(function() {
            if (windowWidth > 992) {
                body.css('overflow-y', 'auto');
                html.css('overflow', 'auto');
            }
        });

        function toggleMenu() {
            var dropMenu = $(this).find('.drop-menu');
            var change = $('.change-direction');
            var isVisible = dropMenu.css('display') !== 'none';
            dropMenu.css('display', isVisible ? 'none' : 'block');
            change.toggleClass('fa-caret-down', isVisible);
            change.toggleClass('fa-caret-up', !isVisible);
        }

        function handleHover() {
            if (windowWidth >= 993) {
                toggleMenu.call(this);
            }
        }

        function handleClick() {
            if (windowWidth <= 992) {
                var dropMenu = $(this).find('.drop-menu')\;
                var isVisible = dropMenu.css('display') !== 'none';
                dropMenu.css('display', isVisible ? 'none' : 'block');
            }
        }

        function handleResize() {
            var newWindowWidth = $(window).width();

            if (newWindowWidth !== windowWidth) {
                if (newWindowWidth >= 993) {
                    $('#open-menu').off('click').off('mouseenter mouseleave').hover(handleHover, toggleMenu);
                    $('.drop-menu').css('display', 'none');
                } else {
                    $('#open-menu').off('mouseenter mouseleave').off('click').click(handleClick);
                }
                windowWidth = newWindowWidth;
            }
        }

        $('#open-menu').hover(handleHover, toggleMenu);
        $('#open-menu').click(handleClick);
        $(window).resize(handleResize);

    });
</script>
