<?php

namespace App\Controllers;

class Home extends BaseController {

    public function home() {

        $data['coursename'] = $this->getCourseName();  

        log_message('info','name field >' . $this->request->getVar('iname') . '<<');

        echo view('templates/header');
        echo view('pages/register', $data);
        echo view('templates/footer');
    }
