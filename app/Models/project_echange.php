<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, false $false)
 */
class project_echange extends Model
{
    use HasFactory;
    public function echange_tickets(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(echange_tickets::class, 'echange_id');
    }
    public function project(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(project::class, 'project_id');
    }
    public function tickets_categorie(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(tickets_category::class, 'category_id');
    }
}
