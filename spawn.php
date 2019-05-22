<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Spawn fortnite</title>
</head>
<body>
<?php
$random_number = rand(0 , 22);
$random_mat = rand(100 , 999);
$random_weapons = rand(0 , 5);
$tab_spawns = array ('block', 'dusty_depot', 'fatal_fields', 'frosty_flight', 'happy_hamlet', 'haunted_hills', 'junk_junction',
	'lazy_lagon', 'lonely_lodge', 'loot_lake', 'lucky_landing', 'mega_mall', 'neo_tilted', 'palms_circuit', 'paradise_palm', 
	'pleasant_park', 'polar_peak', 'pressure_plant', 'salty_spring', 'shifty_shafts', 'snobby_shores', 'sunny_step', 'viking_village');
print("<h1>$tab_spawns[$random_number]</h1>");
print("<img src='images/$tab_spawns[$random_number].jpg' alt='$tab_spawns[$random_number]' /><br />");
print("<img class='inventory' src='images/wood.png' alt='nombre de matériaux'><p>$random_mat</p>");
print("<img class='inventory' src='images/gun.png' alt='nombre objets maximun'><p>$random_weapons</p>");
?>
<a href="spawn.php" alt="relancer le tirage">Un autre tirage</a>
</body>
