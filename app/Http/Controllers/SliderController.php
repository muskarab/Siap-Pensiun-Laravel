<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('slider.index');
    }

    public function fetchAll()
    {
        $sliders = Slider::all();
        $output = '';
        $i = 0;
        if ($sliders->count() > 0) {
            $output .= '<table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    ID
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Image
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Header
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Content
                </th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Action
                </th>
              </tr>
            </thead>
            <tbody>';
            foreach ($sliders as $slider) {
                $output .= '<tr>
                    <td class="ps-4">
                        <p class="text-xs font-weight-bold mb-0">' . ++$i . '</p>
                    </td>
                    <td>
                        <div>
                            <img src="storage/sliders/' . $slider->image . '" class="img-thumbnail" width="200">
                        </div>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $slider->header . '</p>
                    </td>
                    <td class="text-center">
                        <p class="text-xs font-weight-bold mb-0">' . $slider->content . '</p>
                    </td>
                    <td class="text-center">
                        <a href="#" id="' . $slider->id . '" class="mx-3 editIcon" data-bs-toggle="modal"
                            data-bs-target="#editSliderModal">
                            <i class="fas fa-user-edit text-secondary"></i>
                        </a>
                        <a href="#" id="' . $slider->id . '" class="mx-3 deleteIcon">
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
        $file = $request->file('image');
        $fileName  = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/sliders', $fileName);

        $sliderData = [
            'header' => $request->header,
            'content' => $request->content,
            'image' => $fileName,
        ];
        Slider::create($sliderData);
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
        $slider = Slider::find($id);
        return response()->json($slider);
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
        $slider = Slider::find($request->slider_id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/sliders', $fileName);
            if ($slider->image) {
                Storage::delete('public/sliders/' . $slider->image);
            }
        } else {
            $fileName = $request->slider_image;
        }

        $sliderData = [
            'header' => $request->header,
            'content' => $request->content,
            'image' => $fileName,
        ];

        $slider->update($sliderData);
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
        $slider = Slider::find($id);
        if (Storage::delete('public/sliders/' . $slider->image)) {
            Slider::destroy($id);
        }
    }
}
