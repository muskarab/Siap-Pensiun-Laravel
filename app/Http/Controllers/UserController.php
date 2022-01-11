<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        $roles = Role::get();
        return view('user.index', compact('users', 'roles'));
    }

    public function fetchAll()
    {
        $users = User::all();
        $output = '';
        $i = 0;
        if ($users->count() > 0) {
            $output .= '<table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    NO
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Photo
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Name
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Email
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    role
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Action
                </th>
              </tr>
            </thead>
            <tbody>';
            foreach ($users as $user) {
                $output .= '<tr>
                    <td class="ps-4">
                        <p class="text-xs font-weight-bold mb-0">' . ++$i . '</p>
                    </td>
                    <td>
                        <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                        </div>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $user->name . '</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $user->email . '</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $user->role->name . '</p>
                    </td>
                    <td class="text-center">
                        <a href="#" id="' . $user->id . '" class="mx-3 editIcon" data-bs-toggle="modal"
                            data-bs-target="#editUserModal">
                            <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <a href="#" id="' . $user->id . '" class="mx-3 deleteIcon">
                            <i class="fas fa-trash text-secondary"></i>
                        </a>
                    </td>
                </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userData = [
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        User::create($userData);
        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $userData = [
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $user->update($userData);
        return response()->json([
            'status' => 200,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $user = User::destroy($id);
    }
}
