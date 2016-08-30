<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modelo_vehiculos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','tipovehiculo_id','marca_id'];

    public function marca()
    {
        return $this->hasOne('App\Models\Admin\Marca', 'id', 'marca_id');
    }

    public function tipoVehiculo()
    {
        return $this->hasOne('App\Models\Admin\TipoVehiculo', 'id', 'tipovehiculo_id');
    }
}
