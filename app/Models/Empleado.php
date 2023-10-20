<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $primaryKey = 'EMPL_ID';
    public $timestamps = false; // Si no tienes columnas created_at y updated_at

    protected $fillable = [
        'EMPL_ID',
        'EMPL_NOMBRE',
        'EMPL_NOMBRE2',
        'EMPL_APELLIDO',
        'EMPL_APELLIDO2',
        'EMPL_APELLIDO3',
        'EMPL_FOTO',
        'EMPL_SEXO',
        'ESTA_ID',
        'PAIS_NAC',
        'DEPA_NAC',
        'EMPL_FECHANAC',
        'EMPL_DOCIDEN',
        'EMPL_DOCFISCAL',
        'EMPL_PASAPORTE',
        'EMPL_ISSS',
        'EMPL_NUP',
        'EMPL_ANTECEDENTES',
        'PAIS_ID',
        'DEPA_ID',
        'MUNI_ID',
        'EMPL_DIRECCION',
        'EMPL_TEL',
        'EMPL_TEL2',
        'EMPL_MAIL',
        'EMPL_MAIL2',
        'EMPL_ESTADO',
        'SUCU_ID',
        'EMPR_ID',
        'USUA_LOGIN',
        'FECHA_CAMBIO',
    ];

    // Relación con Estado Civil
    public function estadoCivil() {
        //return $this->belongsTo(EstadoCivil::class, 'ESTA_ID', 'ESTA_ID');
    }

    // Relación con Departamento de Nacimiento
    public function departamentoNacimiento() {
        //return $this->belongsTo(Departamento::class, 'DEPA_NAC', 'DEPA_ID');
    }

    // Relación con País de Nacimiento
    public function paisNacimiento() {
        //return $this->belongsTo(Pais::class, 'PAIS_NAC', 'PAIS_ID');
    }

    // Otras relaciones...

    // Relación con Sucursal
    public function sucursal() {
        //return $this->belongsTo(Sucursal::class, 'SUCU_ID', 'SUCU_ID');
    }

    // Relación con Empresa
    public function empresa() {
        //return $this->belongsTo(Empresa::class, 'EMPR_ID', 'EMPR_ID');
    }
}
