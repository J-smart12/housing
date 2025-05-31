<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="xmlrpc.php">

    <link rel="stylesheet" id="myhome-font-awesome-css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css?ver=3.1.69" type="text/css"
        media="all" />
    <script>
        window.mapLoaded = function() {}
    </script>
    <title>@yield('title') &#8211; Benallysrealestates.com</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <link rel='dns-prefetch' href='https://cdnjs.cloudflare.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
    <link rel="alternate" type="application/rss+xml" title="Benallysrealestates.com &raquo; Feed" href="feed/" />
    <link rel="alternate" type="application/rss+xml" title="Benallysrealestates.com &raquo; Comments Feed"
        href="comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/Benallysrealestates.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.1"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\ud83d\udd25", "\ud83d\udc26\u200b\ud83d\udd25")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href={{ asset('wp-includes/css/dist/block-library/style.min0899.css')}} type='text/css' media='all' />
    <style id='wp-block-library-theme-inline-css' type='text/css'>
        .wp-block-audio :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-audio {
            margin: 0 0 1em
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-embed {
            margin: 0 0 1em
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: #ffffffa6
        }

        :root :where(.wp-block-image figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme :root :where(.wp-block-image figcaption) {
            color: #ffffffa6
        }

        .wp-block-image {
            margin: 0 0 1em
        }

        .wp-block-pullquote {
            border-bottom: 4px solid;
            border-top: 4px solid;
            color: currentColor;
            margin-bottom: 1.75em
        }

        .wp-block-pullquote cite,
        .wp-block-pullquote footer,
        .wp-block-pullquote__citation {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            text-transform: uppercase
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            font-style: normal;
            position: relative
        }

        .wp-block-quote:where(.has-text-align-right) {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote:where(.has-text-align-center) {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote:where(.is-style-plain) {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: .375em .625em
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table {
            margin: 0 0 1em
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal
        }

        .wp-block-table :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-video :where(figcaption) {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video :where(figcaption) {
            color: #ffffffa6
        }

        .wp-block-video {
            margin: 0 0 1em
        }

        :root :where(.wp-block-template-part.has-background) {
            margin-bottom: 0;
            margin-top: 0;
            padding: 1.25em 2.375em
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>

    <link rel="stylesheet" id="myhome-idx-broker-css"
        href={{ asset('wp-content/plugins/myhome-idx-broker/assets/css/main9651.css') }} type="text/css"
        media="all" />

    <link rel="stylesheet" id="bsf-Defaults-css"
        href={{ asset('wp-content/uploads/smile_fonts/Defaults/Defaultsc0e7.css') }} type="text/css"
        media="all" />

    <link rel='stylesheet' id='redux-extendify-styles-css'
        href={{ asset('wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilitiesa94e.css')}}
        type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'
        href={{ asset('wp-content/plugins/contact-form-7/includes/css/stylesf2b4.css')}} type='text/css'
        media='all' />
    <link rel='stylesheet' id='myhome-style-css' href={{ asset('wp-content/themes/myhome/style.min358c.css')}}
        type='text/css' media='all' />
    <style id='myhome-style-inline-css' type='text/css'>
        @media (min-width:1023px) {
            #mega_main_menu li.default_dropdown>.mega_dropdown {
                width: 225px !important;
            }
        }

        :root {
            --primary: #29aae3;
        }

        .mh-active-input-primary input[type=text]:focus,
        .mh-active-input-primary input[type=text]:active,
        .mh-active-input-primary input[type=search]:focus,
        .mh-active-input-primary input[type=search]:active,
        .mh-active-input-primary input[type=email]:focus,
        .mh-active-input-primary input[type=email]:active,
        .mh-active-input-primary input[type=password]:focus,
        .mh-active-input-primary input[type=password]:active,
        .mh-active-input-primary textarea:focus,
        .mh-active-input-primary textarea:active,
        .mh-active-input-primary .mh-active-input input,
        .mh-active-input-primary .mh-active-input input,
        .myhome-body.mh-active-input-primary .mh-active-input .bootstrap-select.btn-group>.btn {
            background: rgba(41, 170, 227, 0.05) !important;
        }

        html body .primary {
            background: rgba(41, 170, 227) !important;
        }


        html body .mh-fixed-menu--active #mega_main_menu.mh-primary #mh-submit-button a,
        html body .mh-fixed-menu--active #mega_main_menu.mh-primary #mh-submit-button a i {
            color: rgba(41, 170, 227) !important;
        }

        .mh-app-wrapper .stepper__header .stepper__step--complete+.divider {
            background: rgba(41, 170, 227) !important;
        }

        html body .primary--text {
            color: rgba(41, 170, 227) !important;
        }

        html body .primary--text textarea,
        html body .primary--text input {
            caret-color: rgba(41, 170, 227) !important;
        }

        @media (min-width:1023px) {
            html body #mega_main_menu.mh-primary .nav_logo img {
                height: 40px !important;
            }
        }

        /* Menu */


        @media (min-width:1023px) {
            .mh-sticky-menu-placeholder--active {
                min-height: 80px;
            }
        }

        @media (min-width: 1023px) {
            .logo_link {
                margin-right: 48px !important;
            }
        }

        @media (min-width: 1023px) {
            html body #mega_main_menu.mh-primary>.menu_holder>.menu_inner>ul>li[class*="columns"] {
                margin-right: 10px !important;
            }
        }
    </style>
    <link rel='stylesheet' id='subscribe-forms-css-css'
        href={{ asset('wp-content/plugins/easy-social-share-buttons3/assets/modules/subscribe-forms.minad72.css')}}
        type='text/css' media='all' />
    <link rel='stylesheet' id='click2tweet-css-css'
        href={{ asset('wp-content/plugins/easy-social-share-buttons3/assets/modules/click-to-tweet.minad72.css')}}
        type='text/css' media='all' />
    <link rel='stylesheet' id='easy-social-share-buttons-css'
        href={{ asset('wp-content/plugins/easy-social-share-buttons3/assets/css/easy-social-share-buttons.minad72.css')}}
        type='text/css' media='all' />
    <link rel='stylesheet' id='mmm_mega_main_menu-css'
        href={{ asset('wp-content/plugins/mega_main_menu/src/css/cache.skin4bd0.css')}} type='text/css'
        media='all' />
    <link rel='stylesheet' id='js_composer_front-css'
        href={{ asset('wp-content/plugins/js_composer/assets/css/js_composer.min555b.css')}} type='text/css'
        media='all' />

    <link rel='stylesheet' id='myhome-font-awesome-css'
        href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css' type='text/css'
        media='all' />

    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700%7CPlay:400,700&amp;subset=latin-ext&amp;display=block&amp;ver=1686896115" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700%7CPlay:400,700&amp;subset=latin-ext&amp;display=block&amp;ver=1686896115"
        media="print" onload="this.media='all'"><noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700%7CPlay:400,700&amp;subset=latin-ext&amp;display=block&amp;ver=1686896115" />
    </noscript>

    <script type="text/javascript" src={{ asset("wp-includes/js/jquery/jquery.min.js?ver=3.7.1") }} id="jquery-core-js"></script>
    <script type="text/javascript" src={{ asset("wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1") }} id="jquery-migrate-js"></script>
    <script type="text/javascript" src={{ asset("wp-content/plugins/revslider/public/assets/js/rbtools.mine8c6.js?ver=6.6.13") }} async id="tp-tools-js"></script>
    <script type="text/javascript" src={{ asset("wp-content/plugins/revslider/public/assets/js/rs6.mine8c6.js?ver=6.6.13") }} async id="revmin-js"></script>

    <link rel="https://api.w.org/" href="wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/1719.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.8.1" />
    <link rel="canonical" href="" />
    <link rel='shortlink' href='' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="wp-json/oembed/1.0/embedfc39.json?url=https%3A%2F%2FBenallysrealestates.com%2Fabout-us%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed5e61?url=https%3A%2F%2FBenallysrealestates.com%2Fabout-us%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.4.1" />
    <style>
        @font-face {
            font-family: "Flaticon";
            src: url("https://demo1.myhometheme.net/wp-content/themes/myhome/assets/fonts/Flaticon.eot");
            src: url("https://demo1.myhometheme.net/wp-content/themes/myhome/assets/fonts/Flaticon.eot?#iefix") format("embedded-opentype"),
                url("https://demo1.myhometheme.net/wp-content/themes/myhome/assets/fonts/Flaticon.woff") format("woff"),
                url("https://demo1.myhometheme.net/wp-content/themes/myhome/assets/fonts/Flaticon.ttf") format("truetype"),
                url("https://demo1.myhometheme.net/wp-content/themes/myhome/assets/fonts/Flaticon.svg#Flaticon") format("svg");
        }

        @media screen and (-webkit-min-device-pixel-ratio: 0) {
            @font-face {
                font-family: "Flaticon";
                src: url("https://demo1.myhometheme.net/wp-content/themes/myhome/assets/fonts/Flaticon.svg#Flaticon") format("svg");
            }
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <script type="text/javascript">
        var essb_settings = {
            "ajax_url": "https:\/\/Benallysrealestates.com\/wp-admin\/admin-ajax.php",
            "essb3_nonce": "7468f12386",
            "essb3_plugin_url": "https:\/\/Benallysrealestates.com\/wp-content\/plugins\/easy-social-share-buttons3",
            "essb3_stats": false,
            "essb3_ga": false,
            "essb3_ga_ntg": false,
            "blog_url": "https:\/\/Benallysrealestates.com\/",
            "post_id": "1719"
        };
    </script>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator"
        content="Powered by Slider Revolution 6.6.13 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        /*
You can add your own CSS here.

Click the help icon above to learn more.
*/

        @media (min-width:1023px) {
            #mega_main_menu li.default_dropdown>.mega_dropdown {
                width: 242px !important;
            }
        }

        .mh-post-grid__thumbnail .mh-thumbnail__inner img {
            max-width: 100%;
        }
    </style>
    <style id="myhome_redux-dynamic-css" title="dynamic-css" class="redux-options-output">
        html body.myhome-body .mh-menu-primary-color-background .mh-header:not(.mh-header--transparent) #mega_main_menu.mh-primary>.menu_holder>.menu_inner>span.nav_logo,
        html body.myhome-body .mh-menu-primary-color-background .mh-header:not(.mh-header--transparent) #mega_main_menu.mh-primary>.menu_holder>.mmm_fullwidth_container,
        .myhome-body .mh-thumbnail__featured,
        .myhome-body .calendar_wrap table tbody td a:hover,
        .myhome-body .dropdown-menu>li.selected a,
        .myhome-body .mdl-button.mdl-button--raised.mdl-button--primary,
        .myhome-body .mdl-button.mdl-button--primary-ghost:hover,
        .myhome-body .mdl-button.mdl-button--primary-ghost:active,
        .myhome-body .mdl-button.mdl-button--primary-ghost:focus,
        .myhome-body .mdl-button.mdl-button--compare-active,
        .myhome-body .mdl-button.mdl-button--compare-active:hover,
        .myhome-body .mdl-button.mdl-button--compare-active:active,
        .myhome-body .mdl-button.mdl-button--compare-active:focus,
        .myhome-body .mh-accordion .ui-accordion-header.ui-accordion-header-active,
        .myhome-body .mh-caption__inner,
        .myhome-body .mh-compare__price,
        .myhome-body .mh-estate__slider__price,
        .myhome-body .mh-estate__details__price,
        .myhome-body .mh-heading--top-separator:after,
        .myhome-body .mh-heading--bottom-separator:after,
        .myhome-body .mh-loader,
        .myhome-body .wpcf7-form .wpcf7-form-control.wpcf7-submit,
        .myhome-body .mh-loader:before,
        .myhome-body .mh-loader:after,
        .myhome-body .mh-map-panel__element button:hover,
        .myhome-body .mh-map-panel .mh-map-panel__element button.mh-button--active,
        .myhome-body .mh-map-panel .mh-map-panel__element button.mh-button--active:hover,
        .myhome-body .mh-map-panel .mh-map-panel__element button.mh-button--active:active,
        .myhome-body .mh-map-panel .mh-map-panel__element button.mh-button--active:focus,
        .myhome-body .mh-map-zoom__element button:hover,
        .myhome-body .mh-map-infobox,
        .myhome-body .mh-post-single__nav__prev:before,
        .myhome-body .mh-post-single__nav__next:before,
        .myhome-body .mh-slider__card-short__price,
        .myhome-body .mh-slider__card-default__price,
        .myhome-body #estate_slider_card .tparrows:hover:before,
        .myhome-body #estate_slider_card_short .tparrows:hover:before,
        .myhome-body #mh_rev_slider_single .tparrows:hover:before,
        .myhome-body #mh_rev_gallery_single .tparrows:hover:before,
        .myhome-body .mh-social-icon:hover,
        .myhome-body .mh-top-header--primary,
        .myhome-body .mh-top-header-big:not(.mh-top-header-big--primary) .mh-top-header-big__panel,
        .myhome-body .mh-top-header-big.mh-top-header-big--primary,
        .myhome-body .mh-browse-estate__row:first-child,
        .myhome-body .mh-widget-title__text:before,
        .myhome-body .owl-carousel .owl-dots .owl-dot.active span,
        .myhome-body .tagcloud a:hover,
        .myhome-body .tagcloud a:active,
        .myhome-body .tagcloud a:focus,
        .myhome-body .mh-menu ul li a:before,
        .myhome-body .widget_pages ul li a:before,
        .myhome-body .widget_meta ul li a:before,
        .myhome-body .widget_recent_entries ul li a:before,
        .myhome-body .widget_nav_menu ul li a:before,
        .myhome-body .widget_categories ul li a:before,
        .myhome-body .widget_archive ul li a:before,
        .myhome-body .calendar_wrap table #today,
        .myhome-body .mh-background-color-primary,
        .myhome-body .mh-user-panel__menu ul li.mh-user-panel__menu__li--active button,
        .myhome-body .mh-user-panel__menu ul li.mh-user-panel__menu__li--active a,
        .myhome-body .mh-top-header--primary .mh-top-bar-user-panel__user-info,
        .myhome-body .mh-top-header-big .mh-top-bar-user-panel__user-info,
        .myhome-body .awesomplete mark,
        .myhome-body .idx-omnibar-form.idx-omnibar-original-form button,
        .myhome-body .idx-omnibar-form.idx-omnibar-original-form .awesomplete>ul>li mark,
        .myhome-body #IDX-main #IDX-resultsRow .IDX-resultsDetailsLink a:hover,
        .myhome-body #IDX-main #IDX-formSubmit,
        .myhome-body #IDX-main #IDX-submitBtn,
        .myhome-body #IDX-main #IDX-scheduleShowing,
        .myhome-body #IDX-main #IDX-photoGalleryLink,
        .myhome-body #IDX-main .IDX-detailsVirtualTourLink,
        .myhome-body #IDX-main #IDX-detailsVirtualTour,
        .myhome-body .IDX-qsInput.IDX-qsButtonInput,
        .myhome-body #IDX-main.IDX-category-map #IDX-criteriaText,
        .myhome-body .mh-fixed-menu--active .mh-menu-primary-color-background .mega_main_menu,
        .myhome-body.mh-active-input-primary .mh-search__panel>div:not(:first-child) .is-checked .mdl-radio__inner-circle,
        .myhome-body #myhome-idx-wrapper #IDX-leadToolsBar,
        .myhome-body #myhome-idx-wrapper #IDX-submitBtn,
        .myhome-body #myhome-idx-wrapper #IDX-formSubmit,
        .myhome-body #myhome-idx-wrapper #IDX-submitBtn:hover,
        .myhome-body #myhome-idx-wrapper #IDX-formSubmit:hover,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 .IDX-detailsVirtualTourLink,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing .IDX-detailsVirtualTourLink,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 .IDX-detailsVirtualTourLink:hover,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing .IDX-detailsVirtualTourLink:hover,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details #IDX-photoGalleryLink,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details #IDX-scheduleShowing,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-photoGalleryLink,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-scheduleShowing,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details #IDX-photoGalleryLink:hover,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details #IDX-scheduleShowing:hover,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-photoGalleryLink:hover,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-scheduleShowing:hover,
        .myhome-body .myhome-idx-wrapper__mortgage_calculator-mobileFirstMortgage-1002 .IDX-input-group-addon,
        .myhome-body .myhome-idx-wrapper__map_search_page-mapsearch-1000 #IDX-criteriaText,
        .myhome-body .myhome-idx-wrapper__map_search_page-mapsearch-1000 #IDX-criteriaWindow .ui-widget-content .ui-slider-range,
        .myhome-body .myhome-idx-wrapper__map_search_page-mapsearch-1000 #IDX-criteriaWindow .ui-widget-content,
        .myhome-body .idx-omnibar-form button,
        .myhome-body .myhome-idx-wrapper__results-mobileFirstResults-1006 .IDX-resultsDetailsLink a:hover,
        .myhome-body .IDX-type-roster #IDX-rosterFilterSubmit,
        .myhome-body .IDX-type-roster #IDX-rosterFilterSubmit:hover,
        .myhome-body .myhome-idx-wrapper__search_page-searchBase-1005 #IDX-loginSubmit,
        .myhome-body #myhome-idx-wrapper .IDX-category-search #IDX-loginSubmit,
        .myhome-body .myhome-idx-wrapper__search_page-searchBase-1005 #IDX-loginSubmit:hover,
        .myhome-body #myhome-idx-wrapper .IDX-category-search #IDX-loginSubmit:hover,
        .myhome-body .myhome-idx-wrapper__my_account-myaccount-1000 input[type=submit],
        .myhome-body .myhome-idx-wrapper__my_account-myaccount-1000 input[type=submit]:hover,
        .myhome-body .myhome-idx-wrapper__user_signup-usersignup-1002 #IDX-submitBtn,
        .myhome-body .myhome-idx-wrapper__user_signup-usersignup-1002 #IDX-submitBtn:hover,
        .myhome-body .myhome-idx-wrapper__user_login-userlogin-1001 #IDX-loginSubmit,
        .myhome-body .myhome-idx-wrapper__user_login-userlogin-1001 #IDX-loginSubmit:hover,
        .myhome-body #IDX-widgetLeadLoginWrapper.IDX-widgetLeadLoginWrapper input[type=submit],
        .myhome-body #IDX-widgetLeadLoginWrapper.IDX-widgetLeadLoginWrapper input[type=submit]:hover,
        .myhome-body #LeadSignup.LeadSignup input[type=submit],
        .myhome-body #LeadSignup.LeadSignup input[type=submit]:hover,
        .myhome-body .IDX-quicksearchWrapper .IDX-quicksearchForm .IDX-qsInput.IDX-qsButtonInput,
        .myhome-body #myhome-idx-wrapper.myhome-idx-wrapper__mortgage_calculator-mobileFirstMortgage-1002 .IDX-input-group-addon,
        .myhome-body #myhome-idx-wrapper.myhome-idx-wrapper__mortgage_calculator-mobileFirstMortgage-1002 .IDX-btn-primary,
        .myhome-body #myhome-idx-wrapper.myhome-idx-wrapper__mortgage_calculator-mobileFirstMortgage-1002 .IDX-btn-primary:hover,
        html body.myhome-body .ui-dialog[aria-labelledby*=IDX-loadingScreen] #IDX-loadingScreen,
        html body.myhome-body .ui-dialog[aria-labelledby*=IDX-loadingScreen] #IDX-loadingScreen:before,
        html body.myhome-body .ui-dialog[aria-labelledby*=IDX-loadingScreen] #IDX-loadingScreen:after,
        .IDX-registrationModal #IDX-registration .IDX-btn-primary,
        .IDX-registrationModal #IDX-registration .IDX-btn-primary:hover,
        .myhome-body .myhome-idx-wrapper__photo_gallery-mobileFirstPhotoGallery-1003 #IDX-photoGallery .IDX-arrow:hover,
        .myhome-body div[id*=IDX-carouselGallery-]+a:hover,
        .myhome-idx-wrapper__results-mobileFirstResults-1006 #IDX-resultsRefineSubmit,
        .myhome-idx-wrapper__results-mobileFirstResults-1006 #IDX-resultsRefineSubmit:hover,
        .myhome-body .mh-app-wrapper .primary,
        .myhome-body div.awesomplete mark,
        .myhome-body .mh-popup-login .mh-popup-login__tab-button.active,
        .myhome-body .mh-app__sidebar-nav__avatar-placeholder:hover,
        .myhome-body .mh-pricing-table__row--name,
        .myhome-body .woocommerce #respond input#submit.alt,
        .myhome-body .woocommerce a.button.alt,
        .myhome-body .woocommerce button.button.alt,
        .myhome-body .woocommerce input.button.alt,
        .myhome-body .mh-field-plans__list__image__icon {
            background-color: #29aae3;
        }

        .myhome-body blockquote,
        .myhome-body html body .mh-menu-primary-color-background #mega_main_menu.mh-primary>.menu_holder>.mmm_fullwidth_container,
        .myhome-body input[type=text]:focus,
        .myhome-body input[type=text]:active,
        .myhome-body input[type=password]:focus,
        .myhome-body input[type=password]:active,
        .myhome-body input[type=email]:focus,
        .myhome-body input[type=email]:active,
        .myhome-body input[type=search]:focus,
        .myhome-body input[type=search]:active,
        .myhome-body input[type=tel]:focus,
        .myhome-body input[type=tel]:active,
        .myhome-body textarea:focus,
        .myhome-body textarea:active,
        .myhome-body .sticky,
        .myhome-body .mh-active-input input,
        .myhome-body .mh-active-input .bootstrap-select.btn-group>.btn,
        .myhome-body .mdl-button.mdl-button--primary-ghost,
        .myhome-body .mh-compare,
        .myhome-body .tagcloud a:hover,
        .myhome-body .tagcloud a:active,
        .myhome-body .tagcloud a:focus,
        .myhome-body .mh-map-panel,
        .myhome-body .mh-map-zoom,
        .myhome-body .mh-map-infobox:after,
        .myhome-body .mh-map-infobox .mh-map-infobox__img-wrapper,
        .myhome-body .mh-search-horizontal,
        .myhome-body .mh-search-map-top .mh-search-horizontal,
        .myhome-body .mh-social-icon:hover:after,
        .myhome-body .mh-top-header--primary,
        .myhome-body .owl-carousel .owl-dots .owl-dot.active span,
        .myhome-body .mh-border-color-primary,
        .myhome-body .mh-post .post-content blockquote,
        .myhome-body .mh-user-panel-info,
        .myhome-body.mh-active-input-primary .mh-search__panel>div:not(:first-child) .is-checked .mdl-radio__outer-circle,
        html body.myhome-body .mh-menu-primary-color-background .mh-header:not(.mh-header--transparent) #mega_main_menu.mh-primary>.menu_holder>.mmm_fullwidth_container,
        .myhome-body .myhome-idx-wrapper__photo_gallery-photogallery-1002 .IDX-photoGallery,
        .myhome-body .myhome-idx-wrapper__map_search_page-mapsearch-1000 #IDX-searchNavWrapper,
        .myhome-body .myhome-idx-wrapper__results-mobileFirstResults-1006 .IDX-propertyTypeHeader,
        .myhome-body .myhome-idx-wrapper__results-mobileFirstResults-1006 .IDX-resultsDetailsLink a,
        .myhome-body .myhome-idx-wrapper__search_page-searchBase-1005 #IDX-searchNavWrapper,
        .myhome-body #myhome-idx-wrapper .IDX-category-search #IDX-searchNavWrapper,
        .myhome-body .myhome-idx-wrapper__search_page-searchStandard-1002 #IDX-searchNavWrapper,
        .myhome-body #myhome-idx-wrapper.myhome-idx-wrapper__mortgage_calculator-mobileFirstMortgage-1002 .IDX-well,
        .myhome-body div[id*=IDX-carouselGallery-]+a,
        .myhome-body .mh-app-wrapper .primary,
        .myhome-body .tabs {
            border-color: #29aae3;
        }

        .myhome-body .mh-navbar__menu ul:first-child>li:hover>a,
        .myhome-body .mh-navbar__container .mh-navbar__menu ul:first-child>li:hover>a:first-child,
        .myhome-body .mh-pagination a:hover,
        .myhome-body .page-numbers.current,
        .myhome-body .mh-footer-top--dark a:hover,
        .myhome-body .mh-footer-top--dark a:active,
        .myhome-body .mh-footer-top--dark a:focus,
        .myhome-body.input-myhome .mh-active-input input,
        .myhome-body .tt-highlight,
        .myhome-body .mh-breadcrumbs__item a:hover,
        .myhome-body .mh-breadcrumbs__back:hover,
        .myhome-body .mh-breadcrumbs__back:hover i,
        .myhome-body .mh-active-input .bootstrap-select.btn-group>.btn,
        .myhome-body .mh-active-input .bootstrap-select.btn-group .dropdown-toggle .filter-option,
        .myhome-body .mdl-button.mdl-button--primary-ghost,
        .myhome-body .mdl-button.mdl-button--primary-ghost:hover,
        .myhome-body .mdl-button.mdl-button--primary-ghost:active,
        .myhome-body .mdl-button.mdl-button--primary-ghost:focus,
        .myhome-body .mdl-button.mdl-button--primary-font,
        html body #mega_main_menu.mh-primary #mh-submit-button a,
        html body.myhome-body #mega_main_menu.mh-primary #mh-submit-button a i,
        html body.myhome-body #mega_main_menu.mh-primary>.menu_holder>.menu_inner>ul>li:hover>a:after,
        html body.myhome-body #mega_main_menu.mh-primary>.menu_holder>.menu_inner>ul>li:hover>.item_link *,
        .myhome-body .comment-edit-link:hover,
        .myhome-body .comment-reply-link:hover,
        .myhome-body .mh-compare__feature-list li a:hover,
        .myhome-body .mh-compare__list__element a:hover,
        .myhome-body .mh-compare__list__element a:hover i,
        .myhome-body .mh-estate__list__element a:hover,
        .myhome-body .mh-estate__list__element a:hover i,
        .myhome-body .mh-estate-horizontal__primary,
        .myhome-body .mh-estate-vertical__primary,
        .myhome-body .mh-filters__button.mh-filters__button--active,
        .myhome-body .mh-filters__button.mh-filters__button--active:hover,
        .myhome-body button.mh-filters__right__button--active,
        .myhome-body .mh-loader-wrapper-map,
        .myhome-body .mh-loader,
        .myhome-body .mh-register-terms .mh-register-terms__text a,
        .myhome-body .mh-register-field__terms .mh-register-field__terms__text a,
        .myhome-body .mh-form-container__reset:hover,
        .myhome-body .mh-map-wrapper__noresults,
        .myhome-body .mh-map-pin i,
        .myhome-body .mh-navbar__wrapper #mh-submit-button a:hover,
        .myhome-body .mh-pagination--single-post,
        .myhome-body .mh-post-single__meta a:hover,
        .myhome-body .mh-search__heading-big,
        .myhome-body .mh-button-transparent:hover,
        .myhome-body .mh-user-panel__plans__row .mh-user-panel__plans__cell-4 button:hover,
        .myhome-body .mh-browse-estate__cell-3 a:hover,
        .myhome-body .mh-browse-estate__cell-payment a:hover,
        .myhome-body .mh-user-pagination li:hover,
        .myhome-body .mh-user-pagination li.mh-user-pagination__element-active,
        .myhome-body .mh-top-header-big__element:not(.mh-top-header-big__panel) a:hover,
        .myhome-body .mh-color-primary,
        .myhome-body .mh-top-header:not(.mh-top-header--primary) a:hover,
        .myhome-body .mh-top-header-big .mh-top-header-big__social-icons a:hover,
        .myhome-body .mh-top-header-big .mh-top-header-big__social-icons button:hover,
        .myhome-body .mh-estate__details>div a:hover,
        .myhome-body .recentcomments a:hover,
        .myhome-body .rsswidget:hover,
        .myhome-body .mh-post .post-content a:hover,
        .myhome-body .link-primary:hover,
        .myhome-body .mh-estate__agent__content a:hover,
        .myhome-body .mh-pagination--properties li.active a,
        .myhome-body .mh-page-type-v2__content a,
        .myhome-body .idx-omnibar-form.idx-omnibar-original-form .awesomplete>ul>li:hover,
        .myhome-body .idx-omnibar-form.idx-omnibar-original-form .awesomplete>ul>li[aria-selected="true"],
        .myhome-body #IDX-main #IDX-resultsRow .IDX-field-listingPrice.IDX-field-price.IDX-field .IDX-text,
        .myhome-body #IDX-main #IDX-resultsRow .IDX-resultsDetailsLink a,
        .myhome-body #IDX-main.IDX-category-details #IDX-detailsTopNav .IDX-topLink a:hover,
        .myhome-body #IDX-main.IDX-category-details .IDX-listAsRow li span,
        .myhome-body #IDX-main.IDX-category-details .IDX-listAsRow li a:hover,
        .myhome-body #IDX-main.IDX-category-search .IDX-listAsRow li span,
        .myhome-body #IDX-main.IDX-category-map .IDX-listAsRow li span,
        .myhome-body #IDX-main.IDX-category-search .IDX-listAsRow li a:hover,
        .myhome-body #IDX-main.IDX-category-map .IDX-listAsRow li a:hover,
        .myhome-body #IDX-main.IDX-category-search .IDX-listAsRow li span,
        .myhome-body #IDX-main.IDX-category-map .IDX-listAsRow li span,
        .myhome-body #IDX-main.IDX-category-search .IDX-listAsRow li a:hover,
        .myhome-body #IDX-main.IDX-category-map .IDX-listAsRow li a:hover,
        .myhome-body #IDX-main.IDX-category-details #IDX-detailsField-listingPrice #IDX-detailsPrice,
        .myhome-body .mh-rs-search #myhome-search-form-submit .mh-search__panel--keyword .mh-search__panel.mh-active-input:after,
        .myhome-body.mh-active-input-primary .mh-search__panel>div:not(:first-child) .is-checked .mdl-radio__label,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-nextLastButtons #IDX-nextProp,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-nextLastButtons #IDX-nextProp,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-hotLinks a:hover,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-hotLinks a:hover,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details #IDX-detailsField-listingPrice #IDX-detailsPrice,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-detailsField-listingPrice #IDX-detailsPrice,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details #IDX-detailsTopNav .IDX-topLink a:hover,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing #IDX-detailsTopNav .IDX-topLink a:hover,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details .IDX-listAsRow li span,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing .IDX-listAsRow li span,
        .myhome-body #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-main.IDX-category-details .IDX-listAsRow li a:hover,
        .myhome-body #myhome-idx-wrapper .IDX-page-listing .IDX-listAsRow li a:hover,
        .myhome-body .myhome-idx-wrapper__photo_gallery-photogallery-1002 .IDX-page-photogallery #IDX-previousPage a:hover,
        .myhome-body .idx-omnibar-form .awesomplete>ul>li:hover,
        .myhome-body .idx-omnibar-form .awesomplete>ul>li[aria-selected="true"],
        .myhome-body .myhome-idx-wrapper__results-mobileFirstResults-1006 .IDX-propertyTypeHeader,
        .myhome-body .myhome-idx-wrapper__results-mobileFirstResults-1006 .IDX-field-listingPrice.IDX-field-price.IDX-field .IDX-text,
        .myhome-body .myhome-idx-wrapper__results-mobileFirstResults-1006 .IDX-resultsDetailsLink a,
        .myhome-body .myhome-idx-wrapper__search_page-searchBase-1005 .IDX-emailUpdateSignupText,
        .myhome-body #myhome-idx-wrapper .IDX-category-search .IDX-emailUpdateSignupText,
        .myhome-body .myhome-idx-wrapper__my_account-myaccount-1000 .IDX-backLink:hover,
        .myhome-body .myhome-idx-wrapper__user_signup-usersignup-1002 #IDX-loginText a,
        .myhome-body div[id*=IDX-carouselGallery-] .IDX-carouselPrice,
        .myhome-body .IDX-showcaseTable .IDX-showcasePrice,
        .myhome-body .IDX-slideshowWrapper .IDX-slideshowPrice,
        .myhome-body .myhome-idx-wrapper__results-mobileFirstResults-1006 #IDX-agentbio .IDX-actionLinks a,
        .myhome-body .IDX-searchNavItem>span,
        html body.myhome-body .ui-dialog[aria-labelledby*=IDX-loadingScreen] #IDX-loadingScreen,
        .myhome-body .myhome-idx-wrapper__photo_gallery-mobileFirstPhotoGallery-1003 .IDX-showcaseThumbnails-button.IDX-active,
        .myhome-body div[id*=IDX-carouselGallery-]+a,
        .myhome-body .mh-popup-top-info i,
        .myhome-body .mh-pricing-table__row--sold,
        .myhome-body.mh-active-input-primary .mh-active-input input,
        .myhome-body .mh-estate__list .mh-estate__list__inner .mh-estate__list__element--attachment a:hover {
            color: #29aae3;
        }

        body,
        button,
        input,
        optgroup,
        select,
        textarea,
        .mh-accordion .ui-accordion-header,
        .mh-estate-horizontal__subheading,
        .mh-estate-horizontal__primary,
        .mh-estate-vertical__subheading,
        .mh-estate-vertical__primary,
        .mh-map-infobox,
        .mh-user-panel-info__heading,
        .mh-font-body {
            font-family: Lato;
            font-weight: 400;
            font-display: block;
        }

        .mh-main-font-italic {
            font-family: Lato;
            font-weight: 400;
            font-style: italic;
            font-display: block;
        }

        .mh-estate-horizontal__primary,
        .mh-estate-vertical__primary {
            font-family: Lato;
            font-weight: 700;
            font-display: block;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .mh-estate__details__price,
        .mh-top-header,
        .mh-top-header-big__panel,
        .mh-caption__inner,
        .mh-slider-single__price,
        .mh-heading-font-bold,
        .mh-search__results,
        .mh-user-panel__user__content {
            font-family: Play;
            font-weight: 400;
            font-display: block;
        }

        h1,
        .mh-caption__inner,
        .mh-slider-single__price,
        .mh-heading-font-bold,
        .mh-search__results,
        .mh-user-panel__user__content,
        #IDX-main .IDX-control-label,
        .mh-top-title__heading,
        #myhome-idx-wrapper .IDX-control-label,
        #myhome-idx-wrapper .IDX-addressField label,
        #myhome-idx-wrapper__details-detailsDynamic-1008 #IDX-detailsFeaturedAgentdisplayname,
        #myhome-idx-wrapper .IDX-page-listing #IDX-detailsFeaturedAgentdisplayname,
        .myhome-idx-wrapper__results-mobileFirstResults-1006 .IDX-bioName,
        #IDX-featuredAgentWrap.IDX-featuredAgentWrap .IDX-featuredAgentContact,
        .IDX-showcaseTable .IDX-showcasePrice,
        .IDX-slideshowWrapper .IDX-slideshowPrice {
            font-family: Play;
            font-weight: 700;
            font-display: block;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1494609476686 {
            background-color: #f4f4f4 !important;
        }

        .vc_custom_1512407858131 {
            padding-top: 12px !important;
            padding-bottom: 24px !important;
        }

        .vc_custom_1686927528551 {
            margin-bottom: 48px !important;
        }

        .vc_custom_1686927605159 {
            margin-bottom: 48px !important;
        }

        .vc_custom_1494333765775 {
            padding-top: 39px !important;
            padding-bottom: 24px !important;
        }

        .vc_custom_1530610495498 {
            margin-bottom: 48px !important;
        }

        .vc_custom_1494338314650 {
            padding-top: 39px !important;
            padding-bottom: 24px !important;
        }

        .vc_custom_1494609686462 {
            padding-top: 39px !important;
            padding-bottom: 24px !important;
        }

        .vc_custom_1494333727302 {
            padding-top: 39px !important;
            padding-bottom: 24px !important;
        }
    </style><noscript>
        <style>
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
    <style id="wpforms-css-vars-root">
        :root {
            --wpforms-field-border-radius: 3px;
            --wpforms-field-background-color: #ffffff;
            --wpforms-field-border-color: rgba(0, 0, 0, 0.25);
            --wpforms-field-text-color: rgba(0, 0, 0, 0.7);
            --wpforms-label-color: rgba(0, 0, 0, 0.85);
            --wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
            --wpforms-label-error-color: #d63637;
            --wpforms-button-border-radius: 3px;
            --wpforms-button-background-color: #066aab;
            --wpforms-button-text-color: #ffffff;
            --wpforms-field-size-input-height: 43px;
            --wpforms-field-size-input-spacing: 15px;
            --wpforms-field-size-font-size: 16px;
            --wpforms-field-size-line-height: 19px;
            --wpforms-field-size-padding-h: 14px;
            --wpforms-field-size-checkbox-size: 16px;
            --wpforms-field-size-sublabel-spacing: 5px;
            --wpforms-field-size-icon-size: 1;
            --wpforms-label-size-font-size: 16px;
            --wpforms-label-size-line-height: 19px;
            --wpforms-label-size-sublabel-font-size: 14px;
            --wpforms-label-size-sublabel-line-height: 17px;
            --wpforms-button-size-font-size: 17px;
            --wpforms-button-size-height: 41px;
            --wpforms-button-size-padding-h: 15px;
            --wpforms-button-size-margin-top: 10px;

        }
    </style>
</head>

@yield('body')

<footer id="footer" class="mh-footer-top mh-background-cover mh-footer-top--dark">


    <div class="mh-footer__inner">
        <div class="mh-layout">
            <div class="mh-footer__row">


                <div class="mh-footer__row__column widget mh-footer__row__column--1of4">

                    <div class="mh-footer__logo">
                        <img src={{ asset("wp-content/uploads/2017/03/logo-50-blue-white.png") }} alt="benallysrealestates.com">
                    </div>

                    <div class="mh-footer__text">
                        {{$settings->slug}} </div>

                    <address class="mh-footer__contact">
                        <i class="flaticon-pin"></i>
                        {{$settings->address}}
                    </address>

                    <div class="mh-footer__contact">
                        <a href="tel:{{$settings->phone}}">
                            <i class="flaticon-phone"></i>
                            {{$settings->phone}} </a>
                    </div>


                </div>


                <div class="mh-footer__row__column mh-footer__row__column--1of4 widget widget_archive"
                    id="archives-4">
                    <h3 class="mh-footer__heading">Blog</h3>
                    <ul>
                        <li><a href={{ url('2017/10/') }}>October 2017</a></li>
                        <li><a href={{ url('2017/09/') }}>September 2017</a></li>
                        <li><a href={{ url('2017/08/') }}>August 2017</a></li>
                        <li><a href={{ url('2017/07/') }}>July 2017</a></li>
                    </ul>

                </div>
                <div class="mh-footer__row__column mh-footer__row__column--1of4 widget widget_tag_cloud"
                    id="tag_cloud-3">
                    <h3 class="mh-footer__heading">Features</h3>
                    <div class="tagcloud">
                        <a href={{ url("features/air-conditioning/") }}
                            class="tag-cloud-link tag-link-33 tag-link-position-1" style="font-size: 22pt;"
                            aria-label="Air Conditioning (32 items)">Air Conditioning</a>
                        <a href={{ url("features/ceiling-fan/") }} class="tag-cloud-link tag-link-30 tag-link-position-2"
                            style="font-size: 9.5555555555556pt;" aria-label="Ceiling Fan (22 items)">Ceiling
                            Fan</a>
                        <a href={{ url("features/dishwasher/") }} class="tag-cloud-link tag-link-22 tag-link-position-3"
                            style="font-size: 15pt;" aria-label="Dishwasher (26 items)">Dishwasher</a>
                        <a href={{ url("features/fireplace/") }} class="tag-cloud-link tag-link-19 tag-link-position-4"
                            style="font-size: 12.666666666667pt;" aria-label="Fireplace (24 items)">Fireplace</a>
                        <a href={{ url("features/high-ceilings/") }} class="tag-cloud-link tag-link-28 tag-link-position-5"
                            style="font-size: 8pt;" aria-label="High ceilings (21 items)">High ceilings</a>
                        <a href={{ url("features/microwave/") }} class="tag-cloud-link tag-link-27 tag-link-position-6"
                            style="font-size: 11.111111111111pt;" aria-label="Microwave (23 items)">Microwave</a>
                        <a href={{ url("features/patio/") }} class="tag-cloud-link tag-link-25 tag-link-position-7"
                            style="font-size: 16.555555555556pt;" aria-label="Patio (27 items)">Patio</a>
                        <a href={{ url("features/porch/") }} class="tag-cloud-link tag-link-15 tag-link-position-8"
                            style="font-size: 13.444444444444pt;" aria-label="Porch (25 items)">Porch</a>
                        <a href={{ url("features/refrigerator/") }} class="tag-cloud-link tag-link-37 tag-link-position-9"
                            style="font-size: 12.666666666667pt;"
                            aria-label="Refrigerator (24 items)">Refrigerator</a>
                        <a href={{ url("features/wifi/") }} class="tag-cloud-link tag-link-34 tag-link-position-10"
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
            Benallysrealestates {{ date("Y") }}. All rights reserved. </div>
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
    href={{ asset('wp-content/plugins/revslider/public/assets/css/rs6e8c6.css')}} type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
    #rs-demo-id {}
</style>
<script type="text/javascript" src={{ asset("wp-content/plugins/contact-form-7/includes/swv/js/indexf2b4.js")}}
    id="swv-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/benallysrealestates.com\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src={{ asset("wp-content/plugins/contact-form-7/includes/js/indexf2b4.js")}}
    id="contact-form-7-js"></script>
<script type="text/javascript" id="lazy-sizes-js-before">
    /* <![CDATA[ */
    window.lazySizesConfig = window.lazySizesConfig || {};
    window.lazySizesConfig.loadMode = 1;

    /* ]]> */
</script>
<script type="text/javascript" src={{ asset("wp-content/themes/myhome/assets/js/lazysizes.min358c.js")}}
    id="lazy-sizes-js"></script>

@yield('scripts')

<script type="text/javascript" src={{ asset("wp-content/themes/myhome/assets/js/myhome.min358c.js?ver=3.1.69")}}
    id="myhome-min-js"></script>
<script type="text/javascript" src={{ asset("wp-content/plugins/mega_main_menu/src/js/frontend0899.js?ver=6.8.1")}}
    id="mmm_menu_functions-js"></script>
<script type="text/javascript"
    src={{ asset("wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min555b.js?ver=6.13.0") }}
    id="wpb_composer_front_js-js"></script>

<script type="text/javascript">
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;;
        po.src = {{ asset('wp-content/plugins/easy-social-share-buttons3/assets/modules/pinterest-pro.min.js')}};
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;;
        po.src = {{ asset('wp-content/plugins/easy-social-share-buttons3/assets/modules/subscribe-forms.min.js')}};
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;;
        po.src = {{ asset('wp-content/plugins/easy-social-share-buttons3/assets/js/essb-core.min.js')}};
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>

<script type="text/javascript"></script>
</body>

</html>
