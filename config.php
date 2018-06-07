<?php

/*
 * Created by Explodified, MCM: http://www.mc-market.org/members/2953/
 * Leave me good rating and a good reputation on my resource/profile if you like it!
 * http://
 *
 * __      ___   ___ _  _ ___ _  _  ___
 * \ \    / /_\ | _ \ \| |_ _| \| |/ __|
 *  \ \/\/ / _ \|   / .` || || .` | (_ |
 *   \_/\_/_/ \_\_|_\_|\_|___|_|\_|\___|
 * =====================================
 * This resource has no restricted license,
 * you are free to do whatever you please
 * including but not limited to:
 * non-commercial and commercial reuse
 * with or without reuse
 *
 * Questions? Ask your questions in the resource thread:
 * http://
 *
 * Hint: If you don't know what something is just don't change it!
 * Usually leaving something blank will be ok
 *
 */

/*
 * Meta
 */

    $page_title = "Beast Portal"; //Title of page
    $_keywords = "beast,portal,minecraft"; //Keywords for search engines
    $_description = "Portal page for my server";
    $_owner = "John Doe"; //Your name
    $_name = "Beast Servers"; //Server/network name

/*
 * Style
 */

    $font_url = "https://fonts.googleapis.com/css?family=Roboto"; //Custom font family, available on google.com/fonts
    $font_family = "'Roboto', sans-serif"; //Font family applied

    $background = [ //This can support either or both a solid color or background image
                    'color' => 'rgba(0,255,255,1.0)',
                    'image' => 'http://wallpapercave.com/wp/rlyvfvI.jpg',
                    ];

/*
 * Announcement bar
 */
    $ANB_visible = true; //Make bar visible?
    $ANB_bgcolor = 'rgba(255,255,255,0.5)'; //Backgoround color of bar
    $ANB_text = "Icons by <a href='https://craftilldawn.com/'>CraftTillDawn</a>. Customizable announcement!"; //Bar text
    $ANB_textcolor = ''; //leave empty for default
    $ANB_textsize = 28; // IN PIXELS leave empty for default
    $ANB_marquee = true; //Make the text scroll?
    $ANB_marquee_duration = 7500; //measure in MS
    $ANB_marquee_direction = "left"; //text starting direction

/*
 * Logo
 */

    $logo_url = "https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png"; //Logo URL

/*
 * Status
 */

    $status_enabled = true; //Dynamic server status
    $status_host = "mc.hypixel.net"; //Hostname (what appears in the box)
    $status_ip = "99.198.123.180"; //IP (what IP to use when checking)
    $status_port = 25565; //Port
    $status_inputbgcolor = "rgba(255,255,255,0.75)"; //background color of the box
    $status_bordercolor = "rgba(255,255,255,1)"; //Border
    $status_buttonbgcolor = "rgba(255,255,255,0.5)"; //background color of the button (if enabled)
    $status_success_text = "Join %PCOUNT% at $status_host today!!!@#"; //variables: %PCOUNT% = player count
    $status_offline_text = "Server offline"; //Text to show if server is offline
/*
 * Fireflys
 */

    $ff_enabled = true; //Enable floaty things?
    $ff_color = "rgba(255,255,255,1.0)"; //What color
    $ff_minPixel = 1; //Minimum size
    $ff_maxPixel = 3; //Max size
    $ff_total = 100; //Total amount
    $ff_circle = true; //If you want the fireflies to be circles instead of squares
    $ff_glow = true; //If you want the fireflies to glow
    $ff_glow_color = "rgba(241, 196, 15,1.0)"; //Firefly glow color
    $ff_opacity = 0.75; //Opacity of Fireflies

/*
 * Icons, how many ever you want!
 */

    $icons = [
        [ "icon" => "img/icon1/icon.png", "hover" => "img/icon1/hover.png", "link" => "http://www.google.com", "text" => "Vote" ],
        [ "icon" => "img/icon2/icon.png", "hover" => "img/icon2/hover.png", "link" => "http://www.google.com", "text" => "Forums" ],
        [ "icon" => "img/icon3/icon.png", "hover" => "img/icon3/hover.png", "link" => "http://www.google.com", "text" => "Staff" ],
        [ "icon" => "img/icon4/icon.png", "hover" => "img/icon4/hover.png", "link" => "http://www.google.com", "text" => "Store" ],
        [ "icon" => "img/icon5/icon.png", "link" => "http://www.google.com", "text" => "Bans" ],
        [ "icon" => "img/icon4/icon.png", "hover" => "img/icon4/hover.png", "link" => "http://www.google.com", "text" => "Store" ],
        [ "icon" => "img/icon4/icon.png", "hover" => "img/icon4/hover.png", "link" => "http://www.google.com", "text" => "Store" ],
        [ "icon" => "img/icon4/icon.png", "hover" => "img/icon4/hover.png", "link" => "http://www.google.com", "text" => "Store" ],
        [ "icon" => "img/icon4/icon.png", "hover" => "img/icon4/hover.png", "link" => "http://www.google.com", "text" => "Store" ],
        [ "icon" => "img/icon4/icon.png", "hover" => "img/icon4/hover.png", "link" => "http://www.google.com", "text" => "Store" ],
        ];

    $icons_text_color = "rgba(255,255,255,1.0)";

/*
 * Animations, leave blank for no animation
 * List of animations: https://daneden.github.io/animate.css/
 * Leave animation type blank for no animation
 */
    $a_ANB_entry = ["slideInDown", 1000]; //announcement bar entry, type, duration, delay
    $a_logo_entry = ["fadeIn", 2500, "1s"]; //logo entry, type, duration, delay
    $a_logo_idle = [true, 5000]; //when logo is idle, pulse animation?, duration
    $a_status = ["fadeInDown", 5000, "1.5s"]; //status box, type, duration, delay
    $a_icons = ["fadeInUp", 1000, 2.0, 0.5]; //each icon, type, duration, starting delay, subsequent delay


?>