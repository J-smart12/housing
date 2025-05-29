@extends('layout.main')
@section('title', 'Featured Properties')

@section('body')
    <body id="myhome-app" class="blog wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">

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
                                <a class="logo_link" href=".." title="Carmodyrealestates.com">
                                    <img src="wp-content/uploads/2017/03/logo-40-blue-black.png"
                                        data-logo="https://carmodyrealestates.com/wp-content/uploads/2017/03/logo-40-blue-black.png"
                                        alt="Carmodyrealestates.com">
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
                                            <a href="city-neighborhood-street" class="item_link  disable_icon"
                                                tabindex="3"> <i class=""></i>
                                                <span class="link_content"> <span class="link_text"> City >> Neighborhood
                                                        >> Street </span> </span> </a>
                                        </li>
                                        <li id="menu-item-3546"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3546 default_dropdown  drop_to_right submenu_default_width columns1">
                                            <a href="predefined-search-form-fields" class="item_link  disable_icon"
                                                tabindex="4"> <i class=""></i>
                                                <span class="link_content"> <span class="link_text"> Predefined search
                                                        form </span> </span> </a>
                                        </li>
                                        <li id="menu-item-3545"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3545 default_dropdown  drop_to_right submenu_default_width columns1">
                                            <a href="advanced-search-form" class="item_link  disable_icon" tabindex="5">
                                                <i class=""></i> <span class="link_content"> <span class="link_text">
                                                        Advanced Search Form </span> </span> </a>
                                        </li>
                                    </ul><!-- /.mega_dropdown -->
                                </li>
                                <li id="menu-item-3499"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3499 default_dropdown  drop_to_right submenu_default_width columns1">
                                    <a href="about-us" class="item_link  disable_icon" tabindex="6"> <i
                                            class=""></i> <span class="link_content"> <span class="link_text">
                                                About us </span> </span> </a>
                                </li>
                                <li id="mh-submit-button"> <span class="item_link"> <span class="link_content"> <a
                                                id="myhome-submit-property" href="panel#/submit-property"
                                                title="Submit property"> Submit property <i class="fas fa-plus-circle"
                                                    aria-hidden="true"></i> </a> </span> </span> </li>
                            </ul>
                        </div><!-- /class="menu_inner" -->
                    </div><!-- /class="menu_holder" -->
                </div><!-- /id="mega_main_menu" -->
            </div>
        </div>
        <div class="mh-sticky-menu-placeholder mh-sticky-menu-placeholder--active"></div>
        <div class="mh-top-title mh-top-title--image-background lazyload" style="background-size:cover;" data-bgset="https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-960x250.jpg 960w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-300x78.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1024x267.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-768x200.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1536x400.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1440x375.jpg 1440w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide.jpg 1920w" data-sizes="auto" data-parent-fit="cover">
            <h1 class="mh-top-title__heading">Blog</h1>
        </div>
        <div class="mh-layout mh-top-title-offset">
            <div class="mh-layout__content-left">
                <div class="mh-grid">
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
                                    <a href="the-most-inspiring-interior-design-of-2016"
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
                    <div class="mh-grid__1of1">
                        <article id="post-825"
                            class="mh-post-grid post-825 post type-post status-publish format-standard hentry category-home-design tag-architecture tag-design tag-house">


                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="7-instagram-accounts-for-interior-design-enthusiasts"
                                        title="7 Instagram accounts for interior design enthusiasts">
                                        7 Instagram accounts for interior design enthusiasts </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="7-instagram-accounts-for-interior-design-enthusiasts"
                                        title="7 Instagram accounts for interior design enthusiasts"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-225"
                            class="mh-post-grid post-225 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="renovating-a-living-room-experts-share-their-secrets"
                                class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/01/travels-inspired-apartment-300x169.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/01/travels-inspired-apartment-1024x576.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/01/travels-inspired-apartment-768x432.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/01/travels-inspired-apartment-1536x864.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/01/travels-inspired-apartment.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="Renovating a Living Room? Experts Share Their Secrets">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        September 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="renovating-a-living-room-experts-share-their-secrets"
                                        title="Renovating a Living Room? Experts Share Their Secrets">
                                        Renovating a Living Room? Experts Share Their Secrets </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="renovating-a-living-room-experts-share-their-secrets"
                                        title="Renovating a Living Room? Experts Share Their Secrets"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-223"
                            class="mh-post-grid post-223 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="recent-commercial-real-estate-transactions" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/02/full-floor-office-condo-300x200.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/02/full-floor-office-condo-1024x683.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/02/full-floor-office-condo-768x512.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/02/full-floor-office-condo-1536x1024.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/02/full-floor-office-condo.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="Recent Commercial Real Estate Transactions">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        September 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="recent-commercial-real-estate-transactions"
                                        title="Recent Commercial Real Estate Transactions">
                                        Recent Commercial Real Estate Transactions </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="recent-commercial-real-estate-transactions"
                                        title="Recent Commercial Real Estate Transactions"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-215"
                            class="mh-post-grid post-215 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="new-home-design-books" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2018/07/inside-300x223.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2018/07/inside-1024x762.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2018/07/inside-768x571.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2018/07/inside-1536x1142.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2018/07/inside.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="Interior design books for beginners">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        September 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="new-home-design-books" title="Interior design books for beginners">
                                        Interior design books for beginners </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="new-home-design-books" title="Interior design books for beginners"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-203"
                            class="mh-post-grid post-203 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="10-brilliant-ways-to-decorate-your-home" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/01/flat-in-the-tenement-house-300x200.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/01/flat-in-the-tenement-house-1024x683.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/01/flat-in-the-tenement-house-768x512.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/01/flat-in-the-tenement-house-1536x1024.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/01/flat-in-the-tenement-house.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="10 Brilliant Ways To Decorate Your Home">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        September 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="10-brilliant-ways-to-decorate-your-home"
                                        title="10 Brilliant Ways To Decorate Your Home">
                                        10 Brilliant Ways To Decorate Your Home </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="10-brilliant-ways-to-decorate-your-home"
                                        title="10 Brilliant Ways To Decorate Your Home"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-220"
                            class="mh-post-grid post-220 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="the-interior-design-trends" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/01/sunny-and-cozy-apartment-300x198.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/01/sunny-and-cozy-apartment-1024x676.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/01/sunny-and-cozy-apartment-768x507.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/01/sunny-and-cozy-apartment-1536x1014.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/01/sunny-and-cozy-apartment.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="7 home trends that will shape your house in 2017">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        August 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="the-interior-design-trends"
                                        title="7 home trends that will shape your house in 2017">
                                        7 home trends that will shape your house in 2017 </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="the-interior-design-trends"
                                        title="7 home trends that will shape your house in 2017"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-213"
                            class="mh-post-grid post-213 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="10-of-the-best-home-bloggers-to-follow-on-instagram" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/01/warm-and-modern-studio-apartment-300x180.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/01/warm-and-modern-studio-apartment-1024x614.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/01/warm-and-modern-studio-apartment-768x461.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/01/warm-and-modern-studio-apartment-1536x922.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/01/warm-and-modern-studio-apartment.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="10 of the Best Home Bloggers to Follow on Instagram">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        August 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="10-of-the-best-home-bloggers-to-follow-on-instagram"
                                        title="10 of the Best Home Bloggers to Follow on Instagram">
                                        10 of the Best Home Bloggers to Follow on Instagram </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="10-of-the-best-home-bloggers-to-follow-on-instagram"
                                        title="10 of the Best Home Bloggers to Follow on Instagram"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-209"
                            class="mh-post-grid post-209 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="3-ways-office-design-affects-work-productivity" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/02/office-property-300x200.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-property-1024x683.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-property-768x512.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-property-1536x1025.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-property.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="3 Ways Office Design Affects Work Productivity">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        August 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="3-ways-office-design-affects-work-productivity"
                                        title="3 Ways Office Design Affects Work Productivity">
                                        3 Ways Office Design Affects Work Productivity </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="3-ways-office-design-affects-work-productivity"
                                        title="3 Ways Office Design Affects Work Productivity"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>
                    <div class="mh-grid__1of1">
                        <article id="post-207"
                            class="mh-post-grid post-207 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">

                            <a href="6-free-sources-for-home-design-inspiration" class="mh-post-grid__thumbnail">
                                <div class="mh-thumbnail__inner">
                                    <img data-srcset="https://carmodyrealestates.com/wp-content/uploads/2017/01/scandinavian-style-apartment-300x200.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/01/scandinavian-style-apartment-1024x683.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/01/scandinavian-style-apartment-768x512.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/01/scandinavian-style-apartment-1536x1024.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/01/scandinavian-style-apartment.jpg 1920w"
                                        data-sizes="auto" class="lazyload " style="max-width: 1920px"
                                        alt="6 Free Sources for Home Design Inspiration">
                                </div>
                                <div class="mh-caption">
                                    <div class="mh-caption__inner">
                                        August 30, 2017 </div>
                                </div>
                            </a>

                            <div class="mh-post-grid__inner">

                                <h3 class="mh-post-grid__heading">
                                    <a href="6-free-sources-for-home-design-inspiration"
                                        title="6 Free Sources for Home Design Inspiration">
                                        6 Free Sources for Home Design Inspiration </a>
                                </h3>

                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the overnight
                                    hail, and broke into the woods at the foot of the hill. We pushed through these
                                    towards... </div>

                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="6-free-sources-for-home-design-inspiration"
                                        title="6 Free Sources for Home Design Inspiration"
                                        class="mdl-button mdl-button--primary-ghost">
                                        Read more </a>
                                </div>

                            </div>

                        </article>
                    </div>

                </div>

                <div class="mh-pagination">
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="page/2">2</a>
                    <a class="next page-numbers" href="page/2"></a>
                </div>


            </div>

            <aside class="mh-layout__sidebar-right">
                <div class="widget-area">
                    <section id="myhome-image-widget-3" class="widget widget-mh-infobox">
                        <div class="mh-widget-title">
                            <h3 class="mh-widget-title__text">About us</h3>
                        </div>
                        <div class="widget-infobox"> <a href="#" title="About us"
                                class="widget-infobox__image-wrapper">
                                <img src="wp-content/uploads/2017/01/Peter-Hendricks.jpg" alt="About us"
                                    class="widget-infobox__image">
                            </a>
                            <div class="widget-infobox__text">We went down the lane, by the body of the man in black,
                                sodden now from the overnight hail, and broke into the woods at the foot of the hill.</div>
                        </div>
                    </section>
                    <section id="myhome-facebook-widget-3" class="widget widget-mh-facebook">
                        <div class="mh-widget-title">
                            <h3 class="mh-widget-title__text">Facebook</h3>
                        </div>
                        <div class="mh-widget-facebook">

                            <div class="mh-widget-facebook">
                                <div id="fb-root"></div>
                                <script>
                                    (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = 'connect.facebook.net/en_us/sdk.js#xfbml=1&version=v3.0';
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>
                                <div class="fb-page" data-href="https://www.facebook.com/tangibledesign.net/"
                                    data-tabs="timeline" data-small-header="false" data-adapt-container-width="true"
                                    data-hide-cover="false" data-show-facepile="true" data-height="500">
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="recent-posts-2" class="widget widget_recent_entries">
                        <div class="mh-widget-title">
                            <h3 class="mh-widget-title__text">Recent Posts</h3>
                        </div>
                        <ul>nbnn 
                            <li>
                                <a href="the-most-inspiring-interior-design-of-2016">
                                    The Most Inspiring Interior Design Of 2016
                                </a>
                            </li>
                            <li>
                                <a href="7-instagram-accounts-for-interior-design-enthusiasts">
                                    7 Instagram accounts for interior design enthusiasts
                                </a>
                            </li>
                            <li>
                                <a href="renovating-a-living-room-experts-share-their-secrets">
                                    Renovating a Living Room? Experts Share Their Secrets
                                </a>
                            </li>
                            <li>
                                <a href="recent-commercial-real-estate-transactions">
                                    Recent Commercial Real Estate Transactions
                                </a>
                            </li>
                            <li>
                                <a href="new-home-design-books">
                                    Interior design books for beginners
                                </a>
                            </li>
                        </ul>

                    </section>
                    <section id="search-2" class="widget widget_search">
                        <div class="mh-widget-title">
                            <h3 class="mh-widget-title__text">Search</h3>
                        </div>
                        <form role="search" action="https://carmodyrealestates.com/" method="get"
                            class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search ..." name="s">
                            </label>
                            <button class="search-submit mdl-button mdl-js-button mdl-button--raised mdl-button--primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </section>
                    <section id="recent-comments-2" class="widget widget_recent_comments">
                        <div class="mh-widget-title">
                            <h3 class="mh-widget-title__text">Recent Comments</h3>
                        </div>
                        <ul id="recentcomments">
                            <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                    href="7-instagram-accounts-for-interior-design-enthusiasts#comment-51">7
                                    Instagram accounts for interior design enthusiasts</a></li>
                            <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                    href="renovating-a-living-room-experts-share-their-secrets#comment-50">Renovating
                                    a Living Room? Experts Share Their Secrets</a></li>
                            <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                    href="recent-commercial-real-estate-transactions#comment-49">Recent
                                    Commercial Real Estate Transactions</a></li>
                            <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                    href="the-interior-design-trends#comment-48">7 home trends that will
                                    shape your house in 2017</a></li>
                            <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                    href="the-interior-design-trends#comment-47">7 home trends that will
                                    shape your house in 2017</a></li>
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
                                <i class="fab fa-google"></i></a>
                        </div>
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
