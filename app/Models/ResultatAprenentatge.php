<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultatAprenentatge extends Model
{
    use HasFactory;
    
    protected $table = 'resultats_aprenentatge';
    protected $primaryKey = 'id';
   // public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['ordre', 'descripcio', 'actiu', 'moduls_id'];

    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }

    public function criterisAvaluacio()
    {
        return $this->hasMany(CriteriAvaluacio::class);
    }
}
