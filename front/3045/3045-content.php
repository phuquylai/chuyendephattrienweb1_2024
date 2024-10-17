<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="about-team">
    <h2>About Our Team</h2>
    <p>We are a group of dedicated professionals with expertise in different areas.</p>
    
    <div class="team-grid">
        <div class="team-member">
            <img src="./img/team-0.jpg" alt="Sam Winchester">
            <h3>Sam Winchester</h3>
            <h4>Consultant</h4>
            <p>Sam is a skilled consultant with a passion for helping others.</p>
        </div>
        <div class="team-member">
            <img src="./img/team-1.jpg" alt="Tony Wrapper">
            <h3>Tony Wrapper</h3>
            <h4>Phone Master</h4>
            <p>Tony specializes in phone repairs and customer service.</p>
        </div>
        <div class="team-member">
            <img src="./img/team-2.jpg" alt="Dean Hathaway">
            <h3>Dean Hathaway</h3>
            <h4>Tablet Master</h4>
            <p>Dean is an expert in tablet repairs and always strives for excellence.</p>
        </div>
    </div>
</div>
