<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Controller_Contact extends Controller_PageTemplate {
    public function action_index()
    {
        $this->template->content = View::factory('contact/contact');
    }
}
