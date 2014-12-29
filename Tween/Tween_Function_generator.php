<?php

    // $moving_box_num;     number of the moving DIV ,移动滑块编号

    // $move_way;           moving way,   移动方式

    // $moving_speed;       moving speed, 移动速度

    // $type;               moving type,  移动类型

    function Tween_generator($moving_box_num,$move_way,$moving_speed,$type){  //initialed class input ,sequence is number,way,speed,type. 初始化类输入，顺序是编号，移动方式，移动速度和移动类型。


        /*the code below generate a js function.Function name is made up by our class initial input,it's like  Tween_[way]_[type]_[number].
        such as Tween_Quard_1.This function requiring 6 input.The 4 Front is the argument of Tween algorithm,they are t:start time; b:begin location;:c change distance;
        d: duration time.the front 4 inputs are all numbers.fifth input is element of the moving div,last input is moving directions,
        including left,right,top，it's string.
        以下代码生成JS函数，名称是根据初始化输入决定，如同这样： Tween_[way]_[type]_[number]。生成的函数需要6个输入，前4个是tween算法的必要输入，分别
        是 t 初始时间； b 初始位置；c 移动距离；d 移动持续时长。这4个输入是数字。第五个输入是DIV块元素。第六个是移动方向，包括 left，right，top，是string类型。*/
        echo "<script>\n";
        echo "function TweenX_"."$move_way"."_".$type."_"."$moving_box_num"."(){\n" ;
        echo "div_obj_"."$move_way"."_".$type."_"."$moving_box_num".".css(str_"."$move_way"."_".$type."_"."$moving_box_num".",Math.ceil(Tween.".$move_way.".".$type."(tween_t_"."$move_way"."_".$type."_"."$moving_box_num".",tween_b_"."$move_way"."_".$type."_"."$moving_box_num".",tween_c_"."$move_way"."_".$type."_"."$moving_box_num".",tween_d_"."$move_way"."_".$type."_"."$moving_box_num"."))+'px');\n";
        echo "if(tween_t_"."$move_way"."_".$type."_"."$moving_box_num"."!=tween_d_"."$move_way"."_".$type."_"."$moving_box_num"."){\n";
        echo "tween_t_"."$move_way"."_".$type."_"."$moving_box_num"."++;\n";
        echo "setTimeout('TweenX_"."$move_way"."_".$type."_"."$moving_box_num"."()',".$moving_speed.")\n";
        echo "}} \n";
        echo "function Tween_"."$move_way"."_".$type."_"."$moving_box_num"."(t1,b1,c1,d1,div_obj,str){\n";
        echo "tween_t_"."$move_way"."_".$type."_"."$moving_box_num"."=t1;\n";
        echo "tween_b_"."$move_way"."_".$type."_"."$moving_box_num"."=b1;\n";
        echo "tween_c_"."$move_way"."_".$type."_"."$moving_box_num"."=c1;\n";
        echo "tween_d_"."$move_way"."_".$type."_"."$moving_box_num"."=d1;\n";
        echo "div_obj_"."$move_way"."_".$type."_"."$moving_box_num"."=div_obj;\n";
        echo "str_"."$move_way"."_".$type."_"."$moving_box_num"."=str;\n";
        echo "TweenX_"."$move_way"."_".$type."_"."$moving_box_num"."();}\n";
        echo "</script>\n";
    }
?>
