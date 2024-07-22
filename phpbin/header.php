<form name="logoutForm" method="POST" action="/logout"><input type="hidden" name="action_logout" value="1"></form>
<div id="yt-masthead-container" class="yt-grid-box">
	<div id="yt-masthead" class=""> <a id="logo-container" href="/" title="YouTube home"><img id="logo" src="/img/pixel-vfl3z5WfW.gif" alt="YouTube home"></a>
		<div id="yt-masthead-signin"><button class=" yt-uix-button yt-uix-button-primary" type="button" href="/ServiceLogin?uilel=3&amp;hl=en_US&amp;service=youtube&amp;passive=true&amp;continue=http%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26feature%3Dsign_in_button%26hl%3Den_US%26next%3D%252F%26nomobiletemp%3D1" onclick=";window.location.href=this.getAttribute(&#39;href&#39;);return false;" role="button"><span class="yt-uix-button-content">Sign in </span></button></div>
		<div id="yt-masthead-content"><span id="masthead-upload-button-group"><a href="//www.youtube.com/upload" class="yt-uix-button   yt-uix-sessionlink yt-uix-button-default" data-sessionlink="ei=R81NUd6GIouVhAG1p4HYBw"><span class="yt-uix-button-content">Upload</span></a></span>
			<form id="masthead-search" class="search-form consolidated-form" action="/results" onsubmit="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false;"><button tabindex="2" type="submit" class="search-btn-component search-button yt-uix-button yt-uix-button-default" id="search-btn" onclick="if (_gel(&#39;masthead-search-term&#39;).value == &#39;&#39;) return false; _gel(&#39;masthead-search&#39;).submit(); return false;;return true;" dir="ltr" role="button"><span class="yt-uix-button-content">Search </span></button>
				<div id="masthead-search-terms" class="masthead-search-terms-border" dir="ltr"><label><input id="masthead-search-term" class="search-term yt-uix-form-input-bidi" name="search_query" value="<?php echo (!empty($_GET['search_query'])) ? $_GET['search_query'] : "";?>" type="text" tabindex="1" title="Search"></label></div>
			</form>
		</div>
	</div>
</div>
<div id="alerts"></div>
