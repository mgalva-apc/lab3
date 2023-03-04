<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table ="mgalva_outlanders";

    protected $allowedFields = ['name', 'email', 'comments'];
    
    public function getGuest()
    {
        return $this->findAll();
    }
}