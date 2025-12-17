<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('Admin.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('Admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'link_title' => 'required|string',
            'link_address' => 'required|string',
            'body' => 'required|string'
        ]);

        Slider::create([
            'title' => $request->title,
            'link_title' => $request->link_title,
            'link_address' => $request->link_address,
            'body' => $request->body
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'اسلایدر با موفقیت ساخته شد');
    }

    public function edit(Slider $slider)
    {
        return view('Admin.sliders.edit', compact('slider'));
    }
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|string',
            'link_title' => 'required|string',
            'link_address' => 'required|string',
            'body' => 'required|string'
        ]);

        $slider->update([
            'title' => $request->title,
            'link_title' => $request->link_title,
            'link_address' => $request->link_address,
            'body' => $request->body
        ]);

        return redirect()->route('admin.sliders.index')->with('success', 'اسلایدر با موفقیت ویرایش شد');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('warning', 'اسلایدر با موفقیت حذف شد');
    }
}
