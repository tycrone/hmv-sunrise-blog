<script>
let currentPage = "pageThree";
</script>

<?php
session_start();
$_SESSION['url'] = 'https://www.hmv.com/video/new-trailers/';

include('guts/header.php');
?>

<div id="blogRow" class="blog-row-trailers">
    <div class="loader-text">
        <h2>Loading Content</h2>
    </div>
    <div class="loader"></div>
</div>

<?php
include('guts/footer.php');
?>