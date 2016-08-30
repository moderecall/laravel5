<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\Marca;
use App\Models\Admin\ModeloVehiculo;
use App\Models\Admin\TipoVehiculo;
use Illuminate\Http\Request;

class ModeloVehiculoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$modelos = ModeloVehiculo::all();
		return view('admin.modelovehiculo.index', compact('modelos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$marcas = array(
				'list' => Marca::lists('nombre', 'id'),
				'select' => null
		);

		$tipoV = array(
				'list' => TipoVehiculo::lists('descripcion', 'id'),
				'select' => null
		);

		return view('admin.modelovehiculo.new', array(
			'marcas' => $marcas,
			'tipos'  => $tipoV,
		));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules(null));

		$modelo = ModeloVehiculo::create($request->all());

		$request->session()->flash('success', trans('mensajes.save_success'));

		return redirect()->route('admin.modelovehiculo.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$modelo = ModeloVehiculo::findOrFail($id);

		$marcas = array(
				'list' => Marca::lists('nombre', 'id'),
				'select' => $modelo->marca_id
		);

		$tipoV = array(
				'list' => TipoVehiculo::lists('descripcion', 'id'),
				'select' => $modelo->tipovehiculo_id
		);
//		dd($tipoV);

		return view('admin.modelovehiculo.edit', array(
				'modelo' =>$modelo,
				'marcas' => $marcas,
				'tipos'  => $tipoV,
		));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, $this->rules($id));

		$modelo = ModeloVehiculo::findOrFail($id);
		$modelo->fill($request->all());
		$modelo->save();

		$request->session()->flash('success', trans('mensajes.update_success'));

		return redirect()->route('admin.modelovehiculo.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	private function rules($id)
	{
		$rules = array(
			'descripcion' => 'required|unique:modelo_vehiculos,descripcion,'.$id,
			'tipovehiculo_id' => 'required',
			'marca_id' => 'required',
		);

		return $rules;
	}

}
