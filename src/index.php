<?php

# Display title
$sTitle = 'Capacitación GIT';
echo '<h3>' . $sTitle . '</h3>';


# Display enviroment
$sEnvProd = getenv('PRODUCTION');
$sEnv = empty($sEnvProd) ? 'dev' : 'prod';
echo '<p>env ' . $sEnv . ' ' . rand() . '</p>';


# Some code
echo 'Hello Giffits 2018 © All rights reserved.';
