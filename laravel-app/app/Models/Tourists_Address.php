<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tourists_Address extends Tourist
{
    use HasFactory;

    public $table = 'tourists_address';
    protected $fillable = [
        'id',
        'tourist_id',
        'door_no',
        'street',
        'city',
        'state',
        'pincode',
        'created_at',
        'updated_at',
    ];

    public function tourist(): BelongsTo
    {
        return $this->belongsTo(Tourist::class);
    }
}


?>

