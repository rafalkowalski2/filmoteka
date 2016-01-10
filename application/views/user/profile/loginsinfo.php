<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <?php require_once('menu.php'); ?>
            <div class="col-md-12 white-content border-left border-bottom">
                <p>Informacja o logowanich </p>
                <p>IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
                <p>USER_AGENT: <?php echo explode('(', explode(')',$_SERVER['HTTP_USER_AGENT'])[0])[1];?></p>
                <p><?php print_r( Request::user_agent(array('browser', 'version'))); ?></p>
                <p></p>
<?php print_r($_SERVER); ?>
            </div>
        </div>
    </div>
</div>
