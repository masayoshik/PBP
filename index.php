<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Masayoshi Rides PBP 2011</title>
    <script type="text/javascript"
      src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="./data/myloc.js" type="text/javascript"></script>
    <script src="./js/checkpoint.js" type="text/javascript"></script>
    <script src="./js/map.js" type="text/javascript"></script>
    <script src="./js/countdown.js" type="text/javascript"></script>
  </head>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25174763-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

  <!-- changing style for countdown form -->
  <style type="text/css">  
   input.ctdown {
      font-size: 120%;
      color: #ff0000;
      border: 0px #000000;
   }
   </style>

  <body onload="initialize()">

    <p>
    <H1>Masayoshi's challenge to Paris-Brest-Paris 1200km Randonée</H1>
    <font size="+1"><i>"Only those who will risk going too far can possibly find out how far one can go."</i> -- T. S. Eliot</font>

    <p>I'll be riding <a href="http://www.paris-brest-paris.org/pbp2011/index2.php?lang=en&cat=accueil&page=edito" target="blank">2011 Paris-Brest-Paris (PBP) 1200km randonée</a> starting from Paris at Aug 21th evening. This page is for tracking my progress in PBP.</p> 
    <H2>A little about PBP</H2>
    <p>PBP is the oldest bicycle stage race started from 1891 (older than Tour de France). Since 1956, it's been held as an amateur ultra long-distance bicycle ride (called <a href="http://en.wikipedia.org/wiki/Randonneuring" target=blank>randonneuring</a>, randonée or brevet)  in every four years (the previous one happened in 2007). This year 5,225 riders from all over the world have registered (438 from USA including me). I've never done PBP or any brevet longer than 600km. I've never ridden in France or Europe. So this is going to be the most exciting/challenging bicycle ride I've ever ridden!</p> 
    <p>The route starts from Paris (more accurately from "Saint-Quentin-en-Yvelines" in the suburb of Paris) and goes west about 600km until Brest, a port town facing the Atlantic Ocean, then it makes an u-turn and comes back to the starting point. I'll be riding in 90-hour limit group, which means I need to finish within 90 hours after start. 90 hours include the time for rests, eating, sleeps, taking photos :), fixing flats/mechanicals -- everything. I plan to take 2-3 hour sleep 2-3 times. In addition, I need to collect <i>stamps</i> on my <a href="http://2.bp.blogspot.com/_1PzCxPZsUCI/R7PXrwVhjUI/AAAAAAAAACE/koVKmLXR5Qs/s1600-h/BC3.JPG" target="blank">brevet card</a> (to prove my passage) at 13 control points within the specified time window (If I fail to check in at control points before their closing time, I'll be disqualified).</p> 

    <H2>Route MAP and Current My Location (Where is Masa right now?)</H2>
    <p>This is actually the only interesting content in this page. The map below shows the route and my current location so that you can track my progress. Plan is to upload the GPS coordinates of my location via iPhone at control points or whenever I have time. The frequency of the update is not very high (about 4-5 hour interval). Also I'll take sleeps. So no need to worry if my location marker (green bicycle) does not move several hours. The time when my location is updated is shown below the map (in several time zones).</p>

     <form>
      You can also track my progress with my frame number <font color="red">4526</font> at the PBP official page: 
     <input type="button" onClick="window.open('http://www.paris-brest-paris.org/pbp2011/index2.php?lang=en&cat=randonnee&page=suivi_participants')" value="Open Rider Tracking Page">
     </form>


    <img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png">: Start/Finish</img> &nbsp;&nbsp;&nbsp
    <img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png">: Control Points</img> &nbsp;&nbsp;&nbsp; 
    <img src="./markers/redline.png" width=60 >:  Outbound Route (Paris->Brest)</img> &nbsp;&nbsp;&nbsp;
    <img src="./markers/blueline.png" width=60 >:  Inbound Route (Brest->Paris)</img> </br>
    <img src="./markers/cycling.reverse.png">:  Current Location (Outbound)</img> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
    <img src="http://maps.google.com/mapfiles/ms/icons/cycling.png">:  Current Location (Inbound)</img> </br>
    <form name="CountDownForm">
      <input type="text" size="45" name="CountDown" class="ctdown">
      <script language="JavaScript"><!--
