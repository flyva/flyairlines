<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Live |OpenSky</title>

    <link rel="icon" href="images/LOGOFACEBOOK.png">
    <link rel="stylesheet" href="css/opensky.css">
</head>
<body>
<div style="position:relative;">
    <div style="position:absolute;z-index:1">
        <img src="images/open.png" id="opacity" style="border:0px; width: 520px; height: 520px; margin-top: -20px;" />
    </div>
    <div style="position:absolute;top:335px; left: 375px; width: 350px; z-index:2;font-size:200%">
        <img src="./images/LOGOFACEBOOK.png" id="opacity" style="border:0px; width: 65px; height: 80px; margin-top: 75px; margin-left: 75px;"/>
    </div>
    <div style="position:absolute;top:20px; left: 20px; z-index:2;font-size:200%">
        <img src="./images/opensky.png" id="opacity" style="border:0px; width: 216px; height: 220px; margin-top: 80px; margin-left: 110px;"/>
    </div>
    <div style="position:absolute;top:400px; left: 105px; z-index:2;font-size:200%">
        <script type="text/javascript" src="http://corscdn.caster.fm/ffmp3/mrpp.js"></script>
        <script type="text/javascript">
            MRP.insert({
                'url':'http://listen.radionomy.com/-fr-openskyradio',
                'lang':'fr',
                'codec':'mp3',
                'volume':50,
                'autoplay':true,
                'buffering':5,
                'title':'OpenSky Radio',
                'welcome':'Bienvenu sur OpenSky Radio',
                'bgcolor':'#FFFFFF',
                'skin':'faredirfare',
                'width':269,
                'height':52
            });
        </script>
    </div>
    <align="left">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default" style="margin-bottom: 40px">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center; font-size: 18px"><b>Open Sky Radio</b></h3>
                </div>
                <div class="panel-body">
                    <div class="opensky">
                    <h4 id="edito_title" style="text-align: center">VOS SUGGESTIONS clement@openskyradio.fr</h4>
                    <a class="btn btn-primary btn-xs" href="http://www.openskyradio.fr" target="_blank" role="button">Découvrez le site de OpenSky Radio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </align>
</body>
</html>