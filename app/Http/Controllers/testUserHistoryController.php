<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\testUserHistory;

class testUserHistoryController extends Controller
{

    public function index()
    {
        return testUserHistory::all();
    }

    public function show($id_user)
    {
        $testUserHistory = testUserHistory::where('id_user', '=', $id_user)
                                ->orderBy('created_at', 'desc')
                                ->first();
        return response()->json($testUserHistory, 200);
    }

    public function store(Request $request)
    {
        $testUserHistory = testUserHistory::create($request->all());
        return response()->json($testUserHistory, 201);
    }

    public function update(Request $request, testUserHistory $testUserHistory)
    {
        $testUserHistory->update($request->all());
        return response()->json($testUserHistory, 200);
    }

    public function delete(testUserHistory $testUserHistory)
    {
        $testUserHistory->delete();
        return response()->json(null, 204);
    }
}
