<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'generos';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = ['descripcion', 'siglas'];

}
