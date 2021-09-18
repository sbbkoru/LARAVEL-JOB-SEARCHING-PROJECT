<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categoryList = Category::where('status', '<>', 't')->paginate(10);
        $page_title = 'Categories';

        $data_ = [
            'title' => $page_title,
            'categoryList' => $categoryList

        ];
        return view('panel.category.index', $data_);
    }

    public function edit(Request $request){



        $data_ = [
            'title' => 'Add/Edit Category',
        ];
        if($request->input('category_id')){
            $data_['category'] = Category::findOrFail($request->input('category_id'));
        } else {
            $data_['category'] = new Category();
        }

        return view('panel.category.edit', $data_);
    }
    public function delete(Request $request){

        $category = Category::findOrFail($request->input('category_id'));
        $category->status = 't';
        $category->save();

        return redirect()->route('panel.category.index')->with('categorydelete', 'delete');
    }

    // Saving
    public function save(Request $request){

        $category = Category::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'name' => $request->name,
                'code' => $request->code,
            ]
            );


        // JUST CREATING
        /* Company::create($request->all()); */
        return redirect()->route('panel.category.index')->with('categoryupdate', 'update');
    }
}
