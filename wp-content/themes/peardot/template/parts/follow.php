<?php
$style = 'style="border-radius: 100%"';

$twitter = '<img src="//via.placeholder.com/500x500" class="social-icon" alt="twitter-img" ' . $style . '>';
$linkedin = '<img src="//via.placeholder.com/500x500" class="social-icon" alt="linkedin-img" ' . $style . '>';
$youtube = '<img src="//via.placeholder.com/500x500" class="social-icon" alt="blog-img" ' . $style . '>';

?>

<div class="jumbotron follow-tron" style="margin: 0;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4 center-title" style="font-weight: bold;">Volg ons</h1>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 follow-column">
                <a><?= $twitter ?></a>
                <a><?= $linkedin ?></a>
                <a><?= $youtube ?></a>
            </div>
            <div class="col-md-4 offset-md-4 follow-column">

                <h3 class="subtitle">Nieuwsbrief</h3>
                <button type="button" class="btn btn-secondary follow-btn">AANMELDEN</button>

            </div>
        </div>
    </div>
</div>
</div>