<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();

        if($request->expectsJson()) {
            return $products->isEmpty()
                    ? response()->json('',204)
                    : response()->json($products);
        }

        return view('pages.admin.product.index')
                ->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.product.create')
                ->with([
                    'action' => route('produtos.store'),
                    'legend' => 'Cadastrar',
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $product = Product::create($request->all());
        } catch (Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        if($request->expectsJson()) {
            return empty($product)
                    ? response()->json('',204)
                    : response()->json($product);
        }

        Session::flash('feedback', [
            'type' => 'success',
            'message' => __('Produto cadastrado com sucesso!')
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('pages.admin.product.edit')
                ->with([
                    'action' => route('produtos.update',['produto' => $product]),
                    'legend' => 'Editar',
                    'method' => 'PUT',
                    'enctype' => 'application/x-www-form-urlencoded',
                    'product' => $product,
                    'buttonText' => 'Salvar',
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());

        DB::beginTransaction();
        try {
            $product->save();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        if($request->expectsJson()) {
            return empty($product)
                    ? response()->json('',204)
                    : response()->json($product);
        }

        Session::flash('feedback', [
            'type' => 'success',
            'message' => __('Produto alterado com sucesso!')
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        DB::beginTransaction();

        try {
            $deleted = $product->delete();
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
            'message' => __('Produto apagado com sucesso!')
        ]);

        return back();
    }
}
