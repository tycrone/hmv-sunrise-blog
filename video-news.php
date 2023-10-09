<script>
let currentPage = "pageThree";
</script>

<?php
session_start();
$_SESSION['url'] = 'https://www.hmv.com/video/news-list/';

include('guts/header.php');
?>

<div id="blogRow" class="blog-row-1">
    <div class="loader-text">
        <h2>Loading Content</h2>
    </div>
    <div class="loader"></div>
</div>

<?php
include('guts/footer.php');
?>