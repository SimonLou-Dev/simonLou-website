<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets_category extends Model
{
    use HasFactory;
    public function tickets_echanges(){
        return $this->hasMany(project_echange::class, 'category_id');
    }
}
