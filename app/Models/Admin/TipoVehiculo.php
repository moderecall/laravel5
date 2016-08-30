<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tipovehiculos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];

}
