@extends('layout.main')
@section('title', 'Featured Properties')

@section('body')

    <body id="myhome-app" class="wp-singular estate-template-default single single-estate postid-578 wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
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
                        <div class="mmm_fullwidth_container"></div>
                        <div class="menu_inner"> <span class="nav_logo">
                                <a class="mobile_toggle">
                                    <span class="mobile_button">
                                        <span class="symbol_menu"><i class="fas fa-bars"></i></span>
                                        <span class="symbol_cross"><i class="fas fa-times"></i></span>
                                    </span>
                                </a>
                                <a class="logo_link" href="" title="Benallyrealestates.com">
                                    <img src="wp-content/uploads/2017/03/logo-40-blue-black.png"
                                        data-logo="http://127.0.0.1:8000/wp-content/uploads/2017/03/logo-40-blue-black.png"
                                        alt="benallyrealestates.com">
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
                                            <a href="city-neighborhood-street/" class="item_link  disable_icon"
                                                tabindex="3"> <i class=""></i>
                                                <span class="link_content"> <span class="link_text"> City >> Neighborhood
                                                        >> Street </span> </span> </a>
                                        </li>
                                        <li id="menu-item-3546"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3546 default_dropdown  drop_to_right submenu_default_width columns1">
                                            <a href="predefined-search-form-fields/"
                                                class="item_link  disable_icon" tabindex="4"> <i class=""></i>
                                                <span class="link_content"> <span class="link_text"> Predefined search
                                                        form </span> </span> </a>
                                        </li>
                                        <li id="menu-item-3545"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3545 default_dropdown  drop_to_right submenu_default_width columns1">
                                            <a href="advanced-search-form/" class="item_link  disable_icon"
                                                tabindex="5"> <i class=""></i>
                                                <span class="link_content"> <span class="link_text"> Advanced Search Form
                                                    </span> </span> </a>
                                        </li>
                                    </ul><!-- /.mega_dropdown -->
                                </li>
                                <li id="menu-item-3499"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3499 default_dropdown  drop_to_right submenu_default_width columns1">
                                    <a href="about-us/" class="item_link  disable_icon" tabindex="6"> <i
                                            class=""></i> <span class="link_content"> <span class="link_text">
                                                About us </span> </span> </a>
                                </li>
                                <li id="mh-submit-button"> <span class="item_link"> <span class="link_content"> <a
                                                id="myhome-submit-property" href="panel/#/submit-property"
                                                title="Submit property"> Submit property <i class="fas fa-plus-circle"
                                                    aria-hidden="true"></i> </a> </span> </span> </li>
                            </ul>
                        </div><!-- /class="menu_inner" -->
                    </div><!-- /class="menu_holder" -->
                </div><!-- /id="mega_main_menu" -->
            </div>
        </div>
        <div class="mh-sticky-menu-placeholder mh-sticky-menu-placeholder--active"></div>

        <article id="post-578" data-id="578" class="mh-post">
            <div class="mh-top-title mh-top-title--single-estate">
                <div class="mh-layout">
                    <h1 class="mh-top-title__heading">
                        {{ $property->name }} 
                    </h1>
                    <div class="small-text">
                        <a href="#myhome-estate-map"><i class="flaticon-pin"></i></a>
                        <span>
                            {{ $property->address }} </span>
                    </div>

                </div>
            </div>

            <div class="mh-breadcrumbs-wrapper  mh-breadcrumbs-wrapper--single-property-gallery"
                itemtype="http://schema.org/BreadcrumbList" itemscope>
                <div class="mh-layout">
                    <div class="mh-breadcrumbs">


                        <div class="mh-breadcrumbs__item-wrapper">
                            <div class="mh-breadcrumbs__item" itemprop="itemListElement"
                                itemtype="http://schema.org/ListItem" itemscope>
                                <a id="mh-breadcrumb__0-link" href="/" title="Properties" itemprop="item">
                                    <span itemprop="name">
                                        Properties </span>
                                    <meta itemprop="position" content="1">

                                    (80)

                                </a>

                            </div>

                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                        </div>
                        <div class="mh-breadcrumbs__item-wrapper">
                            <div class="mh-breadcrumbs__item" itemprop="itemListElement"
                                itemtype="http://schema.org/ListItem" itemscope>
                                <a id="mh-breadcrumb__1-link" href="../../" title="Office" itemprop="item">
                                    <span itemprop="name">
                                        Office </span>
                                    <meta itemprop="position" content="2">

                                    (23)

                                </a>

                            </div>

                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                        </div>
                        <div class="mh-breadcrumbs__item-wrapper">
                            <div class="mh-breadcrumbs__item" itemprop="itemListElement"
                                itemtype="http://schema.org/ListItem" itemscope>
                                <a id="mh-breadcrumb__2-link" href="../" title="Los Angeles" itemprop="item">
                                    <span itemprop="name">
                                        Los Angeles </span>
                                    <meta itemprop="position" content="3">

                                    (3)

                                </a>

                            </div>

                            <i class="fas fa-angle-right" aria-hidden="true"></i>
                        </div>


                        <div class="mh-breadcrumbs__item-wrapper">
                            <div class="mh-breadcrumbs__item">
                                {{ $property->name }} </div>
                        </div>

                    </div>

                    <div class="mh-top-essb">
                        <div class="essb_links essb_counter_modern_right essb_displayed_mh_property essb_share essb_template_metro-retina essb_1937518348 print-no"
                            id="essb_displayed_mh_property_1937518348" data-essb-postid="578"
                            data-essb-position="mh_property" data-essb-button-style="button"
                            data-essb-template="metro-retina" data-essb-counter-pos="right"
                            data-essb-url={{ request()->url() }}
                            data-essb-fullurl={{ request()->url() }}
                            data-essb-instance="1937518348">
                            <ul class="essb_links_list">
                                <li class="essb_item essb_link_facebook nolightbox"> <a
                                        href="https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=$property->name&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo&amp;picture=http://127.0.0.1:8000/wp-content/uploads/2017/02/full-floor-office-condo.jpg&amp;description=Rarely+does+a+condominium+come+to+the+market+that+%5C%26%23039%3Bchecks+all+the+boxes%5C%26%23039%3B+like+this+one%21+Located+barely+a+block+from+Whole+Foods%2C+this+2+bedroom+rear%2C+corner+Penthouse+with+only+one+common+wall+features+soaring+beamed+ceilings%2C+unimpeded+views+from+the+ci..."
                                        title="Share on Share on Facebook"
                                        onclick="essb.window(&#39;https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=$property->name&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo&picture=http://127.0.0.1:8000/wp-content/uploads/2017/02/full-floor-office-condo.jpg&description=Rarely+does+a+condominium+come+to+the+market+that+%5C%26%23039%3Bchecks+all+the+boxes%5C%26%23039%3B+like+this+one%21+Located+barely+a+block+from+Whole+Foods%2C+this+2+bedroom+rear%2C+corner+Penthouse+with+only+one+common+wall+features+soaring+beamed+ceilings%2C+unimpeded+views+from+the+ci...&#39;,&#39;facebook_advanced&#39;,&#39;1937518348&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-facebook essb-s-bgh-facebook essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_facebook"></span><span
                                            class="essb_network_name">Share on Facebook</span></a></li>
                                <li class="essb_item essb_link_twitter nolightbox"> <a href="#"
                                        title="Share on Tweet"
                                        onclick="essb.window(&#39;https://twitter.com/intent/tweet?text=Full%20Floor%20Office%20Condo&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo&amp;counturl=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo&#39;,&#39;twitter&#39;,&#39;1937518348&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-twitter essb-s-bgh-twitter essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_twitter"></span><span
                                            class="essb_network_name">Tweet</span></a></li>
                                <li class="essb_item essb_link_pinterest nolightbox"> <a href="#"
                                        title="Share on Pin it"
                                        onclick="essb.pinterest_picker(&#39;1937518348&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-pinterest essb-s-bgh-pinterest essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_pinterest"></span><span
                                            class="essb_network_name">Pin it</span></a></li>
                                <li class="essb_item essb_link_linkedin nolightbox"> <a
                                        href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=$property->name&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo"
                                        title="Share on LinkedIn"
                                        onclick="essb.window(&#39;https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=$property->name&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo&#39;,&#39;linkedin&#39;,&#39;1937518348&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-linkedin essb-s-bgh-linkedin essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_linkedin"></span><span
                                            class="essb_network_name">LinkedIn</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mh-layout position-relative  mh-attribute-property-type__office mh-attribute-offer-type__sale mh-attribute-offer-type__open-house mh-attribute-city__los-angeles mh-attribute-neighborhood__skid-row mh-attribute-street__la-skid-row-street-2 mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__administrative-support mh-attribute-features__air-conditioning mh-attribute-features__cleaning mh-attribute-features__disabled-facilities mh-attribute-features__furnished mh-attribute-features__lift mh-attribute-features__reception-services mh-attribute-features__virtual-office-options">
                <div class="mh-layout__content-left">
                    <div class="mh-display-mobile">
                        <div class="position-relative">
                            <div class="mh-estate__details">
                                <div class="mh-estate__details__price">
                                    <div>

                                        <div>{{ $property->price }}</div>
                                    </div>
                                </div>

                                <div class="mh-estate__add-to">
                                    <add-to-favorite-single class="myhome-add-to-favorite-single"
                                        :property-id={{ $property->id }}>
                                    </add-to-favorite-single>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-container swiper-container--single swiper-container--regular">
                        <div class="swiper-wrapper mh-popup-group">
                            @foreach ($property->galleries as $image)
                                <p>{{ $loop->index }} - {{ $item }}</p>
                                <div class="swiper-slide">
                                    <a href={{asset($image->image)}} class="mh-popup-group__element">
                                        <img src={{asset($image->image)}} alt={{asset($image->alt)}}>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="swiper-container swiper-container--single-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide__inner"
                                    style="background-image: url('{{ asset($image->image) }}');">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide__inner"
                                    style="background-image:url('{{ asset($image->image) }}');">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide__inner"
                                    style="background-image:url('{{ asset($image->image) }}');">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide__inner"
                                    style="background-image:url('{{ asset($image->image) }}');">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide__inner"
                                    style="background-image:url('{{ asset($image->image) }}');">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide__inner"
                                    style="background-image:url('{{ asset($image->image) }}');">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mh-estate__section mh-estate__section--attributes">
                        <div class="mh-estate__list">
                            <ul class="mh-estate__list__inner">
                                <li id="mh-estate_attribute--1" class="mh-estate__list__element">
                                    <strong>
                                        Property type:
                                    </strong>
                                    <a href={{ url("property-type/".$property->type) }} title={{$property->type}}>
                                        {{ $property->type }} <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </li>



                                <li id="mh-estate_attribute--2" class="mh-estate__list__element">
                                    <strong>
                                        Offer type:
                                    </strong>
                                    @foreach ($property->offerTypes as $offerType)
                                        <a href={{ url("offer-type/".$offerType) }} title={{$offerType}}>
                                            {{$offerType}} <i class="fas fa-external-link-alt"></i>
                                        </a>
                                    @endforeach
                                </li>

                                <li id="mh-estate_attribute--10" class="mh-estate__list__element">
                                    <strong>
                                        City:
                                    </strong>
                                    <a href={{ url("city/".$property->city) }} title={{ $property->city }}>
                                        {{ $property->city }} <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </li>

                                <li id="mh-estate_attribute--14" class="mh-estate__list__element">
                                    <strong>
                                        Neighborhood:
                                    </strong>
                                    <a href={{ url("neighborhood/".$property->neighborhood) }} title={{ $property->neighborhood }}>
                                        {{ $property->neighborhood }} <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </li>



                                <li id="mh-estate_attribute--15" class="mh-estate__list__element">
                                    <strong>
                                        Street:
                                    </strong>

                                    <a href={{ url("street/".$property->street) }} title="LA Skid Row Street #2">
                                        {{ $property->street }} <i class="fas fa-external-link-alt"></i>
                                    </a>
                                </li>

                                <li id="mh-estate_attribute--8" class="mh-estate__list__element">
                                    <strong>
                                        Property size:
                                    </strong>
                                    {{ $property->property_size }}
                                </li>

                                <li id="mh-estate_attribute--6" class="mh-estate__list__element">
                                    <strong>
                                        Year:
                                    </strong>
                                    {{ $property->date }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mh-estate__section">
                        <h3 class="mh-estate__section__heading"> Features </h3>
                        <div class="mh-estate__list">
                            <ul class="mh-estate__list__inner">
                                @foreach ($property->features as $feature)
                                    <li class="mh-estate__list__element mh-estate__list__element--dot">
                                        {{$feature}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="mh-estate__section mh-estate__section--description">

                        <h3 class="mh-estate__section__heading">Details</h3>

                        <p>{{ $property->details }}</p>
                        <div class="essb_links essb_counter_modern_right essb_displayed_bottom essb_share essb_template_metro-retina essb_1025552554 print-no"
                            id="essb_displayed_bottom_1025552554" data-essb-postid="578" data-essb-position="bottom"
                            data-essb-button-style="button" data-essb-template="metro-retina"
                            data-essb-counter-pos="right"
                            data-essb-url="http://127.0.0.1:8000/properties/office/los-angeles/full-floor-office-condo/"
                            data-essb-fullurl="http://127.0.0.1:8000/properties/office/los-angeles/full-floor-office-condo/"
                            data-essb-instance="1025552554">
                            <ul class="essb_links_list">
                                <li class="essb_item essb_link_facebook nolightbox"> 
                                @php
                                    $excerpt = \Illuminate\Support\Str::limit($post->details, 150, '...');
                                @endphp
                                <a href={{ url("https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=$property->name&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2F$property->type%2F$property->city%2F$property->slug%2F&amp;picture=http://127.0.0.1:8000/$property->image&amp;description=$excerpt") }}
                                        title="Share on Share on Facebook"
                                        onclick="essb.window(&#39;https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=$property->name&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2F$property->type%2F$property->city%2F$property->slug%2F&picture=http://127.0.0.1:8000/$property->image&description=$excerpt&#39;,&#39;facebook_advanced&#39;,&#39;1025552554&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-facebook essb-s-bgh-facebook essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_facebook"></span><span
                                            class="essb_network_name">Share on Facebook</span></a></li>
                                <li class="essb_item essb_link_twitter nolightbox"> <a href="#"
                                        title="Share on Tweet"
                                        onclick="essb.window(&#39;https://twitter.com/intent/tweet?text=$property->name&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2F$property->type%2F$property->city%2F$property->slug%2F&amp;counturl=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2F$property->type%2F$property->city%2F$property->slug%2F&#39;,&#39;twitter&#39;,&#39;1025552554&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-twitter essb-s-bgh-twitter essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_twitter"></span><span
                                            class="essb_network_name">Tweet</span></a></li>
                                <li class="essb_item essb_link_pinterest nolightbox"> <a href="#"
                                        title="Share on Pin it"
                                        onclick="essb.pinterest_picker(&#39;1025552554&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-pinterest essb-s-bgh-pinterest essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_pinterest"></span><span
                                            class="essb_network_name">Pin it</span></a></li>
                                <li class="essb_item essb_link_linkedin nolightbox"> <a
                                        href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=$property->name&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo%2F"
                                        title="Share on LinkedIn"
                                        onclick="essb.window(&#39;https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=$property->name&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2Fproperties%2Foffice%2Flos-angeles%2Ffull-floor-office-condo%2F&#39;,&#39;linkedin&#39;,&#39;1025552554&#39;); return false;"
                                        target="_blank" rel="nofollow"
                                        class="nolightbox essb-s-bg-linkedin essb-s-bgh-linkedin essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                            class="essb_icon essb_icon_linkedin"></span><span
                                            class="essb_network_name">LinkedIn</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mh-estate__section mh-estate__section--video">

                        <h3 class="mh-estate__section__heading">Video</h3>

                        <div class="mh-video-wrapper">
                            <iframe title="How to Create Real Estate Website with WordPress" width="640"
                                height="360" src="https://www.youtube.com/embed/MGZEKMZw9ZY?feature=oembed"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="mh-estate__section mh-estate__section--plans">

                        <h3 class="mh-estate__section__heading">Plans</h3>

                        <div class="mh-accordion first-active">

                            <h3>
                                <i class="fas fa-minus"></i> <i class="fas fa-plus"></i>
                                Plan I
                            </h3>
                            <div>
                                <a class="mh-estate__plan-thumbnail-wrapper mh-popup"
                                    href={{asset($property->plan1)}} title="Plan I">
                                    <img src={{asset($property->plan1)}} alt="Plan I">
                                </a>
                            </div>

                            <h3>
                                <i class="fas fa-minus"></i> <i class="fas fa-plus"></i>
                                Plan II
                            </h3>
                            <div>
                                <a class="mh-estate__plan-thumbnail-wrapper mh-popup"
                                    href={{asset($property->plan2)}} title="Plan II">
                                    <img src={{asset($property->plan2)}} alt="Plan II">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mh-estate__estate-info">
                        <ul>
                            <li>
                                <span>ID:</span>
                                {{ $property->id }}
                            </li>
                            <li>
                                <span>Published:</span>
                                {{ $property->created_at }}
                            </li>
                            <li>
                                <span>Last Update:</span>
                                {{ $property->updated_at }}
                            </li>
                            <li>
                                <span>Views:</span>
                                1491
                            </li>
                        </ul>
                    </div>
                    <style>
                        .agent-new-mobile {
                            display: none;
                        }

                        @media (max-width:1024px) {
                            .agent-new-mobile {
                                display: block !important
                            }

                            .mh-layout__sidebar-right .mh-estate__agent {
                                display: none !important;
                            }
                        }
                    </style>
                    <div class="agent-new-mobile">
                        <section class="mh-estate__agent">
                            <div class="mh-widget-title">
                                <h3 class="mh-widget-title__text">
                                    <a href={{ url("user/admin/") }} title="admin">
                                        <span>admin</span>
                                    </a>
                                </h3>
                            </div>

                            <div class="mh-estate__agent__content">
                                <div class="position-relative">
                                    <div class="mh-estate__agent__email">
                                        <a href="mailto:admin@carmodyrealestates.com">
                                            <i class="flaticon-mail-2"></i>admin@carmodyrealestates.com </a>
                                    </div>

                                    <a href={{ url("user/admin/") }} title="admin"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary mdl-button--full-width">
                                        All by admin 
                                    </a>

                                </div>
                            </div>
                        </section>
                    </div>

                    <section class="mh-estate__related">
                        <h3 class="mh-estate__section__heading">Related properties</h3>
                        <div class="mh-grid">
                            <div class="mh-grid__1of2">
                                <article
                                    class="mh-estate-vertical  mh-attribute-property-type__office mh-attribute-offer-type__rent mh-attribute-city__chicago mh-attribute-neighborhood__austin mh-attribute-street__ch-austin-street-1 mh-attribute-property-size__property-size mh-attribute-year-built__year-built mh-attribute-features__air-conditioning mh-attribute-features__central-heating mh-attribute-features__disabled-facilities mh-attribute-features__furnished mh-attribute-features__it-support mh-attribute-features__kitchen mh-attribute-features__lounge-area mh-attribute-features__meeting-rooms">
                                    <add-to-favorite class="myhome-add-to-favorite"
                                        :property-id="818"></add-to-favorite>

                                    <a href="../../chicago/affordable-office-space/" title="Affordable office space"
                                        class="mh-thumbnail">

                                        <div class="mh-thumbnail__inner">
                                            <img src="#" alt="Affordable office space">
                                        </div>

                                        <div class="mh-thumbnail__featured">
                                            <i class="fas fa-star"></i>
                                        </div>

                                        <div class="mh-caption">

                                            <div class="mh-caption__inner mh-label__rent"
                                                style="background-color: #29aae3; color: #fff">
                                                For Rent </div>

                                        </div>

                                    </a>

                                    <div class="mh-estate-vertical__content">
                                        <h3 class="mh-estate-vertical__heading">
                                            <a href="../../chicago/affordable-office-space/"
                                                title="Affordable office space">
                                                Affordable office space </a>
                                        </h3>

                                        <address class="mh-estate-vertical__subheading">
                                            <i class="flaticon-pin"></i>
                                            661-699 N Mc Clurg Ct, Chicago, IL 60611, USA
                                        </address>

                                        <div class="mh-estate-vertical__primary">
                                            <div>
                                                $7.000 /month </div>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>

                <aside class="mh-layout__sidebar-right mh-layout__sidebar--sticky">
                    <div class="mh-display-desktop">
                        <div class="position-relative">
                            <div class="mh-estate__details">
                                <div class="mh-estate__details__price">
                                    <div>
                                        <div class="mh-estate__details__price__single">{{ $property->price }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mh-estate__add-to">
                            <add-to-favorite-single class="myhome-add-to-favorite-single"
                                :property-id="{{ $property->id }}">
                            </add-to-favorite-single>
                        </div>
                    </div>

                    <section>
                        <div class="mh-widget-title">
                            <h3 class="mh-widget-title__text">Reply to the listing</h3>
                        </div>


                        <div class="wpcf7 no-js" id="wpcf7-f1864-p578-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action={{ route('listing.reply') }} method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate"
                                data-status="init">
                                @csrf
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="1864" />
                                    <input type="hidden" name="_id" value={{ $property->id }} />
                                    <input type="hidden" name="_wpcf7_version" value="5.7.7" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1864-p578-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="578" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                </div>
                                <p>
                                <label>
                                <span class="wpcf7-form-control-wrap" data-name="your-name">
                                <input
                                                size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                                placeholder="Your name" value="" type="text"
                                                name="your-name" /></span></label><label><span
                                            class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                                aria-invalid="false" placeholder="Phone" value="" type="tel"
                                                name="your-phone" /></span></label><label><span
                                            class="wpcf7-form-control-wrap" data-name="your-email"><input size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false" placeholder="Email"
                                                value="" type="email"
                                                name="your-email" /></span></label><label><span
                                            class="wpcf7-form-control-wrap" data-name="your-message">
                                            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                placeholder="Your message" name="your-message"></textarea>
                                        </span></label><input class="wpcf7-form-control has-spinner wpcf7-submit"
                                        type="submit" value="Send" />
                                </p>
                                <p style="display: none !important;"><label>&#916;
                                        <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                    </label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="249" />
                                    <script>
                                        document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                                    </script>
                                </p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </section>
                    <section class="mh-estate__agent">
                        <div class="mh-widget-title">
                            <h3 class="mh-widget-title__text">
                                <a href={{ url("user/admin/") }} title="admin">
                                    <span>admin</span>
                                </a>
                            </h3>
                        </div>

                        <div class="mh-estate__agent__content">
                            <div class="position-relative">
                                <div class="mh-estate__agent__email">
                                    <a href="mailto:admin@carmodyrealestates.com">
                                        <i class="flaticon-mail-2"></i>admin@carmodyrealestates.com </a>
                                </div>

                                <a href={{ url("user/admin/") }} title="admin"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary mdl-button--full-width">
                                    All by admin </a>

                            </div>
                        </div>
                    </section>
                </aside>
            </div>

        </article>
    @endsection
    @section('scripts')
        {{-- <script type="text/javascript" id="myhome-min-js-extra">
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
        </script> --}}
    @endsection
