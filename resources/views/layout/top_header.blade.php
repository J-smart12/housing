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
                <a href="tel:{{ preg_replace('/\D+/', '', $settings->phone) }}">
                    <i class="flaticon-phone"></i>
                    {{ preg_replace('/\D+/', '', $settings->phone) }} </a>
            </span>

            <span class="mh-top-header__element">
                <address>
                    <i class="flaticon-pin"></i>
                    {{ $settings->address }}
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
                        <a class="logo_link" href={{ url('/') }} title="Carmodyrealestates.com">
                            <img src={{ asset('wp-content/uploads/2017/03/logo-40-blue-black.png') }}
                                data-logo={{ asset('wp-content/uploads/2017/03/logo-40-blue-black.png') }}
                                alt="Carmodyrealestates.com">
                        </a>
                    </span>
                    <!-- /class="nav_logo" -->
                    <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                        <li id="menu-item-1424"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1424 default_dropdown  drop_to_right submenu_default_width columns1">
                            <a href="#" class="item_link  disable_icon" tabindex="1">
                                <i class=""></i>
                                <span class="link_content">
                                    <span class="link_text"> Home </span>
                                </span>
                            </a>
                        </li>
                        <li id="menu-item-3497"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3497 default_dropdown  drop_to_right submenu_default_width columns1">
                            <a href={{ url("properties") }} class="item_link  disable_icon" tabindex="2"> <i class=""></i>
                                <span class="link_content"> 
                                    <span class="link_text">
                                        Properties 
                                    </span> 
                                </span> 
                            </a>
                        </li>
                        <li id="menu-item-3499" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3499 default_dropdown  drop_to_right submenu_default_width columns1">
                            <a href={{ url('about-us/') }} class="item_link  disable_icon" tabindex="6">
                                <i class=""></i>
                                <span class="link_content">
                                    <span class="link_text"> About us </span>
                                </span>
                            </a>
                        </li>
                        <li id="mh-submit-button">
                            <span class="item_link">
                                <span class="link_content">
                                    <a id="myhome-submit-property" href={{ url('panel#/submit-property') }}
                                        title="Submit property">
                                        Submit property <i class="fas fa-plus-circle" aria-hidden="true"></i>
                                    </a>
                                </span>
                            </span>
                        </li>
                    </ul>
                </div><!-- /class="menu_inner" -->
            </div><!-- /class="menu_holder" -->
        </div><!-- /id="mega_main_menu" -->
    </div>
</div>
