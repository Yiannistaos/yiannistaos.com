<?php
// get age
$birthDate = "1985-10-10";
$birthDate = explode("-", $birthDate);
$month = $birthDate[1];
$day = $birthDate[2];
$year = $birthDate[0];
$age = (date("md", date("U", mktime(0, 0, 0, $month, $day, $year))) > date("md") ? ((date("Y") - $year) - 1) : (date("Y") - $year));

// Websites I've developed this year
$websites_this_year = array();
$websites_this_year[] = ["elusas.com", "https://www.elusas.com/", "new"];
$websites_this_year[] = ["keshlounge.com", "https://www.keshlounge.com/", "new"];
$websites_this_year[] = ["radioart.com", "https://www.radioart.com/", "new"];
$websites_this_year[] = ["pharmaid.gr", "http://www.pharmaid.gr/", "new"];
$websites_this_year[] = ["web357.com", "https://www.web357.com/"];
$websites_this_year[] = ["ubvia.com", "https://www.ubvia.com/"];
$websites_this_year[] = ["mamamoro.com", "https://www.mamamoro.com/"];
$websites_this_year[] = ["ktimachrysovergi.com", "https://www.ktimachrysovergi.com/"];

// Websites I've developed earlier
$websites_earlier = array();
$websites_earlier[] = ["pyrgosfireworks.com", "https://www.pyrgosfireworks.com/"];
$websites_earlier[] = ["labcy.com", "http://www.labcy.com/"];
$websites_earlier[] = ["aghatex.com", "http://www.aghatex.com/"];
$websites_earlier[] = ["stayinrhodes.com", "https://www.stayinrhodes.com/"];
$websites_earlier[] = ["everwhite.events", "http://everwhite.events/"];
$websites_earlier[] = ["agiostychonas.org.cy", "https://www.agiostychonas.org.cy/"];
$websites_earlier[] = ["sotira.org.cy", "https://www.sotira.org.cy/"];
$websites_earlier[] = ["technomartcy.com", "https://www.technomartcy.com/"];
$websites_earlier[] = ["theheart.group", "https://www.theheart.group/"];
$websites_earlier[] = ["svaestates.com", "http://www.svaestates.com/"];
$websites_earlier[] = ["topprocy.com", "http://www.topprocy.com/"];
$websites_earlier[] = ["tamamrhodes.gr", "http://www.tamamrhodes.gr/"];
$websites_earlier[] = ["kyriacoulaw.com", "http://www.kyriacoulaw.com/"];
$websites_earlier[] = ["troulos.gr", "http://www.troulos.gr/"];
$websites_earlier[] = ["dahcyprus.com", "http://www.dahcyprus.com"];
$websites_earlier[] = ["skynetaudit.com", "http://www.skynetaudit.com/"];
$websites_earlier[] = ["news12.gr", "http://www.news12.gr"];
$websites_earlier[] = ["rodionodigisi.gr", "http://www.rodionodigisi.gr"];
$websites_earlier[] = ["prismaradio.gr", "http://www.prismaradio.gr/"];
$websites_earlier[] = ["kkavazi-interiors.com", "http://www.kkavazi-interiors.com/"];
$websites_earlier[] = ["pavlinapapalouka.com", "http://www.pavlinapapalouka.com/"];
$websites_earlier[] = ["goldenbet.com", "http://www.goldenbet.com/"];
$websites_earlier[] = ["seaheartcreations.gr", "http://www.seaheartcreations.gr/"];