<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest' => $model->getGuest(),
            'title' => 'Outlander Landing'
        ];

        return view ('templates/wercomu', $data)
                .view('guest/index')
                .view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/wercomu', ['title' => 'Leave your mark, outlander!'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'email', 'comments']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name' => 'required|max_length[255]|min_length[3]',
            'email' => 'required|max_length[255]|min_length[3]',
            'comments'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/wercomu', ['title' => 'Leave your mark, outlander!'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'email' => $post['email'],
            'comments'  => $post['comments'],
        ]);

        return view('templates/wercomu', ['title' => 'Leave your mark, outlander!'])
            . view('/guest/success')
            . view('templates/footer');
    }
}