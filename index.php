<?php include 'language.php'; ?>

<?php $page = 'welcome'; ?>
<?php $page_title = $_SESSION['welcome']; ?>
<?php include 'header.php'; ?>

<div class="main-container">         
    <div class="main wrapper clearfix">
        <div class="player-container">
            <button id="player-trigger" title="Play introduction video"></button>
        </div>
    </div> <!-- #main -->
</div> <!-- #main-container -->
<?php include 'components.php'; ?>
<?php include 'footer.php'; ?>