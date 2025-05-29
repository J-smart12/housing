@extends('layout.main')
@section('title', 'Featured Properties')

@section('body')


    <body id="myhome-app"
        class="archive post-type-archive post-type-archive-estate wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">


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


            <div class="mh-header">
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
                                <a class="logo_link" href="../index.html" title="Carmodyrealestates.com">
                                    <img src="../wp-content/uploads/2017/03/logo-40-blue-black.png"
                                        data-logo="https://carmodyrealestates.com/wp-content/uploads/2017/03/logo-40-blue-black.png"
                                        alt="Carmodyrealestates.com">
                                </a>
                            </span>
                            <!-- /class="nav_logo" -->
                            <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                                <li id="menu-item-1424"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1424 default_dropdown  drop_to_right submenu_default_width columns1">
                                    <a href="#" class="item_link  disable_icon" tabindex="1"> <i class=""></i>
                                        <span class="link_content"> <span class="link_text"> Home </span> </span> </a>
                                </li>
                                <li id="menu-item-3497"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3497 default_dropdown  drop_to_right submenu_default_width columns1">
                                    <a href="#" class="item_link  disable_icon" tabindex="2"> <i class=""></i>
                                        <span class="link_content"> <span class="link_text"> Properties </span> </span> </a>
                                    <ul class="mega_dropdown">
                                        <li id="menu-item-3550"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3550 default_dropdown  drop_to_right submenu_default_width columns1">
                                            <a href="../city-neighborhood-street/index.html" class="item_link  disable_icon"
                                                tabindex="3"> <i class=""></i> <span class="link_content"> <span
                                                        class="link_text"> City >> Neighborhood >> Street </span> </span>
                                            </a>
                                        </li>
                                        <li id="menu-item-3546"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3546 default_dropdown  drop_to_right submenu_default_width columns1">
                                            <a href="../predefined-search-form-fields/index.html"
                                                class="item_link  disable_icon" tabindex="4"> <i class=""></i> <span
                                                    class="link_content"> <span class="link_text"> Predefined search form
                                                    </span> </span> </a>
                                        </li>
                                        <li id="menu-item-3545"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3545 default_dropdown  drop_to_right submenu_default_width columns1">
                                            <a href="../advanced-search-form/index.html" class="item_link  disable_icon"
                                                tabindex="5"> <i class=""></i> <span class="link_content"> <span
                                                        class="link_text"> Advanced Search Form </span> </span> </a>
                                        </li>
                                    </ul><!-- /.mega_dropdown -->
                                </li>
                                <li id="menu-item-3499"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3499 default_dropdown  drop_to_right submenu_default_width columns1">
                                    <a href="../about-us/index.html" class="item_link  disable_icon" tabindex="6"> <i
                                            class=""></i> <span class="link_content"> <span class="link_text">
                                                About us </span> </span> </a>
                                </li>
                                <li id="mh-submit-button"> <span class="item_link"> <span class="link_content"> <a
                                                id="myhome-submit-property" href="../panel/index.html#/submit-property"
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
        <div class="mh-top-title mh-top-title--image-background lazyload" style="background-size:cover;"
            data-bgset="https://carmodyrealestates.com/wp-content/uploads/2017/02/apartments-wide-960x250.jpg 960w, https://carmodyrealestates.com/wp-content/uploads/2017/02/apartments-wide-300x78.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/02/apartments-wide-1024x267.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/02/apartments-wide-768x200.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/02/apartments-wide-1536x400.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/02/apartments-wide-1440x375.jpg 1440w, https://carmodyrealestates.com/wp-content/uploads/2017/02/apartments-wide.jpg 1920w"
            data-sizes="auto" data-parent-fit="cover">
            <h1 class="mh-top-title__heading">Properties</h1>


        </div>
        <div class="mh-breadcrumbs-wrapper " itemtype="http://schema.org/BreadcrumbList" itemscope>
            <div class="mh-layout">
                <div class="mh-breadcrumbs">


                    <div class="mh-breadcrumbs__item-wrapper">
                        <div class="mh-breadcrumbs__item" itemprop="itemListElement"
                            itemtype="http://schema.org/ListItem" itemscope>
                            <a id="mh-breadcrumb__0-link" href="index.html" title="Properties" itemprop="item">
                                <span itemprop="name">
                                    Properties </span>
                                <meta itemprop="position" content="1">

                                (80)

                            </a>

                        </div>

                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                    </div>

                    <div class="mh-breadcrumbs__item-wrapper">
                        <div class="mh-breadcrumbs__item">
                            <select id="mh-breadcrumb__child-select" class="mh-breadcrumbs-selectize">
                                <option selected="selected" value="placeholder">
                                    Property type </option>
                                <option value="house.html">
                                    House (30)
                                </option>
                                <option value="apartment.html">
                                    Apartment (27)
                                </option>
                                <option value="office.html">
                                    Office (23)
                                </option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="mh-top-essb">
                    <div class="essb_links essb_counter_modern_right essb_displayed_mh_property essb_share essb_template_metro-retina essb_584166458 print-no"
                        id="essb_displayed_mh_property_584166458" data-essb-postid="113" data-essb-position="mh_property"
                        data-essb-button-style="button" data-essb-template="metro-retina" data-essb-counter-pos="right"
                        data-essb-url="https://carmodyrealestates.com/properties"
                        data-essb-fullurl="https://carmodyrealestates.com/properties" data-essb-instance="584166458">
                        <ul class="essb_links_list">
                            <li class="essb_item essb_link_facebook nolightbox"> <a
                                    href="https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=Modern+apartment+in+the+city+center&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties&amp;picture=https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center.jpg&amp;description=Property+overview3+bedroom+flat+%2C+with+all+utilities+and+POOL+already+in%21+Gorgeous+and+secluded+lot+with+panoramic+views%2C+located+on+ten+acres+at+the+end+of+a+gated+cul-de-sac+on+a+paved+private+road.+Centerville+water+meter%2C+PG%26amp%3BE%2C+and+septic+are+in.+RV+ho..."
                                    title="Share on Share on Facebook"
                                    onclick="essb.window(&#39;https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=Modern+apartment+in+the+city+center&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties&picture=https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center.jpg&description=Property+overview3+bedroom+flat+%2C+with+all+utilities+and+POOL+already+in%21+Gorgeous+and+secluded+lot+with+panoramic+views%2C+located+on+ten+acres+at+the+end+of+a+gated+cul-de-sac+on+a+paved+private+road.+Centerville+water+meter%2C+PG%26amp%3BE%2C+and+septic+are+in.+RV+ho...&#39;,&#39;facebook_advanced&#39;,&#39;584166458&#39;); return false;"
                                    target="_blank" rel="nofollow"
                                    class="nolightbox essb-s-bg-facebook essb-s-bgh-facebook essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_facebook"></span><span class="essb_network_name">Share
                                        on Facebook</span></a></li>
                            <li class="essb_item essb_link_twitter nolightbox"> <a href="#" title="Share on Tweet"
                                    onclick="essb.window(&#39;https://twitter.com/intent/tweet?text=Modern%20apartment%20in%20the%20city%20center&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties&amp;counturl=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties&#39;,&#39;twitter&#39;,&#39;584166458&#39;); return false;"
                                    target="_blank" rel="nofollow"
                                    class="nolightbox essb-s-bg-twitter essb-s-bgh-twitter essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_twitter"></span><span
                                        class="essb_network_name">Tweet</span></a></li>
                            <li class="essb_item essb_link_pinterest nolightbox"> <a href="#"
                                    title="Share on Pin it"
                                    onclick="essb.pinterest_picker(&#39;584166458&#39;); return false;" target="_blank"
                                    rel="nofollow"
                                    class="nolightbox essb-s-bg-pinterest essb-s-bgh-pinterest essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_pinterest"></span><span class="essb_network_name">Pin
                                        it</span></a></li>
                            <li class="essb_item essb_link_linkedin nolightbox"> <a
                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=Modern+apartment+in+the+city+center&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties"
                                    title="Share on LinkedIn"
                                    onclick="essb.window(&#39;https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=Modern+apartment+in+the+city+center&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties&#39;,&#39;linkedin&#39;,&#39;584166458&#39;); return false;"
                                    target="_blank" rel="nofollow"
                                    class="nolightbox essb-s-bg-linkedin essb-s-bgh-linkedin essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_linkedin"></span><span
                                        class="essb_network_name">LinkedIn</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mh-layout mh-top-title-offset">
            <listing-grid id="myhome-listing-grid" class="mh-search-left" config-key='MyHomeListing1747769105'>
            </listing-grid>
        </div>
    @endsection

    @section('scripts')
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
            var MyHomeListing1747769105 = {
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
                "search_form_position": "left",
                "label": "",
                "listing_default_view": "colTwo",
                "load_more_button": "Load more",
                "listing_sort_by": "newest",
                "listing_type": "load_more",
                "search_form_advanced_number": "3",
                "estates_per_page": "10",
                "lazy_loading_limit": "2",
                "current_page": "1",
                "lazy_loading": "1",
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
                        "id": 113,
                        "name": "Modern apartment in the city center",
                        "slug": "modern-apartment-in-the-city-center",
                        "excerpt": "Property overview\r\n3 bedroom flat , with all utilities and POOL already in! Gorgeous and secluded lot with panoramic views...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/apartment\/chicago\/modern-apartment-in-the-city-center\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center.jpg",
                        "attributes": [{
                            "name": "Property type",
                            "slug": "property-type",
                            "has_archive": true,
                            "values": [{
                                "name": "Apartment",
                                "value": "Apartment",
                                "link": "https:\/\/carmodyrealestates.com\/property-type\/apartment\/",
                                "slug": "apartment",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
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
                                "name": "CH Wicker Park Street #1",
                                "value": "CH Wicker Park Street #1",
                                "link": "https:\/\/carmodyrealestates.com\/street\/ch-wicker-park-street-1\/",
                                "slug": "ch-wicker-park-street-1",
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
                                "name": "1100 ft\u00b2",
                                "value": "1100",
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
                            "values": [],
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
                        "address": "122-140 N Morgan St, Chicago, IL 60607, USA",
                        "days_ago": "8 years ago",
                        "is_featured": true,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
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
                        "attribute_classes": " mh-attribute-property-type__apartment mh-attribute-offer-type__sale mh-attribute-offer-type__open-house mh-attribute-city__chicago mh-attribute-neighborhood__wicker-park mh-attribute-street__ch-wicker-park-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__attic mh-attribute-features__dishwasher mh-attribute-features__fireplace mh-attribute-features__garden mh-attribute-features__gym mh-attribute-features__high-ceilings mh-attribute-features__microwave mh-attribute-features__patio mh-attribute-features__swimming-pool",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
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
                        "date": "October 7, 2017",
                        "price": [{
                            "price": "$1.300.000",
                            "is_range": false
                        }]
                    }, {
                        "id": 94,
                        "name": "Minimalist and bright flat",
                        "slug": "minimalist-and-bright-flat",
                        "excerpt": "Enveloped in the lush landscape and bound by the masterful vision of icons in quality and thoughtful execution, award-winn...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/apartment\/new-york\/minimalist-and-bright-flat\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat.jpg",
                        "attributes": [{
                            "name": "Property type",
                            "slug": "property-type",
                            "has_archive": true,
                            "values": [{
                                "name": "Apartment",
                                "value": "Apartment",
                                "link": "https:\/\/carmodyrealestates.com\/property-type\/apartment\/",
                                "slug": "apartment",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
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
                                "name": "NY Chinatown Street #1",
                                "value": "NY Chinatown Street #1",
                                "link": "https:\/\/carmodyrealestates.com\/street\/ny-chinatown-street-1\/",
                                "slug": "ny-chinatown-street-1",
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
                                "name": "1700 ft\u00b2",
                                "value": "1700",
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
                                "name": "2017",
                                "value": "2017",
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
                            "values": [],
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
                                "name": "Fireplace",
                                "value": "Fireplace",
                                "link": "https:\/\/carmodyrealestates.com\/features\/fireplace\/",
                                "slug": "fireplace",
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
                                "name": "Porch",
                                "value": "Porch",
                                "link": "https:\/\/carmodyrealestates.com\/features\/porch\/",
                                "slug": "porch",
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
                        "address": "518-520 8th Ave, New York, NY 10018, USA",
                        "days_ago": "8 years ago",
                        "is_featured": false,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }],
                        "status": "publish",
                        "payment_status": "pre_payment",
                        "attribute_classes": " mh-attribute-property-type__apartment mh-attribute-offer-type__sale mh-attribute-city__new-york mh-attribute-neighborhood__chinatown mh-attribute-street__ny-chinatown-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__air-conditioning mh-attribute-features__fireplace mh-attribute-features__high-ceilings mh-attribute-features__laundry mh-attribute-features__porch mh-attribute-features__sauna mh-attribute-features__swimming-pool mh-attribute-features__tv-cable mh-attribute-features__wifi",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
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
                        "date": "October 7, 2017",
                        "price": [{
                            "price": "$850.000",
                            "is_range": false
                        }]
                    }, {
                        "id": 129,
                        "name": "Bright apartment",
                        "slug": "bright-apartment",
                        "excerpt": "A masterpiece of artful design nestled in the secluded hills of Bel Air, this one-of-a kind, breathtaking home immediately...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/apartment\/los-angeles\/bright-apartment\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment.jpg",
                        "attributes": [{
                            "name": "Property type",
                            "slug": "property-type",
                            "has_archive": true,
                            "values": [{
                                "name": "Apartment",
                                "value": "Apartment",
                                "link": "https:\/\/carmodyrealestates.com\/property-type\/apartment\/",
                                "slug": "apartment",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
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
                                "name": "LA Venice Street #1",
                                "value": "LA Venice Street #1",
                                "link": "https:\/\/carmodyrealestates.com\/street\/la-venice-street-1\/",
                                "slug": "la-venice-street-1",
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
                                "name": "2003",
                                "value": "2003",
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
                            "values": [],
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
                                "name": "Garden",
                                "value": "Garden",
                                "link": "https:\/\/carmodyrealestates.com\/features\/garden\/",
                                "slug": "garden",
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
                                "name": "Porch",
                                "value": "Porch",
                                "link": "https:\/\/carmodyrealestates.com\/features\/porch\/",
                                "slug": "porch",
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
                        "address": "333-399 N Mission Rd, Los Angeles, CA 90033, USA",
                        "days_ago": "8 years ago",
                        "is_featured": false,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
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
                        "attribute_classes": " mh-attribute-property-type__apartment mh-attribute-offer-type__sale mh-attribute-offer-type__no-fees mh-attribute-city__los-angeles mh-attribute-neighborhood__venice mh-attribute-street__la-venice-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__balcony mh-attribute-features__dishwasher mh-attribute-features__fireplace mh-attribute-features__garden mh-attribute-features__hot-tub mh-attribute-features__laundry mh-attribute-features__porch mh-attribute-features__sauna mh-attribute-features__security-system",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
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
                        "date": "October 7, 2017",
                        "price": [{
                            "price": "$2.300.000",
                            "is_range": false
                        }]
                    }, {
                        "id": 72,
                        "name": "Two storey modern flat",
                        "slug": "two-storey-modern-flat",
                        "excerpt": "Inspired by its riverside surroundings, The Levee will incorporate four connected developments built on a peninsula\u2019s end ...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/house\/los-angeles\/two-storey-modern-flat\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/10\/download-2-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/10\/download-2-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/10\/download-2.jpg",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
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
                                "name": "NY Soho Street #1",
                                "value": "NY Soho Street #1",
                                "link": "https:\/\/carmodyrealestates.com\/street\/ny-soho-street-1\/",
                                "slug": "ny-soho-street-1",
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
                                "name": "1600 ft\u00b2",
                                "value": "1600",
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
                                "name": "2021",
                                "value": "2021",
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
                            "values": [],
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
                                "name": "Ceiling Fan",
                                "value": "Ceiling Fan",
                                "link": "https:\/\/carmodyrealestates.com\/features\/ceiling-fan\/",
                                "slug": "ceiling-fan",
                                "options": []
                            }, {
                                "name": "Dishwasher",
                                "value": "Dishwasher",
                                "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                                "slug": "dishwasher",
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
                        "address": "65-4 68th Ave, Ridgewood, NY 11385, USA",
                        "days_ago": "8 years ago",
                        "is_featured": false,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }],
                        "status": "publish",
                        "payment_status": "pre_payment",
                        "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__sale mh-attribute-city__los-angeles mh-attribute-neighborhood__soho mh-attribute-street__ny-soho-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__balcony mh-attribute-features__ceiling-fan mh-attribute-features__dishwasher mh-attribute-features__garbage-disposal mh-attribute-features__high-ceilings mh-attribute-features__laundry mh-attribute-features__microwave mh-attribute-features__refrigerator mh-attribute-features__tv-cable",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/minimalist-and-bright-flat-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-apartment-600x375.jpg",
                            "alt": ""
                        }],
                        "date": "October 7, 2017",
                        "price": [{
                            "price": "$500",
                            "is_range": false
                        }]
                    }, {
                        "id": 92,
                        "name": "Place perfect for nature lovers",
                        "slug": "place-perfect-for-nature-lovers",
                        "excerpt": "Flawlessly executed, an estate of ultimate exclusivity on nearly an acre of privately-gated land, this trophy property was...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/house\/chicago\/place-perfect-for-nature-lovers\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/place-perfect-for-nature-lovers-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/place-perfect-for-nature-lovers-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/place-perfect-for-nature-lovers-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/place-perfect-for-nature-lovers-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/place-perfect-for-nature-lovers-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/place-perfect-for-nature-lovers.jpg",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
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
                                "name": "Englewood",
                                "value": "Englewood",
                                "link": "https:\/\/carmodyrealestates.com\/neighborhood\/englewood\/",
                                "slug": "englewood",
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
                                "name": "CH Englewood Street #1",
                                "value": "CH Englewood Street #1",
                                "link": "https:\/\/carmodyrealestates.com\/street\/ch-englewood-street-1\/",
                                "slug": "ch-englewood-street-1",
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
                                "name": "2100 ft\u00b2",
                                "value": "2100",
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
                                "name": "1996",
                                "value": "1996",
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
                                "name": "3000 ft\u00b2",
                                "value": "3000",
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
                                "name": "Contemporary architecture",
                                "value": "Contemporary architecture",
                                "link": "https:\/\/carmodyrealestates.com\/features\/contemporary-architecture\/",
                                "slug": "contemporary-architecture",
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
                                "name": "Lawn",
                                "value": "Lawn",
                                "link": "https:\/\/carmodyrealestates.com\/features\/lawn\/",
                                "slug": "lawn",
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
                            }],
                            "display_after": "",
                            "show": true,
                            "card_show": false,
                            "icon": ""
                        }],
                        "address": "318-330 S Oakley Blvd, Chicago, IL 60612, USA",
                        "days_ago": "8 years ago",
                        "is_featured": false,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
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
                        "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__sale mh-attribute-offer-type__hot-offer mh-attribute-city__chicago mh-attribute-neighborhood__englewood mh-attribute-street__ch-englewood-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__barbecue mh-attribute-features__contemporary-architecture mh-attribute-features__dryer mh-attribute-features__garden mh-attribute-features__lawn mh-attribute-features__microwave mh-attribute-features__porch mh-attribute-features__refrigerator mh-attribute-features__tv-cable",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/place-perfect-for-nature-lovers-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/warm-and-modern-studio-apartment-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/two-storey-modern-flat-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/bright-and-sunny-flat-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-apartment-in-the-city-center-600x375.jpg",
                            "alt": ""
                        }],
                        "date": "October 6, 2017",
                        "price": [{
                            "price": "$670.000",
                            "is_range": false
                        }]
                    }, {
                        "id": 125,
                        "name": "Summer house with a pole",
                        "slug": "summer-house-with-a-pole",
                        "excerpt": "One of the most significant properties in exclusive guard gated community of Moraga Estates. Rarely does a home of this qu...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/house\/new-york\/summer-house-with-a-pole\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/summer-house-with-a-pole-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/summer-house-with-a-pole-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/summer-house-with-a-pole-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/summer-house-with-a-pole-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/summer-house-with-a-pole-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/summer-house-with-a-pole.jpg",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
                                "options": {
                                    "has_label": true,
                                    "bg_color": "#29aae3",
                                    "color": "#fff"
                                }
                            }, {
                                "name": "Sold!",
                                "value": "Sold!",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sold\/",
                                "slug": "sold",
                                "options": {
                                    "has_label": true,
                                    "bg_color": "#222222",
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
                                "name": "NY Upper East Side Street #1",
                                "value": "NY Upper East Side Street #1",
                                "link": "https:\/\/carmodyrealestates.com\/street\/ny-upper-east-side-street-1\/",
                                "slug": "ny-upper-east-side-street-1",
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
                                "name": "1200 ft\u00b2",
                                "value": "1200",
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
                                "name": "2003",
                                "value": "2003",
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
                                "name": "2300 ft\u00b2",
                                "value": "2300",
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
                                "name": "Garden",
                                "value": "Garden",
                                "link": "https:\/\/carmodyrealestates.com\/features\/garden\/",
                                "slug": "garden",
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
                                "name": "Lawn",
                                "value": "Lawn",
                                "link": "https:\/\/carmodyrealestates.com\/features\/lawn\/",
                                "slug": "lawn",
                                "options": []
                            }, {
                                "name": "Security System",
                                "value": "Security System",
                                "link": "https:\/\/carmodyrealestates.com\/features\/security-system\/",
                                "slug": "security-system",
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
                        "address": "82-25 Parsons Blvd, Jamaica, NY 11432, USA",
                        "days_ago": "8 years ago",
                        "is_featured": false,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Sold!",
                            "value": "Sold!",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sold\/",
                            "slug": "sold",
                            "options": {
                                "has_label": true,
                                "bg_color": "#222222",
                                "color": "#ffffff"
                            }
                        }],
                        "status": "publish",
                        "payment_status": "pre_payment",
                        "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__sale mh-attribute-offer-type__sold mh-attribute-city__new-york mh-attribute-neighborhood__upper-east-side mh-attribute-street__ny-upper-east-side-street-1 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__contemporary-architecture mh-attribute-features__dishwasher mh-attribute-features__garden mh-attribute-features__hot-tub mh-attribute-features__laundry mh-attribute-features__lawn mh-attribute-features__security-system mh-attribute-features__tv-cable mh-attribute-features__wifi",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/summer-house-with-a-pole-600x375.jpg",
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
                        "date": "October 6, 2017",
                        "price": [{
                            "price": "$600.000",
                            "is_range": false
                        }]
                    }, {
                        "id": 818,
                        "name": "Affordable office space",
                        "slug": "affordable-office-space",
                        "excerpt": "Located in Carlsbad, California, Avanti Workspace offers a wide range of unique &amp; flexible workspace, private office, ...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/office\/chicago\/affordable-office-space\/",
                        "has_price": true,
                        "image_srcset": false,
                        "image": false,
                        "attributes": [{
                            "name": "Property type",
                            "slug": "property-type",
                            "has_archive": true,
                            "values": [{
                                "name": "Office",
                                "value": "Office",
                                "link": "https:\/\/carmodyrealestates.com\/property-type\/office\/",
                                "slug": "office",
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
                            "values": [],
                            "display_after": "",
                            "show": true,
                            "card_show": true,
                            "icon": ""
                        }, {
                            "name": "Bathrooms",
                            "slug": "bathrooms",
                            "has_archive": false,
                            "values": [],
                            "display_after": "",
                            "show": true,
                            "card_show": true,
                            "icon": ""
                        }, {
                            "name": "Property size",
                            "slug": "property-size",
                            "has_archive": false,
                            "values": [{
                                "name": "680 ft\u00b2",
                                "value": "680",
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
                                "name": "2022",
                                "value": "2022",
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
                            "values": [],
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
                                "name": "Central heating",
                                "value": "Central heating",
                                "link": "https:\/\/carmodyrealestates.com\/features\/central-heating\/",
                                "slug": "central-heating",
                                "options": []
                            }, {
                                "name": "Disabled facilities",
                                "value": "Disabled facilities",
                                "link": "https:\/\/carmodyrealestates.com\/features\/disabled-facilities\/",
                                "slug": "disabled-facilities",
                                "options": []
                            }, {
                                "name": "Furnished",
                                "value": "Furnished",
                                "link": "https:\/\/carmodyrealestates.com\/features\/furnished\/",
                                "slug": "furnished",
                                "options": []
                            }, {
                                "name": "IT support",
                                "value": "IT support",
                                "link": "https:\/\/carmodyrealestates.com\/features\/it-support\/",
                                "slug": "it-support",
                                "options": []
                            }, {
                                "name": "Kitchen",
                                "value": "Kitchen",
                                "link": "https:\/\/carmodyrealestates.com\/features\/kitchen\/",
                                "slug": "kitchen",
                                "options": []
                            }, {
                                "name": "Lounge area",
                                "value": "Lounge area",
                                "link": "https:\/\/carmodyrealestates.com\/features\/lounge-area\/",
                                "slug": "lounge-area",
                                "options": []
                            }, {
                                "name": "Meeting rooms",
                                "value": "Meeting rooms",
                                "link": "https:\/\/carmodyrealestates.com\/features\/meeting-rooms\/",
                                "slug": "meeting-rooms",
                                "options": []
                            }],
                            "display_after": "",
                            "show": true,
                            "card_show": false,
                            "icon": ""
                        }],
                        "address": "661-699 N Mc Clurg Ct, Chicago, IL 60611, USA",
                        "days_ago": "8 years ago",
                        "is_featured": true,
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
                        "attribute_classes": " mh-attribute-property-type__office mh-attribute-offer-type__rent mh-attribute-city__chicago mh-attribute-neighborhood__austin mh-attribute-street__ch-austin-street-1 mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__air-conditioning mh-attribute-features__central-heating mh-attribute-features__disabled-facilities mh-attribute-features__furnished mh-attribute-features__it-support mh-attribute-features__kitchen mh-attribute-features__lounge-area mh-attribute-features__meeting-rooms",
                        "gallery": [{
                            "image": false,
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/class-a-office-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/great-start-up-space-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/huge-office-space-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": false,
                            "alt": ""
                        }],
                        "date": "October 6, 2017",
                        "price": [{
                            "price": "$7.000 \/month ",
                            "is_range": false
                        }]
                    }, {
                        "id": 578,
                        "name": "Full Floor Office Condo",
                        "slug": "full-floor-office-condo",
                        "excerpt": "Rarely does a condominium come to the market that \"checks all the boxes\" like this one! Located barely a block from Whole ...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/office\/los-angeles\/full-floor-office-condo\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/full-floor-office-condo-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/full-floor-office-condo-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/full-floor-office-condo-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/full-floor-office-condo-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/full-floor-office-condo-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/full-floor-office-condo.jpg",
                        "attributes": [{
                            "name": "Property type",
                            "slug": "property-type",
                            "has_archive": true,
                            "values": [{
                                "name": "Office",
                                "value": "Office",
                                "link": "https:\/\/carmodyrealestates.com\/property-type\/office\/",
                                "slug": "office",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
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
                                "name": "Skid Row",
                                "value": "Skid Row",
                                "link": "https:\/\/carmodyrealestates.com\/neighborhood\/skid-row\/",
                                "slug": "skid-row",
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
                                "name": "LA Skid Row Street #2",
                                "value": "LA Skid Row Street #2",
                                "link": "https:\/\/carmodyrealestates.com\/street\/la-skid-row-street-2\/",
                                "slug": "la-skid-row-street-2",
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
                            "values": [],
                            "display_after": "",
                            "show": true,
                            "card_show": true,
                            "icon": ""
                        }, {
                            "name": "Bathrooms",
                            "slug": "bathrooms",
                            "has_archive": false,
                            "values": [],
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
                                "name": "1996",
                                "value": "1996",
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
                            "values": [],
                            "display_after": "ft\u00b2",
                            "show": true,
                            "card_show": false,
                            "icon": ""
                        }, {
                            "name": "Features",
                            "slug": "features",
                            "has_archive": false,
                            "values": [{
                                "name": "Administrative support",
                                "value": "Administrative support",
                                "link": "https:\/\/carmodyrealestates.com\/features\/administrative-support\/",
                                "slug": "administrative-support",
                                "options": []
                            }, {
                                "name": "Air Conditioning",
                                "value": "Air Conditioning",
                                "link": "https:\/\/carmodyrealestates.com\/features\/air-conditioning\/",
                                "slug": "air-conditioning",
                                "options": []
                            }, {
                                "name": "Cleaning",
                                "value": "Cleaning",
                                "link": "https:\/\/carmodyrealestates.com\/features\/cleaning\/",
                                "slug": "cleaning",
                                "options": []
                            }, {
                                "name": "Disabled facilities",
                                "value": "Disabled facilities",
                                "link": "https:\/\/carmodyrealestates.com\/features\/disabled-facilities\/",
                                "slug": "disabled-facilities",
                                "options": []
                            }, {
                                "name": "Furnished",
                                "value": "Furnished",
                                "link": "https:\/\/carmodyrealestates.com\/features\/furnished\/",
                                "slug": "furnished",
                                "options": []
                            }, {
                                "name": "Lift",
                                "value": "Lift",
                                "link": "https:\/\/carmodyrealestates.com\/features\/lift\/",
                                "slug": "lift",
                                "options": []
                            }, {
                                "name": "Reception services",
                                "value": "Reception services",
                                "link": "https:\/\/carmodyrealestates.com\/features\/reception-services\/",
                                "slug": "reception-services",
                                "options": []
                            }, {
                                "name": "Virtual office options",
                                "value": "Virtual office options",
                                "link": "https:\/\/carmodyrealestates.com\/features\/virtual-office-options\/",
                                "slug": "virtual-office-options",
                                "options": []
                            }],
                            "display_after": "",
                            "show": true,
                            "card_show": false,
                            "icon": ""
                        }],
                        "address": "1201-1235 Dodds Cir, Los Angeles, CA 90063, USA",
                        "days_ago": "8 years ago",
                        "is_featured": false,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
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
                        "attribute_classes": " mh-attribute-property-type__office mh-attribute-offer-type__sale mh-attribute-offer-type__open-house mh-attribute-city__los-angeles mh-attribute-neighborhood__skid-row mh-attribute-street__la-skid-row-street-2 mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__administrative-support mh-attribute-features__air-conditioning mh-attribute-features__cleaning mh-attribute-features__disabled-facilities mh-attribute-features__furnished mh-attribute-features__lift mh-attribute-features__reception-services mh-attribute-features__virtual-office-options",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/full-floor-office-condo-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/cambridge-building-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/international-towers-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/office-property-600x375.jpg",
                            "alt": ""
                        }, {
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/02\/prestigious-office-600x375.jpg",
                            "alt": ""
                        }],
                        "date": "October 6, 2017",
                        "price": [{
                            "price": "$6.000.000",
                            "is_range": false
                        }]
                    }, {
                        "id": 102,
                        "name": "Modern house with the great view",
                        "slug": "modern-house-with-the-great-view",
                        "excerpt": "\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nIntroducing 1235 Scholl Lane, a captivating gem nested on a private cul de sac in the heart of midto...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/house\/chicago\/modern-house-with-the-great-view\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-the-great-view-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-the-great-view-848x530.jpg 848w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-the-great-view-600x375.jpg 600w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-the-great-view-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-the-great-view-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-the-great-view.jpg",
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
                                "name": "For Sale",
                                "value": "For Sale",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                                "slug": "sale",
                                "options": {
                                    "has_label": true,
                                    "bg_color": "#29aae3",
                                    "color": "#fff"
                                }
                            }, {
                                "name": "Sold!",
                                "value": "Sold!",
                                "link": "https:\/\/carmodyrealestates.com\/offer-type\/sold\/",
                                "slug": "sold",
                                "options": {
                                    "has_label": true,
                                    "bg_color": "#222222",
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
                                "name": "2010",
                                "value": "2010",
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
                                "name": "Dishwasher",
                                "value": "Dishwasher",
                                "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                                "slug": "dishwasher",
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
                        "address": "322-344 E Jackson Dr, Chicago, IL 60605, USA",
                        "days_ago": "8 years ago",
                        "is_featured": false,
                        "offer_type": [{
                            "name": "For Sale",
                            "value": "For Sale",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sale\/",
                            "slug": "sale",
                            "options": {
                                "has_label": true,
                                "bg_color": "#29aae3",
                                "color": "#fff"
                            }
                        }, {
                            "name": "Sold!",
                            "value": "Sold!",
                            "link": "https:\/\/carmodyrealestates.com\/offer-type\/sold\/",
                            "slug": "sold",
                            "options": {
                                "has_label": true,
                                "bg_color": "#222222",
                                "color": "#ffffff"
                            }
                        }],
                        "status": "publish",
                        "payment_status": "pre_payment",
                        "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__sale mh-attribute-offer-type__sold mh-attribute-city__chicago mh-attribute-neighborhood__wicker-park mh-attribute-street__ch-wicker-park-street-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-lot-size__lot-size mh-attribute-features__air-conditioning mh-attribute-features__balcony mh-attribute-features__dishwasher mh-attribute-features__garden mh-attribute-features__high-ceilings mh-attribute-features__hot-tub mh-attribute-features__laundry mh-attribute-features__patio mh-attribute-features__tv-cable",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/modern-house-with-the-great-view-600x375.jpg",
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
                        "date": "October 6, 2017",
                        "price": [{
                            "price": "$950.000",
                            "is_range": false
                        }]
                    }, {
                        "id": 128,
                        "name": "Gracious condo in Portland\u2019s West End",
                        "slug": "elegant-studio-flat",
                        "excerpt": "Behind a cheery, red door in this handsome line of brick row houses lies a special Portland home! This is the only condo i...",
                        "link": "https:\/\/carmodyrealestates.com\/properties\/house\/chicago\/elegant-studio-flat\/",
                        "has_price": true,
                        "image_srcset": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/10\/20211110gp-62020-120x75.jpg 120w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/10\/20211110gp-62020-400x250.jpg 400w, https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/10\/20211110gp-62020-224x140.jpg 224w",
                        "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/10\/20211110gp-62020.jpg",
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
                                "name": "Englewood",
                                "value": "Englewood",
                                "link": "https:\/\/carmodyrealestates.com\/neighborhood\/englewood\/",
                                "slug": "englewood",
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
                                "name": "CH Englewood Street #2",
                                "value": "CH Englewood Street #2",
                                "link": "https:\/\/carmodyrealestates.com\/street\/ch-englewood-street-2\/",
                                "slug": "ch-englewood-street-2",
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
                                "name": "1",
                                "value": "1",
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
                                "name": "1",
                                "value": "1",
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
                                "name": "500 ft\u00b2",
                                "value": "500",
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
                                "name": "2013",
                                "value": "2013",
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
                            "values": [],
                            "display_after": "ft\u00b2",
                            "show": true,
                            "card_show": false,
                            "icon": ""
                        }, {
                            "name": "Features",
                            "slug": "features",
                            "has_archive": false,
                            "values": [{
                                "name": "Dishwasher",
                                "value": "Dishwasher",
                                "link": "https:\/\/carmodyrealestates.com\/features\/dishwasher\/",
                                "slug": "dishwasher",
                                "options": []
                            }, {
                                "name": "Garden",
                                "value": "Garden",
                                "link": "https:\/\/carmodyrealestates.com\/features\/garden\/",
                                "slug": "garden",
                                "options": []
                            }, {
                                "name": "Lawn",
                                "value": "Lawn",
                                "link": "https:\/\/carmodyrealestates.com\/features\/lawn\/",
                                "slug": "lawn",
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
                                "name": "Security System",
                                "value": "Security System",
                                "link": "https:\/\/carmodyrealestates.com\/features\/security-system\/",
                                "slug": "security-system",
                                "options": []
                            }, {
                                "name": "Swimming Pool",
                                "value": "Swimming Pool",
                                "link": "https:\/\/carmodyrealestates.com\/features\/swimming-pool\/",
                                "slug": "swimming-pool",
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
                        "address": "433-499 W Madison St, Chicago, IL 60606, USA",
                        "days_ago": "8 years ago",
                        "is_featured": true,
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
                        "attribute_classes": " mh-attribute-property-type__house mh-attribute-offer-type__rent mh-attribute-offer-type__no-fees mh-attribute-city__chicago mh-attribute-neighborhood__englewood mh-attribute-street__ch-englewood-street-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__dishwasher mh-attribute-features__garden mh-attribute-features__lawn mh-attribute-features__microwave mh-attribute-features__patio mh-attribute-features__sauna mh-attribute-features__security-system mh-attribute-features__swimming-pool mh-attribute-features__tv-cable",
                        "gallery": [{
                            "image": "https:\/\/carmodyrealestates.com\/wp-content\/uploads\/2017\/01\/elegant-studio-flat-600x375.jpg",
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
                        "date": "October 4, 2017",
                        "price": [{
                            "price": "$4.000 \/month ",
                            "is_range": false
                        }]
                    }],
                    "totalResults": 80
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
                "default_values": [],
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
                "key": "MyHomeListing1747769105"
            };
            /* ]]> */
        </script>
    @endsection
