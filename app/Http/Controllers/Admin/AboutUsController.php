<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AboutUsController extends Controller
{
    public function show()
    {
        $aboutUs = AboutUs::firstOrFail();
        return view('Admin.about-us.show', compact('aboutUs'));
    }

    public function edit()
    {
        $aboutUs = AboutUs::firstOrFail();
        return view('Admin.about-us.edit', compact('aboutUs'));
    }

    public function update(Request $request)
    {
        $aboutUs = AboutUs::firstOrFail();
        $request->validate([
            'title' => 'required|string',
            'link' => 'required|string',
            'body' => 'required|string'
        ]);

        $aboutUs->update([
            'title' => $request->title,
            'link' => $request->link,
            'body' => $request->body,

        ]);
        return redirect()->route('admin.about-us.show')->with('success', 'درباره ما با موفقیت ویرایش شد');
    }
}
