<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <p><h3><?php echo __('ADD_FILM'); ?></h3></p>
            <div id="js_info"></div>
            <?php
            echo View::factory('feedback-template')->bind('error', $error)
                    ->bind('error_message', $error_message)
                    ->bind('success', $success)
                    ->bind('success_message', $success_message);
            ?>
            <form class="form-horizontal" action="<?php echo Request::detect_uri(); ?>" role="form" name="form-add-film" method="post">
                <div class="col-sm-6">
                    <div id="test">
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="film-name"><?php echo __('TITLE:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="film-name" class="form-control add-film" id="film-name" placeholder="<?php echo __('ENTER_FILM_TITLE'); ?>" value="<?php echo Request::current()->post('film-name'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <input type="text" name="poster" id="poster" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="filmweb"><?php echo __('FILMWEB:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="filmweb" class="form-control" id="filmweb" readonly value="<?php echo Request::current()->post('filmweb'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="genres"><?php echo __('GENRES:'); ?></label>
                        <div class="col-sm-9">
                            <select name="genres[]" class="form-control" id="genres" multiple="multiple">
                                <?php
                                if (isset($genres) AND is_array($genres)) {
                                    foreach ($genres as $key => $value) {
                                        echo '<option value="' . $key . '" class="' . $value . '">' . $value . '</option>' . "\n";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="releasedate"><?php echo __('RELESASE_DATE:'); ?></label>
                        <div class="col-sm-9">
                            <input type="date" name="releasedate" class="form-control" id="releasedate" placeholder="<?php echo __('ENTER_RELEASE_DATE'); ?>" value="<?php echo Request::current()->post('releasedate'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="fw_grade"><?php echo __('FILMWEB_GRADE:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="fw_grade" class="form-control" id="fw_grade" placeholder="<?php echo __('ENTER_FILMWEB_TITLE'); ?>" value="<?php echo Request::current()->post('fw_grade'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="my_grade"><?php echo __('My grade:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="my_grade" class="form-control" id="my_grade" placeholder="<?php echo __('Enter my grade'); ?>" value="<?php echo Request::current()->post('my_grade'); ?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="carrier"><?php echo __('CARRIER:'); ?></label>
                        <div class="col-sm-9">
                            <select name="carrier" class="form-control" id="carrier">
<?php
if (isset($carries) AND is_array($carries)) {
    foreach ($carries as $key => $value) {
        echo '<option value="' . $key . '">' . $value . '</option>' . "\n";
    }
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="location"><?php echo __('LOCATION:'); ?></label>
                        <div class="col-sm-9">
                            <select name="location" class="form-control" id="location">
<?php
if (isset($locations) AND is_array($locations)) {
    foreach ($locations as $key => $value) {
        echo '<option value="' . $key . '">' . $value . '</option>' . "\n";
    }
}
?>
                            </select>	
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="description"><?php echo __('DESCRIPTION:'); ?></label>
                        <div class="col-sm-9"> 
                            <textarea class="form-control" rows="6" name="description" id="description"><?php echo Request::current()->post('description'); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="resolution"><?php echo __('RESOLUTION:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="resolution" class="form-control" id="resolution" placeholder="<?php echo __('ENTER_RESOLUTION'); ?>" value="<?php echo Request::current()->post('resolution'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="resolution"><?php echo __('FILESIZE:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="filesize" class="form-control" id="filesize" placeholder="<?php echo __('ENTER_FILESIZE'); ?>" value="<?php echo Request::current()->post('filesize'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="resolution"><?php echo __('DURATION:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="duration" class="form-control" id="duration" placeholder="<?php echo __('ENTER_DURATION'); ?>" value="<?php echo Request::current()->post('duration'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="film-language"><?php echo __('LANGUAGE:'); ?></label>
                        <div class="col-sm-9">
                            <input type="text" name="film-language" class="form-control" id="film-language" placeholder="<?php echo __('ENTER_LANGUAGE'); ?>" value="<?php echo Request::current()->post('film-language'); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-offset-10 col-sm-1">
                    <div class="form-group"> 
                        <div class="col-sm-offset-3 col-sm-9">
                            <input type="submit" name="add-film" class="btn btn-default" value="<?php echo __('ADD_FILM'); ?>">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>