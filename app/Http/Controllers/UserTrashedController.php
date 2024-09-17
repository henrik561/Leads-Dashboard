<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserTrashedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::onlyTrashed()->with('roles', 'sites')->get();

        return Inertia::render('Admin/Users/Trashed/Index', [
            'users' => $users,
            'notTrashedUserCount' => User::where('id', '!=', Auth::user()->id)->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::withTrashed()->find($id);

        if (! $user) {
            return redirect()->route('admin.users.trashed.index');
        }

        $user->restore();

        return redirect()->route('admin.users.trashed.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::withTrashed()->find($id);

        if (! $user) {
            return redirect()->route('admin.users.trashed.index');
        }

        $user->forceDelete();

        return redirect()->route('admin.users.trashed.index');
    }
}
