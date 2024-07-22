<?php echo '<link rel="stylesheet" href="/cssbin/www-player.css">
<div class="video-container paused" data-volume-level="high">
<img class="thumbnail-img">
<div class="video-controls-container">
<div class="timeline-container">
<div class="timeline">
<img class="preview-img" style="background:black">
<span class="timeline-txttime">0:00</span>
<div class="thumb-indicator"></div>
</div>
</div>
<div class="controls">
<button class="play-pause-btn">
<div class="play-icon" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -105px -154px;">
</div>
<div class="pause-icon" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -40px -384px;">
</div>
<div class="replay-icon" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -9px -319px;">
</div>
</button>
<div class="volume-container">
<button class="mute-btn">
<div class="volume-high-icon" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -48px -607px;">
</div>
<div class="volume-low-icon" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -91px -248px;">
</div>
<div class="volume-muted-icon" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -91px -93px;">
</div>
</button>
<input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
</div>
<div class="duration-container">
<div class="current-time">0:00</div>
<div class="time-separator">/</div>
<div class="total-time"></div>
</div>
<button class="full-screen-btn">
<div class="open" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -133px -279px;">
</div>
<div class="close" style="background: url(/img/icons.png);width: 40px;height: 31px;background-position: -131px -579px;">
</div>
</button>
</div>
</div>
<video src="'.$GLOBALS['vidUrl'].'">
</video>
<img class="buffer" src="/img/fulp_spinner.webp" style="display:none;width: 50px;height: 50px;position: absolute;top: calc(50% - 34px);">
</div>
<script src="/jsbin/www-player.js"></script>'; ?>