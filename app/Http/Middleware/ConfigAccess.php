<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class ConfigAccess {

	private  $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		$action = app('request')->route()->getAction(); //obtiene la accion : "App\Http\Controllers\Admin\MarcaController@edit"
		$controller = class_basename($action['controller']); // obtiene el nombre base de la clase : "MarcaController@edit"
		$controller = snake_case($controller); // cambia el valor : "marca_controller@edit"

		$ruta = substr($controller,0 ,strpos($controller, '_')); // obtener el nombre de la ruta sin controller : "marca"

		$rutaPerfil = ['marca', 'estadoflete'];

		if (!in_array($ruta, $rutaPerfil))
			return redirect()->guest('auth/login');
		else
			return $next($request);
	}

}
