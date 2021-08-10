<?php

namespace App\Models\temp_admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    // protected $table = 'categories';
    // protected $fillable = [
    //     'name', 'created_at', 'updated_at'
    // ];
    
    protected $appends = ['text'];

    public function getTextAttribute() {
        return $this->name;
    }
}
