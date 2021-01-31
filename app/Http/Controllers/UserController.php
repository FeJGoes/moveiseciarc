<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.user.index')
                ->with(['users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.user.create')
                ->with([
                    'action' => route('usuarios.store'),
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
            User::create($request->all());
        } catch (Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        Session::flash('feedback', [
            'type' => 'success',
            'message' => __('Usuário cadastrado com sucesso!')
        ]);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.admin.user.edit')
                ->with([
                    'action' => route('usuarios.update',['user' => $user->id]),
                    'legend' => 'Editar',
                    'method' => 'PUT',
                    'enctype' => 'application/x-www-form-urlencoded',
                    'user' => $user,
                    'buttonText' => 'Salvar',
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->fill($request->all());

        try {
            DB::beginTransaction();
            $user->save();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        Session::flash('feedback', [
            'type' => 'success',
            'message' => __('Usuário alterado com sucesso!')
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            DB::beginTransaction();
            $user->delete();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        Session::flash('feedback', [
            'type' => 'success',
            'message' => __('Usuário apagado com sucesso!')
        ]);

        return back();
    }
}
