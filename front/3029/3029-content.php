<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartphone Repair</title>
    <link rel="stylesheet" href="./css/3029.css"> 
 
</head>
<body>

     

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Smartphone Repair</h3>
        <a href="#">Tablet & iPad Repair</a>
        <a href="#">Desktop & Mac Repair</a>
        <a href="#">Game Console Repair</a>
        <a href="#">LCD & LED TV Repair</a>
        <a href="#">MP3 & MP4 Player Repair</a>
        <div class="repair-info">
            <h4>Repair Less Than 60 Minutes!</h4>
            <a href="#" class="button">Make Appointment</a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
        <h1>Smartphone Repair</h1>
        <h2 class="section-title">Broken Glass Repair</h2>
        <p>Unlike many other repair issues that involve software malfunction, cracked glass on a mobile device is easy to diagnose. It’s also easy to inflict. Cracked cell phone screens caused by drops and falls are common. Unfortunately, the only way to fix a cracked screen is to replace it very quickly.</p>
        <p>Often, a cracked screen doesn’t affect the mobile device’s ability to function right away, and owners simply learn to look past the distraction of the cracks. However, this can be dangerous.</p>
        
        <h2 class="section-title">Repairing Broken Glass</h2>
        <p>The best way to repair your cracked screen without risking further damage to the phone is to bring it to a professional repair service. The trained technicians at Cell Phone Repair can fix your screen quickly and safely. If you walk in to a local store, common repairs can be fixed on site while you wait. If you don’t have the time to wait, or if we are a bit too far out of your way, just mail it in. We will fix your screen and mail it back to you!</p>
        
        <div class="repair-section">
            <div class="before">
                <img src="./img/v1-1.jpg.webp" alt="Before Repair">
             </div>
            <div class="after">
                <img src="./img/v1-2.jpg.webp" alt="After Repair">
             </div>
        </div>
    </div>



</body>
</html>
