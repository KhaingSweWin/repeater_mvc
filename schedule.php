<?php
include_once("controller/schedule_controller.php");
$schedule_control=new ScheduleController();
$schedule_control->createSchedule($_POST["day"],$_POST["start_time"],$_POST["end_time"]);


?>