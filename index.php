<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="favicon.ico" />
    <title>Masayoshi Rides BWR 2013</title>
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
    <H1>Alaska Big Wild Ride 2013 (1200km brevet)</H1>
    <p><font color="red">The ride was over. Masa & Toshi finished at 8:02am on July 25th (time: 80 hour 03 min). Thanks for all the cheering!! Here's a <a href="http://www.flickr.com/photos/masayoshik/sets/72157634710181445/">link</a> to the pics and a <a href="http://alaskarandonneurs.org/2013/07/the-big-wild-ride-2013-results/">link</a> to the result.</font></p>
    <p> I'm going to ride <a href="http://alaskarandonneurs.org/big-wild-ride-1200k/">Alaska Big Wild Ride 2013</a>. This is going to be my 2nd 1200km brevet (<a href="http://masaridespbp.com/">my first 1200k was PBP 2011</a>). We'll first meet up at Anchorage and move to Valdez (by train and ferry), where the ride starts. The route goes north up to Fairbanks and then goes south to Anchorage. There are three overnight controls at Delta Junction, Healy and Talkeenta, where I plan to get some sleep (hopefully). The finish cutoff (90 hours from the start) is 17:59 on Thursday July 25th (AKDT) (or 18:59 on July 25th in PDT or 10:59am on July 26th in JST). I've just heard from the ride organizder that about 45 riders are singed up for this ride.</p>
<a href="http://alaskarandonneurs.org/big-wild-ride-1200k/"><img src="img/BWRlogo.jpg"></a>
    <H2>Route MAP and Current My Location (Where the heck is Masa right now?)</H2>
    <p>This is basically a poor man's <a href="http://www.findmespot.com/en/">SPOT</a> (I created this for PBP 2011). The map below shows the route and my current location so that you can track my progress -- or lack of :-). Plan is to update my location via iPhone at control points or whenever I have time, but the frequency of updates will not very high (about 4-5 hour interval) and I may not have a cellular coverage in some places. Also I'll take sleeps. So do not worry if my location marker (green bicycle) does not move several hours. The time when my location is updated is shown below the map (in several time zones).</p>
    <img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png">: Start (Valdez)</img> &nbsp;&nbsp;&nbsp
    <img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png">: Finish (Anchorage)</img> &nbsp;&nbsp;&nbsp
    <img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png">: Control Points</img> &nbsp;&nbsp;&nbsp; 
    <img src="./markers/redline.png" width=60 >:  Route (Valdez->Anchorage)</img> &nbsp;&nbsp;&nbsp;
    <img src="./markers/cycling.reverse.png">:  Current Location</img> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
   <form name="CountDownForm">
      <input type="text" size="45" name="CountDown" class="ctdown">
      <script language="JavaScript"><!--
       // remainingTime();
       // --></script>
    </form>

    <div id="map_canvas" style="width:960px; height:960px"></div>

     <p> The last update of my location was made at:</br>
     <?php
     include './data/mytime.php';
     echo "$atime (Alaska, AKDT), $ctime (California, PDT), $jtime (Japan, JST)).</br>";
     ?>
     </p>

    <H2>List of Control Points and Cufoff Time</H2>
     <p>
     <table border="2" cellspacing="0" cellpadding="7">
     <tr>
     <th>Control #</th>
     <th>Location</th>
     <th>Distance from the start</th>
     <th>Distance to go</th>
     <th>Cutoff Time (Alaska Timezone, PDT-1)</th>
     </tr>
     <tr>
     <td>Control 1 (Start)</td>
     <td>Valdez</td>
     <td>0km</td>
     <td>1211.8km</td>
     <td>Starts at July 21, 23:59 (Alaska Time)</td>
     </tr>
     <tr>
     <td>Control 2</td>
     <td>Tsaina Lodge</td>
     <td>62.5km</td>
     <td>1149.3km</td>
     <td>July 22, 4:11am</td>
     </tr>
     <tr>
     <td>Control 3</td>
     <td>Tonsina River Lodge</td>
     <td>133.3km</td>
     <td>1078.5km</td>
     <td>July 22, 8:51am</td>
     </tr>
     <tr>
     <td>Control 4</td>
     <td>Glennallen - The Hub of Alaska</td>
     <td>191.1km</td>
     <td>1020.7km</td>
     <td>July 22, 12:43</td>
     </tr>
     <tr>
     <td>Control 5</td>
     <td>Sourdough Roadhouse</td>
     <td>243.8km</td>
     <td>968km</td>
     <td>July 22, 16:15</td>
     </tr>
     <tr>
     <td>Control 6</td>
     <td>Paxon Lodge</td>
     <td>304.6km</td>
     <td>907.2km</td>
     <td>July 22, 20:19</td>
     </tr>
     <tr>
     <td>Control 7</td>
     <td>Lodge at Black Rapids</td>
     <td>372.1km</td>
     <td>839.7km</td>
     <td>July 23, 0:47am</td>
     </tr>
     <tr>
     <td>Control 8 (Overnight)</td>
     <td>Delta Junction - Delta Junction Highschool</td>
     <td>434.2m</td>
     <td>777.6km</td>
     <td>July 23, 04:55am</td>
     </tr>
     <tr>
     <td>Control 9</td>
     <td>Midway Lodge</td>
     <td>511.5km</td>
     <td>700.3km</td>
     <td>July 23, 10:07am</td>
     </tr>
     <tr>
     <td>Control 10</td>
     <td>Fairbanks - SAFEWAY</td>
     <td>592.5km</td>
     <td>619.3km</td>
     <td>July 23, 15:31</td>
     </tr>
     <tr>
     <td>Control 11</td>
     <td>Nenana - Chevron</td>
     <td>675.4km</td>
     <td>536.4km</td>
     <td>July 23, 22:33</td>
     </tr>
     <tr>
     <td>Control 12 (Overnight)</td>
     <td>Healy - Morning Start Baptist Church</td>
     <td>765.1km</td>
     <td>446.7km</td>
     <td>July 24, 06:25am</td>
     </tr>
     <tr>
     <td>Control 13</td>
     <td>Cantwell - Broad Pass Cafe</td>
     <td>826.9km</td>
     <td>384.9km</td>
     <td>July 24, 11:51am</td>
     </tr>
     <tr>
     <td>Control 14</td>
     <td>Hurricane Gulch Bridge</td>
     <td>885.3km</td>
     <td>384.9km</td>
     <td>July 24, 16:55</td>
     </tr>
     <tr>
     <td>Control 15</td>
     <td>Mary's McKinley View Lodge</td>
     <td>948.3km</td>
     <td>326.5km</td>
     <td>July 24, 22:26</td>
     </tr>
     <tr>
     <td>Control 16 (Overnight)</td>
     <td>Talkeenta - Swiss-Alaska Inn</td>
     <td>1030.2km</td>
     <td>181.6km</td>
     <td>July 25, 5:14am</td>
     </tr>
     <td>Control 17</td>
     <td>Wasilla - Walmart</td>
     <td>1148.3km</td>
     <td>63.5km</td>
     <td>July 25, 14:05</td>
     </tr>
     <td>Control 18 (Finish)</td>
     <td>Anchorage - Comfort Inn Ship Creek</td>
     <td>1211.8km</td>
     <td>0km</td>
     <td>July 25, 17:59</td>
     </tr>
     </table> 
