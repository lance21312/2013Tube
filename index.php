    <!DOCTYPE html>
    <html lang="en"> <?php include "server.php";$r=invidiousGet("/popular");?>

    <head>
      <link id="css-1678167119" rel="stylesheet" href="/cssbin/www-core-vfl8Dq7du.css">
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
      <link id="css-4004337852" rel="stylesheet" href="/cssbin/www-home-vfl5SkyqU.css">
      <script>
        if (window.ytcsi) {
          ytcsi.tick("ct");
        }
      </script>
    </head><!-- machid: sNW5tN3Z2SWdXaDRHY3V0d0F2RjhkZm1POGstSkdXTlFNemhuLVpIVTVWX1AwMXN4YW5XeGJn -->

    <body dir="ltr" class="  ltr      site-left-aligned  exp-new-site-width  exp-watch7-comment-ui  hitchhiker-enabled      guide-enabled    guide-expanded  ">
      <div id="body-container"> <?php include "phpbin/header.php";?> <div id="page-container">
          <div id="page" class="  home     branded-page-v2-detached-top  clearfix">
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
              <div class="branded-page-v2-container enable-fancy-subscribe-button  branded-page-v2-secondary-column-hidden">
                <div class="branded-page-v2-col-container clearfix">
                  <div class="branded-page-v2-primary-col">
                    <div class="branded-page-v2-primary-col-header-container">
                      <div id="context-source-container" data-context-source="Popular on YouTube" style="display:none;"></div>
                    </div>
                    <div class="branded-page-v2-body" id="gh-activityfeed">
                      <div class="context-data-container">
                        <div class="lohp-newspaper-shelf">
                          <div class="lohp-large-shelf-container">
                            <div class="context-data-item" data-context-item-type="video">
                              <a href="/watch?v=<?php echo $r[0]["videoId"];?>" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CAMQ0x4oAA">
                                <span class="video-thumb ux-thumb yt-thumb-default-370 "><span class="yt-thumb-clip">
                                    <span class="yt-thumb-clip-inner"><img src="<?php echo $r[0]["videoThumbnails"][3]["url"];?>" alt="Thumbnail" width="370">
                                      <span class="vertical-align"></span>
                                    </span>
                                  </span>
                                </span>
                                <span class="video-time"><?php echo gmdate("H:i:s", $r[0]["lengthSeconds"]);?></span>
                                <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="01K4RZpcufs" role="button">
                                  <span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                  </span>
                                  <img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title="">
                                </button>
                              </a>
                              <a class="lohp-video-link max-line-2 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CAMQ0x4oAA" href="/watch?v=<?php echo $r[0]["videoId"];?>"><?php echo $r[0]["title"];?></a>
                              <div class="lohp-video-metadata attached">
                                <span class="content-uploader">
                                  <span class="username-prepend">by</span> <a href="/channel/<?php echo $r[0]["authorId"];?>" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw" dir="ltr"><?php echo $r[0]["author"];?></a>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="lohp-medium-shelves-container"> <?php for($i=1;$i<=3;$i=$i+1){
                              echo '<div class="lohp-medium-shelf context-data-item">
                                                                                      <div class="lohp-media-object">
                                                                                        <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto ">
                                                                                          <span class="video-thumb ux-thumb yt-thumb-default-128 ">
                                                                                            <span class="yt-thumb-clip">
                                                                                              <span class="yt-thumb-clip-inner">
                                                                                                <img src="'.$r[$i]["videoThumbnails"][3]["url"].'" alt="Thumbnail" width="128">
                                                                                                <span class="vertical-align"></span>
                                                                                              </span>
                                                                                            </span>
                                                                                          </span>
                                                                                          <span class="video-time">'.gmdate("H:i:s", $r[$i]["lengthSeconds"]).'</span>
                                                                                          <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" role="button">
                                                                                            <span class="yt-uix-button-content"> 
                                                                                              <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                                                                            </span>
                                                                                            <img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title="">
                                                                                          </button>
                                                                                        </a>
                                                                                      </div>
                                                                                      <div class="lohp-media-object-content lohp-medium-shelf-content">
                                                                                        <a class="lohp-video-link max-line-1 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CAUQ0x4oAg" href="/watch?v='.$r[$i]["videoId"].'">'.$r[$i]["title"].'</a>
                                                                                        <div class="lohp-video-metadata attached">
                                                                                          <span class="content-uploader">
                                                                                            <span class="username-prepend">by</span> <a href="/channel/'.$r[$i]["authorId"].'" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw" dir="ltr">'.$r[$i]["author"].'</a>
                                                                                          </span>
                                </div>
                                </div>
                                </div>';
                                }; ?> </div>
                        </div>
                        <div class="lohp-vbox-list lohp-left-vbox-list">
                          <div>
                            <div class="lohp-shelf-cell-container lohp-category-shelf last-shelf-in-line">
                              <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
                                <h2 class="branded-page-module-title">
                                  <a class="spf-link yt-uix-sessionlink" href="/channel/HC7Dr1BKwqctY?feature=g-logo" title="Sports" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBIQzh4"> Popular </a>
                                </h2>
                                <?php 
                                for($i=4;$i<=6;$i=$i+1){
                                echo '<div class="lohp-category-shelf-item context-data-item last-shelf-item" data-context-item-type="video" data-context-item-time="1:01" data-context-item-user="LSUTigersFB" data-context-item-title="LSU Football Harlem Shake" data-context-item-id="GHkKjo4HtWs" data-context-item-views="1,032,735 views">
                                  <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ"><span class="video-thumb ux-thumb yt-thumb-default-189 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="/vi/GHkKjo4HtWs/mqdefault.jpg" alt="Thumbnail" width="189" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">'.gmdate("H:i:s", $r[$i]["lengthSeconds"]).'</span>
                                    <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="GHkKjo4HtWs" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                      </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                  </a>
                                  <a class="lohp-video-link max-line-2 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ" href="/watch?v='.$r[$i]["videoId"].'">'.$r[$i]["title"].'</a>
                                  <div class="lohp-video-metadata">
                                    <span class="view-count"> '.number_format($r[$i]["viewCount"]).' views </span>
                                    <span class="content-item-time-created"> '.$r[$i]["publishedText"].' </span>
                                  </div>
                                </div>';
                                }; ?>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="lohp-shelf-cell-container lohp-category-shelf last-shelf-in-line">
                              <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
                                <h2 class="branded-page-module-title">
                                  <a class="spf-link yt-uix-sessionlink" href="/channel/HC7Dr1BKwqctY?feature=g-logo" title="Sports" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBIQzh4"> More Videos </a>
                                </h2>
                                <?php 
                                for($i=7;$i<=9;$i=$i+1){
                                echo '<div class="lohp-category-shelf-item context-data-item last-shelf-item" data-context-item-type="video" data-context-item-time="1:01" data-context-item-user="LSUTigersFB" data-context-item-title="LSU Football Harlem Shake" data-context-item-id="GHkKjo4HtWs" data-context-item-views="1,032,735 views">
                                  <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ"><span class="video-thumb ux-thumb yt-thumb-default-189 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="/vi/GHkKjo4HtWs/mqdefault.jpg" alt="Thumbnail" width="189" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">'.gmdate("H:i:s", $r[$i]["lengthSeconds"]).'</span>
                                    <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="GHkKjo4HtWs" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                      </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                  </a>
                                  <a class="lohp-video-link max-line-2 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ" href="/watch?v='.$r[$i]["videoId"].'">'.$r[$i]["title"].'</a>
                                  <div class="lohp-video-metadata">
                                    <span class="view-count"> '.number_format($r[$i]["viewCount"]).' views </span>
                                    <span class="content-item-time-created"> '.$r[$i]["publishedText"].' </span>
                                  </div>
                                </div>';
                                }; ?>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="lohp-shelf-cell-container lohp-category-shelf last-shelf-in-line">
                              <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
                                <h2 class="branded-page-module-title">
                                  <a class="spf-link yt-uix-sessionlink" href="/channel/HCOvlZkU39tdk?feature=g-logo" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CDYQzh4"> More Videos </a>
                                </h2>
                                <?php 
                                for($i=10;$i<=12;$i=$i+1){
                                echo '<div class="lohp-category-shelf-item context-data-item last-shelf-item" data-context-item-type="video" data-context-item-time="1:01" data-context-item-user="LSUTigersFB" data-context-item-title="LSU Football Harlem Shake" data-context-item-id="GHkKjo4HtWs" data-context-item-views="1,032,735 views">
                                  <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ"><span class="video-thumb ux-thumb yt-thumb-default-189 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="/vi/GHkKjo4HtWs/mqdefault.jpg" alt="Thumbnail" width="189" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">'.gmdate("H:i:s", $r[$i]["lengthSeconds"]).'</span>
                                    <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="GHkKjo4HtWs" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                      </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                  </a>
                                  <a class="lohp-video-link max-line-2 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ" href="/watch?v='.$r[$i]["videoId"].'">'.$r[$i]["title"].'</a>
                                  <div class="lohp-video-metadata">
                                    <span class="view-count"> '.number_format($r[$i]["viewCount"]).' views </span>
                                    <span class="content-item-time-created"> '.$r[$i]["publishedText"].' </span>
                                  </div>
                                </div>';
                                }; ?>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="lohp-shelf-cell-container lohp-category-shelf last-shelf-in-line">
                              <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
                                <h2 class="branded-page-module-title">
                                  <a class="spf-link yt-uix-sessionlink" href="/channel/HCOvlZkU39tdk?feature=g-logo" title="Movies" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CDYQzh4"> More Videos </a>
                                </h2>
                                <?php 
                                for($i=13;$i<=15;$i=$i+1){
                                echo '<div class="lohp-category-shelf-item context-data-item last-shelf-item" data-context-item-type="video" data-context-item-time="1:01" data-context-item-user="LSUTigersFB" data-context-item-title="LSU Football Harlem Shake" data-context-item-id="GHkKjo4HtWs" data-context-item-views="1,032,735 views">
                                  <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ"><span class="video-thumb ux-thumb yt-thumb-default-189 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="/vi/GHkKjo4HtWs/mqdefault.jpg" alt="Thumbnail" width="189" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">'.gmdate("H:i:s", $r[$i]["lengthSeconds"]).'</span>
                                    <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="GHkKjo4HtWs" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                      </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                  </a>
                                  <a class="lohp-video-link max-line-2 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ" href="/watch?v='.$r[$i]["videoId"].'">'.$r[$i]["title"].'</a>
                                  <div class="lohp-video-metadata">
                                    <span class="view-count"> '.number_format($r[$i]["viewCount"]).' views </span>
                                    <span class="content-item-time-created"> '.$r[$i]["publishedText"].' </span>
                                  </div>
                                </div>';
                                }; ?>
                              </div>
                            </div>
                          </div>
                          <div>
                            <div class="lohp-shelf-cell-container lohp-category-shelf last-shelf-in-line">
                              <div class="lohp-category-shelf-item-list lohp-shelf-size-3">
                                <h2 class="branded-page-module-title">
                                  <a class="spf-link yt-uix-sessionlink" href="/channel/HCOvlZkU39tdk?feature=g-logo" title="Movies" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CDYQzh4"> More Videos </a>
                                </h2>
                                <?php 
                                for($i=16;$i<=18;$i=$i+1){
                                echo '<div class="lohp-category-shelf-item context-data-item last-shelf-item" data-context-item-type="video" data-context-item-time="1:01" data-context-item-user="LSUTigersFB" data-context-item-title="LSU Football Harlem Shake" data-context-item-id="GHkKjo4HtWs" data-context-item-views="1,032,735 views">
                                  <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ"><span class="video-thumb ux-thumb yt-thumb-default-189 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="/vi/GHkKjo4HtWs/mqdefault.jpg" alt="Thumbnail" width="189" data-group-key="thumb-group-0"><span class="vertical-align"></span></span></span></span><span class="video-time">'.gmdate("H:i:s", $r[$i]["lengthSeconds"]).'</span>
                                    <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="GHkKjo4HtWs" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                      </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                  </a>
                                  <a class="lohp-video-link max-line-2 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CBQQzx4oAQ" href="/watch?v='.$r[$i]["videoId"].'">'.$r[$i]["title"].'</a>
                                  <div class="lohp-video-metadata">
                                    <span class="view-count"> '.number_format($r[$i]["viewCount"]).' views </span>
                                    <span class="content-item-time-created"> '.$r[$i]["publishedText"].' </span>
                                  </div>
                                </div>';
                                }; ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="lohp-vbox-list lohp-right-vbox-list">
                          <div class="lohp-vertical-shelf">
                            <h2 class="branded-page-module-title">
                              <a class="spf-link yt-uix-sessionlink" href="/channel/HCPvDBPPFfuaM?feature=g-logo" title="News - Worldwide" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CDwQzh4"> Videos </a>
                            </h2>
                            <?php for($i=19;$i<=22;$i=$i+1){
                              echo '<div class="lohp-vertical-shelf-item context-data-item" data-context-item-type="video" data-context-item-time="1:11" data-context-item-user="telegraphtv" data-context-item-title="Pope Francis tells Pope Emeritus Benedict &#39;we&#39;re brothers&#39;" data-context-item-id="lz159F2INb8" data-context-item-views="260 views">
                              <div class="lohp-media-object">
                                <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CD0Qzx4oAA"><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="'.$r[$i]["videoThumbnails"][3]["url"].'" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span><span class="video-time">1:11</span>
                                  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="lz159F2INb8" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                    </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                </a>
                              </div>
                              <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
                                <a class="lohp-video-link max-line-3 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CD0Qzx4oAA" href="/watch?v='.$r[$i]["videoId"].'" title="Pope Francis tells Pope Emeritus Benedict &#39;we&#39;re brothers&#39;">'.$r[$i]["title"].'</a>
                                <div class="lohp-video-metadata attached">
                                  <span class="content-uploader">
                                    <span class="username-prepend">by</span> <a href="/channel/'.$r[$i]["authorId"].'" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw" dir="ltr">'.$r[$i]["author"].'</a>
                                  </span>
                                </div>
                              </div>
                            </div>';
                                }; ?>
                          </div>
                          <div class="lohp-vertical-shelf">
                            <h2 class="branded-page-module-title">
                              <a class="spf-link yt-uix-sessionlink" href="/channel/HCp-Rdqh3z4Uc?feature=g-logo" title="Music" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CEIQzh4"> Videos </a>
                            </h2>
                            <?php for($i=23;$i<=26;$i=$i+1){
                              echo '<div class="lohp-vertical-shelf-item context-data-item" data-context-item-type="video" data-context-item-time="1:11" data-context-item-user="telegraphtv" data-context-item-title="Pope Francis tells Pope Emeritus Benedict &#39;we&#39;re brothers&#39;" data-context-item-id="lz159F2INb8" data-context-item-views="260 views">
                              <div class="lohp-media-object">
                                <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CD0Qzx4oAA"><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="'.$r[$i]["videoThumbnails"][3]["url"].'" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span><span class="video-time">1:11</span>
                                  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="lz159F2INb8" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                    </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                </a>
                              </div>
                              <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
                                <a class="lohp-video-link max-line-3 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CD0Qzx4oAA" href="/watch?v='.$r[$i]["videoId"].'" title="Pope Francis tells Pope Emeritus Benedict &#39;we&#39;re brothers&#39;">'.$r[$i]["title"].'</a>
                                <div class="lohp-video-metadata attached">
                                  <span class="content-uploader">
                                    <span class="username-prepend">by</span> <a href="/channel/'.$r[$i]["authorId"].'" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw" dir="ltr">'.$r[$i]["author"].'</a>
                                  </span>
                                </div>
                              </div>
                            </div>';
                                }; ?>
                          </div>
                          <div class="lohp-vertical-shelf">
                            <h2 class="branded-page-module-title">
                              <a class="spf-link yt-uix-sessionlink" href="/channel/HC4qRk91tndwg?feature=g-logo" title="Most Popular" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CEgQzh4"> Most Popular </a>
                            </h2>
                            <?php for($i=27;$i<=30;$i=$i+1){
                              echo '<div class="lohp-vertical-shelf-item context-data-item" data-context-item-type="video" data-context-item-time="1:11" data-context-item-user="telegraphtv" data-context-item-title="Pope Francis tells Pope Emeritus Benedict &#39;we&#39;re brothers&#39;" data-context-item-id="lz159F2INb8" data-context-item-views="260 views">
                              <div class="lohp-media-object">
                                <a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CD0Qzx4oAA"><span class="video-thumb ux-thumb yt-thumb-default-64 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["videoThumbnails"][3]["url"].'" data-thumb="'.$r[$i]["videoThumbnails"][3]["url"].'" alt="Thumbnail" width="64"><span class="vertical-align"></span></span></span></span><span class="video-time">1:11</span>
                                  <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" data-video-ids="lz159F2INb8" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                                    </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt="" title=""></button>
                                </a>
                              </div>
                              <div class="lohp-vertical-shelf-item-content lohp-media-object-content">
                                <a class="lohp-video-link max-line-3 yt-uix-sessionlink" data-sessionlink="feature=g-logo&amp;ei=R81NUd6GIouVhAG1p4HYBw&amp;ved=CD0Qzx4oAA" href="/watch?v='.$r[$i]["videoId"].'" title="Pope Francis tells Pope Emeritus Benedict &#39;we&#39;re brothers&#39;">'.$r[$i]["title"].'</a>
                                <div class="lohp-video-metadata attached">
                                  <span class="content-uploader">
                                    <span class="username-prepend">by</span> <a href="/channel/'.$r[$i]["authorId"].'" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw" dir="ltr">'.$r[$i]["author"].'</a>
                                  </span>
                                </div>
                              </div>
                            </div>';
                                }; ?>
                          </div>
                        </div>
                        <div style="clear:both;"></div>
                      </div>
                      <div id="footer-ads">
                        <div id="ad_creative_3" class="ad-div " style="z-index: 1">
                          <iframe id="ad_creative_iframe_3" height="1" width="1" scrolling="no" frameborder="0" style="z-index: 1"></iframe>
                          <script>
                            (function() {
                              var ord = Math.floor(Math.random() * 10000000000000000);
                              var adIframe = document.getElementById("ad_creative_iframe_3");
                              adIframe.src = "http://ad-g.doubleclick.net/N6762/adi/mkt.ythome_1x1/;sz=1x1;tile=3;plat=pc;dc_dedup=1;kcr=us;kga=-1;kgg=-1;klg=en;kmyd=ad_creative_3;ord=" + ord + "?";
                            })();
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <?php include "phpbin/footer.php";?> <div class="yt-dialog hid" id="feed-privacy-lb">
        <div class="yt-dialog-base">
          <span class="yt-dialog-align"></span>
          <div class="yt-dialog-fg">
            <div class="yt-dialog-fg-content">
              <div class="yt-dialog-loading">
                <div class="yt-dialog-waiting-content">
                  <div class="yt-spinner-img"></div>
                  <div class="yt-dialog-waiting-text">Loading...</div>
                </div>
              </div>
              <div class="yt-dialog-content">
                <div id="feed-privacy-dialog">
                </div>
              </div>
              <div class="yt-dialog-working">
                <div id="yt-dialog-working-overlay">
                </div>
                <div id="yt-dialog-working-bubble">
                  <div class="yt-dialog-waiting-content">
                    <div class="yt-spinner-img"></div>
                    <div class="yt-dialog-waiting-text">Working...</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="shared-addto-watch-later-login" class="hid">
        <a href="/ServiceLogin?uilel=3&hl=en_US&service=youtube&passive=true&continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den_US%26next%3D%252F%26nomobiletemp%3D1" class="sign-in-link">Sign in</a> to add this to a playlist
      </div>
      <div id="shared-addto-menu" style="display: none;" class="hid sign-in">
        <div class="addto-menu">
          <div id="addto-list-panel" class="menu-panel active-panel">
            <span class="yt-uix-button-menu-item yt-uix-tooltip sign-in" data-possible-tooltip="" data-tooltip-show-delay="750"><a href="/ServiceLogin?uilel=3&hl=en_US&service=youtube&passive=true&continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dplaylist%26hl%3Den_US%26next%3D%252F%26nomobiletemp%3D1" class="sign-in-link">Sign in</a> to add this to a playlist </span>
          </div>
          <div id="addto-list-saved-panel" class="menu-panel">
            <div class="panel-content">
              <div class="yt-alert yt-alert-naked yt-alert-success  ">
                <div class="yt-alert-icon">
                  <img src="/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
                </div>
                <div class="yt-alert-content" role="alert"> <span class="yt-alert-vertical-trick"></span>
                  <div class="yt-alert-message">
                    <span class="message">Added to <span class="addto-title yt-uix-tooltip yt-uix-tooltip-reverse" title="More information about this playlist" data-tooltip-show-delay="750"></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="addto-list-error-panel" class="menu-panel">
            <div class="panel-content">
              <img src="/img/pixel-vfl3z5WfW.gif">
              <span class="error-details"></span>
              <a class="show-menu-link">Back to list</a>
            </div>
          </div>
          <div id="addto-note-input-panel" class="menu-panel">
            <div class="panel-content">
              <div class="yt-alert yt-alert-naked yt-alert-success  ">
                <div class="yt-alert-icon">
                  <img src="/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
                </div>
                <div class="yt-alert-content" role="alert"> <span class="yt-alert-vertical-trick"></span>
                  <div class="yt-alert-message">
                    <span class="message">Added to playlist:</span>
                    <span class="addto-title yt-uix-tooltip" title="More information about this playlist" data-tooltip-show-delay="750"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="yt-uix-char-counter" data-char-limit="150">
              <div class="addto-note-box addto-text-box"><textarea id="addto-note" class="addto-note yt-uix-char-counter-input" maxlength="150"></textarea><label for="addto-note" class="addto-note-label">Add an optional note</label></div><span class="yt-uix-char-counter-remaining">150</span>
            </div> <button class="playlist-save-note yt-uix-button yt-uix-button-default" type="button" onclick=";return false;" disabled="disabled" role="button"><span class="yt-uix-button-content">Add note </span></button>
          </div>
          <div id="addto-note-saving-panel" class="menu-panel">
            <div class="panel-content loading-content">
              <img src="/img/pixel-vfl3z5WfW.gif">
              <span>Saving note...</span>
            </div>
          </div>
          <div id="addto-note-saved-panel" class="menu-panel">
            <div class="panel-content">
              <img src="/img/pixel-vfl3z5WfW.gif">
              <span class="message">Note added to:</span>
            </div>
          </div>
          <div id="addto-note-error-panel" class="menu-panel">
            <div class="panel-content">
              <img src="/img/pixel-vfl3z5WfW.gif">
              <span class="message">Error adding note:</span>
              <ul class="error-details"></ul>
              <a class="add-note-link">Click to add a new note</a>
            </div>
          </div>
          <div class="close-note hid">
            <img src="/img/pixel-vfl3z5WfW.gif" class="close-button">
          </div>
        </div>
      </div>
      <script>
        if (window.ytcsi) {
          ytcsi.tick("js_head");
        }
      </script>
      <script id="js-1792868116" src="//s.ytimg.com/yts/jsbin/www-core-vfl5tYQUF.js" data-loaded="true"></script>
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
      <script id="js-2979581770" src="//s.ytimg.com/yts/jsbin/www-home-vflV3pM4L.js" data-loaded="true"></script>
      <script>
        window.masthead = new yt.www.ads.MastheadAd("v7T-3cSFF_g", false);
      </script>
      <script>
        yt.setConfig({
          'GUIDE_SELECTED_ITEM': "youtube"
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