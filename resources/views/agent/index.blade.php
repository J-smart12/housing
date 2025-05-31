@extends('layout.main')
@section('title', 'Agents')

@section('body')

    <body id="myhome-app" class="archive author author-daniella-suzanne author-2 wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
        
        @include('layout.top_header')

        <div class="mh-sticky-menu-placeholder mh-sticky-menu-placeholder--active "></div>
        <div class="mh-top-title mh-top-title--author">
            <div class="mh-layout">
                <div class="position-relative">
                    <div class="mh-top-title__avatar">
                        <img src={{ $agent->image }} alt={{ $agent->name }}>
                    </div>
                    <div class="mh-top-title__author-info">
                        <div class="mh-top-title__author-info__content">
                            <h1 class="mh-top-title__heading">
                                {{ $agent->name }}
                            </h1>
                            <div class="mh-agent__additional-fields">
                                <div class="mh-agent__additional-fields__item">
                                    <strong>
                                        Organization:
                                    </strong>
                                    Carmody Real Estate
                                </div>
                            </div>

                            <div class="mh-agent-contact">
                                <div class="mh-agent-contact__element">
                                    <a href="mailto:{{ $agent->email }}">
                                        <i class="flaticon-mail-2"></i>
                                        {{ $agent->email }} </a>
                                </div>

                                <div class="mh-agent-contact__element">
                                    <a href="tel:{{ $agent->phone }}">
                                        <i class="flaticon-phone"></i>
                                        <span>
                                            {{ $agent->phone }} </span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mh-layout mh-top-title-offset">
            <div class="mh-listing--full-width mh-listing--horizontal-boxed">
                <div id="myhome-listing-grid" class="mh-search-left">
                    <div class="mh-search-classic">
                        <div class="mh-layout__sidebar-left">

                        </div>
                        <div class="mh-layout__content-right">
                            <div id="results" infinite-scroll-disabled="lazyload" infinite-scroll-distance="10">
                                <div id="myhome-listing" class="mh-grid mh-listing-page mh-properties"
                                    style="height: auto;">
                                    @foreach ($properties as $property)
                                        <div class="mh-property mh-grid__1of2">
                                            <article id="mh-property__112"
                                                class="mh-estate-vertical  mh-attribute-property-type__apartment mh-attribute-offer-type__rent mh-attribute-offer-type__no-fees mh-attribute-city__seattle mh-attribute-neighborhood__fremont mh-attribute-street__se-fremont-2 mh-attribute-bedrooms__bedrooms mh-attribute-bathrooms__bathrooms mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__air-conditioning mh-attribute-features__ceiling-fan mh-attribute-features__contemporary-architecture mh-attribute-features__dishwasher mh-attribute-features__fireplace mh-attribute-features__gym mh-attribute-features__sauna mh-attribute-features__security-system mh-attribute-features__wifi">
                                                <div class="mh-favorite-card">
                                                    <div class="">
                                                        <button><i class="far fa-heart"></i></button>
                                                    </div>
                                                </div>
                                                <div id="swiper-112" class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                                    {{-- <div class="mh-caption">
                                                        <div class="mh-caption__inner mh-label__rent"
                                                            style="background: rgb(41, 170, 227); color: rgb(255, 255, 255);">
                                                            For Rent
                                                        </div>
                                                        <div class="mh-caption__inner mh-label__no-fees"
                                                            style="background: rgb(249, 148, 15); color: rgb(255, 255, 255);">
                                                            No Fees!
                                                        </div>
                                                    </div> --}}
                                                    <a href={{ url('properties/' . $property->type . '/' . $property->city . '/' . $property->slug) }}
                                                        target="_self" title="Small apartment by the lake"
                                                        class="swiper-wrapper"
                                                        style="transition-duration: 0ms; transform: translate3d(-453px, 0px, 0px);"
                                                        id="swiper-wrapper-626e6b5af0c38e7b" aria-live="polite">

                                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                                            data-swiper-slide-index="4" role="group"
                                                            aria-label="1 / 7">
                                                            <img alt={{ $property->name }}
                                                                class="swiper-lazy swiper-lazy-loaded"
                                                                src={{ asset($property->image) }} />
                                                        </div>

                                                        <div class="swiper-slide swiper-slide-active"
                                                            data-swiper-slide-index="0" style="width: 453px;"
                                                            role="group" aria-label="2 / 7">
                                                            <img alt={{ $property->name }}
                                                                class="swiper-lazy swiper-lazy-loaded"
                                                                src={{ asset($property->image) }} />
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="mh-estate-vertical__content" style="height: 129.797px;">
                                                    <h3 class="mh-estate-vertical__heading">
                                                        <a href={{ url('properties/' . $property->type . '/' . $property->city . '/' . $property->slug) }}
                                                            title={{ $property->name }} target="_self">
                                                            <span>{{ $property->name }}</span>
                                                        </a>
                                                    </h3>
                                                    <address class="mh-estate-vertical__subheading">
                                                        <i class="flaticon-pin"></i>
                                                        {{ $property->address }}
                                                    </address>
                                                    <div class="mh-estate-vertical__primary">
                                                        <div class="">${{ $property->price }} </div>
                                                    </div>
                                                    <div>
                                                        <span class="mh-estate-vertical__more-info mh-attribute__bedrooms">
                                                            <strong>Bedrooms:</strong> {{-- {{ count($property->attributes->bedrooms) }} --}}
                                                        </span>
                                                        <span
                                                            class="mh-estate-vertical__more-info mh-attribute__bathrooms">
                                                            <strong>Bathrooms:</strong> {{-- {{ count($property->attributes->bedrooms) }} --}}
                                                        </span>
                                                        <span
                                                            class="mh-estate-vertical__more-info mh-attribute__property-size">
                                                            <strong>Property size:</strong> {{ $property->property_size }}
                                                            ft²
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="mh-estate-vertical__bottom">
                                                    <div class="mh-estate-vertical__bottom__inner">
                                                        <div class="mh-estate-vertical__date">
                                                            {{ $property->days_ago }}
                                                        </div>
                                                        <div class="mh-estate-vertical__buttons-wrapper">
                                                            <div class="mh-estate-vertical__buttons">
                                                                <div class="mh-estate-vertical__buttons__single">
                                                                    <a href={{ url('properties/' . $property->type . '/' . $property->city . '/' . $property->slug) }}
                                                                        title={{ $property->name }} target="_self"
                                                                        class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary-ghost">
                                                                        Details
                                                                        <span class="mdl-button__icon-right">
                                                                            <i class="fas fa-angle-right"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script type="text/javascript" id="myhome-min-js-extra">
            /* <![CDATA[ */
            var MyHome = {
                "site": "https://carmodyrealestates.com",
                "compare": "1",
                "api": "https://carmodyrealestates.com/wp-json/myhome/v1/estates",
                "panelUrl": "https://carmodyrealestates.com/panel/",
                "user_fields": [],
                "is_register_open": "",
                "requestUrl": "https://carmodyrealestates.com/wp-admin/admin-ajax.php",
                "nonce": "69eb81400b",
                "mapStyle": "[{featureType:\"administrative\",elementType:\"labels.text.fill\",stylers:[{color:\"#444444\"}]},{featureType:\"landscape\",elementType:\"all\",stylers:[{color:\"#f2f2f2\"}]},{featureType:\"poi\",elementType:\"all\",stylers:[{visibility:\"off\"}]},{featureType:\"road\",elementType:\"all\",stylers:[{saturation:-100},{lightness:45}]},{featureType:\"road.highway\",elementType:\"all\",stylers:[{visibility:\"simplified\"}]},{featureType:\"road.arterial\",elementType:\"labels.icon\",stylers:[{visibility:\"off\"}]},{featureType:\"transit\",elementType:\"all\",stylers:[{visibility:\"off\"}]},{featureType:\"water\",elementType:\"all\",stylers:[{color:\"#d7e1f2\"},{visibility:\"on\"}]}]",
                "mapType": "roadmap",
                "contact_price_label": "Contact for price",
                "user_bar_label": "Login / Register",
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
                "theme_url": "https://carmodyrealestates.com/wp-content/themes/myhome"
            };
            /* ]]> */
        </script>
    @endsection
