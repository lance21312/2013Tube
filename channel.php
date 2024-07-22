<!DOCTYPE html>
<html lang="en"> <?php include "server.php";$r=invidiousGet("/channels/".$_GET['id']);?>

<head>
  <link id="css-1678167119" rel="stylesheet" href="/cssbin/www-core-vfl8Dq7du.css">
  <link id="css-2024991491" rel="stylesheet" href="/cssbin/www-channels4-vflhQcuUA.css">
  <script>
    var ytcsi = {
      data_: {
        tick: {},
        info: {}
      },
      tick: function(l, t) {
        ytcsi.data_.tick[l] = t || +new Date();
      },
      info: function(k, v) {
        ytcsi.data_.info[k] = v;
      }
    };
    ytcsi.tick('start');
    if (document.webkitVisibilityState == 'prerender') {
      ytcsi.info('prerender', 1);
      document.addEventListener('webkitvisibilitychange', function() {
        ytcsi.tick('start');
      }, false);
    }
    try {
      ytcsi.pt_ = (window.chrome && chrome.csi().pageT || window.gtbExternal && gtbExternal.pageT() || window.external && external.pageT);
      if (ytcsi.pt_) {
        ytcsi.info('pt', Math.floor(ytcsi.pt_));
      }
    } catch (e) {}
  </script>
  <title>YouTube</title>
  <link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
  <link rel="shortcut icon" href="/img/favicon-vfldLzJxy.ico" type="image/x-icon">
  <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32">
  <link rel="alternate" media="handheld" href="http://m.youtube.com/index?&amp;desktop_uri=%2F">
  <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.youtube.com/index?&amp;desktop_uri=%2F">
  <meta name="description" content="Share your videos with friends, family, and the world">
  <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">
  <meta property="og:image" content="//s.ytimg.com/yts/img/youtube_logo_stacked-vfl225ZTx.png">
  <meta property="fb:app_id" content="87741124305">
  <link rel="publisher" href="https://plus.google.com/115229808208707341778">
  <style>
            #c4-header-bg-container {
                background-image: url(<?php echo $r["authorBanners"][2]["url"]; ?>);
                background-position: center 0px;
            }

            @media screen and (-webkit-min-device-pixel-ratio: 1.5), screen and (min-resolution: 1.5dppx) {
                #c4-header-bg-container {
                    background-image: url(<?php echo $r["authorBanners"][2]["url"]; ?>);
                }
            }
        </style>
  <script>
    if (window.ytcsi) {
      ytcsi.tick("ct");
    }
  </script>
</head><!-- machid: sNW5tN3Z2SWdXaDRHY3V0d0F2RjhkZm1POGstSkdXTlFNemhuLVpIVTVWX1AwMXN4YW5XeGJn -->

