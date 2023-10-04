<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tourists_Address extends Model
{
    use HasFactory;

    protected $table = 'tourists_address';
    public function tourist(): BelongsTo
    {
        return $this->belongsTo(Tourist::class, 'tourist_id');
    }
}


?>

