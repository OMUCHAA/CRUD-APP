<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Detail::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $data = Detail::create($validated);
        return response([
            'data' => $data,
            'message' => 'User created Successfully'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data = Detail::findOrFail($id);
        return response()->json([
            'data' => $data,
            'message' => 'User fetched successfully'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $data = Detail::findOrFail($id);
        $data->update($request->all());

        return response()->json([
            'data' => $data,
            'message' => 'User Updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail, String $id)
    {
        $data = Detail::findOrFail($id);
        $data->delete();
        return response()->json([
            'message' => 'User Deleted successfully'
        ]);
    }
}
