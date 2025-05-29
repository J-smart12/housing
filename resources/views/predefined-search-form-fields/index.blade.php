@extends('layout.main')
@section('title', 'Featured Properties')

@section('body')


<body id="myhome-app"
    class="wp-singular page-template-default page page-id-2450 wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">


    <div class="mh-fixed-menu mh-fixed-menu--transparent-light">
        <div class="mh-top-header mh-top-header--default">

            <div class="mh-layout">

                <div class="mh-menu-currency-wrapper">
                    <span class="mh-currency-switcher__label">Currency </span>
                    <select id="mh-menu-currency_switcher" class="selectpicker mh-currency-switcher">
                        <option value="any">Any</option>
                        <option value="price" selected="selected">
                            $ </option>
                        <option value="price_5">
                            £ </option>
                    </select>
                </div>


                <span class="mh-top-header__element mh-top-header__element--phone">
                    <a href="tel:+15408240598">
                        <i class="flaticon-phone"></i>
                        +15408240598 </a>
                </span>

                <span class="mh-top-header__element">
                    <address>
                        <i class="flaticon-pin"></i>
                        130 Willow St, San Jose, California
                    </address>
                </span>


                <span class="mh-top-header__element mh-top-header__element--social-icons">
                    <span>
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook mh-top-header-big__element__icon-big"></i>
                        </a>
                    </span>

                    <span>
                        <a href="#" target="_blank">
                            <i class="fab fa-twitter mh-top-header-big__element__icon-big"></i>
                        </a>
                    </span>

                    <span>
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram mh-top-header-big__element__icon-big"></i>
                        </a>
                    </span>

                    <span>
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin mh-top-header-big__element__icon-big"></i>
                        </a>
                    </span>
                </span>

                <div class="mh-top-bar-user-panel-small">
                    <div class="mh-top-bar-user-panel">
                        <user-bar id="myhome-user-bar"></user-bar>
                    </div>
                </div>
            </div>
        </div>


        <div class="mh-header default">
            <!-- begin "mega_main_menu" -->
            <div id="mega_main_menu"
                class="mh-primary primary_style-flat icons-left first-lvl-align-left first-lvl-separator-none direction-horizontal fullwidth-disable pushing_content-disable mobile_minimized-enable dropdowns_trigger-hover dropdowns_animation-anim_4 no-logo no-search no-woo_cart no-buddypress responsive-enable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-2-1-1 mh-primary primary_style-flat icons-left first-lvl-align-left first-lvl-separator-none direction-horizontal fullwidth-disable pushing_content-disable mobile_minimized-enable dropdowns_trigger-hover dropdowns_animation-anim_4 no-logo no-search no-woo_cart no-buddypress responsive-enable coercive_styles-disable indefinite_location_mode-disable language_direction-ltr version-2-2-1-1 mega_main mega_main_menu">
                <div class="menu_holder">
                    <div class="mmm_fullwidth_container"></div><!-- class="fullwidth_container" -->
                    <div class="menu_inner"> <span class="nav_logo">
                            <a class="mobile_toggle">
                                <span class="mobile_button">
                                    <span class="symbol_menu"><i class="fas fa-bars"></i></span>
                                    <span class="symbol_cross"><i class="fas fa-times"></i></span>
                                </span>
                            </a>
                            <a class="logo_link" href="../" title="Carmodyrealestates.com">
                                <img src="../wp-content/uploads/2017/03/logo-40-blue-black.png"
                                    data-logo="https://carmodyrealestates.com/wp-content/uploads/2017/03/logo-40-blue-black.png"
                                    alt="Carmodyrealestates.com">
                            </a>
                        </span>
                        <!-- /class="nav_logo" -->
                        <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                            <li id="menu-item-1424"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1424 default_dropdown  drop_to_right submenu_default_width columns1">
                                <a href="#" class="item_link  disable_icon" tabindex="1"> <i
                                        class=""></i> <span class="link_content"> <span class="link_text"> Home
                                        </span> </span> </a> </li>
                            <li id="menu-item-3497"
                                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-3497 default_dropdown  drop_to_right submenu_default_width columns1">
                                <a href="#" class="item_link  disable_icon" tabindex="2"> <i
                                        class=""></i> <span class="link_content"> <span class="link_text">
                                            Properties </span> </span> </a>
                                <ul class="mega_dropdown">
                                    <li id="menu-item-3550"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3550 default_dropdown  drop_to_right submenu_default_width columns1">
                                        <a href="../city-neighborhood-street/"
                                            class="item_link  disable_icon" tabindex="3"> <i class=""></i>
                                            <span class="link_content"> <span class="link_text"> City >> Neighborhood
                                                    >> Street </span> </span> </a> </li>
                                    <li id="menu-item-3546"
                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2450 current_page_item menu-item-3546 default_dropdown  drop_to_right submenu_default_width columns1">
                                        <a href="" class="item_link  disable_icon" tabindex="4"> <i
                                                class=""></i> <span class="link_content"> <span
                                                    class="link_text"> Predefined search form </span> </span> </a>
                                    </li>
                                    <li id="menu-item-3545"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3545 default_dropdown  drop_to_right submenu_default_width columns1">
                                        <a href="../advanced-search-form/" class="item_link  disable_icon"
                                            tabindex="5"> <i class=""></i> <span class="link_content"> <span
                                                    class="link_text"> Advanced Search Form </span> </span> </a> </li>
                                </ul><!-- /.mega_dropdown -->
                            </li>
                            <li id="menu-item-3499"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3499 default_dropdown  drop_to_right submenu_default_width columns1">
                                <a href="../about-us/" class="item_link  disable_icon" tabindex="6"> <i
                                        class=""></i> <span class="link_content"> <span class="link_text">
                                            About us </span> </span> </a> </li>
                            <li id="mh-submit-button"> <span class="item_link"> <span class="link_content"> <a
                                            id="myhome-submit-property" href="../panel/#/submit-property"
                                            title="Submit property"> Submit property <i class="fas fa-plus-circle"
                                                aria-hidden="true"></i> </a> </span> </span> </li>
                        </ul>
                    </div><!-- /class="menu_inner" -->
                </div><!-- /class="menu_holder" -->
            </div><!-- /id="mega_main_menu" -->
        </div>
    </div>
    <div class="mh-sticky-menu-placeholder
					mh-sticky-menu-placeholder--active
		"></div>
    <div class="mh-top-title">
        <h1 class="mh-top-title__heading">Predefined search form (option example)</h1>


    </div>

    <div class="mh-layout mh-top-title-offset mh-padding-bottom-big">

        <div id="post-2450" class="mh-post">
            <section class="wpb-content-wrapper">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;">You can create a search form with options
                                            already chosen. You can also set default &#8220;Sort by&#8221; option.  Your
                                            visitor can change everything.</p>

                                    </div>
                                </div>
                                <listing-grid id="myhome-listing-grid" class=""
                                    config-key='MyHomeListing1747769080'>
                                </listing-grid>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>


    <footer id="footer" class="mh-footer-top mh-background-cover mh-footer-top--dark">


        <div class="mh-footer__inner">
            <div class="mh-layout">
                <div class="mh-footer__row">


                    <div class="mh-footer__row__column widget mh-footer__row__column--1of4">

                        <div class="mh-footer__logo">
                            <img src="../wp-content/uploads/2017/03/logo-50-blue-white.png"
                                alt="Carmodyrealestates.com">
                        </div>

                        <div class="mh-footer__text">
                            Carmody real estate ; the best in real estate </div>

                        <address class="mh-footer__contact">
                            <i class="flaticon-pin"></i>
                            130 Willow St, San Jose, California
                        </address>

                        <div class="mh-footer__contact">
                            <a href="tel:+15408240598">
                                <i class="flaticon-phone"></i>
                                +15408240598 </a>
                        </div>


                    </div>


                    <div class="mh-footer__row__column mh-footer__row__column--1of4 widget widget_archive"
                        id="archives-4">
                        <h3 class="mh-footer__heading">Blog</h3>
                        <ul>
                            <li><a href='../2017/10/'>October 2017</a></li>
                            <li><a href='../2017/09/'>September 2017</a></li>
                            <li><a href='../2017/08/'>August 2017</a></li>
                            <li><a href='../2017/07/'>July 2017</a></li>
                        </ul>

                    </div>
                    <div class="mh-footer__row__column mh-footer__row__column--1of4 widget widget_tag_cloud"
                        id="tag_cloud-3">
                        <h3 class="mh-footer__heading">Features</h3>
                        <div class="tagcloud"><a href="../features/air-conditioning/"
                                class="tag-cloud-link tag-link-33 tag-link-position-1" style="font-size: 22pt;"
                                aria-label="Air Conditioning (32 items)">Air Conditioning</a>
                            <a href="../features/ceiling-fan/"
                                class="tag-cloud-link tag-link-30 tag-link-position-2"
                                style="font-size: 9.5555555555556pt;" aria-label="Ceiling Fan (22 items)">Ceiling
                                Fan</a>
                            <a href="../features/dishwasher/"
                                class="tag-cloud-link tag-link-22 tag-link-position-3" style="font-size: 15pt;"
                                aria-label="Dishwasher (26 items)">Dishwasher</a>
                            <a href="../features/fireplace/"
                                class="tag-cloud-link tag-link-19 tag-link-position-4"
                                style="font-size: 12.666666666667pt;" aria-label="Fireplace (24 items)">Fireplace</a>
                            <a href="../features/high-ceilings/"
                                class="tag-cloud-link tag-link-28 tag-link-position-5" style="font-size: 8pt;"
                                aria-label="High ceilings (21 items)">High ceilings</a>
                            <a href="../features/microwave/"
                                class="tag-cloud-link tag-link-27 tag-link-position-6"
                                style="font-size: 11.111111111111pt;" aria-label="Microwave (23 items)">Microwave</a>
                            <a href="../features/patio/"
                                class="tag-cloud-link tag-link-25 tag-link-position-7"
                                style="font-size: 16.555555555556pt;" aria-label="Patio (27 items)">Patio</a>
                            <a href="../features/porch/"
                                class="tag-cloud-link tag-link-15 tag-link-position-8"
                                style="font-size: 13.444444444444pt;" aria-label="Porch (25 items)">Porch</a>
                            <a href="../features/refrigerator/"
                                class="tag-cloud-link tag-link-37 tag-link-position-9"
                                style="font-size: 12.666666666667pt;"
                                aria-label="Refrigerator (24 items)">Refrigerator</a>
                            <a href="../features/wifi/"
                                class="tag-cloud-link tag-link-34 tag-link-position-10"
                                style="font-size: 9.5555555555556pt;" aria-label="WiFi (22 items)">WiFi</a>
                        </div>
                    </div>
                    <div class="mh-footer__row__column mh-footer__row__column--1of4 widget widget-mh-social-icons"
                        id="myhome-social-icons-widget-2">
                        <h3 class="mh-footer__heading">Follow us</h3>
                        <div class="mh-social-icons"><a class="mh-social-icon" target="_blank" href="#">
                                <i class="fab fa-facebook"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-twitter"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-instagram"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-linkedin"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-youtube"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-pinterest"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-slideshare"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-vimeo"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-dropbox"></i></a><a class="mh-social-icon" target="_blank"
                                href="#">
                                <i class="fab fa-google"></i></a></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mh-footer-bottom ">
            <div class="mh-layout">
                carmodyrealestates 2023. All rights reserved. </div>
        </div>


    </footer>
    <account id="myhome-account"></account>
    <save-search id="myhome-save-search"></save-search>
    <div>
        <compare-area id="myhome-compare-area"></compare-area>
    </div>

    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = false;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/myhome\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
    <script>
        var flag = true;
        jQuery(document).on('vc-full-width-row', function() {
            if (flag) {
                flag = false

                window.dispatchEvent(new Event('resize'));

                lazySizes.autoSizer.checkElems();
            }
        });
    </script>
    <link rel='stylesheet' id='rs-plugin-settings-css'
        href='../wp-content/plugins/revslider/public/assets/css/rs6e8c6.css?ver=6.6.13' type='text/css'
        media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <script type="text/javascript" src="../wp-content/plugins/contact-form-7/includes/swv/js/indexf2b4.js?ver=5.7.7"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-extra">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/carmodyrealestates.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/plugins/contact-form-7/includes/js/indexf2b4.js?ver=5.7.7"
        id="contact-form-7-js"></script>
    <script type="text/javascript" id="lazy-sizes-js-before">
        /* <![CDATA[ */
        window.lazySizesConfig = window.lazySizesConfig || {};
        window.lazySizesConfig.loadMode = 1;

        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/themes/myhome/assets/js/lazysizes.min358c.js?ver=3.1.69"
        id="lazy-sizes-js"></script>
    <script type="text/javascript" id="myhome-min-js-extra">
        /* <![CDATA[ */
        var MyHome = {
            "site": "https:\/\/carmodyrealestates.com",
            "compare": "1",
            "api": "https:\/\/carmodyrealestates.com\/wp-json\/myhome\/v1\/estates",
            "panelUrl": "https:\/\/carmodyrealestates.com\/panel\/",
            "user_fields": [],
            "is_register_open": "",
            "requestUrl": "https:\/\/carmodyrealestates.com\/wp-admin\/admin-ajax.php",
            "nonce": "69eb81400b",
            "mapStyle": "[{featureType:\"administrative\",elementType:\"labels.text.fill\",stylers:[{color:\"#444444\"}]},{featureType:\"landscape\",elementType:\"all\",stylers:[{color:\"#f2f2f2\"}]},{featureType:\"poi\",elementType:\"all\",stylers:[{visibility:\"off\"}]},{featureType:\"road\",elementType:\"all\",stylers:[{saturation:-100},{lightness:45}]},{featureType:\"road.highway\",elementType:\"all\",stylers:[{visibility:\"simplified\"}]},{featureType:\"road.arterial\",elementType:\"labels.icon\",stylers:[{visibility:\"off\"}]},{featureType:\"transit\",elementType:\"all\",stylers:[{visibility:\"off\"}]},{featureType:\"water\",elementType:\"all\",stylers:[{color:\"#d7e1f2\"},{visibility:\"on\"}]}]",
            "mapType": "roadmap",
            "contact_price_label": "Contact for price",
            "user_bar_label": "Login \/ Register",
            "property_link_new_tab": "",
            "show_date": "true",
            "show_favorite": "1",
            "show_save_search": "1",
            "captcha_enabled": "",
            "captcha_site_key": "",
            "account_types": {
                "agent": "Agent",
                "agency": "Agency",
                "buyer": "Buyer"
            },
            "account_type": "agent",
            "user_select_type": "",
            "clustering": "1",
            "street": "1",
            "show_rules": "",
            "rules_link": "#",
            "buyer_can_submit_property": "",
            "account_register_open": "",
            "account_active_tab": "login",
            "notLoggedPopup": "",
            "translations": {
                "username": "Username",
                "accept": "I agree to the",
                "terms_of_service": "Terms of Service",
                "alphabetically": "Alphabetical",
                "compare": "Compare",
                "added": "Added",
                "details": "Details",
                "more": "More",
                "newest": "Newest",
                "sort_by": "Sort by:",
                "popular": "Popular",
                "price": "Price",
                "reset": "Reset",
                "full_screen": "Full Screen",
                "price_high_to_low": "Price (high to low)",
                "price_low_to_high": "Price (low to high)",
                "results": "results",
                "found": "Found",
                "any": "Any",
                "search": "Search",
                "from": "From",
                "to": "To",
                "advanced": "Advanced",
                "hide_advanced": "Hide",
                "clear": "clear",
                "street_view": "Street View",
                "prev": "Prev",
                "next": "Next",
                "fullscreen": "Full screen",
                "fullscreen_close": "Close full screen",
                "clear_search": "Clear search",
                "no_results": "No results found",
                "hide": "Hide",
                "show": "Show",
                "attributes": "Attributes",
                "show_location": "Show location",
                "near": "Show near",
                "login": "Login",
                "login2": "Login",
                "register": "Register",
                "submit_property": "Submit property",
                "my_properties": "My properties",
                "edit_profile": "Edit profile",
                "view_profile": "View my profile",
                "log_out": "Log out",
                "currency": "Currency",
                "enter_login": "Enter your login ",
                "enter_password": "Enter your password",
                "retrieve_password": "reset password",
                "save_this_search": "Save this search",
                "agents": "Agents",
                "hello": "Hello",
                "reg_completed": "Registration completed. Thank you!",
                "check_email": "Please check your email to activate your account",
                "back": "back",
                "email_required": "Email field is required",
                "enter_email": "Please enter your email address to request a password reset.",
                "reset_password": "Reset Password",
                "ok": "OK",
                "exclamation_mark": "!",
                "no_user": "If your email address exists in our database, you will receive a password recovery link at your email address in a few minutes.",
                "password": "Password",
                "email": "Email",
                "repeat_password": "Repeat password",
                "password_mismatch": "Password mismatch",
                "account_type": "Account type",
                "connect_with": "Connect with",
                "saved_success": "Saved successfully",
                "saving": "Saving...",
                "save_search": "Save search",
                "name_required": "Name field is required",
                "save": "Save",
                "enter_s_name": "Enter search name",
                "removed": "Removed",
                "added_to_favorite": "Added to favorite",
                "add_to_favorite": "Add to favorite",
                "favorite": "Favorite",
                "saved_searches": "Saved searches",
                "add_to_compare": "Add to compare",
                "added_to_compare": "Added to compare"
            },
            "theme_url": "https:\/\/carmodyrealestates.com\/wp-content\/themes\/myhome"
        };
        var MyHomeListing1747769080 = {
            "fields": [{
                "id": 1,
                "name": "Property type",
                "slug": "property-type",
                "base_slug": "property_type",
                "parent_id": 0,
                "type": "radio_button",
                "is_number": false,
                "is_text": true,
                "compare_operator": "=",
                "display_after": "",
                "full_width": false,
                "values": {
                    "any": [{
                        "name": "House",
                        "value": "House",
                        "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                        "slug": "house",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Apartment",
                        "value": "Apartment",
                        "link": "https:\/\/carmodyrealestates.com\/property-type\/apartment\/",
                        "slug": "apartment",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Office",
                        "value": "Office",
                        "link": "https:\/\/carmodyrealestates.com\/property-type\/office\/",
                        "slug": "office",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true,
                "parent_type": "values"
            }, {
                "id": 2,
                "name": "Offer type",
                "slug": "offer-type",
                "base_slug": "offer_type",
                "parent_id": 0,
                "type": "select",
                "is_number": false,
                "is_text": true,
                "compare_operator": "=",
                "display_after": "",
                "full_width": false,
                "values": {
                    "any": [{
                        "name": "Active",
                        "value": "Active",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/active\/",
                        "slug": "active",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "For Sale",
                        "value": "For Sale",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                        "slug": "sale",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Hot Offer!",
                        "value": "Hot Offer!",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/hot-offer\/",
                        "slug": "hot-offer",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "No Fees!",
                        "value": "No Fees!",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/no-fees\/",
                        "slug": "no-fees",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Open House",
                        "value": "Open House",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                        "slug": "open-house",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Pending",
                        "value": "Pending",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/pending\/",
                        "slug": "pending",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Sold!",
                        "value": "Sold!",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/sold\/",
                        "slug": "sold",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true,
                "parent_type": "values"
            }, {
                "id": 3,
                "name": "Price",
                "slug": "price",
                "base_slug": "price",
                "parent_id": 0,
                "type": "text_range",
                "is_number": true,
                "is_text": false,
                "compare_operator": "equal",
                "display_after": "$",
                "full_width": false,
                "values": {
                    "any": []
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true
            }, {
                "id": 10,
                "name": "City",
                "slug": "city",
                "base_slug": "",
                "parent_id": 0,
                "type": "select",
                "is_number": false,
                "is_text": true,
                "compare_operator": "=",
                "display_after": "",
                "full_width": false,
                "values": {
                    "any": [{
                        "name": "California",
                        "value": "California",
                        "link": "https:\/\/carmodyrealestates.com\/city\/california\/",
                        "slug": "california",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Chicago",
                        "value": "Chicago",
                        "link": "https:\/\/carmodyrealestates.com\/city\/chicago\/",
                        "slug": "chicago",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Los Angeles",
                        "value": "Los Angeles",
                        "link": "https:\/\/carmodyrealestates.com\/city\/los-angeles\/",
                        "slug": "los-angeles",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "New York",
                        "value": "New York",
                        "link": "https:\/\/carmodyrealestates.com\/city\/new-york\/",
                        "slug": "new-york",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Seattle",
                        "value": "Seattle",
                        "link": "https:\/\/carmodyrealestates.com\/city\/seattle\/",
                        "slug": "seattle",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true,
                "parent_type": "values"
            }, {
                "id": 14,
                "name": "Neighborhood",
                "slug": "neighborhood",
                "base_slug": "",
                "parent_id": 10,
                "type": "select",
                "is_number": false,
                "is_text": true,
                "compare_operator": "=",
                "display_after": "",
                "full_width": false,
                "values": {
                    "chicago": [{
                        "name": "Austin",
                        "value": "Austin",
                        "link": "",
                        "slug": "austin",
                        "options": []
                    }, {
                        "name": "Englewood",
                        "value": "Englewood",
                        "link": "",
                        "slug": "englewood",
                        "options": []
                    }, {
                        "name": "Wicker Park",
                        "value": "Wicker Park",
                        "link": "",
                        "slug": "wicker-park",
                        "options": []
                    }],
                    "seattle": [{
                        "name": "Capitol Hill",
                        "value": "Capitol Hill",
                        "link": "",
                        "slug": "capitol-hill",
                        "options": []
                    }, {
                        "name": "Fremont",
                        "value": "Fremont",
                        "link": "",
                        "slug": "fremont",
                        "options": []
                    }, {
                        "name": "Lake City",
                        "value": "Lake City",
                        "link": "",
                        "slug": "lake-city",
                        "options": []
                    }],
                    "new-york": [{
                        "name": "Chinatown",
                        "value": "Chinatown",
                        "link": "",
                        "slug": "chinatown",
                        "options": []
                    }, {
                        "name": "Soho",
                        "value": "Soho",
                        "link": "",
                        "slug": "soho",
                        "options": []
                    }, {
                        "name": "Upper East Side",
                        "value": "Upper East Side",
                        "link": "",
                        "slug": "upper-east-side",
                        "options": []
                    }],
                    "los-angeles": [{
                        "name": "Downtown",
                        "value": "Downtown",
                        "link": "",
                        "slug": "downtown",
                        "options": []
                    }, {
                        "name": "Skid Row",
                        "value": "Skid Row",
                        "link": "",
                        "slug": "skid-row",
                        "options": []
                    }, {
                        "name": "Soho",
                        "value": "Soho",
                        "link": "",
                        "slug": "soho",
                        "options": []
                    }, {
                        "name": "Venice",
                        "value": "Venice",
                        "link": "",
                        "slug": "venice",
                        "options": []
                    }],
                    "any": [{
                        "name": "Austin",
                        "value": "Austin",
                        "link": "",
                        "slug": "austin",
                        "options": []
                    }, {
                        "name": "Capitol Hill",
                        "value": "Capitol Hill",
                        "link": "",
                        "slug": "capitol-hill",
                        "options": []
                    }, {
                        "name": "Chinatown",
                        "value": "Chinatown",
                        "link": "",
                        "slug": "chinatown",
                        "options": []
                    }, {
                        "name": "Downtown",
                        "value": "Downtown",
                        "link": "",
                        "slug": "downtown",
                        "options": []
                    }, {
                        "name": "Englewood",
                        "value": "Englewood",
                        "link": "",
                        "slug": "englewood",
                        "options": []
                    }, {
                        "name": "Fremont",
                        "value": "Fremont",
                        "link": "",
                        "slug": "fremont",
                        "options": []
                    }, {
                        "name": "Lake City",
                        "value": "Lake City",
                        "link": "",
                        "slug": "lake-city",
                        "options": []
                    }, {
                        "name": "Skid Row",
                        "value": "Skid Row",
                        "link": "",
                        "slug": "skid-row",
                        "options": []
                    }, {
                        "name": "Soho",
                        "value": "Soho",
                        "link": "",
                        "slug": "soho",
                        "options": []
                    }, {
                        "name": "Upper East Side",
                        "value": "Upper East Side",
                        "link": "",
                        "slug": "upper-east-side",
                        "options": []
                    }, {
                        "name": "Venice",
                        "value": "Venice",
                        "link": "",
                        "slug": "venice",
                        "options": []
                    }, {
                        "name": "Wicker Park",
                        "value": "Wicker Park",
                        "link": "",
                        "slug": "wicker-park",
                        "options": []
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true,
                "parent_type": "values"
            }, {
                "id": 15,
                "name": "Street",
                "slug": "street",
                "base_slug": "",
                "parent_id": 14,
                "type": "select",
                "is_number": false,
                "is_text": true,
                "compare_operator": "=",
                "display_after": "",
                "full_width": false,
                "values": {
                    "austin": [{
                        "name": "CH Austin Street #1",
                        "value": "CH Austin Street #1",
                        "link": "",
                        "slug": "ch-austin-street-1",
                        "options": []
                    }, {
                        "name": "CH Austin Street #2",
                        "value": "CH Austin Street #2",
                        "link": "",
                        "slug": "ch-austin-street-2",
                        "options": []
                    }],
                    "englewood": [{
                        "name": "CH Englewood Street #1",
                        "value": "CH Englewood Street #1",
                        "link": "",
                        "slug": "ch-englewood-street-1",
                        "options": []
                    }, {
                        "name": "CH Englewood Street #2",
                        "value": "CH Englewood Street #2",
                        "link": "",
                        "slug": "ch-englewood-street-2",
                        "options": []
                    }],
                    "wicker-park": [{
                        "name": "CH Wicker Park Street #1",
                        "value": "CH Wicker Park Street #1",
                        "link": "",
                        "slug": "ch-wicker-park-street-1",
                        "options": []
                    }, {
                        "name": "CH Wicker Park Street #2",
                        "value": "CH Wicker Park Street #2",
                        "link": "",
                        "slug": "ch-wicker-park-street-2",
                        "options": []
                    }],
                    "downtown": [{
                        "name": "LA Downtown Street #1",
                        "value": "LA Downtown Street #1",
                        "link": "",
                        "slug": "la-downtown-street-1",
                        "options": []
                    }, {
                        "name": "LA Downtown Street #2",
                        "value": "LA Downtown Street #2",
                        "link": "",
                        "slug": "la-downtown-street-2",
                        "options": []
                    }],
                    "skid-row": [{
                        "name": "LA Skid Row Street #1",
                        "value": "LA Skid Row Street #1",
                        "link": "",
                        "slug": "la-skid-row-street-1",
                        "options": []
                    }, {
                        "name": "LA Skid Row Street #2",
                        "value": "LA Skid Row Street #2",
                        "link": "",
                        "slug": "la-skid-row-street-2",
                        "options": []
                    }],
                    "venice": [{
                        "name": "LA Venice Street #1",
                        "value": "LA Venice Street #1",
                        "link": "",
                        "slug": "la-venice-street-1",
                        "options": []
                    }, {
                        "name": "LA Venice Street #2",
                        "value": "LA Venice Street #2",
                        "link": "",
                        "slug": "la-venice-street-2",
                        "options": []
                    }, {
                        "name": "LA Venice Street #3",
                        "value": "LA Venice Street #3",
                        "link": "",
                        "slug": "la-venice-street-3",
                        "options": []
                    }],
                    "chinatown": [{
                        "name": "NY Chinatown Street #1",
                        "value": "NY Chinatown Street #1",
                        "link": "",
                        "slug": "ny-chinatown-street-1",
                        "options": []
                    }, {
                        "name": "NY Chinatown Street #2",
                        "value": "NY Chinatown Street #2",
                        "link": "",
                        "slug": "ny-chinatown-street-2",
                        "options": []
                    }, {
                        "name": "NY Chinatown Street #3",
                        "value": "NY Chinatown Street #3",
                        "link": "",
                        "slug": "ny-chinatown-street-3",
                        "options": []
                    }],
                    "soho": [{
                        "name": "NY Soho Street #1",
                        "value": "NY Soho Street #1",
                        "link": "",
                        "slug": "ny-soho-street-1",
                        "options": []
                    }, {
                        "name": "NY Soho Street #2",
                        "value": "NY Soho Street #2",
                        "link": "",
                        "slug": "ny-soho-street-2",
                        "options": []
                    }, {
                        "name": "NY Soho Street #3",
                        "value": "NY Soho Street #3",
                        "link": "",
                        "slug": "ny-soho-street-3",
                        "options": []
                    }],
                    "upper-east-side": [{
                        "name": "NY Upper East Side Street #1",
                        "value": "NY Upper East Side Street #1",
                        "link": "",
                        "slug": "ny-upper-east-side-street-1",
                        "options": []
                    }, {
                        "name": "NY Upper East Side Street #2",
                        "value": "NY Upper East Side Street #2",
                        "link": "",
                        "slug": "ny-upper-east-side-street-2",
                        "options": []
                    }, {
                        "name": "NY Upper East Side Street #3",
                        "value": "NY Upper East Side Street #3",
                        "link": "",
                        "slug": "ny-upper-east-side-street-3",
                        "options": []
                    }],
                    "capitol-hill": [{
                        "name": "SE Capitol Hill Street #1",
                        "value": "SE Capitol Hill Street #1",
                        "link": "",
                        "slug": "se-capitol-hill-street-1",
                        "options": []
                    }, {
                        "name": "SE Capitol Hill Street #2",
                        "value": "SE Capitol Hill Street #2",
                        "link": "",
                        "slug": "se-capitol-hill-street-2",
                        "options": []
                    }],
                    "fremont": [{
                        "name": "SE Fremont #2",
                        "value": "SE Fremont #2",
                        "link": "",
                        "slug": "se-fremont-2",
                        "options": []
                    }, {
                        "name": "SE Fremont Street #1",
                        "value": "SE Fremont Street #1",
                        "link": "",
                        "slug": "se-fremont-street-1",
                        "options": []
                    }],
                    "lake-city": [{
                        "name": "SE Lake City Street #1",
                        "value": "SE Lake City Street #1",
                        "link": "",
                        "slug": "se-lake-city-street-1",
                        "options": []
                    }, {
                        "name": "SE Lake City Street #2",
                        "value": "SE Lake City Street #2",
                        "link": "",
                        "slug": "se-lake-city-street-2",
                        "options": []
                    }],
                    "any": [{
                        "name": "CH Austin Street #1",
                        "value": "CH Austin Street #1",
                        "link": "",
                        "slug": "ch-austin-street-1",
                        "options": []
                    }, {
                        "name": "CH Austin Street #2",
                        "value": "CH Austin Street #2",
                        "link": "",
                        "slug": "ch-austin-street-2",
                        "options": []
                    }, {
                        "name": "CH Englewood Street #1",
                        "value": "CH Englewood Street #1",
                        "link": "",
                        "slug": "ch-englewood-street-1",
                        "options": []
                    }, {
                        "name": "CH Englewood Street #2",
                        "value": "CH Englewood Street #2",
                        "link": "",
                        "slug": "ch-englewood-street-2",
                        "options": []
                    }, {
                        "name": "CH Wicker Park Street #1",
                        "value": "CH Wicker Park Street #1",
                        "link": "",
                        "slug": "ch-wicker-park-street-1",
                        "options": []
                    }, {
                        "name": "CH Wicker Park Street #2",
                        "value": "CH Wicker Park Street #2",
                        "link": "",
                        "slug": "ch-wicker-park-street-2",
                        "options": []
                    }, {
                        "name": "LA Downtown Street #1",
                        "value": "LA Downtown Street #1",
                        "link": "",
                        "slug": "la-downtown-street-1",
                        "options": []
                    }, {
                        "name": "LA Downtown Street #2",
                        "value": "LA Downtown Street #2",
                        "link": "",
                        "slug": "la-downtown-street-2",
                        "options": []
                    }, {
                        "name": "LA Skid Row Street #1",
                        "value": "LA Skid Row Street #1",
                        "link": "",
                        "slug": "la-skid-row-street-1",
                        "options": []
                    }, {
                        "name": "LA Skid Row Street #2",
                        "value": "LA Skid Row Street #2",
                        "link": "",
                        "slug": "la-skid-row-street-2",
                        "options": []
                    }, {
                        "name": "LA Venice Street #1",
                        "value": "LA Venice Street #1",
                        "link": "",
                        "slug": "la-venice-street-1",
                        "options": []
                    }, {
                        "name": "LA Venice Street #2",
                        "value": "LA Venice Street #2",
                        "link": "",
                        "slug": "la-venice-street-2",
                        "options": []
                    }, {
                        "name": "LA Venice Street #3",
                        "value": "LA Venice Street #3",
                        "link": "",
                        "slug": "la-venice-street-3",
                        "options": []
                    }, {
                        "name": "NY Chinatown Street #1",
                        "value": "NY Chinatown Street #1",
                        "link": "",
                        "slug": "ny-chinatown-street-1",
                        "options": []
                    }, {
                        "name": "NY Chinatown Street #2",
                        "value": "NY Chinatown Street #2",
                        "link": "",
                        "slug": "ny-chinatown-street-2",
                        "options": []
                    }, {
                        "name": "NY Chinatown Street #3",
                        "value": "NY Chinatown Street #3",
                        "link": "",
                        "slug": "ny-chinatown-street-3",
                        "options": []
                    }, {
                        "name": "NY Soho Street #1",
                        "value": "NY Soho Street #1",
                        "link": "",
                        "slug": "ny-soho-street-1",
                        "options": []
                    }, {
                        "name": "NY Soho Street #2",
                        "value": "NY Soho Street #2",
                        "link": "",
                        "slug": "ny-soho-street-2",
                        "options": []
                    }, {
                        "name": "NY Soho Street #3",
                        "value": "NY Soho Street #3",
                        "link": "",
                        "slug": "ny-soho-street-3",
                        "options": []
                    }, {
                        "name": "NY Upper East Side Street #1",
                        "value": "NY Upper East Side Street #1",
                        "link": "",
                        "slug": "ny-upper-east-side-street-1",
                        "options": []
                    }, {
                        "name": "NY Upper East Side Street #2",
                        "value": "NY Upper East Side Street #2",
                        "link": "",
                        "slug": "ny-upper-east-side-street-2",
                        "options": []
                    }, {
                        "name": "NY Upper East Side Street #3",
                        "value": "NY Upper East Side Street #3",
                        "link": "",
                        "slug": "ny-upper-east-side-street-3",
                        "options": []
                    }, {
                        "name": "SE Capitol Hill Street #1",
                        "value": "SE Capitol Hill Street #1",
                        "link": "",
                        "slug": "se-capitol-hill-street-1",
                        "options": []
                    }, {
                        "name": "SE Capitol Hill Street #2",
                        "value": "SE Capitol Hill Street #2",
                        "link": "",
                        "slug": "se-capitol-hill-street-2",
                        "options": []
                    }, {
                        "name": "SE Fremont #2",
                        "value": "SE Fremont #2",
                        "link": "",
                        "slug": "se-fremont-2",
                        "options": []
                    }, {
                        "name": "SE Fremont Street #1",
                        "value": "SE Fremont Street #1",
                        "link": "",
                        "slug": "se-fremont-street-1",
                        "options": []
                    }, {
                        "name": "SE Lake City Street #1",
                        "value": "SE Lake City Street #1",
                        "link": "",
                        "slug": "se-lake-city-street-1",
                        "options": []
                    }, {
                        "name": "SE Lake City Street #2",
                        "value": "SE Lake City Street #2",
                        "link": "",
                        "slug": "se-lake-city-street-2",
                        "options": []
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true,
                "parent_type": "values"
            }, {
                "id": 13,
                "name": "Keyword",
                "slug": "keyword",
                "base_slug": "keyword",
                "parent_id": 0,
                "type": "keyword",
                "is_number": false,
                "is_text": false,
                "compare_operator": "=",
                "display_after": "",
                "full_width": false,
                "values": [],
                "suggestions": true,
                "placeholder": "Enter a city, neighborhood or ZIP code",
                "placeholder_from": "",
                "placeholder_to": "",
                "redirect": false,
                "redirect_new_tab": false,
                "local": {
                    "label": "City",
                    "slug": "city",
                    "attribute_slug": "city",
                    "id": 10,
                    "data_set": [{
                        "id": 10,
                        "slug": "new-york",
                        "attribute_slug": "city",
                        "name": "New York",
                        "link": "https:\/\/carmodyrealestates.com\/city\/new-york\/"
                    }, {
                        "id": 9,
                        "slug": "los-angeles",
                        "attribute_slug": "city",
                        "name": "Los Angeles",
                        "link": "https:\/\/carmodyrealestates.com\/city\/los-angeles\/"
                    }, {
                        "id": 13,
                        "slug": "chicago",
                        "attribute_slug": "city",
                        "name": "Chicago",
                        "link": "https:\/\/carmodyrealestates.com\/city\/chicago\/"
                    }, {
                        "id": 11,
                        "slug": "seattle",
                        "attribute_slug": "city",
                        "name": "Seattle",
                        "link": "https:\/\/carmodyrealestates.com\/city\/seattle\/"
                    }, {
                        "id": 389,
                        "slug": "california",
                        "attribute_slug": "city",
                        "name": "California",
                        "link": "https:\/\/carmodyrealestates.com\/city\/california\/"
                    }]
                },
                "data_sets": [{
                    "label": "Neighborhood",
                    "slug": "neighborhood"
                }],
                "api_endpoint": "https:\/\/carmodyrealestates.com\/wp-json\/myhome\/v1\/suggestions"
            }, {
                "id": 5,
                "name": "Bedrooms",
                "slug": "bedrooms",
                "base_slug": "",
                "parent_id": 0,
                "type": "select_range",
                "is_number": true,
                "is_text": false,
                "compare_operator": "equal",
                "display_after": "",
                "full_width": false,
                "values": {
                    "any": [{
                        "name": "1",
                        "value": "1",
                        "link": "",
                        "slug": "1",
                        "options": []
                    }, {
                        "name": "2",
                        "value": "2",
                        "link": "",
                        "slug": "2",
                        "options": []
                    }, {
                        "name": "3",
                        "value": "3",
                        "link": "",
                        "slug": "3",
                        "options": []
                    }, {
                        "name": "4",
                        "value": "4",
                        "link": "",
                        "slug": "4",
                        "options": []
                    }, {
                        "name": "5+",
                        "value": "5+",
                        "link": "",
                        "slug": "5",
                        "options": []
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true
            }, {
                "id": 7,
                "name": "Bathrooms",
                "slug": "bathrooms",
                "base_slug": "",
                "parent_id": 0,
                "type": "select_range",
                "is_number": true,
                "is_text": false,
                "compare_operator": "equal",
                "display_after": "",
                "full_width": false,
                "values": {
                    "any": [{
                        "name": "1",
                        "value": "1",
                        "link": "",
                        "slug": "1",
                        "options": []
                    }, {
                        "name": "2",
                        "value": "2",
                        "link": "",
                        "slug": "2",
                        "options": []
                    }, {
                        "name": "3",
                        "value": "3",
                        "link": "",
                        "slug": "3",
                        "options": []
                    }, {
                        "name": "4",
                        "value": "4",
                        "link": "",
                        "slug": "4",
                        "options": []
                    }, {
                        "name": "5+",
                        "value": "5+",
                        "link": "",
                        "slug": "5",
                        "options": []
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true
            }, {
                "id": 8,
                "name": "Property size",
                "slug": "property-size",
                "base_slug": "",
                "parent_id": 0,
                "type": "text_range",
                "is_number": true,
                "is_text": false,
                "compare_operator": "equal",
                "display_after": "ft\u00b2",
                "full_width": false,
                "values": {
                    "any": []
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true
            }, {
                "id": 6,
                "name": "Year",
                "slug": "year-built",
                "base_slug": "",
                "parent_id": 0,
                "type": "text_range",
                "is_number": true,
                "is_text": false,
                "compare_operator": "equal",
                "display_after": "",
                "full_width": false,
                "values": {
                    "any": []
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true
            }, {
                "id": 9,
                "name": "Lot size",
                "slug": "lot-size",
                "base_slug": "",
                "parent_id": 0,
                "type": "text_range",
                "is_number": true,
                "is_text": false,
                "compare_operator": "equal",
                "display_after": "ft\u00b2",
                "full_width": false,
                "values": {
                    "any": []
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true
            }, {
                "id": 17,
                "name": "Property ID",
                "slug": "property-id",
                "base_slug": "property_id",
                "parent_id": 0,
                "type": "id",
                "is_number": false,
                "is_text": false,
                "compare_operator": "=",
                "display_after": "",
                "full_width": false,
                "values": [],
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": ""
            }, {
                "id": 12,
                "name": "Features",
                "slug": "features",
                "base_slug": "",
                "parent_id": 0,
                "type": "checkbox",
                "is_number": false,
                "is_text": true,
                "compare_operator": "=",
                "display_after": "",
                "full_width": true,
                "values": {
                    "any": [{
                        "name": "Air Conditioning",
                        "value": "Air Conditioning",
                        "link": "https:\/\/carmodyrealestates.com\/features\/air-conditioning\/",
                        "slug": "air-conditioning",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Patio",
                        "value": "Patio",
                        "link": "https:\/\/carmodyrealestates.com\/features\/patio\/",
                        "slug": "patio",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Dishwasher",
                        "value": "Dishwasher",
                        "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                        "slug": "dishwasher",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Porch",
                        "value": "Porch",
                        "link": "https:\/\/carmodyrealestates.com\/features\/porch\/",
                        "slug": "porch",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Refrigerator",
                        "value": "Refrigerator",
                        "link": "https:\/\/carmodyrealestates.com\/features\/refrigerator\/",
                        "slug": "refrigerator",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Fireplace",
                        "value": "Fireplace",
                        "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                        "slug": "fireplace",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "Microwave",
                        "value": "Microwave",
                        "link": "https:\/\/carmodyrealestates.com\/features\/microwave\/",
                        "slug": "microwave",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }, {
                        "name": "WiFi",
                        "value": "WiFi",
                        "link": "https:\/\/carmodyrealestates.com\/features\/wifi\/",
                        "slug": "wifi",
                        "options": {
                            "parent_term": 0,
                            "parent_term_name": ""
                        }
                    }]
                },
                "suggestions": false,
                "placeholder": "",
                "placeholder_from": "",
                "placeholder_to": "",
                "checkbox_move": true,
                "parent_type": "values"
            }],
            "api_endpoint": "https:\/\/carmodyrealestates.com\/wp-json\/myhome\/v1\/estates",
            "search_form_position": "top",
            "label": "",
            "listing_default_view": "colThree",
            "load_more_button": "Load more",
            "listing_sort_by": "priceHighToLow",
            "listing_type": "load_more",
            "search_form_advanced_number": "3",
            "estates_per_page": "12",
            "lazy_loading_limit": "3",
            "current_page": "1",
            "lazy_loading": "",
            "show_advanced": "1",
            "show_clear": "1",
            "show_sort_by": "1",
            "show_view_types": "1",
            "show_results_number": "1",
            "featured": "",
            "show_sort_by_newest": "1",
            "show_sort_by_popular": "1",
            "show_sort_by_price_high_to_low": "1",
            "show_sort_by_price_low_to_high": "1",
            "show_sort_by_alphabetically": "",
            "hide_save_search": "",
            "initial_results": "1",
            "results": {
                "estates": [{
                    "id": 103,
                    "name": "House with a soul",
                    "slug": "house-with-a-soul",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/los-angeles\/house-with-a-soul\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-soul-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-soul-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-soul-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-soul-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-soul-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-soul.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "Los Angeles",
                            "value": "Los Angeles",
                            "link": "https:\/\/carmodyrealestates.com\/city\/los-angeles\/",
                            "slug": "los-angeles",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Downtown",
                            "value": "Downtown",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/downtown\/",
                            "slug": "downtown",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "LA Downtown Street #1",
                            "value": "LA Downtown Street #1",
                            "link": "https:\/\/carmodyrealestates.com\/street\/la-downtown-street-1\/",
                            "slug": "la-downtown-street-1",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "7",
                            "value": "7",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "7",
                            "value": "7",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "3700 ft\u00b2",
                            "value": "3700",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "1970",
                            "value": "1970",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "30000 ft\u00b2",
                            "value": "30000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Air Conditioning",
                            "value": "Air Conditioning",
                            "link": "https:\/\/carmodyrealestates.com\/features\/air-conditioning\/",
                            "slug": "air-conditioning",
                            "options": []
                        }, {
                            "name": "Balcony",
                            "value": "Balcony",
                            "link": "https:\/\/carmodyrealestates.com\/features\/balcony\/",
                            "slug": "balcony",
                            "options": []
                        }, {
                            "name": "Contemporary architecture",
                            "value": "Contemporary architecture",
                            "link": "https:\/\/carmodyrealestates.com\/features\/contemporary-architecture\/",
                            "slug": "contemporary-architecture",
                            "options": []
                        }, {
                            "name": "Dishwasher",
                            "value": "Dishwasher",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                            "slug": "dishwasher",
                            "options": []
                        }, {
                            "name": "Dryer",
                            "value": "Dryer",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dryer\/",
                            "slug": "dryer",
                            "options": []
                        }, {
                            "name": "High ceilings",
                            "value": "High ceilings",
                            "link": "https:\/\/carmodyrealestates.com\/features\/high-ceilings\/",
                            "slug": "high-ceilings",
                            "options": []
                        }, {
                            "name": "Hot Tub",
                            "value": "Hot Tub",
                            "link": "https:\/\/carmodyrealestates.com\/features\/hot-tub\/",
                            "slug": "hot-tub",
                            "options": []
                        }, {
                            "name": "Refrigerator",
                            "value": "Refrigerator",
                            "link": "https:\/\/carmodyrealestates.com\/features\/refrigerator\/",
                            "slug": "refrigerator",
                            "options": []
                        }, {
                            "name": "WiFi",
                            "value": "WiFi",
                            "link": "https:\/\/carmodyrealestates.com\/features\/wifi\/",
                            "slug": "wifi",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "664-676 S Alvarado St, Los Angeles, CA 90057, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-city__los-angeles mh-attribute-neighborhood__downtown mh-attribute-street__la-downtown-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__air-conditioning mh-attribute-features__balcony mh-attribute-features__contemporary-architecture mh-attribute-features__dishwasher mh-attribute-features__dryer mh-attribute-features__high-ceilings mh-attribute-features__hot-tub mh-attribute-features__refrigerator mh-attribute-features__wifi",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-soul-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 3, 2017",
                    "price": [{
                        "price": "$65.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 116,
                    "name": "20th century villa",
                    "slug": "20th-century-villa",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/new-york\/20th-century-villa\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/20th-century-villa-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/20th-century-villa-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/20th-century-villa-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/20th-century-villa-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/20th-century-villa-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/20th-century-villa.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "New York",
                            "value": "New York",
                            "link": "https:\/\/carmodyrealestates.com\/city\/new-york\/",
                            "slug": "new-york",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Upper East Side",
                            "value": "Upper East Side",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/upper-east-side\/",
                            "slug": "upper-east-side",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "NY Upper East Side Street #3",
                            "value": "NY Upper East Side Street #3",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ny-upper-east-side-street-3\/",
                            "slug": "ny-upper-east-side-street-3",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "7",
                            "value": "7",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "7",
                            "value": "7",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "4000 ft\u00b2",
                            "value": "4000",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "1980",
                            "value": "1980",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "7000 ft\u00b2",
                            "value": "7000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Balcony",
                            "value": "Balcony",
                            "link": "https:\/\/carmodyrealestates.com\/features\/balcony\/",
                            "slug": "balcony",
                            "options": []
                        }, {
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Garden",
                            "value": "Garden",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garden\/",
                            "slug": "garden",
                            "options": []
                        }, {
                            "name": "High ceilings",
                            "value": "High ceilings",
                            "link": "https:\/\/carmodyrealestates.com\/features\/high-ceilings\/",
                            "slug": "high-ceilings",
                            "options": []
                        }, {
                            "name": "Microwave",
                            "value": "Microwave",
                            "link": "https:\/\/carmodyrealestates.com\/features\/microwave\/",
                            "slug": "microwave",
                            "options": []
                        }, {
                            "name": "Patio",
                            "value": "Patio",
                            "link": "https:\/\/carmodyrealestates.com\/features\/patio\/",
                            "slug": "patio",
                            "options": []
                        }, {
                            "name": "Sauna",
                            "value": "Sauna",
                            "link": "https:\/\/carmodyrealestates.com\/features\/sauna\/",
                            "slug": "sauna",
                            "options": []
                        }, {
                            "name": "Swimming Pool",
                            "value": "Swimming Pool",
                            "link": "https:\/\/carmodyrealestates.com\/features\/swimming-pool\/",
                            "slug": "swimming-pool",
                            "options": []
                        }, {
                            "name": "WiFi",
                            "value": "WiFi",
                            "link": "https:\/\/carmodyrealestates.com\/features\/wifi\/",
                            "slug": "wifi",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "68-70 Pike St, New York, NY 10002, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-city__new-york mh-attribute-neighborhood__upper-east-side mh-attribute-street__ny-upper-east-side-street-3 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__balcony mh-attribute-features__fireplace mh-attribute-features__garden mh-attribute-features__high-ceilings mh-attribute-features__microwave mh-attribute-features__patio mh-attribute-features__sauna mh-attribute-features__swimming-pool mh-attribute-features__wifi",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/20th-century-villa-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 4, 2017",
                    "price": [{
                        "price": "$60.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 90,
                    "name": "Stylish countryside estate",
                    "slug": "stylish-countryside-estate",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/seattle\/stylish-countryside-estate\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/stylish-countryside-estate-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/stylish-countryside-estate-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/stylish-countryside-estate-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/stylish-countryside-estate-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/stylish-countryside-estate-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/stylish-countryside-estate.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "Seattle",
                            "value": "Seattle",
                            "link": "https:\/\/carmodyrealestates.com\/city\/seattle\/",
                            "slug": "seattle",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Fremont",
                            "value": "Fremont",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/fremont\/",
                            "slug": "fremont",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "SE Fremont #2",
                            "value": "SE Fremont #2",
                            "link": "https:\/\/carmodyrealestates.com\/street\/se-fremont-2\/",
                            "slug": "se-fremont-2",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "10",
                            "value": "10",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "10",
                            "value": "10",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "10000 ft\u00b2",
                            "value": "10000",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "1979",
                            "value": "1979",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "600000 ft\u00b2",
                            "value": "600000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Air Conditioning",
                            "value": "Air Conditioning",
                            "link": "https:\/\/carmodyrealestates.com\/features\/air-conditioning\/",
                            "slug": "air-conditioning",
                            "options": []
                        }, {
                            "name": "Barbecue",
                            "value": "Barbecue",
                            "link": "https:\/\/carmodyrealestates.com\/features\/barbecue\/",
                            "slug": "barbecue",
                            "options": []
                        }, {
                            "name": "Ceiling Fan",
                            "value": "Ceiling Fan",
                            "link": "https:\/\/carmodyrealestates.com\/features\/ceiling-fan\/",
                            "slug": "ceiling-fan",
                            "options": []
                        }, {
                            "name": "Dryer",
                            "value": "Dryer",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dryer\/",
                            "slug": "dryer",
                            "options": []
                        }, {
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Garbage disposal",
                            "value": "Garbage disposal",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garbage-disposal\/",
                            "slug": "garbage-disposal",
                            "options": []
                        }, {
                            "name": "Lawn",
                            "value": "Lawn",
                            "link": "https:\/\/carmodyrealestates.com\/features\/lawn\/",
                            "slug": "lawn",
                            "options": []
                        }, {
                            "name": "Porch",
                            "value": "Porch",
                            "link": "https:\/\/carmodyrealestates.com\/features\/porch\/",
                            "slug": "porch",
                            "options": []
                        }, {
                            "name": "TV Cable",
                            "value": "TV Cable",
                            "link": "https:\/\/carmodyrealestates.com\/features\/tv-cable\/",
                            "slug": "tv-cable",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "1523-1599 E Madison St, Seattle, WA 98122, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-city__seattle mh-attribute-neighborhood__fremont mh-attribute-street__se-fremont-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__air-conditioning mh-attribute-features__barbecue mh-attribute-features__ceiling-fan mh-attribute-features__dryer mh-attribute-features__fireplace mh-attribute-features__garbage-disposal mh-attribute-features__lawn mh-attribute-features__porch mh-attribute-features__tv-cable",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/stylish-countryside-estate-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 2, 2017",
                    "price": [{
                        "price": "$50.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 108,
                    "name": "Modern house with a spacious terrace",
                    "slug": "modern-house-with-a-spacious-terrace",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/chicago\/modern-house-with-a-spacious-terrace\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-a-spacious-terrace-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-a-spacious-terrace-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-a-spacious-terrace-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-a-spacious-terrace-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-a-spacious-terrace-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-a-spacious-terrace.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "Chicago",
                            "value": "Chicago",
                            "link": "https:\/\/carmodyrealestates.com\/city\/chicago\/",
                            "slug": "chicago",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Austin",
                            "value": "Austin",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/austin\/",
                            "slug": "austin",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "CH Austin Street #1",
                            "value": "CH Austin Street #1",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ch-austin-street-1\/",
                            "slug": "ch-austin-street-1",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "2",
                            "value": "2",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "2",
                            "value": "2",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "1500 ft\u00b2",
                            "value": "1500",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "1990",
                            "value": "1990",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "2500 ft\u00b2",
                            "value": "2500",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Air Conditioning",
                            "value": "Air Conditioning",
                            "link": "https:\/\/carmodyrealestates.com\/features\/air-conditioning\/",
                            "slug": "air-conditioning",
                            "options": []
                        }, {
                            "name": "Attic",
                            "value": "Attic",
                            "link": "https:\/\/carmodyrealestates.com\/features\/attic\/",
                            "slug": "attic",
                            "options": []
                        }, {
                            "name": "Garbage disposal",
                            "value": "Garbage disposal",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garbage-disposal\/",
                            "slug": "garbage-disposal",
                            "options": []
                        }, {
                            "name": "Gym",
                            "value": "Gym",
                            "link": "https:\/\/carmodyrealestates.com\/features\/gym\/",
                            "slug": "gym",
                            "options": []
                        }, {
                            "name": "Laundry",
                            "value": "Laundry",
                            "link": "https:\/\/carmodyrealestates.com\/features\/laundry\/",
                            "slug": "laundry",
                            "options": []
                        }, {
                            "name": "Lawn",
                            "value": "Lawn",
                            "link": "https:\/\/carmodyrealestates.com\/features\/lawn\/",
                            "slug": "lawn",
                            "options": []
                        }, {
                            "name": "Patio",
                            "value": "Patio",
                            "link": "https:\/\/carmodyrealestates.com\/features\/patio\/",
                            "slug": "patio",
                            "options": []
                        }, {
                            "name": "TV Cable",
                            "value": "TV Cable",
                            "link": "https:\/\/carmodyrealestates.com\/features\/tv-cable\/",
                            "slug": "tv-cable",
                            "options": []
                        }, {
                            "name": "WiFi",
                            "value": "WiFi",
                            "link": "https:\/\/carmodyrealestates.com\/features\/wifi\/",
                            "slug": "wifi",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "1-13 N Campbell Ave, Chicago, IL 60612, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-city__chicago mh-attribute-neighborhood__austin mh-attribute-street__ch-austin-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__air-conditioning mh-attribute-features__attic mh-attribute-features__garbage-disposal mh-attribute-features__gym mh-attribute-features__laundry mh-attribute-features__lawn mh-attribute-features__patio mh-attribute-features__tv-cable mh-attribute-features__wifi",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-a-spacious-terrace-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 3, 2017",
                    "price": [{
                        "price": "$27.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 97,
                    "name": "Modern ranch farmhouse",
                    "slug": "modern-ranch-farmhouse",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/chicago\/modern-ranch-farmhouse\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-ranch-farmhouse-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-ranch-farmhouse-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-ranch-farmhouse-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-ranch-farmhouse-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-ranch-farmhouse-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-ranch-farmhouse.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Hot Offer!",
                            "value": "Hot Offer!",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/hot-offer\/",
                            "slug": "hot-offer",
                            "options": {
                                "has_label": true,
                                "bg_color": "#cc2014",
                                "color": "#ffffff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "Chicago",
                            "value": "Chicago",
                            "link": "https:\/\/carmodyrealestates.com\/city\/chicago\/",
                            "slug": "chicago",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Wicker Park",
                            "value": "Wicker Park",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/wicker-park\/",
                            "slug": "wicker-park",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "CH Wicker Park Street #2",
                            "value": "CH Wicker Park Street #2",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ch-wicker-park-street-2\/",
                            "slug": "ch-wicker-park-street-2",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "6",
                            "value": "6",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "6",
                            "value": "6",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "4000 ft\u00b2",
                            "value": "4000",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "2002",
                            "value": "2002",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "50000 ft\u00b2",
                            "value": "50000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Air Conditioning",
                            "value": "Air Conditioning",
                            "link": "https:\/\/carmodyrealestates.com\/features\/air-conditioning\/",
                            "slug": "air-conditioning",
                            "options": []
                        }, {
                            "name": "Ceiling Fan",
                            "value": "Ceiling Fan",
                            "link": "https:\/\/carmodyrealestates.com\/features\/ceiling-fan\/",
                            "slug": "ceiling-fan",
                            "options": []
                        }, {
                            "name": "Contemporary architecture",
                            "value": "Contemporary architecture",
                            "link": "https:\/\/carmodyrealestates.com\/features\/contemporary-architecture\/",
                            "slug": "contemporary-architecture",
                            "options": []
                        }, {
                            "name": "Dishwasher",
                            "value": "Dishwasher",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                            "slug": "dishwasher",
                            "options": []
                        }, {
                            "name": "Dryer",
                            "value": "Dryer",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dryer\/",
                            "slug": "dryer",
                            "options": []
                        }, {
                            "name": "Hot Tub",
                            "value": "Hot Tub",
                            "link": "https:\/\/carmodyrealestates.com\/features\/hot-tub\/",
                            "slug": "hot-tub",
                            "options": []
                        }, {
                            "name": "Lawn",
                            "value": "Lawn",
                            "link": "https:\/\/carmodyrealestates.com\/features\/lawn\/",
                            "slug": "lawn",
                            "options": []
                        }, {
                            "name": "Patio",
                            "value": "Patio",
                            "link": "https:\/\/carmodyrealestates.com\/features\/patio\/",
                            "slug": "patio",
                            "options": []
                        }, {
                            "name": "TV Cable",
                            "value": "TV Cable",
                            "link": "https:\/\/carmodyrealestates.com\/features\/tv-cable\/",
                            "slug": "tv-cable",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "1201 S Loomis St, Chicago, IL 60608, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }, {
                        "name": "Hot Offer!",
                        "value": "Hot Offer!",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/hot-offer\/",
                        "slug": "hot-offer",
                        "options": {
                            "has_label": true,
                            "bg_color": "#cc2014",
                            "color": "#ffffff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__hot-offer mh-attribute-city__chicago mh-attribute-neighborhood__wicker-park mh-attribute-street__ch-wicker-park-street-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__air-conditioning mh-attribute-features__ceiling-fan mh-attribute-features__contemporary-architecture mh-attribute-features__dishwasher mh-attribute-features__dryer mh-attribute-features__hot-tub mh-attribute-features__lawn mh-attribute-features__patio mh-attribute-features__tv-cable",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-ranch-farmhouse-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 2, 2017",
                    "price": [{
                        "price": "$19.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 76,
                    "name": "Timber house resort",
                    "slug": "timber-house-resort",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/new-york\/timber-house-resort\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/timber-house-resort-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/timber-house-resort-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/timber-house-resort-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/timber-house-resort-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/timber-house-resort-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/timber-house-resort.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Open House",
                            "value": "Open House",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                            "slug": "open-house",
                            "options": {
                                "has_label": true,
                                "bg_color": "#00a587",
                                "color": "#ffffff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "New York",
                            "value": "New York",
                            "link": "https:\/\/carmodyrealestates.com\/city\/new-york\/",
                            "slug": "new-york",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Soho",
                            "value": "Soho",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/soho\/",
                            "slug": "soho",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "NY Soho Street #2",
                            "value": "NY Soho Street #2",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ny-soho-street-2\/",
                            "slug": "ny-soho-street-2",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "6",
                            "value": "6",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "6",
                            "value": "6",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "5000 ft\u00b2",
                            "value": "5000",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "1966",
                            "value": "1966",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "20000 ft\u00b2",
                            "value": "20000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Attic",
                            "value": "Attic",
                            "link": "https:\/\/carmodyrealestates.com\/features\/attic\/",
                            "slug": "attic",
                            "options": []
                        }, {
                            "name": "Barbecue",
                            "value": "Barbecue",
                            "link": "https:\/\/carmodyrealestates.com\/features\/barbecue\/",
                            "slug": "barbecue",
                            "options": []
                        }, {
                            "name": "Contemporary architecture",
                            "value": "Contemporary architecture",
                            "link": "https:\/\/carmodyrealestates.com\/features\/contemporary-architecture\/",
                            "slug": "contemporary-architecture",
                            "options": []
                        }, {
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Garbage disposal",
                            "value": "Garbage disposal",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garbage-disposal\/",
                            "slug": "garbage-disposal",
                            "options": []
                        }, {
                            "name": "Gym",
                            "value": "Gym",
                            "link": "https:\/\/carmodyrealestates.com\/features\/gym\/",
                            "slug": "gym",
                            "options": []
                        }, {
                            "name": "High ceilings",
                            "value": "High ceilings",
                            "link": "https:\/\/carmodyrealestates.com\/features\/high-ceilings\/",
                            "slug": "high-ceilings",
                            "options": []
                        }, {
                            "name": "Refrigerator",
                            "value": "Refrigerator",
                            "link": "https:\/\/carmodyrealestates.com\/features\/refrigerator\/",
                            "slug": "refrigerator",
                            "options": []
                        }, {
                            "name": "Washer",
                            "value": "Washer",
                            "link": "https:\/\/carmodyrealestates.com\/features\/washer\/",
                            "slug": "washer",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "26-35 47th Ave, Long Island City, NY 11101, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }, {
                        "name": "Open House",
                        "value": "Open House",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                        "slug": "open-house",
                        "options": {
                            "has_label": true,
                            "bg_color": "#00a587",
                            "color": "#ffffff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__open-house mh-attribute-city__new-york mh-attribute-neighborhood__soho mh-attribute-street__ny-soho-street-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__attic mh-attribute-features__barbecue mh-attribute-features__contemporary-architecture mh-attribute-features__fireplace mh-attribute-features__garbage-disposal mh-attribute-features__gym mh-attribute-features__high-ceilings mh-attribute-features__refrigerator mh-attribute-features__washer",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/timber-house-resort-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 1, 2017",
                    "price": [{
                        "price": "$14.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 120,
                    "name": "Charmin countryside estate",
                    "slug": "charmin-countryside-estate",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/new-york\/charmin-countryside-estate\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/charmin-countryside-estate-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/charmin-countryside-estate-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/charmin-countryside-estate-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/charmin-countryside-estate-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/charmin-countryside-estate-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/charmin-countryside-estate.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Open House",
                            "value": "Open House",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                            "slug": "open-house",
                            "options": {
                                "has_label": true,
                                "bg_color": "#00a587",
                                "color": "#ffffff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "New York",
                            "value": "New York",
                            "link": "https:\/\/carmodyrealestates.com\/city\/new-york\/",
                            "slug": "new-york",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Chinatown",
                            "value": "Chinatown",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/chinatown\/",
                            "slug": "chinatown",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "NY Chinatown Street #3",
                            "value": "NY Chinatown Street #3",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ny-chinatown-street-3\/",
                            "slug": "ny-chinatown-street-3",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "3",
                            "value": "3",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "3",
                            "value": "3",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "2000 ft\u00b2",
                            "value": "2000",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "2007",
                            "value": "2007",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "5000 ft\u00b2",
                            "value": "5000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Garbage disposal",
                            "value": "Garbage disposal",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garbage-disposal\/",
                            "slug": "garbage-disposal",
                            "options": []
                        }, {
                            "name": "Garden",
                            "value": "Garden",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garden\/",
                            "slug": "garden",
                            "options": []
                        }, {
                            "name": "High ceilings",
                            "value": "High ceilings",
                            "link": "https:\/\/carmodyrealestates.com\/features\/high-ceilings\/",
                            "slug": "high-ceilings",
                            "options": []
                        }, {
                            "name": "Hot Tub",
                            "value": "Hot Tub",
                            "link": "https:\/\/carmodyrealestates.com\/features\/hot-tub\/",
                            "slug": "hot-tub",
                            "options": []
                        }, {
                            "name": "Laundry",
                            "value": "Laundry",
                            "link": "https:\/\/carmodyrealestates.com\/features\/laundry\/",
                            "slug": "laundry",
                            "options": []
                        }, {
                            "name": "Microwave",
                            "value": "Microwave",
                            "link": "https:\/\/carmodyrealestates.com\/features\/microwave\/",
                            "slug": "microwave",
                            "options": []
                        }, {
                            "name": "Sauna",
                            "value": "Sauna",
                            "link": "https:\/\/carmodyrealestates.com\/features\/sauna\/",
                            "slug": "sauna",
                            "options": []
                        }, {
                            "name": "Security System",
                            "value": "Security System",
                            "link": "https:\/\/carmodyrealestates.com\/features\/security-system\/",
                            "slug": "security-system",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "24-21 94th St, Flushing, NY 11369, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }, {
                        "name": "Open House",
                        "value": "Open House",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                        "slug": "open-house",
                        "options": {
                            "has_label": true,
                            "bg_color": "#00a587",
                            "color": "#ffffff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__open-house mh-attribute-city__new-york mh-attribute-neighborhood__chinatown mh-attribute-street__ny-chinatown-street-3 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__fireplace mh-attribute-features__garbage-disposal mh-attribute-features__garden mh-attribute-features__high-ceilings mh-attribute-features__hot-tub mh-attribute-features__laundry mh-attribute-features__microwave mh-attribute-features__sauna mh-attribute-features__security-system",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/charmin-countryside-estate-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-and-sunny-flat-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 4, 2017",
                    "price": [{
                        "price": "$12.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 114,
                    "name": "House with a huge garden",
                    "slug": "house-with-a-huge-garden",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/los-angeles\/house-with-a-huge-garden\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-huge-garden-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-huge-garden-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-huge-garden-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-huge-garden-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-huge-garden-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-huge-garden.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "No Fees!",
                            "value": "No Fees!",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/no-fees\/",
                            "slug": "no-fees",
                            "options": {
                                "has_label": true,
                                "bg_color": "#f9940f",
                                "color": "#ffffff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "Los Angeles",
                            "value": "Los Angeles",
                            "link": "https:\/\/carmodyrealestates.com\/city\/los-angeles\/",
                            "slug": "los-angeles",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Venice",
                            "value": "Venice",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/venice\/",
                            "slug": "venice",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "LA Venice Street #3",
                            "value": "LA Venice Street #3",
                            "link": "https:\/\/carmodyrealestates.com\/street\/la-venice-street-3\/",
                            "slug": "la-venice-street-3",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "7",
                            "value": "7",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "5",
                            "value": "5",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "2900 ft\u00b2",
                            "value": "2900",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "2011",
                            "value": "2011",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "5000 ft\u00b2",
                            "value": "5000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Barbecue",
                            "value": "Barbecue",
                            "link": "https:\/\/carmodyrealestates.com\/features\/barbecue\/",
                            "slug": "barbecue",
                            "options": []
                        }, {
                            "name": "Ceiling Fan",
                            "value": "Ceiling Fan",
                            "link": "https:\/\/carmodyrealestates.com\/features\/ceiling-fan\/",
                            "slug": "ceiling-fan",
                            "options": []
                        }, {
                            "name": "Contemporary architecture",
                            "value": "Contemporary architecture",
                            "link": "https:\/\/carmodyrealestates.com\/features\/contemporary-architecture\/",
                            "slug": "contemporary-architecture",
                            "options": []
                        }, {
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Gym",
                            "value": "Gym",
                            "link": "https:\/\/carmodyrealestates.com\/features\/gym\/",
                            "slug": "gym",
                            "options": []
                        }, {
                            "name": "Hot Tub",
                            "value": "Hot Tub",
                            "link": "https:\/\/carmodyrealestates.com\/features\/hot-tub\/",
                            "slug": "hot-tub",
                            "options": []
                        }, {
                            "name": "Porch",
                            "value": "Porch",
                            "link": "https:\/\/carmodyrealestates.com\/features\/porch\/",
                            "slug": "porch",
                            "options": []
                        }, {
                            "name": "TV Cable",
                            "value": "TV Cable",
                            "link": "https:\/\/carmodyrealestates.com\/features\/tv-cable\/",
                            "slug": "tv-cable",
                            "options": []
                        }, {
                            "name": "WiFi",
                            "value": "WiFi",
                            "link": "https:\/\/carmodyrealestates.com\/features\/wifi\/",
                            "slug": "wifi",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "288-298 S San Pedro St, Los Angeles, CA 90012, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }, {
                        "name": "No Fees!",
                        "value": "No Fees!",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/no-fees\/",
                        "slug": "no-fees",
                        "options": {
                            "has_label": true,
                            "bg_color": "#f9940f",
                            "color": "#ffffff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__no-fees mh-attribute-city__los-angeles mh-attribute-neighborhood__venice mh-attribute-street__la-venice-street-3 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__barbecue mh-attribute-features__ceiling-fan mh-attribute-features__contemporary-architecture mh-attribute-features__fireplace mh-attribute-features__gym mh-attribute-features__hot-tub mh-attribute-features__porch mh-attribute-features__tv-cable mh-attribute-features__wifi",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/house-with-a-huge-garden-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 3, 2017",
                    "price": [{
                        "price": "$11.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 110,
                    "name": "Comfortable family house",
                    "slug": "comfortable-family-house",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/new-york\/comfortable-family-house\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-family-house-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-family-house-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-family-house-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-family-house-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-family-house-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-family-house.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "New York",
                            "value": "New York",
                            "link": "https:\/\/carmodyrealestates.com\/city\/new-york\/",
                            "slug": "new-york",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Soho",
                            "value": "Soho",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/soho\/",
                            "slug": "soho",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "NY Soho Street #2",
                            "value": "NY Soho Street #2",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ny-soho-street-2\/",
                            "slug": "ny-soho-street-2",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "3",
                            "value": "3",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "2",
                            "value": "2",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "2500 ft\u00b2",
                            "value": "2500",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "2012",
                            "value": "2012",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "6000 ft\u00b2",
                            "value": "6000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Contemporary architecture",
                            "value": "Contemporary architecture",
                            "link": "https:\/\/carmodyrealestates.com\/features\/contemporary-architecture\/",
                            "slug": "contemporary-architecture",
                            "options": []
                        }, {
                            "name": "Dishwasher",
                            "value": "Dishwasher",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                            "slug": "dishwasher",
                            "options": []
                        }, {
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Garbage disposal",
                            "value": "Garbage disposal",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garbage-disposal\/",
                            "slug": "garbage-disposal",
                            "options": []
                        }, {
                            "name": "Laundry",
                            "value": "Laundry",
                            "link": "https:\/\/carmodyrealestates.com\/features\/laundry\/",
                            "slug": "laundry",
                            "options": []
                        }, {
                            "name": "Microwave",
                            "value": "Microwave",
                            "link": "https:\/\/carmodyrealestates.com\/features\/microwave\/",
                            "slug": "microwave",
                            "options": []
                        }, {
                            "name": "Refrigerator",
                            "value": "Refrigerator",
                            "link": "https:\/\/carmodyrealestates.com\/features\/refrigerator\/",
                            "slug": "refrigerator",
                            "options": []
                        }, {
                            "name": "Sauna",
                            "value": "Sauna",
                            "link": "https:\/\/carmodyrealestates.com\/features\/sauna\/",
                            "slug": "sauna",
                            "options": []
                        }, {
                            "name": "WiFi",
                            "value": "WiFi",
                            "link": "https:\/\/carmodyrealestates.com\/features\/wifi\/",
                            "slug": "wifi",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "70-78 Pitt St, New York, NY 10002, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-city__new-york mh-attribute-neighborhood__soho mh-attribute-street__ny-soho-street-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__contemporary-architecture mh-attribute-features__dishwasher mh-attribute-features__fireplace mh-attribute-features__garbage-disposal mh-attribute-features__laundry mh-attribute-features__microwave mh-attribute-features__refrigerator mh-attribute-features__sauna mh-attribute-features__wifi",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-family-house-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-and-sunny-flat-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 3, 2017",
                    "price": [{
                        "price": "$9.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 78,
                    "name": "Suburban spacious house",
                    "slug": "suburban-spacious-house",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/seattle\/suburban-spacious-house\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/suburban-spacious-house-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/suburban-spacious-house-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/suburban-spacious-house-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/suburban-spacious-house-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/suburban-spacious-house-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/suburban-spacious-house.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Hot Offer!",
                            "value": "Hot Offer!",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/hot-offer\/",
                            "slug": "hot-offer",
                            "options": {
                                "has_label": true,
                                "bg_color": "#cc2014",
                                "color": "#ffffff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "Seattle",
                            "value": "Seattle",
                            "link": "https:\/\/carmodyrealestates.com\/city\/seattle\/",
                            "slug": "seattle",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Fremont",
                            "value": "Fremont",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/fremont\/",
                            "slug": "fremont",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "SE Fremont Street #1",
                            "value": "SE Fremont Street #1",
                            "link": "https:\/\/carmodyrealestates.com\/street\/se-fremont-street-1\/",
                            "slug": "se-fremont-street-1",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "6",
                            "value": "6",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "6",
                            "value": "6",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "5000 ft\u00b2",
                            "value": "5000",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "2006",
                            "value": "2006",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "30000 ft\u00b2",
                            "value": "30000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Attic",
                            "value": "Attic",
                            "link": "https:\/\/carmodyrealestates.com\/features\/attic\/",
                            "slug": "attic",
                            "options": []
                        }, {
                            "name": "Balcony",
                            "value": "Balcony",
                            "link": "https:\/\/carmodyrealestates.com\/features\/balcony\/",
                            "slug": "balcony",
                            "options": []
                        }, {
                            "name": "Ceiling Fan",
                            "value": "Ceiling Fan",
                            "link": "https:\/\/carmodyrealestates.com\/features\/ceiling-fan\/",
                            "slug": "ceiling-fan",
                            "options": []
                        }, {
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Garbage disposal",
                            "value": "Garbage disposal",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garbage-disposal\/",
                            "slug": "garbage-disposal",
                            "options": []
                        }, {
                            "name": "High ceilings",
                            "value": "High ceilings",
                            "link": "https:\/\/carmodyrealestates.com\/features\/high-ceilings\/",
                            "slug": "high-ceilings",
                            "options": []
                        }, {
                            "name": "Laundry",
                            "value": "Laundry",
                            "link": "https:\/\/carmodyrealestates.com\/features\/laundry\/",
                            "slug": "laundry",
                            "options": []
                        }, {
                            "name": "Refrigerator",
                            "value": "Refrigerator",
                            "link": "https:\/\/carmodyrealestates.com\/features\/refrigerator\/",
                            "slug": "refrigerator",
                            "options": []
                        }, {
                            "name": "Swimming Pool",
                            "value": "Swimming Pool",
                            "link": "https:\/\/carmodyrealestates.com\/features\/swimming-pool\/",
                            "slug": "swimming-pool",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "400-450 Battery St, Seattle, WA 98121, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }, {
                        "name": "Hot Offer!",
                        "value": "Hot Offer!",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/hot-offer\/",
                        "slug": "hot-offer",
                        "options": {
                            "has_label": true,
                            "bg_color": "#cc2014",
                            "color": "#ffffff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__hot-offer mh-attribute-city__seattle mh-attribute-neighborhood__fremont mh-attribute-street__se-fremont-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__attic mh-attribute-features__balcony mh-attribute-features__ceiling-fan mh-attribute-features__fireplace mh-attribute-features__garbage-disposal mh-attribute-features__high-ceilings mh-attribute-features__laundry mh-attribute-features__refrigerator mh-attribute-features__swimming-pool",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/suburban-spacious-house-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 1, 2017",
                    "price": [{
                        "price": "$8.000 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 99,
                    "name": "Comfortable suburban house",
                    "slug": "comfortable-suburban-house",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/new-york\/comfortable-suburban-house\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-suburban-house-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-suburban-house-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-suburban-house-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-suburban-house-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-suburban-house-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-suburban-house.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Open House",
                            "value": "Open House",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                            "slug": "open-house",
                            "options": {
                                "has_label": true,
                                "bg_color": "#00a587",
                                "color": "#ffffff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "New York",
                            "value": "New York",
                            "link": "https:\/\/carmodyrealestates.com\/city\/new-york\/",
                            "slug": "new-york",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Soho",
                            "value": "Soho",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/soho\/",
                            "slug": "soho",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "NY Soho Street #2",
                            "value": "NY Soho Street #2",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ny-soho-street-2\/",
                            "slug": "ny-soho-street-2",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "3",
                            "value": "3",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "2",
                            "value": "2",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "1900 ft\u00b2",
                            "value": "1900",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "2001",
                            "value": "2001",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "2600 ft\u00b2",
                            "value": "2600",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Attic",
                            "value": "Attic",
                            "link": "https:\/\/carmodyrealestates.com\/features\/attic\/",
                            "slug": "attic",
                            "options": []
                        }, {
                            "name": "Dishwasher",
                            "value": "Dishwasher",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                            "slug": "dishwasher",
                            "options": []
                        }, {
                            "name": "Dryer",
                            "value": "Dryer",
                            "link": "https:\/\/carmodyrealestates.com\/features\/dryer\/",
                            "slug": "dryer",
                            "options": []
                        }, {
                            "name": "Garden",
                            "value": "Garden",
                            "link": "https:\/\/carmodyrealestates.com\/features\/garden\/",
                            "slug": "garden",
                            "options": []
                        }, {
                            "name": "Gym",
                            "value": "Gym",
                            "link": "https:\/\/carmodyrealestates.com\/features\/gym\/",
                            "slug": "gym",
                            "options": []
                        }, {
                            "name": "Laundry",
                            "value": "Laundry",
                            "link": "https:\/\/carmodyrealestates.com\/features\/laundry\/",
                            "slug": "laundry",
                            "options": []
                        }, {
                            "name": "Microwave",
                            "value": "Microwave",
                            "link": "https:\/\/carmodyrealestates.com\/features\/microwave\/",
                            "slug": "microwave",
                            "options": []
                        }, {
                            "name": "Porch",
                            "value": "Porch",
                            "link": "https:\/\/carmodyrealestates.com\/features\/porch\/",
                            "slug": "porch",
                            "options": []
                        }, {
                            "name": "Swimming Pool",
                            "value": "Swimming Pool",
                            "link": "https:\/\/carmodyrealestates.com\/features\/swimming-pool\/",
                            "slug": "swimming-pool",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "50-56 South St, New York, NY 10043, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }, {
                        "name": "Open House",
                        "value": "Open House",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                        "slug": "open-house",
                        "options": {
                            "has_label": true,
                            "bg_color": "#00a587",
                            "color": "#ffffff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__open-house mh-attribute-city__new-york mh-attribute-neighborhood__soho mh-attribute-street__ny-soho-street-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__attic mh-attribute-features__dishwasher mh-attribute-features__dryer mh-attribute-features__garden mh-attribute-features__gym mh-attribute-features__laundry mh-attribute-features__microwave mh-attribute-features__porch mh-attribute-features__swimming-pool",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/comfortable-suburban-house-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 2, 2017",
                    "price": [{
                        "price": "$7.500 \/month ",
                        "is_range": false
                    }]
                }, {
                    "id": 86,
                    "name": "Quaint timber cottage",
                    "slug": "quaint-timber-cottage",
                    "excerpt": "How the adventure ended will be seen anon. Aouda was anxious, though she said nothing. As for Passepartout, he thought Mr....",
                    "link": "https:\/\/carmodyrealestates.com\/properties\/house\/chicago\/quaint-timber-cottage\/",
                    "has_price": true,
                    "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/quaint-timber-cottage-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/quaint-timber-cottage-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/quaint-timber-cottage-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/quaint-timber-cottage-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/quaint-timber-cottage-224x140.jpg 224w",
                    "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/quaint-timber-cottage.jpg",
                    "attributes": [{
                        "name": "Property type",
                        "slug": "property-type",
                        "has_archive": true,
                        "values": [{
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Offer type",
                        "slug": "offer-type",
                        "has_archive": true,
                        "values": [{
                            "name": "For Rent",
                            "value": "For Rent",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                            "slug": "rent",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Open House",
                            "value": "Open House",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                            "slug": "open-house",
                            "options": {
                                "has_label": true,
                                "bg_color": "#00a587",
                                "color": "#ffffff"
                            }
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "City",
                        "slug": "city",
                        "has_archive": true,
                        "values": [{
                            "name": "Chicago",
                            "value": "Chicago",
                            "link": "https:\/\/carmodyrealestates.com\/city\/chicago\/",
                            "slug": "chicago",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Neighborhood",
                        "slug": "neighborhood",
                        "has_archive": true,
                        "values": [{
                            "name": "Austin",
                            "value": "Austin",
                            "link": "https:\/\/carmodyrealestates.com\/neighborhood\/austin\/",
                            "slug": "austin",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Street",
                        "slug": "street",
                        "has_archive": true,
                        "values": [{
                            "name": "CH Austin Street #2",
                            "value": "CH Austin Street #2",
                            "link": "https:\/\/carmodyrealestates.com\/street\/ch-austin-street-2\/",
                            "slug": "ch-austin-street-2",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Bedrooms",
                        "slug": "bedrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "4",
                            "value": "4",
                            "link": "",
                            "slug": "bedrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Bathrooms",
                        "slug": "bathrooms",
                        "has_archive": false,
                        "values": [{
                            "name": "4",
                            "value": "4",
                            "link": "",
                            "slug": "bathrooms",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Property size",
                        "slug": "property-size",
                        "has_archive": false,
                        "values": [{
                            "name": "3000 ft\u00b2",
                            "value": "3000",
                            "link": "",
                            "slug": "property-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": true,
                        "icon": ""
                    }, {
                        "name": "Year",
                        "slug": "year-built",
                        "has_archive": false,
                        "values": [{
                            "name": "1983",
                            "value": "1983",
                            "link": "",
                            "slug": "year-built",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Lot size",
                        "slug": "lot-size",
                        "has_archive": false,
                        "values": [{
                            "name": "5000 ft\u00b2",
                            "value": "5000",
                            "link": "",
                            "slug": "lot-size",
                            "options": []
                        }],
                        "display_after": "ft\u00b2",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }, {
                        "name": "Features",
                        "slug": "features",
                        "has_archive": false,
                        "values": [{
                            "name": "Ceiling Fan",
                            "value": "Ceiling Fan",
                            "link": "https:\/\/carmodyrealestates.com\/features\/ceiling-fan\/",
                            "slug": "ceiling-fan",
                            "options": []
                        }, {
                            "name": "Fireplace",
                            "value": "Fireplace",
                            "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                            "slug": "fireplace",
                            "options": []
                        }, {
                            "name": "Gym",
                            "value": "Gym",
                            "link": "https:\/\/carmodyrealestates.com\/features\/gym\/",
                            "slug": "gym",
                            "options": []
                        }, {
                            "name": "Patio",
                            "value": "Patio",
                            "link": "https:\/\/carmodyrealestates.com\/features\/patio\/",
                            "slug": "patio",
                            "options": []
                        }, {
                            "name": "Porch",
                            "value": "Porch",
                            "link": "https:\/\/carmodyrealestates.com\/features\/porch\/",
                            "slug": "porch",
                            "options": []
                        }, {
                            "name": "Refrigerator",
                            "value": "Refrigerator",
                            "link": "https:\/\/carmodyrealestates.com\/features\/refrigerator\/",
                            "slug": "refrigerator",
                            "options": []
                        }, {
                            "name": "TV Cable",
                            "value": "TV Cable",
                            "link": "https:\/\/carmodyrealestates.com\/features\/tv-cable\/",
                            "slug": "tv-cable",
                            "options": []
                        }, {
                            "name": "Washer",
                            "value": "Washer",
                            "link": "https:\/\/carmodyrealestates.com\/features\/washer\/",
                            "slug": "washer",
                            "options": []
                        }, {
                            "name": "WiFi",
                            "value": "WiFi",
                            "link": "https:\/\/carmodyrealestates.com\/features\/wifi\/",
                            "slug": "wifi",
                            "options": []
                        }],
                        "display_after": "",
                        "show": true,
                        "card_show": false,
                        "icon": ""
                    }],
                    "address": "423-483 S Sacramento Blvd, Chicago, IL 60612, USA",
                    "days_ago": "8 years ago",
                    "is_featured": false,
                    "offer_type": [{
                        "name": "For Rent",
                        "value": "For Rent",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/rent\/",
                        "slug": "rent",
                        "options": {
                            "has_label": true,
                            "bg_color": "#29aae3",
                            "color": "#fff"
                        }
                    }, {
                        "name": "Open House",
                        "value": "Open House",
                        "link": "https:\/\/carmodyrealestates.com\/offer-type\/open-house\/",
                        "slug": "open-house",
                        "options": {
                            "has_label": true,
                            "bg_color": "#00a587",
                            "color": "#ffffff"
                        }
                    }],
                    "status": "publish",
                    "payment_status": "pre_payment",
                    "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__open-house mh-attribute-city__chicago mh-attribute-neighborhood__austin mh-attribute-street__ch-austin-street-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__ceiling-fan mh-attribute-features__fireplace mh-attribute-features__gym mh-attribute-features__patio mh-attribute-features__porch mh-attribute-features__refrigerator mh-attribute-features__tv-cable mh-attribute-features__washer mh-attribute-features__wifi",
                    "gallery": [{
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/quaint-timber-cottage-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                        "alt": ""
                    }, {
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                        "alt": ""
                    }],
                    "date": "October 2, 2017",
                    "price": [{
                        "price": "$6.600 \/month ",
                        "is_range": false
                    }]
                }],
                "totalResults": 15
            },
            "dependencies": {
                "property-type": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "offer-type": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "price": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "city": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "neighborhood": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "street": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "keyword": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "bedrooms": {
                    "all": false,
                    "house": true,
                    "apartment": true,
                    "office": false
                },
                "bathrooms": {
                    "all": false,
                    "house": true,
                    "apartment": true,
                    "office": false
                },
                "property-size": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "year-built": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "lot-size": {
                    "all": false,
                    "house": true,
                    "apartment": false,
                    "office": false
                },
                "property-id": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                },
                "features": {
                    "all": true,
                    "house": true,
                    "apartment": true,
                    "office": true
                }
            },
            "default_values": {
                "property-type": {
                    "id": 1,
                    "values": [{
                        "name": "House",
                        "value": "house"
                    }]
                },
                "offer-type": {
                    "id": 2,
                    "values": [{
                        "name": "For Rent",
                        "value": "rent"
                    }]
                }
            },
            "current_values": [],
            "homepage": "",
            "currencies": [{
                "name": "Dollar",
                "key": "price",
                "sign": "$",
                "location": "before_price",
                "thousands_sep": ".",
                "decimal_sep": ",",
                "decimal": "0",
                "price_decimal": "0"
            }, {
                "name": "Pound sterling",
                "key": "price_5",
                "sign": "\u00a3",
                "location": "before_price",
                "thousands_sep": ",",
                "decimal_sep": ".",
                "decimal": "0"
            }],
            "current_currency": "price",
            "lang": null,
            "show_gallery": "1",
            "show_date": "1",
            "key": "MyHomeListing1747769080"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/themes/myhome/assets/js/myhome.min358c.js?ver=3.1.69"
        id="myhome-min-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/mega_main_menu/src/js/frontend0899.js?ver=6.8.1"
        id="mmm_menu_functions-js"></script>
    <script type="text/javascript"
        src="../wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min555b.js?ver=6.13.0"
        id="wpb_composer_front_js-js"></script>
    <script type="text/javascript">
        (function() {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;;
            po.src = '../wp-content/plugins/easy-social-share-buttons3/assets/modules/pinterest-pro.min.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();
        (function() {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;;
            po.src = '../wp-content/plugins/easy-social-share-buttons3/assets/modules/subscribe-forms.min.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();
        (function() {
            var po = document.createElement('script');
            po.type = 'text/javascript';
            po.async = true;;
            po.src = '../wp-content/plugins/easy-social-share-buttons3/assets/js/essb-core.min.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(po, s);
        })();
    </script>
    <script type="text/javascript"></script>
</body>

</html>
