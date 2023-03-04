<?php

namespace App\Controllers;

use App\Models\GuestsModel;

class Guests extends BaseController
{
    public function index()
    {
        $model = model(GuestsModel::class);

        $data = [
            'guests'  => $model->getGuests(),
            'title' => 'Outlander Landing',
        ];

        return view('templates/wercomu', $data)
            . view('guests/index')
            . view('templates/footer');
    }

    public function view($id = null)
    {
        $model = model(GuestsModel::class);

        $data['guests'] = $model->getGuests($id);

        if (empty($data['guests'])) {
            throw new PageNotFoundException('Cannot find the outlander: ' . $id);
        }

        $data['title'] = 'Outlander Landing';

        return view('templates/wercomu', $data)
            . view('pages/views')
            . view('templates/footer');
    }
}