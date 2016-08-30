<?php namespace App\Http\Controllers\Admin;

use App\Models\Admin\EstadoFlete;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EstadoFleteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$estados = EstadoFlete::all();

		return view('admin.estadoflete.index', compact('estados'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.estadoflete.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules(null));

		EstadoFlete::create($request->all());

		$request->session()->flash('success', trans('mensajes.save_success'));

		return redirect()->route('admin.estadoflete.index');
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
		$estado = EstadoFlete::findOrFail($id);

		return view('admin.estadoflete.edit', compact('estado'));
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

		$estado = EstadoFlete::findOrFail($id);

		$estado->fill($request->all());
		$estado->save();

		$request->session()->flash('success', trans('mensajes.update_success'));

		return redirect()->route('admin.estadoflete.index');
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
			'descripcion' => 'required|unique:estado_fletes,descripcion,'.$id,
		);

		return $rules;
	}

}
