<meta charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.maphilight.min.js"></script>
<script>
    $(function(){
       	$('.map').maphilight({
            fade: false
        }); 
    });
</script>
<style>
    #mapaT-Comm{
        display: block; 
        background-image: url(<?php echo base_url();?>/img/mapa.png); 
        position: relative; 
        padding: 0px; 
        width: 1058px; 
        height: 900px; 
        background-position: initial initial; 
        background-repeat: initial initial;
    }
/*    #canvasT-Comm{
        width: 1058px; 
        height: 900px; 
        position: absolute; 
        left: 0px; 
        top: 0px; 
        padding: 0px; 
        border: 0px; 
    }*/
    .map maphilighted{
        opacity: 0; 
        position: absolute; 
        left: 0px; 
        top: 0px; 
        padding: 0px; 
        border: 0px;
    }
</style>
<div id="mapaT-Comm" class="map">
    <!--<canvas height="900" width="1058"></canvas>-->
    <img class="map maphilighted" src="<?php echo base_url();?>/img/mapa.png" width="1058" height="900" usemap="#t-comm">
</div>
<map name="t-comm">
    <area href="#" shape="RECT" coords="168,71,312,143" title="Manzana 10" />
    <area href="#" shape="CIRCLE" coords="132,138,37" title="This is the tooltip." />
    <area href="#" shape="POLYGON" coords="277,17,326,104,234,110" title="This is the tooltip." />
</map>