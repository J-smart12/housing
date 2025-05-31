@extends('layout.main')
@section('title', 'Blogs')

@section('body')
    <body id="myhome-app" class="blog wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">

        @include('layout.top_header')
        <div class="mh-sticky-menu-placeholder mh-sticky-menu-placeholder--active"></div>
        <div class="mh-top-title mh-top-title--image-background lazyload" style="background-size:cover;" data-bgset="https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-960x250.jpg 960w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-300x78.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1024x267.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-768x200.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1536x400.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1440x375.jpg 1440w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide.jpg 1920w" data-sizes="auto" data-parent-fit="cover">
            <h1 class="mh-top-title__heading">Blogs</h1>
        </div>
        <div class="mh-layout mh-top-title-offset">
            <div class="mh-layout__content-left">
                <div class="mh-grid">
                    @foreach($blogs as $blog)
                    <div class="mh-grid__1of1">
                        <article id="post-827"
                            class="mh-post-grid post-827 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">
                            <a href="the-most-inspiring-interior-design-of-2016/" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-300x200.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-1024x683.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-768x512.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center-1536x1024.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/01/modern-apartment-in-the-city-center.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="The Most Inspiring Interior Design Of 2016">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        October 5, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href={{ url("blogs/".$blog->slug) }}
                                        title="The Most Inspiring Interior Design Of 2016">
                                        The Most Inspiring Interior Design Of 2016 </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="the-most-inspiring-interior-design-of-2016"
                                        title="The Most Inspiring Interior Design Of 2016"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    @endforeach

                </div>

                {{-- <div class="mh-pagination">
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="page/2">2</a>
                    <a class="next page-numbers" href="page/2"></a>
                </div> --}}


            </div>

            <aside class="mh-layout__sidebar-right">
            <div class="widget-area">
                <section id="myhome-image-widget-3" class="widget widget-mh-infobox">
                    <div class="mh-widget-title">
                        <h3 class="mh-widget-title__text">About us</h3>
                    </div>
                    <div class="widget-infobox"> <a href="#" title="About us"
                            class="widget-infobox__image-wrapper">
                            <img src={{ asset($settings->logo) }} alt="About us"
                                class="widget-infobox__image">
                        </a>
                        <div class="widget-infobox__text">
                            {{ $settings->about_us }}
                        </div>
                    </div>
                </section>
                <section id="recent-posts-2" class="widget widget_recent_entries">
                    <div class="mh-widget-title">
                        <h3 class="mh-widget-title__text">Recent Posts</h3>
                    </div>
                    <ul>
                        @foreach ($recents as $recent)
                            <li>
                                <a href={{ url("blogs/".$recent->slug) }}>
                                    {{ $recent->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </section>
                <section id="myhome-social-icons-widget-3" class="widget widget-mh-social-icons">
                    <div class="mh-widget-title">
                        <h3 class="mh-widget-title__text">Follow Us</h3>
                    </div>
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
                </section>
            </div>
        </aside>

        </div>

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
