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
$websites_this_year[] = ["web357.com", "https://www.web357.com/"];
$websites_this_year[] = ["mamamoro.com", "https://www.mamamoro.com/"];
$websites_this_year[] = ["ktimachrysovergi.com", "https://www.ktimachrysovergi.com/"];
$websites_this_year[] = ["pyrgosfireworks.com", "https://www.pyrgosfireworks.com/"];
$websites_this_year[] = ["labcy.com", "http://www.labcy.com/"];
$websites_this_year[] = ["aghatex.com", "http://www.aghatex.com/"];
$websites_this_year[] = ["stayinrhodes.com", "https://www.stayinrhodes.com/"];
$websites_this_year[] = ["everwhite.events", "http://everwhite.events/"];
$websites_this_year[] = ["agiostychonas.org.cy", "https://www.agiostychonas.org.cy/"];
$websites_this_year[] = ["sotira.org.cy", "https://www.sotira.org.cy/"];
$websites_this_year[] = ["technomartcy.com", "https://www.technomartcy.com/"];
$websites_this_year[] = ["theheart.group", "https://www.theheart.group/"];
$websites_this_year[] = ["svaestates.com", "http://www.svaestates.com/"];

// Websites I've developed earlier
$websites_earlier = array();
$websites_earlier[] = ["topsitescy.com", "http://www.topsitescy.com/"];
$websites_earlier[] = ["topprocy.com", "http://www.topprocy.com/"];
$websites_earlier[] = ["tamamrhodes.gr", "http://www.tamamrhodes.gr/"];
$websites_earlier[] = ["pharmaid.gr", "http://www.pharmaid.gr/"];
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