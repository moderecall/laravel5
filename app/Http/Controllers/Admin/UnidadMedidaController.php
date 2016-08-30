<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\TipoUnidadMedida;
use App\Models\Admin\UnidadMedida;
use Illuminate\Http\Request;

class UnidadMedidaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$unidades = UnidadMedida::all();

		return view('admin.unidadmedida.index', compact('unidades'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipos = array(
				'list' => TipoUnidadMedida::lists('descripcion', 'id'),
				'select' => null
		);

		return view('admin.unidadmedida.new', array(
				'tipos' => $tipos
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

		UnidadMedida::create($request->all());

		$request->session()->flash('success', trans('mensajes.save_success'));

		return redirect()->route('admin.unidadmedida.index');
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
		$unidad = UnidadMedida::findOrFail($id);

		$tipos = array(
				'list' => TipoUnidadMedida::lists('descripcion', 'id'),
				'select' => $unidad->tipounidadmedida_id
		);
		return view('admin.unidadmedida.edit', array(
			'unidad' => $unidad,
			'tipos' => $tipos,
		));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$this->validate($request, $this->rules($id));

		$unidad = UnidadMedida::findOrFail($id);

		$unidad->fill($request->all());
		$unidad->save();

		$request->session()->flash('success', trans('mensajes.update_success'));

		return redirect()->route('admin.unidadmedida.index');
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
			'descripcion' => 'required|unique:unidad_medidas,descripcion,'.$id,
			'siglas' => 'required|unique:unidad_medidas,siglas,'.$id.'|max:3',
			'tipounidadmedida_id' => 'required',

		);

		return $rules;
	}
}
