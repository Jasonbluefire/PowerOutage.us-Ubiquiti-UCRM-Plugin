<?php

echo 'This is a Test - Public<br>';
echo '<hr>';

$file = fopen("/data/ucrm/data/plugins/poweroutageus_widget_plugin/data/config.json","r");
$text = fgets($file);
$json = json_decode($text, true);

echo '<iframe src="https://poweroutage.us/api/widget/';
echo $json['POUS_Widget_Key'];
echo '?Background=090909&TextColor=1030ff&AreasClickable=true&OpenExternal=false" style="width:640px;height:420px;" frameBorder="0" seamless="seamless"></iframe>';