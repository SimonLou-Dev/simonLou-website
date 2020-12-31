<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project_board_items extends Model
{
    use HasFactory;

    /**
     * @var mixed|void
     */


    public function project(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(project::class, 'project_id');
    }
}
