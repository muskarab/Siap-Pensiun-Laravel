<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonies = Testimoni::all();
        return view('testimoni.index');
    }

    public function fetchAll()
    {
        $testimonies = Testimoni::all();
        $output = '';
        $i = 0;
        if ($testimonies->count() > 0) {
            $output .= '<table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Avatar</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Text</th>
                            <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>';
            foreach ($testimonies as $testimoni) {
                // $output .= '<tr>
                //             <td>
                //                 <div class="d-flex px-2 py-1">
                //                 <div>
                //                     <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                //                 </div>
                //                 <div class="d-flex flex-column justify-content-center">
                //                     <h6 class="mb-0 text-sm">' . $testimoni->name . '</h6>
                //                     <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                //                 </div>
                //                 </div>
                //             </td>
                //             <td>
                //                 <p class="text-xs font-weight-bold mb-0">' . $testimoni->text . '</p>
                //             </td>
                //             <td class="align-middle text-center text-sm">
                //                 <span class="badge badge-sm bg-gradient-success">Online</span>
                //             </td>
                //             <td class="align-middle text-center">
                //                 <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                //             </td>
                //             <td class="text-center">
                //                 <a href="#" id="' . $testimoni->id . '" class="mx-3 editIcon" data-bs-toggle="modal"
                //                     data-bs-target="#editTestimoniModal">
                //                     <i class="fas fa-user-edit text-secondary"></i>
                //                 </a>
                //                 <a href="#" id="' . $testimoni->id . '" class="mx-3 deleteIcon">
                //                     <i class="fas fa-trash text-secondary"></i>
                //                 </a>
                //             </td>
                //             </tr>';

                $output .= '<tr>
                    <td class="ps-4">
                        <p class="text-xs font-weight-bold mb-0">' . ++$i . '</p>
                    </td>
                    <td>
                        <div>
                            <img src="storage/testimonies/' . $testimoni->avatar . '" class="img-thumbnail" width="100">
                        </div>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $testimoni->name . '</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . Str::limit($testimoni->text, 50, $end = '...') . '</p>
                    </td>
                    <td class="text-center">
                        <a href="#" id="' . $testimoni->id . '" class="mx-3 editIcon" data-bs-toggle="modal"
                            data-bs-target="#editTestimoniModal">
                            <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <a href="#" id="' . $testimoni->id . '" class="mx-3 deleteIcon">
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
        $file->storeAs('public/testimonies', $fileName);

        $testimoniData = [
            'name' => $request->name,
            'text' => $request->text,
            'avatar' => $fileName,
        ];
        Testimoni::create($testimoniData);
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
        $testimoni = Testimoni::find($id);
        return response()->json($testimoni);
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
        $testimoni = Testimoni::find($request->testimoni_id);
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/testimonies', $fileName);
            if ($testimoni->avatar) {
                Storage::delete('public/testimonies/' . $testimoni->avatar);
            }
        } else {
            $fileName = $request->testimoni_avatar;
        }

        $testimoniData = [
            'name' => $request->name,
            'text' => $request->text,
            'avatar' => $fileName,
        ];

        $testimoni->update($testimoniData);
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
        $testimoni = Testimoni::find($id);
        if (Storage::delete('public/testimonies/' . $testimoni->avatar)) {
            Testimoni::destroy($id);
        }
    }
}
