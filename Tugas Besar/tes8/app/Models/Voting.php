<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    use HasFactory;

    // Jika nama tabel di database adalah "voting" (bentuk tunggal)
    protected $table = 'votings';

    protected $fillable = [
        'nama',
        'npm',
        'pilihan',
    ];
}
