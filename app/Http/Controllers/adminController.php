<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;

class adminController extends Controller
{
    public function usercontroller()
    {
        $data = User::all();
        return view('admin.users', ["data" => $data]);
    }

    public function deleteUser($id)

    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        return view('admin.foodmenu');
    }
    public function foodUpload(Request $req)
    {

        $data = new food;
        $image = $req->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $req->image->move("foodImage", $imagename);

        $data->foodImage = $imagename;
        $data->foodName = $req->title;
        $data->foodPrice = $req->price;

        $data->foodDec = $req->des;
        $data->save();
        return redirect()->back();
    }

    public function foodMenuList()
    {
        $list = food::all();
        return view("admin.foodmenu", ["list" => $list]);
    }
    public function deleteFoodList($id)
    {
        $list = food::find($id);
        $list->delete();
        return redirect()->back()->with('success', 'food deleted successfully');
    }
    public function updateview($id)
    {
        $data = food::find($id);
        return view('admin.updateview', ["data" => $data]);
    }
    public function updateList(Request $req, $id)
    {
        $data = food::find($id);
        $image = $req->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $req->image->move("foodImage", $imagename);

        $data->foodImage = $imagename;
        $data->foodName = $req->title;
        $data->foodPrice = $req->price;
        $data->foodDec = $req->des;
        $data->save();
        return redirect()->back()->with('success', 'food updated successfully');
    }
}
