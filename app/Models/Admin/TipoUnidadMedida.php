<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TipoUnidadMedida extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipo_unidad_medidas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


}
