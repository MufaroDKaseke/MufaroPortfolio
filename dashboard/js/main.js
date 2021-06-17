$(document).ready(function(){
    
    (function($) {

        let loginForm = $("#loginForm");

         // Login Form Rules Object
         
         let loginFormRules = {
            rules: {
                username: {
                    required: true,
                    minlength: 5
                },
                password: {
                    required :true,
                    minlength : 8
                }
            },
            messages: {
                username: {
                    required: "Please enter your username",
                    minlength: "Your username must be at least 5 characters long"
                },
                password: {
                    required: "Please enter your password",
                    minlength: "Your password must be at least 8 characters long"
                }
            }
        };

        loginForm.validate(loginFormRules);

        let navbarHeight = $(".main-content .main-header").outerHeight();

        // Sidebar

        $("a[data-widget=pushmenu]").on("click" ,function() {
            $(".sidebar").toggleClass("sidebar-sm");
            if($(".sidebar").hasClass("sidebar-sm")) {
               $(".sidebar .sidebar-nav .nav-item.menu").removeClass("menu-open");
               $(".sidebar .sidebar-nav .nav-item.menu > a i:last-of-type").removeClass("icon-angle-up").addClass("icon-angle-down");
            }
        });

        $(".main-header .navbar-nav:last-of-type ,main").on("click" ,function() {
            if ($(window).outerWidth() < 576) {
                $(".sidebar").removeClass("sidebar-sm");
            }
        });

        function setSidebarHeight(navbarHeight) {
            let sidebarHeight = navbarHeight - 1;
            $(".sidebar .sidebar-brand").css("height" , sidebarHeight);
        }
        setSidebarHeight($(".main-content .main-header").outerHeight());

        // Main

        function setMainHeight(navbarHeight ,bodyHeight) {
            let mainHeight = bodyHeight - navbarHeight;
            $('main').css('height' , mainHeight);
		}
		
        setMainHeight(navbarHeight ,$(window).outerHeight());

        $(window).on('resize' ,function() {
            setMainHeight(navbarHeight ,$(window).outerHeight());
        })

        // Sidebar Dropdown Menu

        $(".sidebar .sidebar-nav .nav-item.menu > a").on("click" ,function() {
            let menuLink = $(this);
            let navItem = menuLink.parent();
            let menuIcon = menuLink.children("i:last-of-type");

            navItem.toggleClass("menu-open");
            menuIcon.toggleClass("icon-angle-up icon-angle-down");
        });

        // Card Panel

        $(".card-panel .card-min-btn").on("click" ,function() {
            let card = $(this).parents(".card");
            let cardBody = card.children(".drop-panel");
            let minIcon = $(this).children("i");

            //card.toggleClass("open");

            if(card.hasClass("open")) {
                cardBody.animate({
                    opacity : 0,
                    height : "toggle"
                }, 500 ,function(){
                    cardBody.css("display" ,"none");
                    card.removeClass("open");
                    minIcon.toggleClass("icon-angle-up icon-angle-down");
                });
            } else {
                cardBody.animate({
                    opacity : 1,
                    height : "toggle"
                }, 500 ,function(){
                    cardBody.css("display" ,"block");
                    card.addClass("open");
                    minIcon.toggleClass("icon-angle-up icon-angle-down");
                });
            }
        });

        $(".card-panel .card-cls-btn").on("click" ,function() {
            let card = $(this).parents(".card");
            card.remove()
        });
    })(jQuery)
});