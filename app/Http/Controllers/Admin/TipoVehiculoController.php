<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\TipoVehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipos = TipoVehiculo::all();

		return view('admin.tipovehiculo.index', compact('tipos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.tipovehiculo.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules(null));

		$tipo = TipoVehiculo::create($request->all());

		$request->session()->flash('success', trans('mensajes.save_success'));

		return redirect()->route('admin.tipovehiculo.index');
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
		$tipo = TipoVehiculo::findOrFail($id);

		return view('admin.tipovehiculo.edit', compact('tipo'));
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

		$tipo = TipoVehiculo::findOrFail($id);

		$tipo->fill($request->all());
		$tipo->save();

		$request->session()->flash('success', trans('mensajes.update_success'));

		return redirect()->route('admin.tipovehiculo.index');
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
			'descripcion' => 'required|unique:tipovehiculos,descripcion,'.$id
		);

		return $rules;
	}

}