<body dir="ltr" class="  ltr      site-left-aligned  exp-new-site-width  exp-watch7-comment-ui  hitchhiker-enabled      guide-enabled    guide-expanded  ">
  <div id="body-container"> <?php include "phpbin/header.php";?> <div id="page-container">
      <div id="page" class="  channel clearfix">
        <div id="guide">
          <div id="guide-container" class="">
            <div id="guide-main" class="    guide-module ">
              <div class="guide-module-toggle">
                <span class="guide-module-toggle-icon">
                  <span class="guide-module-toggle-arrow"></span>
                  <img src="/img/pixel-vfl3z5WfW.gif" alt="">
                  <img src="/img/pixel-vfl3z5WfW.gif" alt="" id="collapsed-notification-icon">
                </span>
                <div class="guide-module-toggle-label">
                  <h3>
                    <span> Guide <span class="yt-badge-new">new</span>
                    </span>
                  </h3>
                </div>
              </div>
              <div class="guide-module-content"> <?php include "phpbin/guide.php";?> </div>
            </div>
            <div id="watch-context-container" class="guide-module collapsed hid"></div>
          </div>
        </div>
        <div id="content" class="">
          <div class="branded-page-v2-container enable-fancy-subscribe-button  branded-page-v2-flex-width">
            <div class="branded-page-v2-col-container clearfix">
              <!--<div class="branded-page-v2-secondary-col">
                <div class="branded-page-related-channels branded-page-gutter-padding">
                  <h2 class="branded-page-related-channels-title" dir="ltr"> Related Channels </h2>
                  <ul class="branded-page-related-channels-list ">
                    <li class="branded-page-related-channels-item clearfix" data-external-id="UCY30JRSgfhYXA6i6xX1erWg">
                      <a href="/web/20130322235749/https://www.youtube.com/smosh" class="spf-link yt-uix-sessionlink" data-sessionlink="ei=_u9MUfTyAZ-ihAG07IHQAw&amp;ved=CBwQ9Rw&amp;feature=rc-rel">
                        <span class="video-thumb ux-thumb yt-thumb-square-32 branded-page-related-channels-thumb"><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img data-thumb="//web.archive.org/web/20130322235749/https://i2.ytimg.com/i/Y30JRSgfhYXA6i6xX1erWg/1.jpg" src="//web.archive.org/web/20130322235749/https://i2.ytimg.com/i/Y30JRSgfhYXA6i6xX1erWg/1.jpg" alt="Thumbnail" width="32" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span>
                      </a>
                      <div class="branded-page-related-channels-content">
                        <h3>
                          <a class="spf-link yt-uix-tooltip yt-uix-sessionlink " href="/web/20130322235749/https://www.youtube.com/smosh" dir="ltr" data-sessionlink="ei=_u9MUfTyAZ-ihAG07IHQAw&amp;ved=CB0Q9hw&amp;feature=rc-rel">
                            <span class="qualified-channel-title ellipsized" title="Smosh"><span class="qualified-channel-title-wrapper"> <span class="qualified-channel-title-text"> Smosh </span>
                              </span></span>
                          </a>
                        </h3>
                        <span class=" yt-uix-button-subscription-container yt-uix-button-context-light"><button type="button" class="yt-uix-subscription-button yt-uix-button yt-uix-button-subscribe-unbranded" onclick=";return false;" data-sessionlink="ei=_u9MUfTyAZ-ihAG07IHQAw&amp;feature=rc-rel" data-style-type="unbranded" data-channel-external-id="UCY30JRSgfhYXA6i6xX1erWg" data-href="/ServiceLogin?service=youtube&amp;hl=en_US&amp;uilel=3&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26continue_action%3DEa-PgMybIIVt5LU7OwT_1AbywCy4X_yeStZZGAQnm5b_qarD_L57iW_kXcktoRVRWYb_itiJ-PLZ-53SwH9T-fwOEk-zO2Q1RKdvKOy1a0Zl5MR1klQxhg%253D%253D%26feature%3Dsubscribe%26hl%3Den_US%26next%3D%252Fchannel%252FUCY30JRSgfhYXA6i6xX1erWg%26nomobiletemp%3D1" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-subscribe-unbranded" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""><span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content"><span class="subscribe-hh-label">Subscribe</span><span class="subscribed-hh-label">Subscribed</span><span class="unsubscribe-hh-label">Unsubscribe</span> </span></button><span class="yt-subscription-button-subscriber-count-unbranded-horizontal">8M</span> <span class="yt-subscription-button-disabled-mask" title=""></span>
                        </span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>-->
              <div class="branded-page-v2-primary-col">
                <div class="branded-page-v2-primary-col-header-container">
                  <div id="context-source-container" style="display:none;"></div>
                  <div class="branded-page-v2-header channel-header">
                    <div id="gh-banner">
                      <div id="c4-header-bg-container" class="">
                        <a class="channel-header-profile-image-container spf-link" href="#">
                          <img class="channel-header-profile-image" src="<?php echo $r["authorThumbnails"][3]["url"];?>" title="" alt="">
                        </a>
                      </div>
                    </div>
                    <div class="primary-header-contents" id="c4-primary-header-contents">
                      <div class="primary-header-actions">
                        <span class=" yt-uix-button-subscription-container yt-uix-button-context-light">
                          <button type="button" class="yt-uix-subscription-button yt-uix-button yt-uix-button-subscribe-branded" onclick=";return false;" data-sessionlink="ei=_u9MUfTyAZ-ihAG07IHQAw&amp;feature=channels4" data-style-type="branded" role="button">
                            <span class="yt-uix-button-icon-wrapper">
                              <img class="yt-uix-button-icon yt-uix-button-icon-subscribe-branded" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""><span class="yt-uix-button-valign"></span>
                            </span>
                            <span class="yt-uix-button-content">
                              <span class="subscribe-hh-label">Subscribe</span>
                              <span class="subscribed-hh-label">Subscribed</span>
                              <span class="unsubscribe-hh-label">Unsubscribe</span>
                            </span>
                          </button>
                          <span class="yt-subscription-button-subscriber-count-branded-horizontal subscribed"><?php echo number_format($r["subCount"]); ?></span>
                          <span class="yt-subscription-button-disabled-mask" title=""></span>
                        </span>
                      </div>
                      <h1 class="branded-page-header-title">
                        <a class="spf-link" href="#">
                          <span class="qualified-channel-title ellipsized" title="The You Generation"><span class="qualified-channel-title-wrapper"> <span class="qualified-channel-title-text"> <?php echo $r["author"];?> </span>
                            </span></span>
                        </a>
                      </h1>
                    </div>
                  </div>
                  <div id="channel-subheader" class="clearfix branded-page-gutter-padding">
                    <ul id="channel-navigation-menu" class="clearfix">
                      <li>
                        <span class="yt-uix-button-group epic-nav-dropdown-group">
                          <a href="#" class="yt-uix-button  spf-link epic-nav-item-empty start yt-uix-sessionlink yt-uix-button-epic-nav-item yt-uix-button-empty" data-sessionlink="ei=_u9MUfTyAZ-ihAG07IHQAw"><img class="yt-uix-button-icon yt-uix-button-icon-c4-home" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></a>
                          <button type="button" class="epic-nav-item-empty end yt-uix-button yt-uix-button-epic-nav-item yt-uix-button-empty" onclick=";return false;" data-button-menu-id="channel-navigation-menu-dropdown" role="button" aria-label="Select view:"><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                        </span>
                        <div id="channel-navigation-menu-dropdown" class="hid epic-nav-item-dropdown">
                          <ul>
                            <li>
                              <a class="spf-link yt-uix-button-menu-item" href="#">Browse</a>
                            </li>
                            <li>
                              <a class="spf-link yt-uix-button-menu-item" href="#">Feed</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <h2 class="epic-nav-item-heading ">Videos</h2>
                      </li>
                      <li>
                        <a href="#" class="yt-uix-button  spf-link  yt-uix-sessionlink yt-uix-button-epic-nav-item" data-sessionlink="ei=_u9MUfTyAZ-ihAG07IHQAw"><span class="yt-uix-button-content">About</span></a>
                      </li>
                      <li>
                        <div id="channel-search"><label class="show-search epic-nav-item secondary-nav" for="channels-search-field"><img class="epic-nav-item-heading-icon" src="/img/pixel-vfl3z5WfW.gif" alt="Search Channel"></label>
                          <form class="search-form epic-nav-item secondary-nav" action="#/search" method="get"><span class=" yt-uix-form-input-container yt-uix-form-input-text-container "> <input class="yt-uix-form-input-text search-field label-input-label" name="query" id="channels-search-field" type="text" placeholder="Search Channel" maxlength="100" autocomplete="off">
                            </span><button type="submit" class="search-button yt-uix-button yt-uix-button-c4-search yt-uix-button-empty" onclick=";return true;" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-search" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""><span class="yt-uix-button-valign"></span></span></button></form>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="branded-page-v2-body" id="gh-overviewtab">
                  <div id="video-page-subnav" class="branded-page-v2-subnav-container branded-page-gutter-padding clearfix">
                    <span id="content-flow-select" class="yt-uix-button-group" data-button-toggle-group="required">
                      <button type="button" class="start yt-uix-button-toggled yt-uix-button yt-uix-button-default yt-uix-button-empty" href="" data-button-toggle="true" role="button">
                        <span class="yt-uix-button-icon-wrapper">
                          <img class="yt-uix-button-icon yt-uix-button-icon-c4-grid-flow" src="/img/pixel-vfl3z5WfW.gif" alt="" title="">
                          <span class="yt-uix-button-valign"></span>
                        </span>
                      </button>
                      <button type="button" class="end yt-uix-button yt-uix-button-default yt-uix-button-empty" onclick=";window.location.href=this.getAttribute('href');return false;" href="#" data-button-toggle="true" role="button">
                        <span class="yt-uix-button-icon-wrapper">
                          <img class="yt-uix-button-icon yt-uix-button-icon-c4-list-flow" src="/img/pixel-vfl3z5WfW.gif" alt="" title="">
                          <span class="yt-uix-button-valign"></span>
                        </span>
                      </button>
                    </span>
                    <button type="button" id="videos-filter-select" class=" yt-uix-button yt-uix-button-default" onclick=";return false;" data-button-menu-indicate-selected="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-content">Uploads </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title="">
                      <ul class=" yt-uix-button-menu yt-uix-button-menu-default" role="menu" aria-haspopup="true" style="display: none;">
                        <li role="menuitem" id="aria-id-40908121389"><span class=" yt-uix-button-menu-item">Uploads</span></li>
                        <li role="menuitem" id="aria-id-83696465429"><span class=" yt-uix-button-menu-item">Playlists</span></li>
                        <li role="menuitem" id="aria-id-61881847382"><span class=" yt-uix-button-menu-item">Likes</span></li>
                      </ul>
                    </button>
                    <button type="button" id="videos-sort-menu" class=" yt-uix-button yt-uix-button-default" onclick=";return false;" data-button-menu-indicate-selected="true" role="button" aria-pressed="false" aria-expanded="false" aria-haspopup="true" aria-activedescendant=""><span class="yt-uix-button-content">Date added (newest - oldest) </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title="">
                      <ul class=" yt-uix-button-menu yt-uix-button-menu-default" role="menu" aria-haspopup="true" style="display: none;">
                        <li role="menuitem" id="aria-id-44650598834"><span class=" yt-uix-button-menu-item" onclick=";window.location.href=this.getAttribute('href');return false;" href="#">Most popular</span></li>
                        <li role="menuitem" id="aria-id-6931952065"><span class=" yt-uix-button-menu-item" onclick=";window.location.href=this.getAttribute('href');return false;" href="#">Date added (oldest - newest)</span></li>
                        <li role="menuitem" id="aria-id-49334138003"><span class=" yt-uix-button-menu-item" onclick=";window.location.href=this.getAttribute('href');return false;" href="#">Date added (newest - oldest)</span></li>
                      </ul>
                    </button>
                  </div>
                  <div id="video-page-content" class="branded-page-gutter-padding">
                    <ul id="channels-browse-content-grid" class="channels-browse-content-grid context-data-container ">
                      <?php
                      for($i=0;$i<=count($r["latestVideos"])-1;$i++){
                        echo '<li class="channels-content-item">
                        <span class="context-data-item">
                          <div class="channel-video-thumb-container">
                            <a href="/watch?v='.$r["latestVideos"][$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto spf-link">
                              <span class="video-thumb ux-thumb yt-thumb-default-185  yt-thumb-fluid-default yt-thumb-fluid-185 yt-thumb-fluid">
                                <span class="yt-thumb-clip">
                                  <span class="yt-thumb-clip-inner">
                                    <img src="'.$r["latestVideos"][$i]["videoThumbnails"][3]["url"].'" alt="Thumbnail" width="185">
                                    <span class="vertical-align"></span>
                                  </span>
                                </span>
                              </span>
                              <span class="video-time">'.gmdate("H:i:s", $r["latestVideos"][$i]["lengthSeconds"]).'</span>
                              <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" role="button" data-tooltip-text="Watch Later">
                                <span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                </span>
                                <img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title="">
                              </button>
                            </a>
                          </div>
                          <span class="content-item-detail">
                            <a href="/watch?v='.$r["latestVideos"][$i]["videoId"].'" class="content-item-title spf-link yt-uix-sessionlink yt-uix-contextlink yt-ui-ellipsis yt-ui-ellipsis-2" dir="ltr">
                              <span class="yt-ui-ellipsis-wrapper">'.$r["latestVideos"][$i]["title"].'</span>
                            </a>
                            <span class="content-item-metadata">
                              <span class="content-item-view-count"> '.number_format($r["latestVideos"][$i]["viewCount"]).' views </span>
                              <span class="metadata-separator">|</span>
                              <span class="content-item-time-created">'.$r["latestVideos"][$i]["publishedText"].'</span>
                            </span>
                          </span>
                        </span>
                      </li>';
                      };
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include "phpbin/footer.php";?> 
  <script>
    if (window.ytcsi) {
      ytcsi.tick("js_head");
    }
  </script>
  <script id="js-1792868116" src="//s.ytimg.com/yts/jsbin/www-core-vfl5tYQUF.js" data-loaded="true"></script>
  <script id="js-1434416857" src="//web.archive.org/web/20130322235749js_/https://s.ytimg.com/yts/jsbin/www-channels4-vfl_GBasD.js" data-loaded="true"></script>
  <script>
    yt.setMsg('FLASH_UPGRADE', "\u003cdiv class=\"yt-alert yt-alert-default yt-alert-error  yt-alert-player\"\u003e  \u003cdiv class=\"yt-alert-icon\"\u003e\n    \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"icon master-sprite\" alt=\"Alert icon\"\u003e\n  \u003c\/div\u003e\n\u003cdiv class=\"yt-alert-buttons\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-alert-content\" role=\"alert\"\u003e    \u003cspan class=\"yt-alert-vertical-trick\"\u003e\u003c\/span\u003e\n    \u003cdiv class=\"yt-alert-message\"\u003e\n            You need to upgrade your Adobe Flash Player to watch this video. \u003cbr\u003e \u003ca href=\"http:\/\/get.adobe.com\/flashplayer\/\"\u003eDownload it from Adobe.\u003c\/a\u003e\n    \u003c\/div\u003e\n\u003c\/div\u003e\u003c\/div\u003e");
    yt.setConfig({
      'PLAYER_CONFIG': {
        "args": {
          "enablejsapi": 1
        },
        "min_version": "8.0.0",
        "html5": false,
        "url_v8": "",
        "url_v9as2": "",
        "attrs": {
          "width": "1",
          "id": "masthead_child",
          "height": "1"
        },
        "params": {
          "allowfullscreen": "false",
          "bgcolor": "#FFFFFF",
          "allowscriptaccess": "always"
        },
        "url": "\/\/s.ytimg.com\/yts\/swf\/masthead_child-vflRMMO6_.swf"
      }
    });
    yt.flash.embed("masthead_child_div", yt.getConfig('PLAYER_CONFIG'));
  </script>
  <script>
    window.masthead = new yt.www.ads.MastheadAd("v7T-3cSFF_g", false);
  </script>
  <script>
    yt.setConfig({
      'GUIDE_SELECTED_ITEM': ""
    });
  </script>
  <script>
    yt.setConfig({
      'EVENT_ID': "R81NUd6GIouVhAG1p4HYBw",
      'PAGE_NAME': "index",
      'LOGGED_IN': false,
      'SESSION_INDEX': null,
      'CURRENT_URL': "http:\/\/www.youtube.com\/",
      'JS_COMMON_MODULE': "\/\/s.ytimg.com\/yts\/jsbin\/www_common_mod-vfl8X5Z_8.js",
      'SAFETY_MODE_PENDING': false,
      'RHS_DO_NOT_FETCH_ON_SUBSCRIPTION': false,
      'FEEDBACK_BUCKET_ID': "Home",
      'FEEDBACK_LOCALE_LANGUAGE': "en",
      'FEEDBACK_LOCALE_EXTRAS': {
        "experiments": "916604,906918,931600,914060,913804,902000,919512,913605,931202,900821,900823,931203,931401,908529,930807,930803,920201,929602,930101,930603,926403,900824,910223",
        "logged_in": false,
        "is_partner": "",
        "guide_subs": 8,
        "is_branded": "",
        "accept_language": null
      }
    });
    yt.setMsg({
      'ADDTO_WATCH_LATER_ADDED': "Added",
      'ADDTO_WATCH_LATER_ERROR': "Error"
    });
    yt.setAjaxToken('addto_ajax_logged_out', "TGA-2Bq53k9Vj0P2oMb9vuo7a1N8MTM2NDEzOTcxOUAxMzY0MDUzMzE5");
    yt.setAjaxToken('channel_details_ajax', "vB1T_1UU0075ATipvTTTLAg0VER8MTM2NDEzOTcxOUAxMzY0MDUzMzE5");
    yt.setConfig('FEED_PRIVACY_CSS_URL', "http:\/\/s.ytimg.com\/yts\/cssbin\/www-feedprivacydialog-vflQZNM3_.css");
    yt.setAjaxToken('feed_privacy_ajax', "");
    yt.pubsub.subscribe('init', yt.www.account.FeedPrivacyDialog.init);
    yt.setConfig({
      'SBOX_JS_URL': "\/\/s.ytimg.com\/yts\/jsbin\/www-searchbox-vflRgf9Tq.js",
      'SBOX_SETTINGS': {
        "CHIP_PARAMETERS": {},
        "REQUEST_DOMAIN": "us",
        "SHOW_CHIP": false,
        "USE_HTTPS": false,
        "PSUGGEST_TOKEN": null,
        "REQUEST_LANGUAGE": "en",
        "HAS_ON_SCREEN_KEYBOARD": false,
        "SESSION_INDEX": null,
        "EXPERIMENT_ID": -1,
        "CLOSE_ICON_URL": "\/\/s.ytimg.com\/yts\/img\/icons\/close-vflrEJzIW.png",
        "IS_HH": true
      },
      'SBOX_LABELS': {
        "SUGGESTION_DISMISS_LABEL": "Dismiss",
        "SUGGESTION_DISMISSED_LABEL": "Suggestion dismissed"
      }
    });
    yt.setConfig({
      'YPC_LOADER_ENABLED': true,
      'YPC_LOADER_CONFIGS': "\/ypc_config_ajax",
      'YPC_LOADER_JS': "\/\/s.ytimg.com\/yts\/jsbin\/www-ypc-vfl7BZ6O8.js",
      'YPC_LOADER_CSS': "http:\/\/s.ytimg.com\/yts\/cssbin\/www-ypc-vflMPghgv.css",
      'YPC_LOADER_CALLBACKS': ['yt.www.ypc.checkout.init', 'yt.www.ypc.subscription.init']
    });
    yt.setAjaxToken('transaction_handler', "");
    yt.setConfig({
      'SUBSCRIPTION_URL': "\/subscription_ajax",
      'YPC_SIGNIN_URL': "https:\/\/accounts.google.com\/ServiceLogin?uilel=3\u0026hl=en_US\u0026service=youtube\u0026passive=true\u0026continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26hl%3Den_US%26next%3D%252F%26nomobiletemp%3D1",
      'YPC_GB_LANGUAGE': "en_US",
      'YPC_GB_URL': "https:\/\/checkout.google.com\/inapp\/lib\/buy.js",
      'YPC_SUBSCRIPTION_URL': "\/ypc_subscription_ajax",
      'YPC_TRANSACTION_URL': "\/transaction_handler",
      'YPC_SUBSCRIPTION_URL': "\/ypc_subscription_ajax"
    });
    yt.setMsg({
      'YPC_MSG_COUPON_ERROR': "Error applying a coupon.",
      'YPC_MSG_COUPON_EMPTY': "Invalid coupon code. Please try again."
    });
    yt.setAjaxToken('transaction_handler', "");
    yt.setAjaxToken('subscription_ajax', "");
    yt.setMsg({
      'YPC_SUBSCRIPTION_URL': "\/ypc_subscription_ajax",
      'YPC_UNSUBSCRIBE_URL': "\/transaction_handler",
      'YPC_UNSUBSCRIBE_OVERLAY': "  \u003cdiv id=\"ypc-unsubscribe-overlay\" class=\"yt-uix-overlay\" data-disable-shortcuts=\"true\"\u003e\n    \u003cspan class=\"yt-uix-overlay-target\"\u003e\u003c\/span\u003e\n        \u003cdiv class=\"yt-dialog hid\" \u003e\n    \u003cdiv class=\"yt-dialog-base\"\u003e\n      \u003cspan class=\"yt-dialog-align\"\u003e\u003c\/span\u003e\n      \u003cdiv class=\"yt-dialog-fg\"\u003e\n        \u003cdiv class=\"yt-dialog-fg-content\"\u003e\n          \u003cdiv class=\"yt-dialog-loading\"\u003e\n              \u003cdiv class=\"yt-dialog-waiting-content\"\u003e\n    \u003cdiv class=\"yt-spinner-img\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-dialog-waiting-text\"\u003eLoading...\u003c\/div\u003e\n  \u003c\/div\u003e\n\n          \u003c\/div\u003e\n          \u003cdiv class=\"yt-dialog-content\"\u003e\n              \u003cdiv class=\"ypc-unsubscribe-overlay\"\u003e\n      \u003cdiv class=\"ypc-unsubscribe-overlay-title unsubscribe-confirm\"\u003e\nAre you sure you want to unsubscribe?\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-title unsubscribe-loading\"\u003e\nLoading...\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-title unsubscribe-success unsubscribe-delayed\"\u003e\nSubscription canceled\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-title unsubscribe-error\"\u003e\nError canceling subscription.\n  \u003c\/div\u003e\n\n    \u003cdiv class=\"ypc-unsubscribe-overlay-data\"\u003e\n        \u003cdiv class=\"ypc-unsubscribe-overlay-content unsubscribe-confirm ypc-unsubscribe-overlay-confirm-content\"\u003e\n    \u003cdiv class=\"ypc-unsubscribe-overlay-content-message\"\u003e\n      Your subscription will be canceled when you unsubscribe. Your credit card will no longer be charged. You will still be able to access content until the billing cycle ends.\n\n    \u003c\/div\u003e\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-content unsubscribe-loading\"\u003e\n      \u003cp class=\"yt-spinner\"\u003e\n      \u003cimg s\u0072c=\"\/\/s.ytimg.com\/yts\/img\/pixel-vfl3z5WfW.gif\" class=\"yt-spinner-img\" alt=\"Loading icon\"\u003e\n\n    \u003cspan class=\"yt-spinner-message\"\u003e\n        Processing cancellation request...\n    \u003c\/span\u003e\n  \u003c\/p\u003e\n\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-content unsubscribe-success\"\u003e\n    \u003cp\u003e\nYou have successfully canceled future payments for this subscription.\n    \u003c\/p\u003e\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-content unsubscribe-delayed\"\u003e\n    \u003cp\u003e\nYour subscription was canceled. The status displayed in your account will update soon.\n    \u003c\/p\u003e\n  \u003c\/div\u003e\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-content unsubscribe-error\"\u003e\n    \u003cp\u003eSorry, there was an error trying to cancel your subscription; please try again later.\u003c\/p\u003e\n  \u003c\/div\u003e\n\n          \u003cdiv class=\"ypc-unsubscribe-overlay-controls unsubscribe-confirm clearfix\"\u003e\n    \u003ca href=\"\/\/support.google.com\/youtube\/?p=unsubscribe_help\" class=\"yt-uix-button  ypc-unsubscribe-help yt-uix-sessionlink yt-uix-button-default\" data-sessionlink=\"ei=R81NUd6GIouVhAG1p4HYBw\" target=\"_blank\"\u003e\u003cspan class=\"yt-uix-button-content\"\u003eHelp\u003c\/span\u003e\u003c\/a\u003e\n\n    \u003cbutton class=\"yt-uix-overlay-close yt-uix-button yt-uix-button-default\" type=\"button\" onclick=\";return false;\"  role=\"button\"\u003e\u003cspan class=\"yt-uix-button-content\"\u003eKeep subscription \u003c\/span\u003e\u003c\/button\u003e\n\n    \u003cbutton class=\"ypc-unsubscribe-confirm yt-uix-button yt-uix-button-primary\" type=\"button\" onclick=\";return false;\" data-url=\"\/transaction_handler\" role=\"button\"\u003e\u003cspan class=\"yt-uix-button-content\"\u003eUnsubscribe \u003c\/span\u003e\u003c\/button\u003e\n  \u003c\/div\u003e\n\n\n  \u003cdiv class=\"ypc-unsubscribe-overlay-controls unsubscribe-success unsubscribe-delayed unsubscribe-error\"\u003e\n    \u003cbutton class=\"yt-uix-overlay-close yt-uix-button yt-uix-button-primary\" type=\"button\" onclick=\";return false;\"  role=\"button\"\u003e\u003cspan class=\"yt-uix-button-content\"\u003eClose \u003c\/span\u003e\u003c\/button\u003e\n  \u003c\/div\u003e\n\n    \u003c\/div\u003e\n  \u003c\/div\n\n          \u003c\/div\u003e\n          \u003cdiv class=\"yt-dialog-working\"\u003e\n              \u003cdiv id=\"yt-dialog-working-overlay\"\u003e\n  \u003c\/div\u003e\n  \u003cdiv id=\"yt-dialog-working-bubble\"\u003e\n    \u003cdiv class=\"yt-dialog-waiting-content\"\u003e\n      \u003cdiv class=\"yt-spinner-img\"\u003e\u003c\/div\u003e\u003cdiv class=\"yt-dialog-waiting-text\"\u003eWorking...\u003c\/div\u003e\n    \u003c\/div\u003e\n  \u003c\/div\u003e\n\n          \u003c\/div\u003e\n        \u003c\/div\u003e\n      \u003c\/div\u003e\n    \u003c\/div\u003e\n  \u003c\/div\u003e\n\n\n  \u003c\/div\u003e\n"
    });
  </script>
  <script>
    yt.setConfig({
      'TIMING_ACTION': "glo",
      'TIMING_INFO': {
        "e": "916604,906918,931600,914060,913804,902000,919512,913605,931202,900821,900823,931203,931401,908529,930807,930803,920201,929602,930101,930603,926403,900824,910223",
        "mod_lt": "cold",
        "mod_li": 0,
        "mod_spf": 0
      }
    });
  </script>
  <script>
    yt.setConfig({
      'XSRF_TOKEN': "G-Iq8l6xbCM8xH7dTBQkFqhoy2N8MTM2NDEzOTcxOUAxMzY0MDUzMzE5",
      'XSRF_REDIRECT_TOKEN': "8O_Eh_072IWhQvdnqCQy14WpRId8MTM2NDA2NzcxOUAxMzY0MDUzMzE5",
      'XSRF_FIELD_NAME': "session_token"
    });
  </script>
  <script>
    yt.setConfig('THUMB_DELAY_LOAD_BUFFER', 300);
  </script>
  <script>
    if (window.ytcsi) {
      ytcsi.tick("js_foot");
    }
  </script>
  <div id="debug"></div>
</body>

</html>