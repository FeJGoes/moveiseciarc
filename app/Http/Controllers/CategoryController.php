<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Exception;
use Throwable;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        if($request->expectsJson()) {
            return $categories->isEmpty()
                    ? response()->json('',204)
                    : response()->json($categories);
        }

        return view('pages.admin.category.index')
                ->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.category.create')
                ->with([
                    'action' => route('categorias.store'),
                    'legend' => 'Cadastrar',
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = Category::create($request->all());
        } catch (Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        if($request->expectsJson()) {
            return empty($category)
                    ? response()->json('',204)
                    : response()->json($category);
        }

        Session::flash('feedback', [
            'type' => 'success',
            'message' => __('Categoria cadastrada com sucesso!')
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('pages.admin.category.edit')
                ->with([
                    'action' => route('categorias.update',['categoria' => $category]),
                    'legend' => 'Editar',
                    'method' => 'PUT',
                    'enctype' => 'application/x-www-form-urlencoded',
                    'category' => $category,
                    'buttonText' => 'Salvar',
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->all());

        DB::beginTransaction();
        try {
            $category->save();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        if($request->expectsJson()) {
            return empty($category)
                    ? response()->json('',204)
                    : response()->json($category);
        }

        Session::flash('feedback', [
            'type' => 'success',
            'message' => __('Categoria alterada com sucesso!')
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        DB::beginTransaction();

        try {
            $deleted = $category->delete();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();

            if ($request->expectsJson()) {
                return response()->json(['message' => $e->getMessage()]);
            }

            return back()->withErrors(['message' => $e->getMessage()]);
        }

        if ($request->expectsJson()) {
            return response()->json($deleted);
        }

        Session::flash('feedback', [
            'type' => 'warning',
            'message' => __('Categoria apagada com sucesso!')
        ]);

        return back();
    }
}
