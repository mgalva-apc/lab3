<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestsModel extends Model
{
    protected $table = 'mgalva_outlanders';

    public function getGuests(){
        return $this->findAll();
    }
        
}