<?php

namespace App\Http\Controllers\Functionalities;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function addColorView()
    {
        $color = color::all();
        return view('admin.color-master',['colors'  => $color]);
    }

    public function addColor(Request $request)
    {
        $request->validate([
            'ColorName' => 'required',
        ]);
        
        $colorname = $request->input('ColorName');
        $slug = Str::slug($colorname);

        $color = new color;

        $color->name = $request->ColorName;
        $color->slug = $slug;

        $color->save();
        return redirect()->route('add.colorview')->with('success', 'Color added successfully.');
    }
}
