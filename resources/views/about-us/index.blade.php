@extends('layout.main')
@section('title', 'About us')

@section('body')

    <body id="myhome-app" class="wp-singular page-template page-template-page_full-width-with-top-title page-template-page_full-width-with-top-title-php page page-id-1719 wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">

       @include('layout.top_header')

        <div class="mh-sticky-menu-placeholder mh-sticky-menu-placeholder--active"></div>
        
        <div class="mh-top-title mh-top-title--image-background lazyload" style="background-size:cover;"
            data-bgset="https://carmodyrealestates.com/wp-content/uploads/2018/07/inside-960x250.jpg 960w, https://carmodyrealestates.com/wp-content/uploads/2018/07/inside-1440x375.jpg 1440w"
            data-sizes="auto" data-parent-fit="cover">
            <h1 class="mh-top-title__heading">About us</h1>
        </div>

        <div class="mh-layout mh-top-title-offset">
            <div id="post-1719" class="mh-post">
                <section class="wpb-content-wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1512407858131">
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="" style="text-align:center;">
                                                        <i class="flaticon-office mh-color-default"
                                                            style="font-size:50px;"></i>
                                                    </div>

                                                    <div class=" ">

                                                        <div class="mh-heading-wrapper">
                                                            <h3 class="mh-heading  mh-heading--bottom-separator    vc_custom_1686927528551"
                                                                style="font-weight:700;">
                                                                Our company </h3>

                                                            <div class="mh-subheading " style="">
                                                                {{-- {{ $settings->about_us }} --}}
                                                                {{ $settings->slug }}
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="" style="text-align:center;">
                                                        <i class="flaticon-technology mh-color-default"
                                                            style="font-size:50px;"></i>
                                                    </div>

                                                    <div class=" ">

                                                        <div class="mh-heading-wrapper">
                                                            <h3 class="mh-heading  mh-heading--bottom-separator    vc_custom_1686927605159"
                                                                style="font-weight:700;">
                                                                Our Vision </h3>

                                                            <div class="mh-subheading " style="">
                                                                {{-- {{ $settings->our_vision }}  --}}
                                                                {{ $settings->slug }}
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                        class="vc_row wpb_row vc_row-fluid vc_custom_1494609476686 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1494333765775">
                                <div class="wpb_wrapper">
                                    <div class=" ">

                                        <div class="mh-heading-wrapper">
                                            <h2 class="mh-heading  mh-heading--bottom-separator    vc_custom_1530610495498"
                                                style="font-weight:700;">
                                                Our Team 
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="mh-agent-list">
                                        @foreach($staffs as $staff)
                                            <div class="mh-agent-list__element">
                                                <article class="mh-agent ">
                                                    <a href={{ url("agent/".$staff->slug) }} class="mh-agent__thumbnail"
                                                        title={{ $staff->name }}>
                                                        <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2023/07/0cda57d6-9051-4bd3-b81c-3cf8308eac59-100x100.jpg 100w, https://carmodyrealestates.com/wp-content/uploads/2023/07/0cda57d6-9051-4bd3-b81c-3cf8308eac59-150x150.jpg 150w, https://carmodyrealestates.com/wp-content/uploads/2023/07/0cda57d6-9051-4bd3-b81c-3cf8308eac59-400x400.jpg 400w, https://carmodyrealestates.com/wp-content/uploads/2023/07/0cda57d6-9051-4bd3-b81c-3cf8308eac59-200x200.jpg 200w"
                                                            class="lazyload " data-sizes="auto" alt={{ $staff->name }}>
                                                    </a>

                                                    <div class="mh-agent__content">
                                                        <h3 class="mh-agent__heading">
                                                            <a href={{ url("agent/".$staff->slug) }} title={{ $staff->name }}>
                                                                {{ $staff->name }} </a>
                                                        </h3>


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
                                                                <a href="mailto:{{ $staff->email }}">
                                                                    <i class="flaticon-mail-2"></i>
                                                                    {{ $staff->email }} </a>
                                                            </div>

                                                            <div class="mh-agent-contact__element">
                                                                <a href="tel:{{ $staff->phone }}">
                                                                    <i class="flaticon-phone"></i>
                                                                    {{ $staff->phone }} </a>
                                                            </div>
                                                        </div>


                                                        <div class="mh-agent__button-wrapper">
                                                            <div class="mh-agent__button">
                                                                <a href={{ url("agent/".$staff->slug) }} title={{ $staff->name }}
                                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary-ghost">
                                                                    Full Profile </a>
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
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1494338314650">
                                <div class="wpb_wrapper">
                                    <div class=" ">

                                        <div class="mh-heading-wrapper">
                                            <h2 class="mh-heading  mh-heading--bottom-separator   "
                                                style="font-weight:700;">
                                                Testimonials 
                                            </h2>
                                        </div>

                                    </div>
                                    <div class="owl-carousel owl-carousel--visible-1  mh-testimonials--dark mh-testimonials--standard">
                                        @foreach ($testimonials as $testimonial)
                                            <div class="item">
                                            <article class="mh-testimonial">
                                                <div class="mh-testimonial__inner">
                                                    <blockquote class="mh-testimonial__text">
                                                        <p>{{ $testimonial->testimonial }}</p>
                                                    </blockquote>
                                                    <div class="mh-testimonial__photo">
                                                        <img data-srcset={{ $testimonial->image }}
                                                            src={{ $testimonial->image }}
                                                            class="lazyload " data-sizes="auto" alt={{ $testimonial->name }}>
                                                    </div>

                                                    <div class="mh-testimonial__author-info">
                                                        <h3 class="mh-testimonial__author">
                                                            {{ $testimonial->name }} </h3>

                                                        <div class="mh-testimonial__occupation">
                                                            {{ $testimonial->position }}, {{ $testimonial->role }}</div>
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
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1494609686462">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner vc_custom_1494333727302">
                                <div class="wpb_wrapper"></div>
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
    @endsection
