<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;


    public function project_echange(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(project_echange::class, 'project_id');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    public function project_types(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(project_types::class, 'type');
    }
    public function functions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(functions::class, 'project_id');
    }
    public function project_board_items(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(project_board_items::class,'project_id');
    }
    public function project_updates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(project_updates::class, 'project_id');
    }
    public function project_lang(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(project_lang::class, 'project_id');
    }
    public function project_images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(project_images::class, 'project_id');
    }
    public function getstatus(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(status::class, 'status');
    }

}
