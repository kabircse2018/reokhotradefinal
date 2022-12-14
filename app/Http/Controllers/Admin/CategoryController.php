<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

//__Index__//
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }


//__create__//
    public function create()
    {
        return view('admin.category.create');
    }

//__Store__//
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        $category = new category;
        $category->category_name = $request->category_name;
        $category->category_slug = Str::of($request->category_name)->slug('-');
        $category->category_description = $request->category_description;
        $category->menu_status = $request->menu_status;
        $category->save();

        $notification = array('message' => 'Category Added Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

//__Edit__//
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
    }


//__Update__//
    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->category_name = $request->category_name;
        $categories->category_slug = Str::of($request->category_name)->slug('-') ;
        $categories->category_description = $request->category_description;
        $categories->menu_status = $request->menu_status;
        $categories->update();

        $notification = array('message' => 'Category Updated Successfully', 'alert-type' => 'success');
        return redirect('admin/category')->with($notification);

    }

//Destroy
    public function delete($id)
    {
        // $categories = DB::table('categories')->where('id', $id)->delete();
        $categories = Category::find($id);
        $categories->delete();

        $notification = array('message' => 'Category Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }


}
