<?php

namespace App\Models;

use App\Models\Salario;
use App\Models\Candidato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacante extends Model
{
    use HasFactory;

    protected $fillable = [

        'titulo',
        'salario_id',
        'categoria_id',
        'empresa',
        'ultimo_dia',
        'descripcion',
        'imagen',
        'publicado',
        'user_id',
    ];

    //se agrega para que lo tome en fecha ya que lo reconoce como un string desde la bd
    //en la vista puedo darle el formato que quiera
    protected $casts = [
        'ultimo_dia' => 'datetime:Y-m-d',
    ];


    public function categoria()
    {
        return  $this->belongsTo(Categoria::class);
    }

    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }

    //una vacante tiene muchos candidatos
    public function candidatos()
    {
        return $this->hasMany(Candidato::class)->orderBy('created_at', 'DESC');
    }

    //relacion hacia la tabla user, en esta se guarda el reclutador
    //por eso se especifica que se tomara del campo user_id
    //relacion 1-1 donde una vacante pertenece a un usuario
    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
