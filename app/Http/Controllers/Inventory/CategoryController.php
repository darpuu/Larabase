<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\modules\inventory\entity\category;

class CategoryController extends Controller
{
    public function Add()
    {
        return view("inventory.category.add");
    }
    public function AddPost()
    {
        $name = request("name");
        $code = request("code");
        //Insert into database
        $category = new Category();
        $category->name = $name;
        $category->code = $code;
        $category->save();
        return redirect("/inventory/category");
    }
    public function Index()
    {
        $data = category::all();
        return view("inventory.category.index", [
            'categoryList' => $data
        ]);
    }
    public function edit()
    {
        //Data Retrieval
        $id = request('id');
        $category = Category::find($id);
        return view(
            "inventory.category.edit",
            [
                'category' => $category
            ]
        );
    }
    public function EditPost()
    {
        $id = request('id');
        $name = request('name');
        $code = request('code');

        $category = category::find($id);
        $category->name = $name;
        $category->code = $code;
        $category->save(); //update in database
        return redirect('/inventory/category');
    }

    public function Delete()
    {
        $id = request('id');
        $category = category::find($id);
        $category->delete();
        Alert::SetSuccessMessage("Category deleted");
        return redirect("/inventory/category");
    }
}
