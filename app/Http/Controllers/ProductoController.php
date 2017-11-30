<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class ProductoController extends Controller
{
	/**
	 * Variable to model
	 *
	 * @var producto
	 */
	protected $model;

	/**
	 * Create instance of controller with Model
	 *
	 * @return void
	 */
	public function __construct(Producto $model)
	{
		$this->middleware('auth');
		$this->model = $model;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos = $this->model->paginate();

		return view('productos.index', compact('productos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
	    $validatedData = $request->validate([
            'codigo' => 'required|string|min:5',
            'nombreproducto' => 'required|string|min:10',
            'descripcion' => 'required|string|min:6',
        ]);
		//Log::info('ProductoController->store' . $validatedData );
	
		$inputs = $request->all();
		$this->model->create($inputs);

		return redirect()->route('productos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producto = $this->model->findOrFail($id);
		
		return view('productos.show', compact('producto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = $this->model->findOrFail($id);
		
		return view('productos.edit', compact('producto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{

	    $validatedData = $request->validate([
            'codigo' => 'required|string|min:5',
            'nombreproducto' => 'required|string|min:10',
            'descripcion' => 'required|string|min:6',
        ]);
		//Log::info('ProductoController->update' . $validatedData );

		$inputs = $request->all();

		$producto = $this->model->findOrFail($id);		
		$producto->update($inputs);

		return redirect()->route('productos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->model->destroy($id);

		return redirect()->route('productos.index')->with('message', 'Item deleted successfully.');
	}


}