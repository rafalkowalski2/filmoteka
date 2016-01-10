<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3><?php echo __('MY_FILMS'); ?></h3>
                <?php
                echo View::factory('feedback-template')->bind('error', $error)
                        ->bind('error_message', $error_message)
                        ->bind('success', $success)
                        ->bind('success_message', $success_message);
                ?>
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <h4><?php echo __('FILTERS'); ?></h4>
                    </div>
                    <div class="col-sm-12">
                        <form class="form-inline" method="get" id="filter" action="/pl/Films/my/page/1">
                            <div class="form-group col-sm-4">
                                <label for="title-filter"><?php echo __('TITLE'); ?></label>
                                <input type="text" name="title-filter" id="title-filter" class="form-control">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="genres-filter"><?php echo __('GENRES:'); ?></label>
                                <select name="genres-filter" class="form-control" id="genres-filter">
                                    <option value="-1">---</option>
                                    <?php
                                    foreach ($genres as $key => $value) {
                                        if (isset($_GET['genres-filter']) && $_GET['genres-filter'] == $key) {
                                            echo '<option value="' . $key . '" selected="selected">' . $value . '</option>' . "\n";
                                        } else {
                                            echo '<option value="' . $key . '">' . $value . '</option>' . "\n";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="start-date-filter"><?php echo __('FROM_DATE'); ?></label>
                                <select name="start-date-filter" id="start-date-filter" class="form-control">
                                    <option value="-1">---</option>  
                                    <?php
                                    (int) $year = Date('Y');
                                    for ($year; $year > 1980; $year --) {
                                        if (isset($_GET['start-date-filter']) && $_GET['start-date-filter'] == $year) {
                                            echo '<option value="' . $year . '" selected="selected">' . $year . '</option>' . "\n";
                                        } else {
                                            echo '<option value="' . $year . '">' . $year . '</option>' . "\n";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="end-date-filter"><?php echo __('END_DATE'); ?></label>
                                <select name="end-date-filter" id="end-date-filter" class="form-control">
                                    <option value="-1">---</option>  
                                    <?php
                                    (int) $year = Date('Y');
                                    for ($year; $year > 1980; $year --) {
                                        if (isset($_GET['end-date-filter']) && $_GET['end-date-filter'] == $year) {
                                            echo '<option value="' . $year . '" selected="selected">' . $year . '</option>' . "\n";
                                        } else {
                                            echo '<option value="' . $year . '">' . $year . '</option>' . "\n";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="filter" class="btn btn-default" value="<?php echo __('FILTER'); ?>">

                            </div>
                        </form>
                    </div>
                    <?php print_r($genres); ?>
                </div>
                <div class="text-center">
                    <?php echo $pagination; ?>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><?php echo __('ID'); ?></th>
                            <th><?php echo __('NAME'); ?></th>
                            <th><?php echo __('RESOLUTION'); ?></th>
                            <th><?php echo __('LOCATION'); ?></th>
                            <th><?php echo __('Functions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--warunek dla deatila jest walniety i prawie zawsze zwraca TRUE, trezeba go naprawić 
                        SELECT * FROM `films` JOIN `films_users` ON `films_users`.`film_id` = `films`.`id` JOIN `users` ON `users`.`id` = `films_users`.`user_id` JOIN `films_genres` ON `films_genres`.`film_id` = `films`.`id` JOIN `genres` ON `genres`.`id` = `films_genres`.`genres_id` WHERE `users`.`id` = 2
                        -->
                        <?php
                        if (isset($user_films) AND is_object($user_films)) {
                            $config = Kohana::$config->load('pagination');
                            $per_page = $config['default']['items_per_page'];
                            if (Request::current()->param('page') != 1) {
                                $page = (int) Request::current()->param('page');
                                (int) $i = ($per_page * $page) - $per_page + 1;
                            } else {
                                (int) $i = 1;
                            }
                            print_r($user_films);
                            foreach ($user_films as $key => $value) {
                                //print_r($value);
                                //echo $value['f_name'];
                                //foreach($value as $val)
                                //{
                                echo '<tr style="padding:10px;">
													<td>' . $i . '</td>
													<td><a href="' . URL::site(Request::current()->param('language') . '/films/view/' . $value['f_id']) . '">' . $value['f_name'] . '</a></td>
													<td class="col-md-2">' . $value['d_resolution'] . '</td>
													<td>' . $value['l_name'] . '</td>
													<td class="col-md-2">
														<a href="' . URL::site(Request::current()->param('language') . '/films/edit/') . '/' . $value['f_id'] . '"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> ' . __('Edit') . '</a>
														<a class="delete-film" href="' . URL::site(Request::current()->param('language') . '/films/remove/') . '/' . $value['f_id'] . '" data-film-id="' . $value['f_id'] . '"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ' . __('Remowe') . '</a>
													</td>
											 	 </tr>' . "\n";
                                $i++;
                                //}
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <div class="text-center">
                    <?php echo $pagination; ?>
                </div>
            </div>
        </div>
    </div>
</div>