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
            <link rel="stylesheet" href="css/smoothbox.css">
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
			<script type="text/javascript" src="js/smoothbox.min.js"></script>

			<style type="text/css">
				.clear			{ clear:both; }
				.photo-link		{ padding:5px; margin:5px; border:0px; display:block-inline; width:200px;}
				.photo-link:hover	{ border-color:#999; }
			</style>
        <?php
        require 'style-gallery.php';
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
                echo '<div>';
                /* function:  generates thumbnail */
function make_thumb($src,$dest,$desired_width) {
	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height*($desired_width/$width));
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width,$desired_height);
	/* copy source image at a resized size */
	imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image,$dest);
}

/* function:  returns files from dir */
function get_files($images_dir,$exts = array('jpg')) {
	$files = array();
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}
/** settings **/
$images_dir = 'images-gallery/';
$thumbs_dir = 'images-gallery-thumbs/';
$thumbs_width = 200;
$images_per_row = 5;

/** generate photo gallery **/
$image_files = get_files($images_dir);
if(count($image_files)) {
	$index = 0;
	foreach($image_files as $index=>$file) {
		$index++;
		$thumbnail_image = $thumbs_dir.$file;
		if(!file_exists($thumbnail_image)) {
			$extension = get_file_extension($thumbnail_image);
			if($extension) {
				make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
			}
		}
		echo '<a href="',$images_dir.$file,'" class="photo-link sb" rel="gallery"><img src="',$thumbnail_image,'" style="margin-top: 15px;" /></a>';
		if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
	}
	echo '<div class="clear"></div></div>';
}
else {
	echo '<p>No hay imágenes en la galería.</p>';
}

                echo '</div>';                
                echo '</div>';                
                echo '</div>';
                echo "</center>";
            } else {
                echo "<div id='cssmenu'>\n";
                echo "<ul>\n";
                echo "   <li><a href='index.php'>Home</a></li>\n";
                echo "   <li class='active'><a href='gallery.php'>Gallery</a></li>\n";
                echo "</ul>\n";
                echo "</div>";

                echo '<center>';
                echo '<div>';
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
                echo '<div>';
                /* function:  generates thumbnail */
function make_thumb($src,$dest,$desired_width) {
	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height*($desired_width/$width));
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width,$desired_height);
	/* copy source image at a resized size */
	imagecopyresized($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image,$dest);
}

/* function:  returns files from dir */
function get_files($images_dir,$exts = array('jpg')) {
	$files = array();
	if($handle = opendir($images_dir)) {
		while(false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if($extension && in_array($extension,$exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
	return substr(strrchr($file_name,'.'),1);
}
/** settings **/
$images_dir = 'images-gallery/';
$thumbs_dir = 'images-gallery-thumbs/';
$thumbs_width = 200;
$images_per_row = 5;

/** generate photo gallery **/
$image_files = get_files($images_dir);
if(count($image_files)) {
	$index = 0;
	foreach($image_files as $index=>$file) {
		$index++;
		$thumbnail_image = $thumbs_dir.$file;
		if(!file_exists($thumbnail_image)) {
			$extension = get_file_extension($thumbnail_image);
			if($extension) {
				make_thumb($images_dir.$file,$thumbnail_image,$thumbs_width);
			}
		}
		echo '<a href="',$images_dir.$file,'" class="photo-link sb" rel="gallery"><img src="',$thumbnail_image,'" style="margin-top: 15px;" /></a>';
		if($index % $images_per_row == 0) { echo '<div class="clear"></div>'; }
	}
	echo '<div class="clear"></div></div>';
}
else {
	echo '<p>No hay imágenes en la galería.</p>';
}

                echo '</div>';                
                echo '</div>';                
                echo '</div>';
                echo "</center>";
            }
            ?>
	
</body>
</html>
