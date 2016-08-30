<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\TipoUnidadMedida;
use Illuminate\Http\Request;

class TipoUnidadMedidaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$unidades = TipoUnidadMedida::all();

		return view('admin/tipounidadmedida/index', compact('unidades'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/tipounidadmedida/new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules(null));

		$tipo_unidad = TipoUnidadMedida::create($request->all());

		$request->session()->flash('success', trans('mensajes.save_success'));

		return redirect()->route('admin.tipounidadmedida.index');
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
		$unidad = TipoUnidadMedida::findOrFail($id);
		return view('admin/tipounidadmedida/edit', compact('unidad'));
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

		$unidad = TipoUnidadMedida::findOrFail($id);

		$unidad->fill($request->all());
		$unidad->save();

		$request->session()->flash('success', trans('mensajes.update_success'));

		return redirect()->route('admin.tipounidadmedida.index');
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
			'descripcion' => 'required|unique:tipo_unidad_medidas,descripcion,'.$id
		);

		return $rules;
	}

}
