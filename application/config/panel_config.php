<?php

$config['scope']="panel";
$config['ViewPath']=$config['scope']."views/";
$config['TemplatePath']=$config['scope']."templates/";
$config['TemplateName']="metis";
$config["MeasnsURL"]="means".$config['scope'];
$config["ScriptsURL"]=$config['MeansURL']."scripts/";
$config["TemplatesMeansURL"]=$config['MeansURL']."templates/";
$config["TemplateMeansURL"]=$config['TemplatesMeansURL'].$config['TemplateName']."/";
$config["TemplateMeansCSS"]=$config['TemplateMeansURL']."style/";
$config["TemplateMeansJS"]=$config['TemplateMeansURL']."scripts/";
$config["TemplateMeansImages"]=$config['TemplateMeansURL']."img/";
$config["TemplateMeansFonts"]=$config['TemplateMeansURL']."fonts/";


?>