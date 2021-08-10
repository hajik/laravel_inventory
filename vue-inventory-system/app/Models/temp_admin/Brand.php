<?php

namespace App\Models\temp_admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $appends = ['text'];

    public function getTextAttribute() {
        return $this->name;
    }
}
