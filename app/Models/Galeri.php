<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'galeris';

    // Primary key
    protected $primaryKey = 'FotoID';

    public $incrementing = true;
    protected $keyType = 'int';

    // Fillable fields
    protected $fillable = [
        'LokasiFile',
        'JudulFoto',
        'DeskripsiFoto',
        'TanggalUnggah',
        'AlbumID',
    ];

    // Disable timestamps if not used
    public $timestamps = false;

    /**
     * Relationship with Album
     */
    public function album()
    {
        return $this->belongsTo(Album::class, 'AlbumID', 'AlbumID')->withDefault([
            'NamaAlbum' => 'Tidak ada album',
        ]);
    }

    /**
     * Relationship with Comments
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_foto', 'FotoID')->latest();
    }

    /**
     * Accessor for Full Image Path
     */
    public function getFullImagePathAttribute()
    {
        return asset('storage/galeris/' . $this->LokasiFile);
    }
}
