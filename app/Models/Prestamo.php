<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_prestamo';

    protected $fillable = [
        'id_prestamo',
        'casado',
        'dependientes',
        'educacion',
        'independiente',
        'i_d',
        'i_c',
        'c_p',
        'p_p',
        'historia_credito',
        'tipo_propiedad',
    ];
}
