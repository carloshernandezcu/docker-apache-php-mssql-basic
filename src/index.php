<?php

# Display title
$sTitle = "Capacitación GIT";
echo "<h3>" . $sTitle . "</h3>";

# Display enviroment
$sEnvProd = getenv("APP_ENV");
$sEnv = $sEnvProd === "prod" ? "Production" : "Development";
echo "<p>Environment: " . $sEnv . " " . rand() . "</p>";

# Test MSSQL Connection
$sServerName = ""; // Set servername or ip here
$aConnectionInfo = array(
	"Database" => "", // Set db name here
	"UID" => "", // Set user here, example "sa"
	"PWD" => ""); // Set password here
$oConnection = sqlsrv_connect($sServerName, $aConnectionInfo);

if ($oConnection)
{
	echo "<p style='color:green'>OK! Connection established.</p>";
}
else
{
	echo "<p style='color:red'>Error! Connection could not be established.</p>";
	die(print_r(sqlsrv_errors(), true));
}

# Some code
echo "<p>Hello Company 2018 © All rights reserved.</p>";
