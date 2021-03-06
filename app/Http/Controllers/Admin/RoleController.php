<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreRole;

class RoleController extends Controller
{

    public function __construct(){

        $this->authorizeResource(Role::class, null, [
            'except' => ['destroy'],
        ]);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];

        if (Auth::user()->isDeveloper()) {
            $data['roles'] = Role::withTrashed()->get();
        } else {
            $data['roles'] = Role::all();
        }

        return view('role.admin.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRole $request, Role $role)
    {
        $role = Role::create($request->validated());
        
        return redirect()->route('admin.role.show', $role->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('role.admin.show')->with(['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('role.admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $role = Role::withTrashed()->findOrFail($id);
        
        if($role->deleted_at == null){
            $role->delete();
        } else {
            $this->authorize('forceDelete', $role);
            $role->forceDelete();
        }
        
        return back();
    }
    
    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function restore(int $id)
    {
        $role = Role::withTrashed()->findOrFail($id);
        
        $this->authorize('restore', $role);
        
        $role->deleted_at = null;
        
        $role->update();
        
        return back();
    }
}
