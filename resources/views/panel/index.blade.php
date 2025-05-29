@extends('layout.main')
@section('title', 'Featured Properties')

@section('body')


<body id="myhome-app"
    class="wp-singular page-template page-template-page_agents page-template-page_agents-php page page-id-924 wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">


    <div class="mh-fixed-menu mh-fixed-menu--transparent-light">
        <div class="mh-top-header mh-top-header--default">

            <div class="mh-layout">

                <div class="mh-menu-currency-wrapper">
                    <span class="mh-currency-switcher__label">Currency </span>
                    <select id="mh-menu-currency_switcher" class="selectpicker mh-currency-switcher">
                        <option value="any" selected="selected">Any</option>
                        <option value="price">
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
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3497 default_dropdown  drop_to_right submenu_default_width columns1">
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
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3546 default_dropdown  drop_to_right submenu_default_width columns1">
                                        <a href="../predefined-search-form-fields/"
                                            class="item_link  disable_icon" tabindex="4"> <i class=""></i>
                                            <span class="link_content"> <span class="link_text"> Predefined search
                                                    form </span> </span> </a> </li>
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
                                            id="myhome-submit-property" href="#/submit-property"
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
    <div class="mh-user-panel-wrapper">
        <div id="app"></div>
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
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/themes/myhome/assets/js/myhome.min358c.js?ver=3.1.69"
        id="myhome-min-js"></script>
    <script type="text/javascript" id="myhome-panel-js-extra">
        /* <![CDATA[ */
        var MyHomePanel = {
            "user": "false",
            "registration": "false",
            "translations": {
                "username": "Username",
                "accept": "I agree to the",
                "terms_of_service": "Terms of Service",
                "preview": "Preview",
                "discard": "Discard",
                "approve": "Approve",
                "trash": "Trash",
                "restore": "Restore",
                "all": "All",
                "moderation": "Moderation",
                "tour": "Virtual tour",
                "tour_info": "Add embed code",
                "remove_file": "Remove file",
                "upload_profile_picture": "Upload profile picture",
                "upload_plan_image": "Drop plan image here or click to upload",
                "upload_image": "Upload image",
                "upload_images": "Upload images",
                "remove_image": "Remove image",
                "remove": "Remove",
                "cancel_upload": "Cancel upload",
                "cancel_upload_confirm": "Are you sure you want to cancel this upload?",
                "image_upload_failed": "Image upload failed",
                "image_upload_wrong_type": "You can't upload files of this type.",
                "pay_with_credit_card": "Pay with credit card",
                "pay_with_paypal": "Pay with PayPal",
                "you_can_login": "Thank you for registering. You can log in now.",
                "image": "Image",
                "title": "Title",
                "status": "Status",
                "payment": "Payment",
                "edit": "Edit",
                "log_in": "Log in",
                "log_out": "Log out",
                "login": "Login",
                "login2": "Login",
                "password": "Password",
                "enter_password": "Password",
                "enter_password_repeat": "Repeat password",
                "user_name": "user name",
                "email": "E-mail",
                "name": "Name",
                "public_name": "Public name",
                "welcome": "Welcome",
                "submit_property": "Submit property",
                "my_properties": "My properties",
                "view_my_profile": "View my profile",
                "phone_number": "Phone number",
                "profile_picture": "Profile picture",
                "add_image": "Add image",
                "set_image": "Set image",
                "facebook_profile_link": "Facebook profile link",
                "twitter_profile_link": "Twitter profile link",
                "instagram_profile_link": "Instagram profile link",
                "linkedin_profile_link": "Linkedin profile link",
                "update_profile": "Update profile",
                "register": "Register",
                "email_address": "email address",
                "edit_property": "Edit property",
                "update_property": "Update property",
                "description": "Description",
                "featured_image": "Featured image",
                "all_images": "All images",
                "plans": "Plans",
                "add_plan": "Add plan",
                "delete": "Delete",
                "address": "Address",
                "visit_my_profile": "View my profile",
                "reset_password": "reset password",
                "retrieve_password": "Reset password",
                "remember_me": "remember me",
                "empty_field": "Empty field",
                "no_properties": "You haven\u2019t added any property yet",
                "no_properties_found": "No properties found",
                "yes": "Yes",
                "no": "No",
                "delete_property": "Are you sure you want to delete",
                "user_name_change": "Username ( cannot be changed )",
                "profile_updated": "Profile updated",
                "unknown_error": "Unknown error",
                "logged_in": "You are logged in",
                "logged_out": "You are logged out",
                "select_or_upload_media": "Select or upload",
                "use_this_media": "Use this media",
                "tags_instruction": "Use commas to separate",
                "awaiting_moderation": "This property is waiting for approval.",
                "make_payment": "Make a payment",
                "payed": "payed",
                "pay": "pay",
                "submit_thank_you": "Thank you for submitting your property information.",
                "submit_thank_you_mod": "Thank you for submitting your property information. Your property is waiting for approval.",
                "moderation_update": "If you edit your property, it won't be visible to the public until it is approved again.",
                "awaiting_payment": "Awaiting payment",
                "publish": "Publish",
                "pending": "Pending",
                "draft": "Draft",
                "private": "Private",
                "address_auto_complete": "Set map marker without changing address field",
                "email_valid": "Field must be a valid email",
                "required_valid": "Field is required.",
                "numeric_valid": "Field may only contain numeric characters.",
                "change_password": "Change password",
                "old_password": "Old password",
                "new_password": "New password",
                "error": "Error",
                "something_went_wrong": "Something went wrong!",
                "uploading": "Uploading",
                "processing": "Processing",
                "saving_changes": "Saving changes",
                "changes_saved": "Changes saved",
                "changing_password": "Password changed",
                "password_changed": "Password changes",
                "login_in_progress": "Login in progress...",
                "logout_in_progress": "Logout in progress...",
                "logout": "Logout",
                "email_sent": "E-mail sent",
                "email_sent_if_exists": "If your email exists...",
                "email_invalid": "Provided email is invalid",
                "retrieve_password_email": "Provide email to change password",
                "submit": "Submit",
                "register_in_progress": "Registering in progress...",
                "password_required": "Password required",
                "field_required": "This field is required",
                "email_required": "E-mail required",
                "login_required": "Login required",
                "fill_required_fields": "Please fill required fields",
                "min_4_chars": "Min 4 chars",
                "registered_title": "Thank you for registering",
                "registered_text": "You can now log in to your account",
                "registered_text_activate": "Check your email for confirmation link.",
                "load_property": "Loading property",
                "load_video": "Loading video",
                "are_you_sure": "Are you sure?",
                "yes_delete_it": "Yes, delete it!",
                "cancel": "Cancel",
                "property_deleted": "Property deleted",
                "property_saving": "Saving property",
                "property_creating": "Loading new form",
                "you_are_logged_out": "You are now logged out",
                "payment_processing": "Payment processing",
                "image_uploaded": "Image uploaded",
                "ok": "OK",
                "loaded": "Loaded",
                "id": "ID",
                "action": "Action",
                "date": "Added",
                "any": "Any",
                "sort_by": "Sort by",
                "name_asc": "Name (ASC)",
                "name_desc": "Name (DESC)",
                "back_to_login": "Back to login",
                "pay_stripe": "Pay with Stripe Checkout",
                "activation_link_sent": "Activation link sent",
                "sending_activation_link": "Sending activation link",
                "send_activation_link_again": "Resend activation link",
                "your_account_is_now_active": "Thank you for authenticating your registration, your account is now active",
                "this_link_was_already_used_or_expired": "This activation link is expired or have already been used.",
                "validation_not_size_must_be_less_than": "File size must be less than",
                "validation_field_is_required": "field is required",
                "validation_field_must_be_at_least": "field must be at least",
                "validation_characters": "characters.",
                "validation_field_must_be": "field must be",
                "validation_field_must_be_image": "field must be an image.",
                "validation_field_must_be_email": "field must be a valid email.",
                "validation_confirmation_does_not_match": "confirmation does not match.",
                "validation_decimal": "field must be a number",
                "validation_integer": "field must be a whole number",
                "reset": "Reset",
                "enter_your_email": "Enter your e-mail",
                "reset_password_success": "If your email address exists in our database, you will receive a password recovery link at your email address in a few minutes.",
                "reset_password_link_expired": "Link expired",
                "reset_password_link_expired_text": "Your reset password link expired.",
                "reset_password_new": "New password",
                "reset_password_new_text": "A new password has been sent to your e-mail address.",
                "reset_password_error": "Error",
                "reset_password_error_text": "Failure in sending mail. ",
                "account_activation_link_expired": "Link Expired",
                "account_activation_link_expired_text": "Account activation link expired. ",
                "account_send_activation_again": "Send again",
                "account_send_activation_link": "Send activation link",
                "account_send_activation_link_again": "Send activation link again",
                "send": "Send ",
                "account_activation_link_resend": "Account inactive",
                "account_activation_link_resend_text": "Check your email for the confirmation link.",
                "gallery": "Gallery",
                "continue": "Continue",
                "previous_step": "Previous step",
                "gallery_required": "The Gallery field is required.",
                "max_number_files": "Maximum number of files:",
                "attachment": "Attachment",
                "attachments": "Attachments",
                "attachment_name": "Attachment name",
                "upload_attachments": "Upload attachments",
                "plan": "Plan",
                "plan_name": "Plan name",
                "upload_plans": "Upload plans",
                "attachments_required": "The Attachments field is required",
                "plans_required": "The Plans field is required",
                "value": "Value",
                "name_additional": "Name (e.g. Roofing)",
                "value_additional": "Value (e.g. Wooden)",
                "additional_features_required": "The additional features field is required.",
                "profile": "Profile",
                "close": "Close",
                "confirm": "Confirm",
                "favorite_properties": "Favorite properties",
                "edit_profile": "Edit profile",
                "saved_searches": "Saved searches",
                "invite_agent": "Invite agent",
                "join_agency": "Join Agency",
                "decline": "Decline",
                "re_generate": "Generate new key",
                "invitation_code": "Invitation code",
                "agents": "Agents",
                "agency_invites": "Invitations from the agency",
                "my_dashboard": "My Dashboard",
                "account": "Account",
                "favorite": "Favorite",
                "properties_no_results": "No matching records found",
                "properties_no_data": "No data available",
                "properties_per_page": "Rows per page",
                "favorite_no_results": "No matching records found",
                "favorite_no_data": "No data available",
                "favorite_per_page": "Rows per page",
                "saved_searches_no_results": "No matching records found",
                "saved_searches_no_data": "No data available",
                "saved_searches_per_page": "Rows per page",
                "actions": "Actions",
                "created": "Created",
                "expire": "Expire",
                "link": "Link",
                "register_closed": "Register closed",
                "register_closed_text": "Register closed text",
                "login_error": "Login error",
                "login_error_text": "Unexpected error in the authentication system",
                "enter_location": "Enter a location",
                "video": "Video",
                "add_new": "Add new",
                "add": "Add",
                "list": "List",
                "change_click": "Change address on map click",
                "location": "Location",
                "virtual_tour": "Virtual Tour",
                "additional_features": "Additional features",
                "no_agents": "You do not have any agents assigned to your agency",
                "agents_assigned": "List of agents assigned to your agency",
                "agents_code": "If agent type this code in his Profile Setting, will be assigned to your agency.",
                "connect_with": "Connect with",
                "invite_agent_type_email": "Type email of a agent who is already registered. He needs to accept invitation in the profile settings.",
                "properties_dots": "Properties: ",
                "featured_properties_dots": "Featured properties: ",
                "buy_package": "Buy package",
                "update_property_success": "Property updated successfully",
                "edit_profile_upload_photo": "Upload your profile photo",
                "edit_profile_additional_information": "Additional information",
                "removed": "Removed",
                "sure_remove": "Are you sure you want to remove",
                "no_package_yet": "You do not have package yet",
                "buy_later": "Buy later",
                "choose_package": "Choose package",
                "agency_code": "Agency code",
                "agency_invitation": "Agency invitation",
                "account_assigned": "Your account is assigned to:"
            },
            "active_tab": "login",
            "request_url": "https:\/\/carmodyrealestates.com\/wp-admin\/admin-ajax.php",
            "properties_url": "https:\/\/carmodyrealestates.com\/wp-admin\/admin-post.php?action=myhome_user_properties",
            "nonce": "69eb81400b",
            "captcha_enabled": "",
            "captcha_site_key": "",
            "steps": [{
                "name": "Basic",
                "key": "1529131355015",
                "fields": [{
                    "name": "Title",
                    "slug": "title",
                    "label": "",
                    "required": false,
                    "width": "1",
                    "instructions": "",
                    "multiple": false,
                    "type": "title",
                    "autocomplete": false,
                    "is_location_part": false,
                    "allow_new_values": false
                }, {
                    "name": "Description",
                    "slug": "description",
                    "label": "",
                    "required": false,
                    "width": "1",
                    "instructions": "",
                    "multiple": false,
                    "type": "description",
                    "autocomplete": false,
                    "is_location_part": false,
                    "allow_new_values": false
                }, {
                    "name": "Price",
                    "base_slug": "price",
                    "slug": "price",
                    "label": "",
                    "required": false,
                    "width": "2",
                    "instructions": "",
                    "multiple": false,
                    "type": "number",
                    "id": "3",
                    "currency_key": "price",
                    "autocomplete": false,
                    "is_location_part": false,
                    "allow_new_values": false,
                    "display_before": "",
                    "display_after": "$",
                    "dependencies": {
                        "all": true,
                        "house": true,
                        "apartment": true,
                        "office": true
                    },
                    "control": "select"
                }, {
                    "name": "Price",
                    "base_slug": "price",
                    "slug": "price_5",
                    "label": "",
                    "required": false,
                    "width": "2",
                    "instructions": "",
                    "multiple": false,
                    "type": "number",
                    "id": "3",
                    "currency_key": "price_5",
                    "autocomplete": false,
                    "is_location_part": false,
                    "allow_new_values": false,
                    "display_before": "",
                    "display_after": "\u00a3",
                    "dependencies": {
                        "all": true,
                        "house": true,
                        "apartment": true,
                        "office": true
                    },
                    "control": "select"
                }, {
                    "name": "Property type",
                    "base_slug": "property_type",
                    "slug": "property-type",
                    "label": "",
                    "required": true,
                    "width": "2",
                    "instructions": "",
                    "multiple": false,
                    "allow_new_values": false,
                    "autocomplete": false,
                    "type": "text",
                    "id": "1",
                    "is_breadcrumbs": true,
                    "control": "select",
                    "is_location_part": false,
                    "parent_id": 0,
                    "parent_type": "values",
                    "values": {
                        "any": [{
                            "name": "Apartment",
                            "value": "Apartment",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/apartment\/",
                            "slug": "apartment",
                            "options": {
                                "parent_term": 0,
                                "parent_term_name": ""
                            }
                        }, {
                            "name": "House",
                            "value": "House",
                            "link": "https:\/\/carmodyrealestates.com\/property-type\/house\/",
                            "slug": "house",
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
                    "tags": false,
                    "dependencies": {
                        "all": true,
                        "house": true,
                        "apartment": true,
                        "office": true
                    }
                }, {
                    "name": "Offer type",
                    "base_slug": "offer_type",
                    "slug": "offer-type",
                    "label": "",
                    "required": false,
                    "width": "2",
                    "instructions": "",
                    "multiple": false,
                    "allow_new_values": false,
                    "autocomplete": false,
                    "type": "text",
                    "id": "2",
                    "is_breadcrumbs": "false",
                    "control": "text",
                    "is_location_part": false,
                    "parent_id": 0,
                    "parent_type": "values",
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
                    "tags": false,
                    "dependencies": {
                        "all": true,
                        "house": true,
                        "apartment": true,
                        "office": true
                    }
                }, {
                    "name": "Gallery",
                    "slug": "gallery",
                    "label": "",
                    "required": false,
                    "width": "1",
                    "instructions": "",
                    "multiple": false,
                    "type": "gallery",
                    "autocomplete": false,
                    "is_location_part": false,
                    "allow_new_values": false
                }]
            }],
            "show_rules": "",
            "rules_link": "#",
            "force_address_update": "",
            "initial_position": {
                "lat": "40.71342479999999",
                "lng": "-74.00552449999998"
            },
            "validation": {
                "gallery_max-number": "25",
                "gallery_max-size": "8",
                "plans_max-number": "10",
                "plans_max-size": "8",
                "attachments_max-number": "10",
                "attachments_max-size": "8"
            },
            "account_types": {
                "agent": "Agent",
                "agency": "Agency",
                "buyer": "Buyer"
            },
            "account_type": "agent",
            "user_select_type": "",
            "agent_join_agency": "1",
            "expire": "",
            "payments": "",
            "pricing_table": "https:\/\/carmodyrealestates.com\/pricing-table\/",
            "submit_registered": "1",
            "validate_number_field": "1"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="../wp-content/themes/myhome/assets/js/panel33f1.js?ver=1747769085"
        id="myhome-panel-js"></script>
    <script type="text/javascript" src="../wp-content/plugins/mega_main_menu/src/js/frontend0899.js?ver=6.8.1"
        id="mmm_menu_functions-js"></script>
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

<!-- Mirrored from carmodyrealestates.com/panel/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 May 2025 19:26:09 GMT -->

</html>
