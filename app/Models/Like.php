<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['id_foto', 'id_user', 'tanggal_like'];

    public function galeri()
    {
        return $this->belongsTo(Galeri::class, 'id_foto', 'FotoID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
