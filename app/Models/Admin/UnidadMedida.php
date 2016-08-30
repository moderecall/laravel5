<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'unidad_medidas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'siglas', 'tipounidadmedida_id'];

    public function tipoUnidadM()
    {
        return $this->hasOne('App\Models\Admin\TipoUnidadMedida', 'id', 'tipounidadmedida_id');
    }

}
