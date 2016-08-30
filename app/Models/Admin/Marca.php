<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'marcas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];
}
