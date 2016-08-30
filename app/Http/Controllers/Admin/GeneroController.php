<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$generos = Genero::all();
		return view('admin.genero.index', compact('generos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.genero.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules(null));

		Genero::create($request->all());

		$request->session()->flash('success', trans('mensajes.save_success'));

		return redirect()->route('admin.genero.index');
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
		$genero = Genero::findOrFail($id);
		return view('admin.genero.edit', compact('genero'));
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

		$genero = Genero::findOrFail($id);

		$genero->fill($request->all());
		$genero->save();

		$request->session()->flash('success', trans('mensajes.update_success'));

		return redirect()->route('admin.genero.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Genero::destroy($id);

		return redirect()->route('admin.genero.index');

	}

	private function rules($id)
	{
		$rules = array(
			'descripcion' => 'required|unique:generos,descripcion,'.$id,
			'siglas' => 'required|unique:generos,siglas,'.$id.'|max:2'
		);

		return $rules;
	}
}
