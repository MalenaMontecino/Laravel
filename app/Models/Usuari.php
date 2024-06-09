<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuari extends Model implements Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuaris';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nom_usuari', 'contrasenya', 'correu', 'nom', 'cognom', 'actiu', 'tipus_usuaris_id', 'rol'];

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->contrasenya;
    }

    public function getRememberToken()
    {
        return null; // not supported
    }

    public function setRememberToken($value)
    {
        // not supported
    }

    public function getRememberTokenName()
    {
        return null; // not supported
    }

    public function tipusUsuari()
    {
        return $this->belongsTo(TipusUsuari::class);
    }

    public function criterisAvaluacio()
    {
        return $this->belongsToMany(CriteriAvaluacio::class, 'alumnes_has_criteris_avaluacio')->withPivot('nota');
    }

    public function moduls()
    {
        return $this->belongsToMany(Modul::class, 'usuaris_has_moduls');
    }

    public function isAdmin()
    {
        return $this->rol === 'administrador';
    }

    public function isProfesor()
    {
        return $this->rol === 'profesor';
    }

    public function isAlumno()
    {
        return $this->rol === 'alumno';
    }
}
