<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\Marca;
use Doctrine\DBAL\DBALException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseController extends Controller {

	public function eliminar(Request $request)
	{
		$arrayIds = $request->request->get('arregloDatos');
		$tabla = $request->request->get('tabla');

		try {
			foreach ($arrayIds as $id) {
				\DB::table($tabla)->where('id', $id)->delete();
			}

		} catch (DBALException $dbale) {

			$request->session()->flash('errors', trans('mensajes.integrity_constraint_violation'));

			return redirect()->route($request->get('forward'));

		}

		if ($request->isXmlHttpRequest()) {
			return new JsonResponse(array('respuesta' => 'exito'));
		}

		$request->session()->flash('success', trans('mensajes.delete_success'));


		return redirect()->route($request->get('forward'));
	}

}
