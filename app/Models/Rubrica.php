<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    use HasFactory;
        
    protected $table = 'rubriques';
    protected $primaryKey = 'id';
   // public $incrementing = false;
    public $timestamps = false;


    protected $fillable = ['nivell', 'descripcio', 'actiu', 'criteris_avaluacio_id'];

    public function criteriAvaluacio()
    {
        return $this->belongsTo(CriteriAvaluacio::class);
    }
}
