<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, mixed $input)
 */
class status extends Model
{
    use HasFactory;
    public function projects(){
        return $this->hasMany(project::class, 'status');
    }
}
