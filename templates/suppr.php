<?php
    $intervention = $_GET['intervention_id'];
    $connectBDD = mysqli_connect("localhost", "root", "", "garage");
    $request= "Delete from intervention where intervention_id = $intervention";
    header("refresh:3; url=vuet_intervention.php");