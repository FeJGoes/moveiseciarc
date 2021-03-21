<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();

        if($request->expectsJson()) {
            return $users->isEmpty()
                    ? response()->json('',204)
                    : response()->json($users);
        }

        return view('pages.admin.user.index')
                ->with(['users' => $users]);
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
     * @param  \App\Http\Requests\UsuarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        try {
            $user = User::create($request->all());
        } catch (Exception $e) {
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        if($request->expectsJson()) {
            return empty($user)
                    ? response()->json('',204)
                    : response()->json($user);
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
                    'action' => route('usuarios.update',['user' => $user]),
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
     * @param  \App\Http\Requests\UsuarioRequest $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioRequest $request, User $user)
    {
        $user->fill($request->all());

        DB::beginTransaction();
        try {
            $user->save();
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            return back()->withErrors(['message' => $e->getMessage()]);
        }

        if($request->expectsJson()) {
            return empty($user)
                    ? response()->json('',204)
                    : response()->json($user);
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
    public function destroy(Request $request, User $user)
    {
        DB::beginTransaction();
        try {
            $deleted = $user->delete();
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
            'message' => __('Usuário apagado com sucesso!')
        ]);

        return back();
    }
}
