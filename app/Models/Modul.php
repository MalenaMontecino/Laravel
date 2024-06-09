<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $table = 'moduls';
    protected $primaryKey = 'id';
   // public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['codi', 'sigles', 'nom', 'actiu', 'cicles_id'];

    public function cicle()
    {
        return $this->belongsTo(Cicle::class);
    }

    public function resultatsAprenentatge()
    {
        return $this->hasMany(ResultatAprenentatge::class);
    }

    public function usuaris()
    {
        return $this->belongsToMany(Usuari::class, 'usuaris_has_moduls');
    }
}
