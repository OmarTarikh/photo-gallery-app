<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'comments';

    // Fillable fields
    protected $fillable = [
        'id_foto',
        'id_user',
        'isi',
        'tanggal',
    ];

    // Date casting for 'tanggal'
    protected $dates = ['tanggal'];

    /**
     * Relationship with Galeri
     */
    public function galeri()
    {
        return $this->belongsTo(Galeri::class, 'id_foto', 'FotoID');
    }

    /**
     * Relationship with User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
