<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Films extends Controller_PageTemplate {

    public $_film_id;

    public function _set_extra_info() {
        // pobieranie gatunków, nośników itp
        (array) $genres = $this->_get_genres();
        (array) $carries = $this->_get_carries();
        (array) $locations = $this->_get_locations();
        $this->_get_locations();
        //wysyłanie zmienny do widoku
        $this->template->content->set('genres', $genres);
        $this->template->content->set('carries', $carries);
        $this->template->content->set('locations', $locations);
        $this->response->body($this->template->content);
        $test;
        $test2;
    }

    public function action_add() {
        if ($this->_auth->logged_in('user')) {
            $this->template->content = View::factory('library-add-film');
            $this->_set_extra_info();
            (array) $er = array();
            if ($this->request->post('add-film')) {//dodawanie filu
                //echo $this->request->post('filmweb');
                $location = ORM::factory('Location');
                $location->where('name', '=', $this->request->post('location'))->find();
                //films
                try {

                    $film = ORM::factory('Film');
                    if ($film->unique_key_exists($this->request->post('film-name'), 'name')) {// sprawdzanie czy film jest już w bazie
                        echo 'film jest już w bazie';
                        $film->where('name', '=', trim($this->request->post('film-name')));
                        $film->find();
                        $this->_film_id = $film->id;
                        if ($film->user_already_has_film($this->request->post('film-name'), $this->_user_id)) {// sprawdzanie czy user dodał już film
                            echo '<br />user ma już film ';
                            if (TRUE) {
                                //film ma już lokoacje
                            } else {
                                
                            }
                        } else {//user nie dodał jeszcze filmu
                            echo 'dodawnaie filmu do usera';
                            $film_user2 = ORM::factory('Film')->where('name', '=', trim($this->request->post('film-name')))->find();
                            //$film -> find();
                            //$film -> save();
                            $this->_film_id = $film_user2->id;
                            $user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
                            $film->add('users', $user);
                            //film jest w bazie, dodanie filmu do usera.
                        }
                    } else {//filmu nie ma w bazie
                        $film->name = $this->request->post('film-name');

                        $film->poster = $this->request->post('poster');
                        $film->poster_hash = md5($this->request->post('film-name'));



                        $film->releasedate = $this->request->post('releasedate');

                        $film->description = $this->request->post('description');

                        $film->fw_grade = $this->request->post('fw_grade');

                        $film->filmweb = $this->request->post('filmweb');

                        print_r($film->save());
                        //zapisanie filmu do bazy
                        echo $this->_film_id = $film->id;
                        $dir = 'upload/poster/';
                        copy($this->request->post('poster'), DOCROOT . $dir . md5($this->request->post('film-name')) . '.jpg');
                        //id zapisanego filmu
                        $user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
                        $film->add('users', $user);
                        //skojarzenie filmu z użytkownikiem
                    }
                } catch (ORM_Validation_Exception $e) {
                    $er = array_merge($er, $e->errors('models'));
                    print_r($er);
                    $this->_set_error_status();
                }
                //details
                try {
                    $details = ORM::factory('Details');
                    if ($details->user_has_already_add_details_to_film($this->_film_id, $this->_auth->get_user()->pk())) {
                        //throw new Exception('user dodaał już details');
                    } else {
                        echo $this->_film_id;
                        $details->resolution = $this->request->post('resolution');
                        $details->filesize = $this->request->post('filesize');
                        $details->duration = $this->request->post('duration');
                        $details->language = $this->request->post('film-language');
                        $details->save();
                        //zapisanie details dla filmu
                        $film_1 = ORM::factory('Film')->where('id', '=', $this->_film_id)->find();
                        $details->add('films', $film_1);
                        //skojarzenie details z filmem
                        $user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
                        $details->add('users', $user);
                        // skojarzenie details z usersem
                    }
                } catch (ORM_Validation_Exception $e) {
                    $er = array_merge($er, $e->errors('models'));
                    $this->_set_error_status();
                }
                //genres
                print_r($this->request->post('genres'));
                try {
                    $genres = ORM::factory('Genres');
                    if ($genres->user_has_already_add_genres_to_his_film($this->_film_id, $this->_auth->get_user()->pk())) {
                        echo '<br /> user dodaał już genres';
                    } else {
                        foreach ($this->request->post('genres') as $value) {
                            echo $value;
                            $genre = ORM::factory('Genres');
                            $genre->where('id', '=', $value)->find();
                            $film_1 = ORM::factory('Film')->where('id', '=', $this->_film_id)->find();
                            $genre->add('films', $film_1);
                            //skojarzenie genres z filmem
                            $user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
                            $genre->add('users', $user);
                            // skojarzenie genres z usersem
                        }
                    }
                } catch (ORM_Validation_Exception $e) {
                    $er = array_merge($er, $e->errors('models'));
                    $this->_set_error_status();
                }
                //carries
                try {
                    $carrier = ORM::factory('Carrier');
                    if ($carrier->user_has_already_add_carrier_to_his_film($this->_film_id)) {
                        echo '<br /> user dodaał już carries';
                    } else {
                        $carrier->where('id', '=', $this->request->post('carrier'))->find()->save();
                        $film_1 = ORM::factory('Film')->where('id', '=', $this->_film_id)->find();
                        $carrier->add('films', $film_1);
                        //skojarzenie carrier z filmem
                        $user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
                        $carrier->add('users', $user);
                        // skojarzenie carrier z usersem
                    }
                } catch (ORM_Validation_Exception $e) {
                    $er = array_merge($er, $e->errors('models'));
                    $this->_set_error_status();
                }
                try {
                    $location = ORM::factory('Location');
                    if ($location->user_has_already_add_location_to_his_film($this->_film_id)) {
                        
                    } else {
                        $location->where('id', '=', $this->request->post('location'))->find()->save();
                        $film_1 = ORM::factory('Film')->where('id', '=', $this->_film_id)->find();
                        $location->add('films', $film_1);
                        //skojarzenie carrier z filmem
                    }
                } catch (ORM_Validation_Exception $e) {
                    $er = array_merge($er, $e->errors('models'));
                    $this->_set_error_status();
                }
                $this->_set_error_message($er);
                print_r($er);
            }
        } else {
            //trzeba się zalogować
        }
    }

    public function action_my() {
        if ($this->_auth->logged_in('user')) {
            $this->template->content = View::factory('library-films-my');
            $films = ORM::factory('Film');
            echo 'num_pages- ' . Request::current()->param("page");
            $total_films = $films->get_number_of_films($this->_user_id);
            $pagination = Pagination::factory(array('total_items' => $total_films,));
            $user_films = $films->get_user_films($this->_auth->get_user()->pk(), $pagination->offset, $pagination->items_per_page);
            $this->template->content
                    ->set('user_films', $user_films)
                    ->set('pagination', $pagination);
            //$this -> response -> body($this -> template -> content);
        }
    }

    public function action_view() {
        if ((int) $this->request->param('id')) {
            $this->template->content = View::factory('library-films-view');
            $films = ORM::factory('Film');
            $films = $films->get_film($this->_auth->get_user()->pk(), $this->request->param('id'));
            $films = $this->prepare_film_detail($films);
            $this->template->content->bind('film', $films);
            print_r($films);
        } else {
            echo '<h1>Cos poszło nie tak</h1>';
        }
    }

    public function action_ajax_list_film() {
        header('Content-type:application/json');
        //header('Content-type: text/html; charset=utf-8');
        $this->auto_render = false;
        $list = $this->_ajax_get_fw_list_film($this->request->post('name'));
        print_r(json_encode($list));
    }

    private function _ajax_remove_film($id) {
        $film = ORM::factory('Film', $id);
        echo $film->poster_hash;
        echo '<img src="upload/poster/' . $film->poster_hash . '.jpg" alt="upload/poster/' . $film->poster_hash . '.jpg">';
    }

    public function action_ajax_film_remove() {
        $this->auto_render = false;
        $this->_ajax_remove_film($this->request->post('film_id'));
    }

    public function action_ajax_film_detail() {
        header('Content-type:application/json');
        $this->auto_render = false;
        $detail = $this->_ajax_get_detail_film($this->request->post('href'));
        print_r(json_encode($detail));
    }

    private function _ajax_get_detail_film($href) {
        (bool)$serial = false;
        if(strpos($href, 'serial')) (bool)$serial = true;
        $strona = "http://www.filmweb.pl" . $href;
        $useragent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";

        $rC = curl_init();
        curl_setopt($rC, CURLOPT_HEADER, 1);
        curl_setopt($rC, CURLOPT_COOKIEFILE, 'cookies.txt');
        curl_setopt($rC, CURLOPT_COOKIEJAR, 'cookiesjar.txt');
        curl_setopt($rC, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rC, CURLOPT_VERBOSE, 0);
        curl_setopt($rC, CURLOPT_USERAGENT, $useragent);
        curl_setopt($rC, CURLOPT_REFERER, 'www.google.pl');
        curl_setopt($rC, CURLOPT_URL, $strona);

        $wejscie = curl_exec($rC);
        curl_setopt($rC, CURLOPT_REFERER, $strona);
        $wejscie = curl_exec($rC);
        //print_r($wejscie);
        curl_close($rC);
        preg_match('/<div class="filmPlot bottom-15"><p class="text">(.+?)<\/p><\/div>/ism', $wejscie, $desc);
        //preg_match('/<div class="filmTime">(.+?)<\/div>/ism', $wejscie, $duration);
        //print_r($duration);
        preg_match('/<a rel="v:image" href="(.+?)" class="imageBorderShadow film_mini"><img src="(.+?)" alt="(.+?)" title="(.+?)"><\/a>/ism', $wejscie, $image);
        $image = $image[1];
        preg_match('/<ul class="inline sep-comma genresList">(.+?)<\/ul>/ism', $wejscie, $genres);
        if (!$serial) {
            $genres = explode('<li>', $genres[1]);

            $temp = array();
            foreach ($genres as $key => $val) {
                if ($key != 0) {
                    $temp[$key] = trim(strip_tags(trim($val)));
                }
            }
            $genres = $temp;
        }
        else
        {
            $genres[1] = "Serial"; //zrzutowani typu
        }
        if($serial)
        {
            $season;
            preg_match('/<div class="box full-width"><ul class="list inline sep-line">(.+?)><\/ul><\/div>/ism', $wejscie, $season);
            $season = explode('<li>', $season[1]);
            $count_season = sizeof($season) - 1;
        }
        preg_match('/<span property="v:average">(.+?)<\/span>/ism', $wejscie, $grade);
        preg_match('/<ul class="inline sep-comma"><li><a href="(.+?)">USA<\/a><\/li><\/ul><\/td><\/tr><tr><th>(.+?):<\/th><td><a href="(.+?)"> <span> (.+?)<\/span>(.+?)<span> (.+?) <\/span> (.+?) <\/a><\/td><\/tr>/ism', $wejscie, $release_date);
        $temp = explode('inline sep-comma', $wejscie);
        //$genre_temp  = $temp[4];
        //print_r($temp);
        if (!$serial) {
            $release_temp = $temp[5];
            $r_t_2 = explode('<span>', $release_temp);
            $release = explode(" ", $r_t_2[1]);

            $release[2] = str_replace(array('stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'czerwiec', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia'), array('01', '02', '03', '04', '05', '06', '06', '07', '08', '09', '10', '11', '12'), $release[2]);
            if ($release[1] < 10) {
                $release[1] = '0' . $release[1];
            }
            $release_date = $release[3] . '-' . $release[2] . '-' . $release[1];
        }
        else
        {
            $release_date = 0;
        }
        //$desc = 'content tymczasowy';
        $temp = array("release_date" => strip_tags($release_date), "desc" => trim(strip_tags($desc[1])), "fw_grade" => trim(strip_tags($grade[1])), "genres" => $genres, "poster" => $image, "countSeason" => $count_season);
        //print_r($desc);
        return $temp;
    }

    private function _ajax_get_fw_list_film($name) {
        $strona = "http://www.filmweb.pl/search?q=" . $name;
        $useragent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";

        $rC = curl_init();
        curl_setopt($rC, CURLOPT_HEADER, 1);
        curl_setopt($rC, CURLOPT_COOKIEFILE, 'cookies.txt');
        curl_setopt($rC, CURLOPT_COOKIEJAR, 'cookiesjar.txt');
        curl_setopt($rC, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($rC, CURLOPT_VERBOSE, 0);
        curl_setopt($rC, CURLOPT_USERAGENT, $useragent);
        curl_setopt($rC, CURLOPT_REFERER, 'www.google.pl');
        curl_setopt($rC, CURLOPT_URL, $strona);

        $wejscie = curl_exec($rC);
        curl_setopt($rC, CURLOPT_REFERER, $strona);
        $wejscie = curl_exec($rC);
        //print_r($wejscie);
        //iconv("UTF-8", "UTF-8", $wejscie);
        curl_close($rC);
        //preg_match('/<div class="filmPlot bottom-15"><p class=text>(.+?)<\/p><\/div>/ism', $wejscie, $wyjscie); gotowe na desc
        //preg_match($pattern, $subject)<span class="hdr hdr-medium hitTitle">(.+?)<\/span>
        preg_match_all('/<h3><a href="(.+?)" class="hdr hdr-medium hitTitle"> (.+?)<\/a><span class="hdr hdr-medium hitTitle">(.+?)<\/span><\/h3>/ism', $wejscie, $wyjscie);
        //print_r($wyjscie);
        (array) $temp = array();
        /* $temp2 = "[ ";
          foreach($wyjscie[0] as $val)
          {
          $temp2 .= '"'.trim(strip_tags($val)).'",';
          }
          return $temp2 .= '"test" ]';
          //return $wyjscie;
          //return $temp;
         *
         */
        //print_r($wyjscie);
        //$temp = array();
        $lenght = sizeof($wyjscie[0]);
        for ($i = 0; $i < $lenght; $i++) { // bylo 10
            if (!strpos($wyjscie[0][$i], '<p class="text"')) {

                $temp[$i] = array('label' => trim(strip_tags($wyjscie[0][$i])), 'value' => trim(strip_tags($wyjscie[0][$i])), 'href' => $wyjscie[1][$i]);
            }
        }
        //foreach($wyjscie[0] as $val)
        //{
        //$temp[] = strip_tags($val);
        //}
        //print_r($temp);
        return $temp;
    }

    public function action_edit() {
        $id = (int) $this->request->param('id');
        (array) $er = array();
        if ($this->_auth->logged_in('user')) {
            if (isset($id)) {
                $film = ORM::factory('Film');
                $film_detail_temp = $film->get_film($this->_auth->get_user()->pk(), $id);
                $film_detail = $this->prepare_film_detail($film_detail_temp);
                $this->template->content = View::factory('library-films-edit');
                $this->_set_extra_info();
                if ($this->request->post('update-film')) {
                    try {
                        $film_save = $film;
                        $film_save->where('id', '=', $id)->find();
                        $film_save->name = $this->request->post('film-name');
                        $film_save->releasedate = $this->request->post('releasedate');
                        $film_save->description = $this->request->post('description');
                        $film_save->fw_grade = $this->request->post('fw_grade');
                        //$film_save -> imbd_grade = $this -> request -> post('imbd_grade');
                        $film_save->save();
                        //zapisanie filmu do bazy
                    } catch (ORM_Validation_Exception $e) {
                        $er = array_merge($er, $e->errors('models'));
                        $this->_set_error_status();
                    }
                    try {
                        $detail = ORM::factory('Details', $this->request->post('d_id'));
                        $detail->resolution = $this->request->post('resolution');
                        $detail->filesize = $this->request->post('filesize');
                        $detail->duration = $this->request->post('duration');
                        $detail->language = $this->request->post('film-language');
                        $detail->save();
                        $this->_set_success_status();
                    } catch (ORM_Validation_Exception $e) {
                        $er = array_merge($er, $e->errors('models'));
                        $this->_set_error_status();
                    }
                    if ($this->request->post('carrier') != $film_detail['c_id']) {

                        $carrier_to_remove = ORM::factory("Carrier");
                        $carrier = clone $carrier_to_remove;
                        $carrier_to_remove->where('id', '=', $film_detail['c_id'])->find();
                        $film_1 = ORM::factory('Film')->where('id', '=', $id)->find();
                        $carrier_to_remove->remove('films', $id);
                        $carrier->where('id', '=', $this->request->post('carrier'))->find()->save();
                        $carrier->add('films', $film_1);
                        $film_detail['c_id'] = $this->request->post('carrier');
                    }
                    if ($this->request->post('location') != $film_detail['l_id']) {

                        $location = ORM::factory("Location");
                        $location->where('id', '=', $this->request->post('location'))->find();
                        $location_to_remoce = clone $location;
                        $location_to_remoce->remove('films', $id);
                        $film_1 = ORM::factory('Film')->where('id', '=', $id)->find();
                        $location->add('films', $film_1);
                        $film_detail['l_id'] = $this->request->post('location');
                    }
                }

                print_r($film_detail);
                $this->template->content->set('film_detail', $film_detail);
                $this->response->body($this->template->content);
            }
        } else {
            //trzeba sie zalogować
        }
    }

    public function action_remove() {
        $id = (int) $this->request->param('id');
        if ($this->_auth->logged_in('admin')) {
            $film = ORM::factory('Film', $id);
            $dir = 'upload/poster/';
            //echo DOCROOT;
            if (is_file(DOCROOT . $dir . $film->poster_hash . '.jpg')) {
                unlink(DOCROOT . $dir . $film->poster_hash . '.jpg');
            }
            $film->delete();
            echo '<h1>Film usunieto!</h1>';
        }
    }

    private function prepare_film_detail($_array = array()) {
        $temp = array();
        $i = 0;
        foreach ($_array as $val) {
            foreach ($val as $key => $value) {
                if ($key == 'gen_id') {
                    $temp[$key][$i] = $value;
                } else if ($key == 'gen_name') {
                    $temp[$key][$i] = $value;
                } else {
                    $temp[$key] = $value;
                }
            }
            $i++;
        }
        return $temp;
    }

}
