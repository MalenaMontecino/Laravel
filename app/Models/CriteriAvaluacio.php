<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriAvaluacio extends Model
{
    use HasFactory;

        
    protected $table = 'criteris_avaluacio';
    protected $primaryKey = 'id';
   // public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['ordre', 'descripcio', 'actiu', 'resultats_aprenentatge_id'];

    public function resultatAprenentatge()
    {
        return $this->belongsTo(ResultatAprenentatge::class);
    }

    public function rubriques()
    {
        return $this->hasMany(Rubrica::class);
    }

    public function usuaris()
    {
        return $this->belongsToMany(Usuari::class, 'alumnes_has_criteris_avaluacio')->withPivot('nota');
    }
}
