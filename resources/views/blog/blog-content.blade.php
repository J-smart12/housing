@extends('layout.main')
@section('title')
{{ $blog->title }}
@endsection

@section('body')


<body id="myhome-app" class="wp-singular post-template-default single single-post postid-825 single-format-standard wp-theme-myhome mmm mega_main_menu-2-2-1-1 myhome-body mh-hide-top-bar-on-mobile mh-active-input-primary myhome-3-1-69 essb-9.0 wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
    @include('layout.top_header')
    <div class="mh-sticky-menu-placeholder mh-sticky-menu-placeholder--active"></div>
    <div class="mh-top-title mh-top-title--image-background lazyload" style="background-size:cover;"
        data-bgset="https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-960x250.jpg 960w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-300x78.jpg 300w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1024x267.jpg 1024w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-768x200.jpg 768w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1536x400.jpg 1536w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide-1440x375.jpg 1440w, https://carmodyrealestates.com/wp-content/uploads/2017/02/office-wide.jpg 1920w"
        data-sizes="auto" data-parent-fit="cover">
        <div class="mh-top-title__heading">Blog</div>
    </div>
    <div class="mh-layout mh-top-title-offset">


        <div class="mh-layout__content-left">

            <section id="post-825" class="mh-post" data-id="825">

                <header class="mh-post-single__header">
                    <h1 class="mh-post-single__title">{{ $blog->title }}</h1>
                    <ul class="mh-post-single__meta">
                        <li>
                            {{ $blog->date }} 
                        </li>
                        {{-- <li>
                            <a href="#comments">
                                4 comments </a>
                        </li> --}}
                        <li>
                            {{ $blog->author }} 
                        </li>
                        {{-- <li>
                            <span>
                                Category: </span>
                            <a href="category/home-design/" rel="category tag">Home Design</a>
                        </li> --}}
                    </ul>
                </header>


                <div class="post-content">
                    {{ $blog->body }}
                    <div class="essb_links essb_counter_modern_right essb_displayed_bottom essb_share essb_template_metro-retina essb_1344089454 print-no"
                        id="essb_displayed_bottom_1344089454" data-essb-postid="825" data-essb-position="bottom"
                        data-essb-button-style="button" data-essb-template="metro-retina"
                        data-essb-counter-pos="right"
                        data-essb-url="https://carmodyrealestates.com/7-instagram-accounts-for-interior-design-enthusiasts/"
                        data-essb-fullurl="https://carmodyrealestates.com/7-instagram-accounts-for-interior-design-enthusiasts/"
                        data-essb-instance="1344089454">
                        <ul class="essb_links_list">
                            <li class="essb_item essb_link_facebook nolightbox"> <a
                                    href="https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=7+Instagram+accounts+for+interior+design+enthusiasts&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2F7-instagram-accounts-for-interior-design-enthusiasts%2F&amp;picture=https://carmodyrealestates.com/wp-content/uploads/2017/02/affordable-office-space.jpg&amp;description=We+went+down+the+lane%2C+by+the+body+of+the+man+in+black%2C+sodden+now+from+the+overnight+hail%2C+and+broke+into+the+woods+at+the+foot+of+the+hill.+We+pushed+through+these+towards+the+railway+without+meeting+a+soul.+The+woods+across+the+line+were+but+the+scarred..."
                                    title="Share on Share on Facebook"
                                    onclick="essb.window(&#39;https://www.facebook.com/dialog/feed?app_id=324259741474727&amp;display=popup&amp;name=7+Instagram+accounts+for+interior+design+enthusiasts&amp;link=https%3A%2F%2Fcarmodyrealestates.com%2F7-instagram-accounts-for-interior-design-enthusiasts%2F&picture=https://carmodyrealestates.com/wp-content/uploads/2017/02/affordable-office-space.jpg&description=We+went+down+the+lane%2C+by+the+body+of+the+man+in+black%2C+sodden+now+from+the+overnight+hail%2C+and+broke+into+the+woods+at+the+foot+of+the+hill.+We+pushed+through+these+towards+the+railway+without+meeting+a+soul.+The+woods+across+the+line+were+but+the+scarred...&#39;,&#39;facebook_advanced&#39;,&#39;1344089454&#39;); return false;"
                                    target="_blank" rel="nofollow"
                                    class="nolightbox essb-s-bg-facebook essb-s-bgh-facebook essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_facebook"></span><span
                                        class="essb_network_name">Share on Facebook</span></a></li>
                            <li class="essb_item essb_link_twitter nolightbox"> <a href="#"
                                    title="Share on Tweet"
                                    onclick="essb.window(&#39;https://twitter.com/intent/tweet?text=7%20Instagram%20accounts%20for%20interior%20design%20enthusiasts&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2F7-instagram-accounts-for-interior-design-enthusiasts%2F&amp;counturl=https%3A%2F%2Fcarmodyrealestates.com%2F7-instagram-accounts-for-interior-design-enthusiasts%2F&#39;,&#39;twitter&#39;,&#39;1344089454&#39;); return false;"
                                    target="_blank" rel="nofollow"
                                    class="nolightbox essb-s-bg-twitter essb-s-bgh-twitter essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_twitter"></span><span
                                        class="essb_network_name">Tweet</span></a></li>
                            <li class="essb_item essb_link_pinterest nolightbox"> <a href="#"
                                    title="Share on Pin it"
                                    onclick="essb.pinterest_picker(&#39;1344089454&#39;); return false;"
                                    target="_blank" rel="nofollow"
                                    class="nolightbox essb-s-bg-pinterest essb-s-bgh-pinterest essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_pinterest"></span><span
                                        class="essb_network_name">Pin it</span></a></li>
                            <li class="essb_item essb_link_linkedin nolightbox"> <a
                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=7+Instagram+accounts+for+interior+design+enthusiasts&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2F7-instagram-accounts-for-interior-design-enthusiasts%2F"
                                    title="Share on LinkedIn"
                                    onclick="essb.window(&#39;https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=7+Instagram+accounts+for+interior+design+enthusiasts&amp;url=https%3A%2F%2Fcarmodyrealestates.com%2F7-instagram-accounts-for-interior-design-enthusiasts%2F&#39;,&#39;linkedin&#39;,&#39;1344089454&#39;); return false;"
                                    target="_blank" rel="nofollow"
                                    class="nolightbox essb-s-bg-linkedin essb-s-bgh-linkedin essb-s-c-light essb-s-hover-effect essb-s-bg-network essb-s-bgh-network"><span
                                        class="essb_icon essb_icon_linkedin"></span><span
                                        class="essb_network_name">LinkedIn</span></a></li>
                        </ul>
                    </div>
                </div>

            </section>

            {{-- <div class="tagcloud">

                <a href="tag/architecture/" title="architecture">
                    architecture </a>
                <a href="tag/design/" title="design">
                    design </a>
                <a href="tag/house/" title="house">
                    house </a>

            </div> --}}
            {{-- <div class="mh-post-single__nav">
                <div class="mh-grid">

                    <div class="mh-grid__1of2">
                        <div class="mh-post-single__nav__prev">
                            <a href="renovating-a-living-room-experts-share-their-secrets/"
                                rel="prev">previous<span>Renovating a Living Room? Experts Share Their
                                    Secrets</span></a>
                        </div>
                    </div>

                    <div class="mh-grid__1of2">
                        <div class="mh-post-single__nav__next">
                            <a href="the-most-inspiring-interior-design-of-2016/"
                                rel="next">next<span>The Most Inspiring Interior Design Of 2016</span></a>
                        </div>
                    </div>

                </div>
            </div> --}}
            <article class="mh-author">
                <div class="position-relative">

                    <div class="mh-author__avatar">
                        <img alt=''
                            src={{ $blog->author_image }}
                            srcset={{ $blog->author_image }}
                            class='avatar avatar-125 photo' height='125' width='125' loading='lazy'
                            decoding='async' />
                    </div>

                    <div class="mh-author__content">
                        <div class="mh-author__content__inner">

                            <div class="mh-author__label">
                                Post author </div>

                            <h3 class="mh-author__name">
                                {{ $blog->author }} </h3>

                            <p>
                                {{ $blog->author_quote }}. </p>

                        </div>
                    </div>

                </div>
            </article>

            <div>
                <h3 class="mh-post-single__section__heading">Related posts</h3>
                <div class="mh-grid">

                    <div class="mh-grid__1of2">
                        <article id="post-827"
                            class="mh-post-grid post-827 post type-post status-publish format-standard has-post-thumbnail hentry category-home-design tag-architecture tag-design tag-house">
                            <a href="the-most-inspiring-interior-design-of-2016/"
                                class="mh-post-grid__thumbnail">
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
                                    <a href="the-most-inspiring-interior-design-of-2016/"
                                        title="The Most Inspiring Interior Design Of 2016">
                                        The Most Inspiring Interior Design Of 2016 </a>
                                </h3>
                                <div class="mh-post-grid__excerpt">
                                    We went down the lane, by the body of the man in black, sodden now from the
                                    overnight hail, and broke into the woods at the foot of the hill. We pushed through
                                    these towards... </div>
                                <div class="mh-post-grid__btn-wrapper">
                                    <a href="the-most-inspiring-interior-design-of-2016/"
                                        title="The Most Inspiring Interior Design Of 2016"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary-ghost">
                                        Read more </a>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>

            <section id="comments" class="mh-comments">
                <header>
                    <h3 class="mh-post-single__section__heading">
                        4 comments </h3>
                </header>

                <div class="comment byuser comment-author-alexander-rees even thread-even depth-1 mh-comment parent"
                    id="comment-5">
                    <div class="mh-comment__avatar">
                        <img alt=''
                            src='https://secure.gravatar.com/avatar/954d57833405bca018a79af86cf7e4383db3684bd130d6fafd1f66ab40389b2a?s=70&amp;d=mm&amp;r=g'
                            srcset='https://secure.gravatar.com/avatar/954d57833405bca018a79af86cf7e4383db3684bd130d6fafd1f66ab40389b2a?s=140&#038;d=mm&#038;r=g 2x'
                            class='avatar avatar-70 photo' height='70' width='70' loading='lazy'
                            decoding='async' />
                    </div>
                    <div class="mh-comment__content">
                        <h4 class="mh-comment__author">
                            Alexander Rees </h4>
                        <div class="mh-comment__date">
                            February 6, 2017 </div>
                        <div class="mh-comment__text">
                            <p>We went down the lane, by the body of the man in black, sodden now from the overnight
                                hail, and broke into the woods at the foot of the hill.</p>
                        </div>


                        <a rel="nofollow" class="comment-reply-link" href="index8e42.html?replytocom=5#respond"
                            data-commentid="5" data-postid="825" data-belowelement="comment-5"
                            data-respondelement="respond" data-replyto="Reply to Alexander Rees"
                            aria-label="Reply to Alexander Rees">Reply<i class="fas fa-reply"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="comment byuser comment-author-ralph-davin bypostauthor odd alt depth-2 mh-comment"
                        id="comment-51">
                        <div class="mh-comment__avatar">
                            <img alt=''
                                src='https://secure.gravatar.com/avatar/9c62dc4d63dfbbbd590a0958e161038c459ca914e0d06b037040144092ff020b?s=70&amp;d=mm&amp;r=g'
                                srcset='https://secure.gravatar.com/avatar/9c62dc4d63dfbbbd590a0958e161038c459ca914e0d06b037040144092ff020b?s=140&#038;d=mm&#038;r=g 2x'
                                class='avatar avatar-70 photo' height='70' width='70' loading='lazy'
                                decoding='async' />
                        </div>
                        <div class="mh-comment__content">
                            <h4 class="mh-comment__author">
                                Ralph Davin </h4>
                            <div class="mh-comment__date">
                                February 6, 2017 </div>
                            <div class="mh-comment__text">
                                <p>On our side the fire had done no more than scorch the nearer trees; it had failed to
                                    secure its footing. In one place the woodmen had been at work on Saturday; trees,
                                    felled and freshly trimmed, lay in a clearing, with heaps of sawdust by the
                                    sawing-machine and its engine.</p>
                            </div>


                        </div>
                    </div><!-- #comment-## -->
                </div><!-- #comment-## -->
                <div class="comment byuser comment-author-alexander-rees even thread-odd thread-alt depth-1 mh-comment"
                    id="comment-6">
                    <div class="mh-comment__avatar">
                        <img alt=''
                            src='https://secure.gravatar.com/avatar/954d57833405bca018a79af86cf7e4383db3684bd130d6fafd1f66ab40389b2a?s=70&amp;d=mm&amp;r=g'
                            srcset='https://secure.gravatar.com/avatar/954d57833405bca018a79af86cf7e4383db3684bd130d6fafd1f66ab40389b2a?s=140&#038;d=mm&#038;r=g 2x'
                            class='avatar avatar-70 photo' height='70' width='70' loading='lazy'
                            decoding='async' />
                    </div>
                    <div class="mh-comment__content">
                        <h4 class="mh-comment__author">
                            Alexander Rees </h4>
                        <div class="mh-comment__date">
                            February 6, 2017 </div>
                        <div class="mh-comment__text">
                            <p>We went down the lane, by the body of the man in black, sodden now from the overniht
                                hail, and broke into the woods at the foot of the hill.</p>
                        </div>


                        <a rel="nofollow" class="comment-reply-link" href="index267f.html?replytocom=6#respond"
                            data-commentid="6" data-postid="825" data-belowelement="comment-6"
                            data-respondelement="respond" data-replyto="Reply to Alexander Rees"
                            aria-label="Reply to Alexander Rees">Reply<i class="fas fa-reply"
                                aria-hidden="true"></i></a>
                    </div>
                </div><!-- #comment-## -->
                <div class="comment byuser comment-author-ralph-davin bypostauthor odd alt thread-even depth-1 mh-comment"
                    id="comment-30">
                    <div class="mh-comment__avatar">
                        <img alt=''
                            src='https://secure.gravatar.com/avatar/9c62dc4d63dfbbbd590a0958e161038c459ca914e0d06b037040144092ff020b?s=70&amp;d=mm&amp;r=g'
                            srcset='https://secure.gravatar.com/avatar/9c62dc4d63dfbbbd590a0958e161038c459ca914e0d06b037040144092ff020b?s=140&#038;d=mm&#038;r=g 2x'
                            class='avatar avatar-70 photo' height='70' width='70' loading='lazy'
                            decoding='async' />
                    </div>
                    <div class="mh-comment__content">
                        <h4 class="mh-comment__author">
                            Ralph Davin </h4>
                        <div class="mh-comment__date">
                            February 6, 2017 </div>
                        <div class="mh-comment__text">
                            <p>On our side the fire had done no more than scorch the nearer trees; it had failed to
                                secure its footing. In one place the woodmen had been at work on Saturday; trees, felled
                                and freshly trimmed, lay in a clearing, with heaps of sawdust by the sawing-machine and
                                its engine.</p>
                        </div>


                        <a rel="nofollow" class="comment-reply-link" href="index7c98.html?replytocom=30#respond"
                            data-commentid="30" data-postid="825" data-belowelement="comment-30"
                            data-respondelement="respond" data-replyto="Reply to Ralph Davin"
                            aria-label="Reply to Ralph Davin">Reply<i class="fas fa-reply"
                                aria-hidden="true"></i></a>
                    </div>
                </div><!-- #comment-## -->
                <div id="respond" class="comment-respond">
                    <h3 id="reply-title" class="comment-reply-title">Leave a reply <small><a rel="nofollow"
                                id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel
                                reply</a></small></h3>
                    <form action="https://carmodyrealestates.com/wp-comments-post.php" method="post"
                        id="commentform" class="comment-form" novalidate>
                        <div class="comments-textarea-wrapper">
                            <textarea placeholder="Comment" name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
                        </div>
                        <div class="comments-fields-wrapper">
                            <div class="mh-grid">
                                <div class="mh-grid__1of3"><input type="text" name="author" id="comment-author"
                                        value="" size="22" tabindex="1" placeholder="Name*"
                                        aria-required='true' /></div>
                                <div class="mh-grid__1of3"><input type="text" name="email" id="comment-email"
                                        value="" size="22" tabindex="2" placeholder="Email*"
                                        aria-required='true' /></div>
                                <div class="mh-grid__1of3"><input type="text" name="url" id="comment-url"
                                        value="" size="22" tabindex="3" placeholder="Website" /></div>
                            </div>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                    name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label
                                    for="wp-comment-cookies-consent">Save my name, email, and website in this browser
                                    for the next time I comment.</label></p>
                        </div>
                        <p class="form-submit">
                            <button
                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                                Send comment </button>
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            <input type="hidden" name="comment_post_ID" value="825" id="comment_post_ID">
                        </p>
                        <p style="display: none !important;"><label>&#916;
                                <textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                            </label><input type="hidden" id="ak_js_1" name="ak_js" value="99" />
                            <script>
                                document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                            </script>
                        </p>
                    </form>
                </div><!-- #respond -->
            </section>
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
                        <div class="widget-infobox__text">{{ $blog->author_quote }}.</div>
                    </div>
                </section>
                {{-- <section id="myhome-facebook-widget-3" class="widget widget-mh-facebook">
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
                </section> --}}
                <section id="recent-posts-2" class="widget widget_recent_entries">
                    <div class="mh-widget-title">
                        <h3 class="mh-widget-title__text">Recent Posts</h3>
                    </div>
                    <ul>
                        @foreach ($recents as $recent)
                            <li>
                                <a href={{ url("blogs/".$blog->slug) }}>
                                    {{ $recent->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                </section>
                {{-- <section id="search-2" class="widget widget_search">
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
                </section> --}}
                {{-- <section id="recent-comments-2" class="widget widget_recent_comments">
                    <div class="mh-widget-title">
                        <h3 class="mh-widget-title__text">Recent Comments</h3>
                    </div>
                    <ul id="recentcomments">
                        <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                href="#comment-51">7 Instagram accounts for interior design enthusiasts</a>
                        </li>
                        <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                href="renovating-a-living-room-experts-share-their-secrets/#comment-50">Renovating
                                a Living Room? Experts Share Their Secrets</a></li>
                        <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                href="recent-commercial-real-estate-transactions/#comment-49">Recent
                                Commercial Real Estate Transactions</a></li>
                        <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                href="the-interior-design-trends/#comment-48">7 home trends that will
                                shape your house in 2017</a></li>
                        <li class="recentcomments"><span class="comment-author-link">Ralph Davin</span> on <a
                                href="the-interior-design-trends/#comment-47">7 home trends that will
                                shape your house in 2017</a></li>
                    </ul>
                </section> --}}
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