</p> 

<H2>My Bike for Alaska BWR 2013</H2>
<a href="http://www.flickr.com/photos/masayoshik/9316549686/" title="DSC_0552.jpg by masayoshi.k, on Flickr"><img src="http://farm3.staticflickr.com/2868/9316549686_2def319c59_z.jpg" width="640" height="425" alt="DSC_0552.jpg"></a>
<H2>Brevet Card</H2>
<a href="http://www.flickr.com/photos/masayoshik/9326570074/" title="BWR2013 Brevet Card by masayoshi.k, on Flickr"><img src="http://farm4.staticflickr.com/3833/9326570074_2511f9c966_z.jpg" width="640" height="480" alt="BWR2013 Brevet Card"></a>
<a href="http://www.flickr.com/photos/masayoshik/9326563868/" title="BWR2013 Brevet Card by masayoshi.k, on Flickr"><img src="http://farm3.staticflickr.com/2881/9326563868_519dff726e_z.jpg" width="640" height="480" alt="BWR2013 Brevet Card"></a>
<H2>Meet and Greet at Speedway Cycles in Anchorage</H2>
<a href="http://www.flickr.com/photos/masayoshik/9323762413/" title="Q: How many SFR riders are there? by masayoshi.k, on Flickr"><img src="http://farm6.staticflickr.com/5479/9323762413_83bc624b18_z.jpg" width="640" height="480" alt="Q: How many SFR riders are there?"></a>
<a href="http://www.flickr.com/photos/masayoshik/9323992517/" title="Group pic (lots of SFR riders!) by masayoshi.k, on Flickr"><img src="http://farm6.staticflickr.com/5542/9323992517_1c499c97f9_z.jpg" width="640" height="480" alt="Group pic (lots of SFR riders!)"></a>


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
