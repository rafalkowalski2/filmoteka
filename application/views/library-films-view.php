<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="film-view-header inline-headers">
                    <h3><?php echo __('FILM: '); ?><a href="http://www.filmweb.pl<?php echo $film['f_filmweb']; ?>" target="_blank"><strong><span class="film-title"><?php echo $film['f_name']; ?></span></strong></a></h3>
                    &nbsp;
                    <span class="film-action">
                        <a href="<?php echo URL::site(Request::current()->param('language') . '/films/edit/') . '/' . $film['f_id']; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;<?php echo __('Edit'); ?></a>
                    </span>
                </div>
                <?php
                echo View::factory('feedback-template')->bind('error', $error)
                        ->bind('error_message', $error_message)
                        ->bind('success', $success)
                        ->bind('success_message', $success_message);
                ?>
            </div>
            <div class="row">
                <div class="col-sm-3 text-center">
                    <?php
                    if (!empty($film['f_poster_hash'])) {
                        ?>
                        <img src="<?php echo URL::site('/upload/poster/') . '/' .$film['f_poster_hash'].'.jpg'; ?>" class="img-thumbnail" alt="Film title" />
                        <?php
                    } else if (!empty($film['f_poster'])) {
                        ?>
                        <img src="<?php echo $film['f_poster']; ?>" class="img-thumbnail" alt="Film title" />
                        <?php
                    } else {
                        ?>
                        <img src="http://1.fwcdn.pl/po/05/71/30571/7529392.3.jpg" class="img-thumbnail" alt="Film title" />
                        <?php
                    }
                    ?>
                </div>
                <div class="col-sm-9">
<?php ?>
                    <div class="row">
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Title:') ?></h4>
                        </div>
                        <div class="col-sm-3">
                            <h4><?php echo $film['f_name']; ?></h4>
                        </div>
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Description:'); ?></h4>
                        </div>
                        <div class="col-sm-5 text-justify">
<?php echo $film['f_description']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Genres:'); ?></h4>
                        </div>
                        <div class="col-sm-3">
                            <h4>
<?php
if (is_array($film['gen_name'])) {
    foreach ($film['gen_name'] as $key => $value) {
        if (!empty($film['gen_name'][$key + 1]))
            echo $value . ', ';
        else
            echo $value;
    }
}
?>
                            </h4>
                        </div>
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Resolution:'); ?></h4>
                        </div>
                        <div class="col-sm-5">
                            <h4><?php echo $film['d_resolution']; ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Release date:'); ?></h4>
                        </div>
                        <div class="col-sm-3">
                            <h4><?php echo $film['f_releasedate']; ?></h4>
                        </div>
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Filesize:'); ?></h4>
                        </div>
                        <div class="col-sm-5">
                            <h4><?php echo $film['d_filesize']; ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Filweb grade:'); ?></h4>
                        </div>
                        <div class="col-sm-3">
                            <h4><?php echo $film['f_fw_grade']; ?></h4>
                        </div>
                        <div class="col-sm-2 ">
                            <h4><?php echo __('Duration:'); ?></h4>
                        </div>
                        <div class="col-sm-5">
                            <h4><?php echo $film['d_duration']; ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <h4><?php echo __('My grade:'); ?></h4>
                        </div>
                        <div class="col-sm-3">
                            <h4><?php /* echo $film['f_my_grade']; */ ?></h4>
                        </div>
                        <div class="col-sm-2">
                            <h4><?php echo __('Language:'); ?></h4>
                        </div>
                        <div class="col-sm-5">
                            <h4><?php echo $film['d_language']; ?></h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <h4><?php echo __('Carrier:'); ?></h4>
                        </div>
                        <div class="col-sm-3">
                            <h4><?php echo $film['c_name']; ?></h4>
                        </div>
                        <div class="col-sm-2">
                            <h4><?php echo __('Location:'); ?></h4>
                        </div>
                        <div class="col-sm-5">
                            <h4><?php echo $film['l_name']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

