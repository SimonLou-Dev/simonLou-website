<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class echange_tickets extends Model
{
    use HasFactory;

    public function project_echange(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(project_echange::class, 'echange_id');
    }
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
