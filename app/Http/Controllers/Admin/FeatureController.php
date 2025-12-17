<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('Admin.features.index', compact('features'));
    }

    public function create()
    {
        return view('Admin.features.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string',
            'body' => 'required|string'
        ]);

        Feature::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('admin.features.index')->with('success', 'ویژگی با موفقیت ساخته شد');
    }

    public function edit(Feature $feature)
    {
        return view('Admin.features.edit', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string',
            'body' => 'required|string'
        ]);

        $feature->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('admin.features.index')->with('success', 'ویژگی با موفقیت ویرایش شد');
    }

    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')->with('warning', 'ویژگی با موفقیت حذف شد');
    }
}
