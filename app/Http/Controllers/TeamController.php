<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('team.index');
    }

    public function fetchAll()
    {
        $teams = Team::all();
        $output = '';
        $i = 0;
        if ($teams->count() > 0) {
            $output .= '<table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    NO
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Avatar
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Name
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Position
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Action
                </th>
              </tr>
            </thead>
            <tbody>';
            foreach ($teams as $team) {
                $output .= '<tr>
                    <td class="ps-4">
                        <p class="text-xs font-weight-bold mb-0">' . ++$i . '</p>
                    </td>
                    <td>
                        <div>
                            <img src="storage/teams/' . $team->avatar . '" class="img-thumbnail" width="100">
                        </div>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $team->name . '</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $team->position . '</p>
                    </td>
                    <td class="text-center">
                        <a href="#" id="' . $team->id . '" class="mx-3 editIcon" data-bs-toggle="modal"
                            data-bs-target="#editTeamModal">
                            <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <a href="#" id="' . $team->id . '" class="mx-3 deleteIcon">
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
        $file = $request->file('avatar');
        $fileName  = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/teams', $fileName);

        $teamData = [
            'name' => $request->name,
            'position' => $request->position,
            'avatar' => $fileName,
        ];
        Team::create($teamData);
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
        $team = Team::find($id);
        return response()->json($team);
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
        $fileName = '';
        $team = Team::find($request->team_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/teams', $fileName);
            if ($team->avatar) {
                Storage::delete('public/teams/' . $team->avatar);
            }
        } else {
            $fileName = $request->team_avatar;
        }

        $teamData = [
            'name' => $request->name,
            'position' => $request->position,
            'avatar' => $fileName,
        ];

        $team->update($teamData);
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
        $team = Team::find($id);
        if (Storage::delete('public/teams/' . $team->avatar)) {
            Team::destroy($id);
        }
    }
}
