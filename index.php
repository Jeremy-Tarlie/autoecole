<?php
include_once './components/navigator/header.php';
echo '<main>';

include_once './components/content/introduction.php';
include_once './components/content/detail.php';
include_once './components/content/description.php';
include_once './components/content/statistic.php';

echo '<div class="auto-layout">';
include_once './components/content/service.php';
include_once './components/content/localisation.php';
include_once './components/content/vehicle.php';
include_once './components/content/rate.php';
include_once './components/content/document.php';
include_once './components/content/link.php';
echo '</div>';

include_once './components/content/contact.php';
echo '</main>';

include_once './components/navigator/footer.php';
?>