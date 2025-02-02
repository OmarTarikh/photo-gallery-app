<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';

    protected $primaryKey = 'AlbumID';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'NamaAlbum',
        'Deskripsi',
        'TanggalDibuat',
        'TotalFoto',
    ];

    /**
     * Relationship with Galeri model
     * An album can have many galeris (photos)
     */
    public function galeris()
    {
        return $this->hasMany(Galeri::class, 'AlbumID', 'AlbumID');
    }
}
