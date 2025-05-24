<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $table = 'tables';

    protected $fillable = [
        'table_number',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
