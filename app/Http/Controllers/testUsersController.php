<?php

namespace App\Http\Controllers;

use Request;
use App\testUsers;
use App\testUserHistory;
use Validator;
use App\Rules\Testusername;

class testUsersController extends Controller
{

    public function index()
    {
        return testUsers::all();
    }

    public function show($user_id)
    {
        return testUsers::find($user_id);
    }

    public function lastpos($user_id)
    {
        $testUser = testUsers::find($user_id);
        $testUserLastPos = $testUser->position()
            ->orderBy('created_at', 'desc')
            ->first();
        $merge = ['id'          => $testUser->id
                , 'username'    => $testUser->username
                , 'email'       => $testUser->email
                , 'phone'       => $testUser->phone
                , 'long'        => $testUserLastPos->long
                , 'lat'         => $testUserLastPos->lat
                , 'url'         => 'https://www.google.co.uk/maps/@'.$testUserLastPos->lat.','.$testUserLastPos->long.'z'];
        return response()->json($merge, 200);
    }

    public function store(Request $request)
    {
        $newUser = $request::all();
        $validation = Validator::make($newUser, [
            'username'  => ['required', 'min:3', 'max:12', 'unique:test_users,username', new Testusername],
            'password'  => 'required',
            'email'     => 'required|unique:test_users,email',
            'phone'     => 'required|unique:test_users,phone'
        ]);

        if($validation->fails()) {
            return response()->json($validation->messages(), 200);
        } else{
            $testUser = testUsers::create( $newUser );
        }

        return response()->json($testUser, 201);
    }

    public function update(Request $request, testUsers $testUser)
    {
        $testUser->update($request->all());
        return response()->json($testUser, 200);
    }

    public function delete(testUsers $testUser)
    {
        $testUser->delete();
        return response()->json(null, 204);
    }

}