//        remainingTime();
       // --></script>
    </form>

    <div id="map_canvas" style="width:960px; height:400px"></div>

     <p> The last update of my location was made at:</br>
     <?php
     include './data/mytime.php';
     echo "$ptime (France local time, CEST), $ctime (California, PDT), $jtime (Japan, JST)).</br>";
     ?>
     </p>

    <H2>List of Control Points and Closing Time</H2>
     <p>The start takes couple of hours (there are 1000s of riders) and the control closing time is adjusted to the actual start time.</p>
     <p>
     <table border="2" cellspacing="0" cellpadding="7">
     <tr>
     <th>Control #</th>
     <th>Location</th>
     <th>Distance from the start</th>
     <th>Distance to go</th>
     <th>Closing Time</th>
     </tr>
     <tr>
     <td>Start</td>
     <td>Saint-Quentin-en-Yvelines</td>
     <td>0km</td>
     <td>1230km</td>
     <td>Starts at Aug 21, 18:00</td>
     </tr>
     <tr>
     <td>Food Stop</td>
     <td>Mortagne-au-Perchee</td>
     <td>140km</td>
     <td>1090km</td>
     <td>Aug 22, 3:20am</td>
     </tr>
     <tr>
     <td>Control 1</td>
     <td>Villaines-la-Juhel</td>
     <td>222km</td>
     <td>1008km</td>
     <td>Aug 22, 8:44am</td>
     </tr>
     <tr>
     <td>Control 2</td>
     <td>Fougères</td>
     <td>310km</td>
     <td>920km</td>
     <td>Aug 22, 14:40</td>
     </tr>
     <tr>
     <td>Control 3</td>
     <td>Tinténiac</td>
     <td>364km</td>
     <td>866km</td>
     <td>Aug 22, 18:38</td>
     </tr>
     <tr>
     <td>Control 4</td>
     <td>Loudéac</td>
     <td>449km</td>
     <td>781km</td>
     <td>Aug 23, 1:08am</td>
     </tr>
     <tr>
     <td>Control 5</td>
     <td>Carhaix</td>
     <td>525km</td>
     <td>705km</td>
     <td>Aug 23, 6:59am</td>
     </tr>
     <tr>
     <td>Control 6 (U-turn)</td>
     <td>Brest</td>
     <td>618km</td>
     <td>612km</td>
     <td>Aug 23, 13:19</td>
     </tr>
     <tr>
     <td>Control 7</td>
     <td>Carhaix</td>
     <td>703km</td>
     <td>527km</td>
     <td>Aug 23, 19:51</td>
     </tr>
     <tr>
     <td>Control 8</td>
     <td>Loudéac</td>
     <td>782km</td>
     <td>448km</td>
     <td>Aug 24, 1:56am</td>
     </tr>
     <tr>
     <td>Control 9</td>
     <td>Tinténiac</td>
     <td>867km</td>
     <td>363km</td>
     <td>Aug 24, 8:47am</td>
     </tr>
     <tr>
     <td>Control 10</td>
     <td>Fougères</td>
     <td>921km</td>
     <td>309km</td>
     <td>Aug 24, 13:04</td>
     </tr>
     <tr>
     <td>Control 11</td>
     <td>Villaines-la-Juhel</td>
     <td>1009km</td>
     <td>221km</td>
     <td>Aug 24, 20:12</td>
     </tr>
     <tr>
     <td>Control 12</td>
     <td>Mortagne-au-Perchee</td>
     <td>1090km</td>
     <td>140km</td>
     <td>Aug 25, 1:56am</td>
     </tr>
     <tr>
     <td>Control 13</td>
     <td>Dreux</td>
     <td>1165km</td>
     <td>65km</td>
     <td>Aug 25, 7:12am</td>
     </tr>
     <tr>
     <td>Finish</td>
     <td>Saint-Quentin-en-Yvelines</td>
     <td>1230km</td>
     <td>0km</td>
     <td>Aug 25, 12:00 noon</td>
     </tr>
     </table> 
</p> 

<H2>My Bike</H2>
I'm going to ride this bike in PBP. The bike itself weighs ~9kg, but with all PBP loads, it weighs > 16kg even without filling water bottles!

<a href="http://www.flickr.com/photos/masayoshik/6051025893/" title="IMG_1666.jpg by masayoshi.k, on Flickr"><img src="http://farm7.static.flickr.com/6076/6051025893_f60e287b92.jpg" width="500" height="375" alt="IMG_1666.jpg"></a>

<a href="http://www.flickr.com/photos/masayoshik/6051027045/" title="IMG_1669.jpg by masayoshi.k, on Flickr"><img src="http://farm7.static.flickr.com/6062/6051027045_f63c33fbf4.jpg" width="500" height="375" alt="IMG_1669.jpg"></a>

Contact:
<script type="text/javascript">
<!--
function convertMoji2_shtml(t){
var s="",moji="";
for(var i=0;i<t.length;i++){
moji=t.charCodeAt(i);
s +=String.fromCharCode(moji+1);
}
return s;
}
var em_shtml=convertMoji2_shtml(String.fromCharCode(108,96,114,96,120,110,114,103,104,45,106)+String.fromCharCode(63,102,108,96,104,107,45,98,110,108));
document.write("<a href=\"mai"+"lto:"+em_shtml+"\">"+em_shtml+"</a>");
// -->
</script>
</p> 
  </body>
</html>
