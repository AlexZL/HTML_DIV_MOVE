<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Demo</title>
    <script src="jquery-1.11.1.min.js"></script>
    <script src="Tween.js"></script>
</head>
    <?php
    require("Tween_Function_generator.php");
    Tween_generator("1","Bounce","10","easeOut");
    Tween_generator("1","Elastic","10","easeOut");
    Tween_generator("3","Quad","10","easeInOut");
    Tween_generator("2","Bounce","10","easeOut");
    Tween_generator("3","Bounce","10","easeOut");
    Tween_generator("4","Bounce","10","easeOut");
    Tween_generator("5","Bounce","10","easeOut");
    Tween_generator("6","Bounce","10","easeOut");
    Tween_generator("7","Bounce","10","easeOut");

    ?>
<script>
    function f_auto_move(){
        setTimeout(function(){setInterval("Tween_Bounce_easeOut_4(0,0,800,400,$('#Demo4'),'left')",6000);},100);
        setTimeout(function(){setInterval("Tween_Bounce_easeOut_5(0,0,800,400,$('#Demo5'),'left')",6000);},200);
        setTimeout(function(){setInterval("Tween_Bounce_easeOut_6(0,0,800,400,$('#Demo6'),'left')",6000);},300);
        setTimeout(function(){setInterval("Tween_Bounce_easeOut_7(0,0,800,400,$('#Demo7'),'left')",6000);},400);
    }
</script>
<body>
<div>
    <div>click the blocks</div>
    <div id='Demo1' style="height: 30px;width: 30px;top: 50px;background-color: red;position: absolute;border-radius: 15px" onclick="Tween_Bounce_easeOut_1(0,0,800,400,$('#Demo1'),'left')"></div>
    <div id="Demo2" style="height: 30px;width: 30px;top: 100px;background-color: blue;position: absolute" onclick="Tween_Elastic_easeOut_1(0,0,800,100,$('#Demo2'),'left')"></div>
    <div id="Demo3" style="height: 30px;width: 30px;top: 150px;background-color: green;position: absolute" onclick="Tween_Quad_easeInOut_3(0,0,800,300,$('#Demo3'),'left')"></div>
    <div style="position: absolute; top: 200px">auto moving and cycling (click START and wait 6 second)</div>
    <input type="button" style="position: absolute;top: 220px" value="START" onclick="f_auto_move()">
    <div id="Demo4" style="height: 30px;width: 30px;top:250px;background-color: #baec7e;position: absolute"></div>
    <div id="Demo5" style="height: 30px;width: 30px;top:300px;background-color: #84a3ec;position: absolute"></div>
    <div id="Demo6" style="height: 30px;width: 30px;top:350px;background-color: #ecbd7e;position: absolute"></div>
    <div id="Demo7" style="height: 30px;width: 30px;top:400px;background-color: #ec91b2;position: absolute"></div>
</div>
</body>
</html>