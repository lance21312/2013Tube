<!DOCTYPE html>
<html lang="en">
<?php include "server.php";
$r=(empty($_GET['page'])) ? invidiousGet("/search?q=".urlencode($_GET['search_query'])."&page=1") : $r=invidiousGet("/search?q=".urlencode($_GET['search_query'])."&page=".$_GET['page']);
?>
<head>
  <link id="css-1678167119" rel="stylesheet" href="/cssbin/www-core-vfl8Dq7du.css">
  <script>
    var yt = yt || {};
    yt.timing = yt.timing || {};
    yt.timing.data_ = yt.timing.data_ || {};
    yt.timing.tick = function(label, opt_time) {
      var timer = yt.timing.data_['timer'] || {};
      if (opt_time) {
        timer[label] = opt_time;
      } else {
        timer[label] = new Date().getTime();
      }
      yt.timing.data_['timer'] = timer;
    };
    yt.timing.info = function(label, value) {
      var info_args = yt.timing.data_['info_args'] || {};
      info_args[label] = value;
      yt.timing.data_['info_args'] = info_args;
    };
    yt.timing.info('e', "914082,916611,921039,920704,912806,922403,922405,929901,913605,925710,929104,906938,920201,913302,919009,911116,926403,910221,901451");
    if (document.webkitVisibilityState == 'prerender') {
      document.addEventListener('webkitvisibilitychange', function() {
        yt.timing.tick('start');
      }, false);
    }
    yt.timing.tick('start');
    yt.timing.info('li', '0');
    try {
      yt.timing.data_['srt'] = window.gtbExternal && window.gtbExternal.pageT() || window.external && window.external.pageT;
    } catch (e) {}
    if (window.chrome && window.chrome.csi) {
      yt.timing.data_['srt'] = Math.floor(window.chrome.csi().pageT);
    }
    if (window.msPerformance && window.msPerformance.timing) {
      yt.timing.data_['srt'] = window.msPerformance.timing.responseStart - window.msPerformance.timing.navigationStart;
    }
  </script>
  <title>test - YouTube</title>
  <link rel="search" type="application/opensearchdescription+xml" href="http://www.youtube.com/opensearch?locale=en_US" title="YouTube Video Search">
  <link rel="shortcut icon" href="http://s.ytimg.com/yts/img/favicon-vfldLzJxy.ico" type="image/x-icon">
  <link rel="icon" href="//s.ytimg.com/yts/img/favicon_32-vflWoMFGx.png" sizes="32x32">
  <link rel="alternate" media="handheld" href="http://m.youtube.com/results?search_query=<?php echo $_GET['search_query'];?>&amp;desktop_uri=%2Fresults%3Fsearch_query%3Dtest">
  <link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.youtube.com/results?search_query=<?php echo $_GET['search_query'];?>&amp;desktop_uri=%2Fresults%3Fsearch_query%3Dtest">
  <meta name="description" content="Share your videos with friends, family, and the world">
  <meta name="keywords" content="video, sharing, camera phone, video phone, free, upload">
  <link id="css-3408360332" rel="stylesheet" href="http://s.ytimg.com/yts/cssbin/www-core-vflK3BdTj.css">
  <link id="css-1966238356" rel="stylesheet" href="http://s.ytimg.com/yts/cssbin/www-home-c4-vfl2RfyGn.css">
  <link id="css-3096980634" rel="stylesheet" href="http://s.ytimg.com/yts/cssbin/www-resultsh2-vfldbLcxB.css">
  <script>
    if (window.yt.timing) {
      yt.timing.tick("ct");
    }
  </script>
  <style></style>
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
          <div id="content"> <noscript>
              <div class="yt-alert yt-alert-default yt-alert-error  ">
                <div class="yt-alert-icon">
                  <img src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" class="icon master-sprite" alt="Alert icon">
                </div>
                <div class="yt-alert-buttons"><button class="close yt-uix-close yt-uix-button yt-uix-button-close" type="button" onclick=";return false;" data-close-parent-class="yt-alert" role="button"><span class="yt-uix-button-content">Close </span></button></div>
                <div class="yt-alert-content" role="alert"> <span class="yt-alert-vertical-trick"></span>
                  <div class="yt-alert-message"> Hello, you seem to have JavaScript turned off. Please enable it to see search results properly. </div>
                </div>
              </div>
            </noscript>
            <div id="context-source-container" data-context-source="test" style="display:none;"></div>
            <div class="primary-col">
              <div class="search-header yt-uix-expander yt-uix-expander-collapsed">
                <div class="filter-top">
                  <div class="filter-bar-container">
                    <button class="filter-button yt-uix-expander-head yt-uix-button yt-uix-button-default yt-uix-button-short" type="button" onclick=";return false;" data-button-toggle="true" data-button-menu-id="some-nonexistent-menu" data-button-action="" role="button"><span class="yt-uix-button-content">Filters </span><img class="yt-uix-button-arrow" src="//s.ytimg.com/yts/img/pixel-vfl3z5WfW.gif" alt=""></button>
                    <ul class="filter-crumb-list"></ul>
                    <p class="num-results"> About <strong><?php echo count($r); ?></strong> results </p>
                  </div>
                </div>
                <div id="filter-dropdown" class="yt-uix-expander-body">
                  <div class="filter-col">
                    <h4 class="filter-col-title">Upload Date</h4>
                    <ul>
                      <li>
                        <a class="filter " title="Last hour" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=hour"><span class="filter-text filter-ghost">Last hour</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Today" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=today"><span class="filter-text filter-ghost">Today</span></a>
                      </li>
                      <li>
                        <a class="filter " title="This week" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=this_week"><span class="filter-text filter-ghost">This week</span></a>
                      </li>
                      <li>
                        <a class="filter " title="This month" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=this_month"><span class="filter-text filter-ghost">This month</span></a>
                      </li>
                      <li>
                        <a class="filter " title="This year" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=this_year"><span class="filter-text filter-ghost">This year</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="filter-col">
                    <h4 class="filter-col-title">Result Type</h4>
                    <ul>
                      <li>
                        <a class="filter " title="Video" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=video"><span class="filter-text filter-ghost">Video</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Channel" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=channel"><span class="filter-text filter-ghost">Channel</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Playlist" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=playlist"><span class="filter-text filter-ghost">Playlist</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Movie" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=movie"><span class="filter-text filter-ghost">Movie</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Show" href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;lclk=show"><span class="filter-text filter-ghost">Show</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="filter-col">
                    <h4 class="filter-col-title">Duration</h4>
                    <ul>
                      <li>
                        <a class="filter " title="Short (~4 minutes)" href="/results?search_query=<?php echo $_GET['search_query'];?>%2C+short&amp;lclk=short"><span class="filter-text filter-ghost">Short (~4 minutes)</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Long (20~ minutes)" href="/results?search_query=<?php echo $_GET['search_query'];?>%2C+long&amp;lclk=long"><span class="filter-text filter-ghost">Long (20~ minutes)</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="filter-col">
                    <h4 class="filter-col-title">Features</h4>
                    <ul>
                      <li>
                        <a class="filter " title="HD (high definition)" href="/results?search_query=<?php echo $_GET['search_query'];?>%2C+hd&amp;lclk=hd"><span class="filter-text filter-ghost">HD (high definition)</span></a>
                      </li>
                      <li>
                        <a class="filter " title="CC (closed caption)" href="/results?search_query=<?php echo $_GET['search_query'];?>%2C+cc&amp;lclk=cc"><span class="filter-text filter-ghost">CC (closed caption)</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Creative commons" href="/results?search_query=<?php echo $_GET['search_query'];?>%2C+creativecommons&amp;lclk=creativecommons"><span class="filter-text filter-ghost">Creative commons</span></a>
                      </li>
                      <li>
                        <a class="filter " title="3D" href="/results?search_query=<?php echo $_GET['search_query'];?>%2C+3d&amp;lclk=3d"><span class="filter-text filter-ghost">3D</span></a>
                      </li>
                      <li>
                        <a class="filter " title="Live" href="/results?search_query=<?php echo $_GET['search_query'];?>%2C+live&amp;lclk=live"><span class="filter-text filter-ghost">Live</span></a>
                      </li>
                    </ul>
                  </div>
                  <div class="filter-col">
                    <h4 class="filter-col-title">Sort by</h4>
                    <ul>
                      <li>
                        <span class="filter filter-sort filter-selected " title=""><span class="filter-text ">Relevance</span></span>
                      </li>
                      <li>
                        <a class="filter filter-sort " title="" href="/results?search_sort=video_date_uploaded&amp;search_type=videos&amp;search_query=<?php echo $_GET['search_query'];?>"><span class="filter-text ">Upload date</span></a>
                      </li>
                      <li>
                        <a class="filter filter-sort " title="" href="/results?search_sort=video_view_count&amp;search_type=videos&amp;search_query=<?php echo $_GET['search_query'];?>"><span class="filter-text ">View count</span></a>
                      </li>
                      <li>
                        <a class="filter filter-sort " title="" href="/results?search_sort=video_avg_rating&amp;search_type=videos&amp;search_query=<?php echo $_GET['search_query'];?>"><span class="filter-text ">Rating</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="results">
                
                <ol id="search-results" class="result-list context-data-container">
                  <?php for ($i=0;$i<count($r)-1;$i++){
                    if($r[$i]["type"] == "channel"){
                      echo '<li class="yt-lockup2 yt-lockup2-channel yt-uix-tile clearfix">
                                                                          <div class="yt-lockup2-thumbnail">
                                                                              <a href="/channel/'.$r[$i]["authorId"].'" class="ux-thumb-wrap yt-uix-sessionlink " data-sessionlink="ved=CA8QwBs%3D&amp;ei=CM_hkuT2mrQCFSrsRAodtHxQNg%3D%3D"><span class="video-thumb ux-thumb yt-thumb-square-104 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img src="'.$r[$i]["authorThumbnails"][1]["url"].'" alt="Thumbnail" width="104"><span class="vertical-align"></span></span></span></span></a>
                                                                          </div>
                                                                          <div class="yt-lockup2-content">
                                                                            <h3 class="yt-lockup2-title"><a class="yt-uix-sessionlink yt-uix-tile-link yt-uix-contextlink " dir="ltr" data-sessionlink="ved=CA4Qvxs%3D&amp;ei=CM_hkuT2mrQCFSrsRAodtHxQNg%3D%3D" href="/channel/'.$r[$i]["authorId"].'">'.$r[$i]["author"].'</a></h3>
                                                                            <p class="yt-lockup2-meta">
                                                                                by <a href="/channel/'.$r[$i]["authorId"].'" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ved=CBAQwRs%3D&amp;ei=CM_hkuT2mrQCFSrsRAodtHxQNg%3D%3D" dir="ltr">'.$r[$i]["author"].'</a><span class="metadata-separator">•</span>'.number_format($r[$i]["videoCount"]).' videos
                                                                            </p>
                                                                              <p class="yt-lockup2-description" dir="ltr">
                                                                                '.$r[$i]["descriptionHtml"].'
                                                                              </p>
                                                                            <div class="yt-lockup2-badges">
                                                                              <ul class="item-badge-line"><li class="item-badge-label ">CHANNEL</li></ul>  <span class="yt-uix-button-subscription-container yt-uix-button-context-light"><button href="" onclick=";window.location.href=this.getAttribute(\'href\');return false;" type="button" class="yt-subscription-button yt-subscription-button-js-default yt-uix-button yt-uix-button-subscribe-unbranded" role="button"><span class="yt-uix-button-icon-wrapper"><img class="yt-uix-button-icon yt-uix-button-icon-subscribe-unbranded" src="/img/pixel-vfl3z5WfW.gif" alt=""><span class="yt-uix-button-valign"></span></span><span class="yt-uix-button-content">  <span class="subscribe-hh-label">Subscribe</span>
                                                                        <span class="subscribed-hh-label">Subscribed</span>
                                                                        <span class="unsubscribe-hh-label">Unsubscribe</span>
                                                                       </span></button><span class="yt-subscription-button-subscriber-count-unbranded-horizontal">'.number_format($r[$i]["subCount"]).'</span><span class="yt-subscription-button-disabled-mask"></span></span>
                                                      
                                                                            </div>
                                                                          </div>
                                                                        </li>';
                                                                      }
                                                                        elseif ($r[$i]["type"] == "video"){
                                                                          echo '<li class="yt-lockup2 yt-lockup2-video yt-uix-tile context-data-item clearfix ">
                    <div class="yt-lockup2-thumbnail"><a href="/watch?v='.$r[$i]["videoId"].'" class="ux-thumb-wrap yt-uix-sessionlink yt-uix-contextlink contains-addto " data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D&amp;ved=CAMQwBs%3D"><span class="video-thumb ux-thumb yt-thumb-default-185 "><span class="yt-thumb-clip"><span class="yt-thumb-clip-inner"><img alt="Thumbnail" src="'.$r[$i]["videoThumbnails"][3]["url"].'" width="185"><span class="vertical-align"></span></span></span></span><span class="video-time">'.gmdate("H:i:s", $r[$i]["lengthSeconds"]).'</span>
                        <button class="addto-button video-actions spf-nolink addto-watch-later-button-sign-in yt-uix-button yt-uix-button-default yt-uix-button-short yt-uix-tooltip" title="Watch Later" type="button" onclick=";return false;" data-button-menu-id="shared-addto-watch-later-login" role="button"><span class="yt-uix-button-content"> <img src="/img/pixel-vfl3z5WfW.gif" alt="Watch Later">
                          </span><img class="yt-uix-button-arrow" src="/img/pixel-vfl3z5WfW.gif" alt=""></button>
                      </a></div>
                    <div class="yt-lockup2-content">
                      <h3 class="yt-lockup2-title"><a class="yt-uix-sessionlink yt-uix-tile-link yt-uix-contextlink " dir="ltr" href="/watch?v='.$r[$i]["videoId"].'">'.$r[$i]["title"].'</a></h3>
                      <p class="yt-lockup2-meta"> by <a href="/channel/'.$r[$i]["authorId"].'" class="yt-uix-sessionlink yt-user-name " data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D&amp;ved=CAQQwRs%3D" dir="ltr">'.$r[$i]["author"].'</a><span class="metadata-separator">•</span>'.$r[$i]["publishedText"].'<span class="metadata-separator">•</span>'.number_format($r[$i]["viewCount"]).' views </p>
                      <p class="yt-lockup2-description" dir="ltr"></p>
                      <div class="yt-lockup2-badges"></div>
                    </div>
                  </li>';
                  }
                  }?>
                </ol>
              </div>
            </div>
            <div class="yt-uix-pager" role="navigation">
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=1" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="1" aria-label="Go to page 1"><span class="yt-uix-button-content">1</span></a>
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=2" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="2" aria-label="Go to page 2"><span class="yt-uix-button-content">2</span></a>
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=3" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="3" aria-label="Go to page 3"><span class="yt-uix-button-content">3</span></a>
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=4" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="4" aria-label="Go to page 4"><span class="yt-uix-button-content">4</span></a>
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=5" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="5" aria-label="Go to page 5"><span class="yt-uix-button-content">5</span></a>
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=6" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="6" aria-label="Go to page 6"><span class="yt-uix-button-content">6</span></a>
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=7" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="7" aria-label="Go to page 7"><span class="yt-uix-button-content">7</span></a>
              <a href="/results?search_query=<?php echo $_GET['search_query'];?>&amp;page=<?php echo (empty($_GET['page'])) ? "2" : $_GET['page']+1;?>" class="yt-uix-button  yt-uix-pager-button yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=CLe3mcmXgbUCFcPcRAodyXMBYQ%3D%3D" data-page="2"><span class="yt-uix-button-content">Next »</span></a>
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
      'GUIDE_SELECTED_ITEM': "results"
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