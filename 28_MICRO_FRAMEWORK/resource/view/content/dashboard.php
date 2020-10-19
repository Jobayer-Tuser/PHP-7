<?php
# CALLING CONTROLLER
include("app/Http/Controllers/Controller.php");
include("app/Http/Controllers/DashboardController.php");

# CALLING MODEL / QUERY BUILDER
include("app/Models/Eloquent.php");

$dashboard = new DashboardController;
$eloquent = new Eloquent;

?>
