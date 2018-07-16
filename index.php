<!--
 * @package Twitch.tv stream web channel v1.0
 * @author Agustín Quetto http://codecanyon.net/user/agusquetto
 * @copyright 2015 Agustín Quetto. All rights reserved.
 */
-->
<?php
require 'user-info.php';
error_reporting(0); // Just to make sure a 404 error
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $user; ?></title>
            <link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
                <?php
                if ($user == "") {
                    die ('Please read the documentation for configure it.');
                }
                ?>
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <script src="/jquery.countdown.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
            <script src="script.js"></script>
        <?php
        require 'style.php';
        echo '<link rel="icon" type="image/jpeg" href="'.$json2->logo . '" />';
        ?>
    </head>
    <body>
            <?php
            require 'messages.php';
            $json_url = "https://api.twitch.tv/kraken/streams/".$user;
            $json = json_decode(file_get_contents($json_url));

            if ($json->stream == null) {
                echo "<div id='cssmenu'>\n";
                echo "<ul>\n";
                echo "   <li class='active'><a href='index.php'>Home</a></li>\n";
                echo "   <li><a href='gallery.php'>Gallery</a></li>\n";
                echo "</ul>\n";
                echo "</div>";


            echo '<center>';
            echo '<div id="content-user-offline">';
            echo '<div class="avatar"></div>';
            echo '<span id="user">'.$user.'</span><br>';
                echo '<span id="offline">'.$currentlyoff.'</span><span id="offlinebold">'.$offline.'</span><span id="offline">.</span><br>';
                echo '<span id="info"><a href="https://twitch.tv/'.$user.'"><i class="fa fa-twitch"></i> Twitch</a></span>';
                if ($fbUrl !== "") {
                echo '<span id="info">| <a href="'.$fbUrl.'" target="_newblank"><i class="fa fa-facebook-square"></i> Facebook </a></span> ';
                }
                if ($twitUrl !== "") {
                echo '<span id="info">| <a href="'.$twitUrl.'" target="_newblank"><i class="fa fa-twitter-square"></i> Twitter</a></span> ';
                }
                if ($ytUrl !== "") {
                echo '<span id="info">| <a href="'.$ytUrl.'" target="_newblank"><i class="fa fa-youtube-square"></i> YouTube</a></span>';
                }
                if ($nvUrl !== "") {
                echo '<span id="info">| <a href="'.$nvUrl.'" target="_newblank"><i class="fa"></i><img src=images/nvIcon.png> Neruvian</a></span>';
                }
                echo '<br>';
                echo '</center>';
            } else {
                echo "<div id='cssmenu'>\n";
                echo "<ul>\n";
                echo "   <li class='active'><a href='index.php'>Home</a></li>\n";
                echo "   <li><a href='gallery.php'>Gallery</a></li>\n";
                echo "</ul>\n";
                echo "</div>";

                echo '<center>';
                echo '<div id="content-user-online">';
                echo '<div class="avatar"></div>';
            echo '<span id="user">'.$user.'</span><br>';

                echo '<span id="onlinebold">'.$currentlyonline.'</span><span id="online">'.$online.'</span><br>';
                echo $playing.''.$json->stream->game . '.<br>';
                echo '"'.$json->stream->channel->status.'"<br></span>';
                echo '<span id="info">';
                echo '<a href="https://twitch.tv/'.$user.'"><i class="fa fa-twitch"></i> Twitch</a></span> ';
                if ($fbUrl !== "") {
                echo '<span id="info">| <a href="'.$fbUrl.'" target="_newblank"><i class="fa fa-facebook-square"></i> Facebook </a></span>';
                }
                if ($twitUrl !== "") {
                echo '<span id="info">| <a href="'.$twitUrl.'" target="_newblank"><i class="fa fa-twitter-square"></i> Twitter</a></span> ';
                }
                if ($ytUrl !== "") {
                echo '<span id="info">| <a href="'.$ytUrl.'" target="_newblank"><i class="fa fa-youtube-square"></i> YouTube</a></span>';
                }
                if ($nvUrl !== "") {
                echo '<span id="info">| <a href="'.$nvUrl.'" target="_newblank"><i class="fa"></i><img src=images/nvIcon.png> Neruvian</a></span>';
                }
                echo '<br>';
                echo '<div id="btn">';
                if ($dUrl !== "") {
                echo '<a class="waves-effect waves-light btn" href="'.$dUrl.'" target="_newblank">'.$donate.'</a>';
                }
                if ($json2->partner == "true") {
                echo '<a class="waves-effect waves-light btn" href="https://www.twitch.tv/'.$user.'/subscribe" target="_newblank">'.$subscribe.'</a>';
                }
                echo '<br>';
                echo '<iframe src="http://www.twitch.tv/'.$user.'/embed" frameborder="0" scrolling="no" height="478" width="800"></iframe>';
                echo '</div>';                
                echo '</div>';                
                echo '</div>';
                echo "</center>";
                echo '<div id="content-user-chat">';
                echo '<iframe src="http://www.twitch.tv/'.$userchat.'/chat?popout=" frameborder="0" height="890px" width="340px"></iframe>';
                echo '</div>';
            }
            ?>
    </body>
</html>
