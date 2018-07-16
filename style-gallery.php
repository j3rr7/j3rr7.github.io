<style>
    body {
        background: #5a86a8;

        }
    @import url(http://fonts.googleapis.com/css?family=Raleway);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
  width: auto;
  font-family: Raleway, sans-serif;
  line-height: 1;
}
#cssmenu > ul {
  background: #282828;
}
#cssmenu > ul > li {
  float: left;
  -webkit-perspective: 1000px;
  -moz-perspective: 1000px;
  perspective: 1000px;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 16px 20px;
  font-size: 14px;
  color: #ffffff;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
  background: #282828;
  -webkit-transition: all .3s;
  -moz-transition: all .3s;
  -o-transition: all .3s;
  transition: all .3s;
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
#cssmenu > ul > li.active > a {
  color: #6441A5;
}
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #6441A5;
  -webkit-transform: rotateX(90deg) translateY(-23px);
  -moz-transform: rotateX(90deg) translateY(-23px);
  transform: rotateX(90deg) translateY(-23px);
  -ms-transform: none;
}
#cssmenu > ul > li > a::before {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: -1;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  padding: 16px 20px;
  color: #dff2fa;
  background: #19799f;
  content: attr(data-title);
  -webkit-transition: background 0.3s;
  -moz-transition: background 0.3s;
  transition: background 0.3s;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-transform-origin: 50% 0;
  -moz-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -ms-transform: translateY(- -18px);
}
#cssmenu > ul > li:hover > a::before,
#cssmenu > ul > li > a:hover::before {
  background: #3db2e1;
}
#cssmenu.small-screen {
  width: 100%;
}
#cssmenu.small-screen > ul,
#cssmenu.small-screen.align-center > ul {
  width: 100%;
  text-align: left;
}
#cssmenu.small-screen > ul > li,
#cssmenu.small-screen.align-center {
  float: none;
  display: block;
  border-top: 1px solid rgba(100, 100, 100, 0.1);
}
#cssmenu.small-screen > ul > li:hover > a,
#cssmenu.small-screen > ul > li > a:hover {
  color: #dff2fa;
  -webkit-transform: none;
  -moz-transform: none;
  transform: none;
  -ms-transform: none;
}
#cssmenu.small-screen > ul > li > a::before {
  display: none;
}
#cssmenu.small-screen #menu-button {
  display: block;
  padding: 16px 20px;
  cursor: pointer;
  font-size: 14px;
  text-decoration: none;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 1px;
  background: #3db2e1;
}
#cssmenu.small-screen #menu-button:after {
  content: "";
  position: absolute;
  right: 20px;
  top: 17px;
  display: block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border-top: 2px solid #ffffff;
  border-bottom: 2px solid #ffffff;
  width: 22px;
  height: 3px;
}
#cssmenu.small-screen #menu-button.menu-opened:after {
  border-top: 2px solid #dff2fa;
  border-bottom: 2px solid #dff2fa;
}
#cssmenu.small-screen #menu-button:before {
  content: "";
  position: absolute;
  right: 20px;
  top: 27px;
  display: block;
  width: 22px;
  height: 2px;
  background: #ffffff;
}
#cssmenu.small-screen #menu-button.menu-opened:before {
  background: #dff2fa;
}


    #content-user-online {
        margin-left: 8%;
        width: 65%;
        height: 100%;
        line-spacing:1%;
        float:left;
        display: inline;
    }
    #content-user-offline {
        width: 100%;
        height: 100%;
        line-spacing:1%;
        float:center;
    }
    .avatar {
        margin-top: 1em;
        width:12.5em;
        height:12.5em;
        border-radius:150px;
        -webkit-border-radius:150px;
        -moz-border-radius:150px;
            <?php
                $json_url2 = "https://api.twitch.tv/kraken/channels/".$user;
                $json2 = json_decode(file_get_contents($json_url2));
                echo 'background: url('.$json2->logo .') no-repeat;';
            ?>
            box-shadow: 0 0 8px rgba(0, 0, 0, .8);
            -webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
            -moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
            background-size: cover;
        }
    #user {
        color: #000;
        font-family: 'Play', sans-serif;
        font-weight:900;
        font-size:3em;
        font-decoration:none;
    }
    #offline {
        font-family: 'Play', sans-serif;
        font-weight:400;
        font-size:2em;
        line-spacing:0%;
    }
    #offlinebold {
        color: #8b0000;
        font-family: 'Play', sans-serif;
        font-weight:900;
        font-size:2em;
        line-spacing:0%;
    }
    #online {
        color: green;
        font-family: 'Play', sans-serif;
        font-weight:400;
        font-size:2em;
        line-spacing:0%;
    }
    #onlinebold {
        color: #013220;
        font-family: 'Play', sans-serif;
        font-weight:900;
        font-size:2em;
        line-spacing:0%;
    }
    #info {
        color: #000;
        font-family: 'Play', sans-serif;
        font-weight:900;
        font-size:1em;
        font-decoration:none;
        vertical-align: center;
    }
    a {
        color: black;
        text-decoration:none;
        margin: 0.5em;
    }
    a:link {
        color: black;
        text-decoration:none;
    }   
    a:visited {
        color: black;
        text-decoration:none;
    }   
    a:hover {
        color: black;
        text-decoration:none;
    }    
    a:active {
        color: black;
        text-decoration:none;
    }    
    #content-user-chat {
        width:340px;
        margin-top:1em;
        float:right;
        display:inline;
    }
</style>