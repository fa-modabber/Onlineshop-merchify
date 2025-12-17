<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('Admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'boolean'
        ]);
        Category::create([
            'name' => $request->name,
            'status' => $request->status
        ]);
        return redirect()->route('admin.categories.index')->with('success', 'دسته بندی با موفقیت ایجاد شد');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'boolean'
        ]);

        $category->update([
            'name' => $request->name,
            'status' => $request->status
        ]);
        return redirect()->route('admin.categories.index')->with('success', 'دسته بندی با موفقیت آپدیت شد');
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('warning', 'دسته بندی با موفقیت حذف شد');
    }
}
