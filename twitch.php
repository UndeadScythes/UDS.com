<?php
$streamers = array('presjpolk', 'caracarnvi', 'milessmb', 'deuceler', 'mrbean35000vr', 'acmlm', 'werster', 'ilikebeingsmart');
for($i = 0; $i < count($streamers); $i++) {
    postVideo($streamers[$i]);
}

function postVideo($streamer) {
    ?>
    <object type="application/x-shockwave-flash" height="217" width="357" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel=<?php echo $streamer ?>">
        <param name="allowFullScreen" value="true">
        <param name="allowScriptAccess" value="always">
        <param name="allowNetworking" value="all">
        <param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf">
        <param name="flashvars" value="hostname=www.twitch.tv&channel=<?php echo $streamer ?>&auto_play=true&start_volume=0">
    </object>
    <?php
}
?>
