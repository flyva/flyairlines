<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Live |FsRadio</title>

    <link rel="icon" href="images/LOGOFACEBOOK.png">
    <link rel="stylesheet" href="css/fsradio.css">
</head>
<body>
<div style="position:relative;">
    <div style="position:absolute;z-index:1">
        <img src="images/concorde006.jpg" id="opacity" style="border:0px; width: 520px; height: 520px; margin-top: -20px;" />
    </div>
    <div style="position:absolute;top:335px; left: 375px; width: 350px; z-index:2;font-size:200%">
        <img src="./images/LOGOFACEBOOK.png" id="opacity" style="border:0px; width: 65px; height: 80px; margin-top: 75px; margin-left: 75px;"/>
    </div>
    <div style="position:absolute;top:20px; left: 20px; z-index:2;font-size:200%">
        <img src="./images/fsradio.png" id="opacity" style="border:0px; width: 216px; height: 220px; margin-top: 80px; margin-left: 110px;"/>
    </div>
    <div style="position:absolute;top:400px; left: 105px; z-index:2;font-size:200%">
        <script type="text/javascript" src="http://corscdn.caster.fm/ffmp3/mrpp.js"></script>
        <script type="text/javascript">
            MRP.insert({
                'url':'http://stream.fsradio.fr:8000/fsradio',
                'lang':'fr',
                'codec':'mp3',
                'volume':50,
                'autoplay':true,
                'buffering':5,
                'title':'FsRadio',
                'welcome':'Bienvenu sur FsRadio',
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
                    <h3 class="panel-title" style="text-align: center; font-size: 18px"><b>Prochaines Emissions&nbsp;:</b></h3>
                </div>
                <div class="panel-body">
                    <h4 id="edito_title" style="text-align: center">VOS SUGGESTIONS contactfsradio@gmail.com</h4>
    		<span id="edito_content"><div align="center">---------</div>
<div align="center">TOUT LES DIMANCHE : 18H00 TOP 15 MONDIAL / ET LES DÉCOUVERTES DE PAPY</div>
<div align="center">TOUT LES LUNDI &amp; MERCREDI :  17H00 BBC1 GREG JAMES</div>
<div align="center">---------</div>
<div align="center">JEUDI 23 JUIN :  21H00 ROLLING STONES</div>
<div align="center">---------</div>
<div align="center">VENDREDI 24 JUIN :18h00 Red Hot Chili Peppers</div>
<div align="center">VENDREDI 24 JUIN : 21H00 CONNAISSANCE DE L'AVION</div>
<div align="center">---------</div>
<div align="center">SAMEDI 25 JUIN :  18h00 LES INTROUVABLES DE PAPY Amy Winehouse At The BBC Concert Acoustique</div>
<div align="center">SAMEDI 25 JUIN :  21h00 P.N.C. AUX PORTES COMMENT DEVENIR PERSONNEL NAVIGANT</div>
<div align="center">---------</div>
<div align="center">JEUDI 30 JUIN : 21 H00 8 TITRES DE MUSE LIVE CHEZ NAGUI TARATATA</div>
<div align="center">---------</div>
<div align="center">VENDREDI 1 JUILLET : 21H00 CONNAISSANCE DE L'AVION</div>
<div align="center">---------</div>
<div align="center">SUJETS QUE VOUS VOULEZ ABORDER AU GRAND DÉBAT DU SAMEDI ECRIVEZ NOUS</div></span>
                </div>
            </div>
        </div>
    </div>
</align>
</body>