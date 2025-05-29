@extends('layout.main')
@section('title', 'Featured Properties')

@section('body')
<body id="myhome-app"
    class="wp-singular page-template page-template-page_full-width-with-top-title page-template-page_full-width-with-top-title-php page page-id-2551 wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">

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
                            <a class="logo_link" href="../" title="benallysrealestates.com">
                                <img src="../wp-content/uploads/2017/03/logo-40-blue-black.png"
                                    data-logo="https://benallysrealestates.com/wp-content/uploads/2017/03/logo-40-blue-black.png"
                                    alt="benallysrealestates.com">
                            </a>
                        </span>
                        <!-- /class="nav_logo" -->
                        <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                            <li id="menu-item-1424"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1424 default_dropdown  drop_to_right submenu_default_width columns1">
                                <a href="#" class="item_link  disable_icon" tabindex="1"> <i class=""></i>
                                    <span class="link_content"> <span class="link_text"> Home
                                        </span> </span> </a>
                            </li>
                            <li id="menu-item-3497"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3497 default_dropdown  drop_to_right submenu_default_width columns1">
                                <a href="#" class="item_link  disable_icon" tabindex="2"> <i class=""></i>
                                    <span class="link_content"> <span class="link_text">
                                            Properties </span> </span> </a>
                                <ul class="mega_dropdown">
                                    <li id="menu-item-3550"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3550 default_dropdown  drop_to_right submenu_default_width columns1">
                                        <a href="../city-neighborhood-street/" class="item_link  disable_icon"
                                            tabindex="3"> <i class=""></i>
                                            <span class="link_content"> <span class="link_text"> City >> Neighborhood
                                                    >> Street </span> </span> </a>
                                    </li>
                                    <li id="menu-item-3546"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3546 default_dropdown  drop_to_right submenu_default_width columns1">
                                        <a href="../predefined-search-form-fields/" class="item_link  disable_icon"
                                            tabindex="4"> <i class=""></i>
                                            <span class="link_content"> <span class="link_text"> Predefined search
                                                    form </span> </span> </a>
                                    </li>
                                    <li id="menu-item-3545"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3545 default_dropdown  drop_to_right submenu_default_width columns1">
                                        <a href="../advanced-search-form/" class="item_link  disable_icon"
                                            tabindex="5"> <i class=""></i> <span class="link_content"> <span
                                                    class="link_text"> Advanced Search Form </span> </span> </a>
                                    </li>
                                </ul><!-- /.mega_dropdown -->
                            </li>
                            <li id="menu-item-3499"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3499 default_dropdown  drop_to_right submenu_default_width columns1">
                                <a href="../about-us/" class="item_link  disable_icon" tabindex="6"> <i
                                        class=""></i> <span class="link_content"> <span class="link_text">
                                            About us </span> </span> </a>
                            </li>
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
    <div class="mh-sticky-menu-placeholder mh-sticky-menu-placeholder--active"></div>
    <div class="mh-top-title mh-top-title--image-background lazyload" style="background-size:cover;"
        data-bgset="https://benallysrealestates.com/wp-content/uploads/2017/01/comfortable-suburban-house-960x250.jpg 960w, https://benallysrealestates.com/wp-content/uploads/2017/01/comfortable-suburban-house-1440x375.jpg 1440w"
        data-sizes="auto" data-parent-fit="cover">
        <h1 class="mh-top-title__heading">Featured Properties</h1>
    </div>

    <div class="mh-layout mh-top-title-offset">

        <div id="post-2551" class="mh-post">
            <section class="wpb-content-wrapper">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1530530997764">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  vc_custom_1530531065155">
                                    <div class="wpb_wrapper">
                                        <div
                                            style="font-size: 21px; text-align: center; max-width: 768px; margin: 0 auto;">
                                            After a time we drew near the road, and as we did so we heard the clatter of
                                            hoofs and saw through the tree stems three cavalry soldiers riding slowly
                                            towards</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="mh-grid">
                                    <div class="mh-grid__1of3">
                                        <div
                                            class=" mh-attribute-property-type__apartment mh-attribute-offer-type__sale mh-attribute-offer-type__open-house mh-attribute-city__chicago mh-attribute-neighborhood__wicker-park mh-attribute-street__ch-wicker-park-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__attic mh-attribute-features__dishwasher mh-attribute-features__fireplace mh-attribute-features__garden mh-attribute-features__gym mh-attribute-features__high-ceilings mh-attribute-features__microwave mh-attribute-features__patio mh-attribute-features__swimming-pool ">
                                            <article class="mh-estate-vertical mh-estate-vertical--list">
                                                <add-to-favorite class="myhome-add-to-favorite"
                                                    :property-id="113"></add-to-favorite>

                                                <a href="../properties/apartment/chicago/modern-apartment-in-the-city-center/"
                                                    title="Modern apartment in the city center" class="mh-thumbnail">

                                                    <div class="mh-thumbnail__inner">
                                                        <img data-srcset="https://benallysrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-120x75.jpg 120w, https://benallysrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-848x530.jpg 848w, https://benallysrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-600x375.jpg 600w, https://benallysrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-400x250.jpg 400w, https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-224x140.jpg 224w"
                                                            class="lazyload " data-sizes="auto"
                                                            alt="Modern apartment in the city center">
                                                    </div>

                                                    <div class="mh-thumbnail__featured">
                                                        <i class="fas fa-star"></i>
                                                    </div>

                                                    <div class="mh-caption">

                                                        <div class="mh-caption__inner mh-label__sale"
                                                            style="background-color: #29aae3; color: #fff">
                                                            For Sale </div>
                                                        <div class="mh-caption__inner mh-label__open-house"
                                                            style="background-color: #00a587; color: #ffffff">
                                                            Open House </div>

                                                    </div>

                                                    <div class="mh-estate-vertical__text">
                                                        <div class="mh-estate-vertical__text__inner">
                                                            Property overview
                                                            3 bedroom flat , with all utilities and POOL already in!
                                                            Gorgeous and secluded lot with panoramic views, located on
                                                            ten acres at the end o... </div>
                                                    </div>
                                                </a>

                                                <div class="mh-estate-vertical__content">
                                                    <h3 class="mh-estate-vertical__heading">
                                                        <a href="../properties/apartment/chicago/modern-apartment-in-the-city-center/"
                                                            title="Modern apartment in the city center">
                                                            Modern apartment in the city center </a>
                                                    </h3>

                                                    <address class="mh-estate-vertical__subheading">
                                                        <i class="flaticon-pin"></i>
                                                        122-140 N Morgan St, Chicago, IL 60607, USA
                                                    </address>

                                                    <div class="mh-estate-vertical__primary">
                                                        <div>
                                                            $1.300.000 </div>
                                                    </div>

                                                    <div>
                                                        <div class="mh-estate__list">

                                                            <div
                                                                class="mh-estate-vertical__more-info mh-attribute__bedrooms">
                                                                <strong>
                                                                    Bedrooms:
                                                                </strong>

                                                                3
                                                            </div>


                                                            <div
                                                                class="mh-estate-vertical__more-info mh-attribute__bathrooms">
                                                                <strong>
                                                                    Bathrooms:
                                                                </strong>

                                                                2
                                                            </div>


                                                            <div
                                                                class="mh-estate-vertical__more-info mh-attribute__property-size">
                                                                <strong>
                                                                    Property size:
                                                                </strong>

                                                                1100 ft²
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="mh-estate-vertical__bottom">
                                                        <div class="mh-estate-vertical__bottom__inner">

                                                            <div class="mh-estate-vertical__date">
                                                                8 years ago </div>

                                                            <div class="mh-estate-vertical__buttons-wrapper">
                                                                <div class="mh-estate-vertical__buttons">

                                                                    <div class="mh-estate-vertical__buttons__single">
                                                                        {{-- Compare button --}}
                                                                    </div>

                                                                    <div class="mh-estate-vertical__buttons__single">
                                                                        <a href="../properties/apartment/chicago/modern-apartment-in-the-city-center/"
                                                                            title="Modern apartment in the city center"
                                                                            class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary-ghost">
                                                                            Details <span
                                                                                class="mdl-button__icon-right">
                                                                                <i class="fas fa-angle-right"></i>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 48px"><span
                                        class="vc_empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection

@section('scripts')
    <script type="text/javascript" id="myhome-min-js-extra">
        /* <![CDATA[ */
        var MyHome = {
            "site": "https:\/\/benallysrealestates.com",
            "compare": "1",
            "api": "https:\/\/benallysrealestates.com\/wp-json\/myhome\/v1\/estates",
            "panelUrl": "https:\/\/benallysrealestates.com\/panel\/",
            "user_fields": [],
            "is_register_open": "",
            "requestUrl": "https:\/\/benallysrealestates.com\/wp-admin\/admin-ajax.php",
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
            "theme_url": "https:\/\/benallysrealestates.com\/wp-content\/themes\/myhome"
        };
        /* ]]> */
    </script>
@endsection
