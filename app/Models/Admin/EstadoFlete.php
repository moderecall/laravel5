<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class EstadoFlete extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'estado_fletes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];
}
