<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    function getData($id=null){
        $data = $id ? product::find($id) : product::all();
        return view('showData',['collection'=>$data]);
    }

    function postData(Request $req){
        $data = new product;
        $data->id=$req->id;
        $data->name=$req->name;
        $data->price=$req->price;
        $data->category=$req->category;
        $result = $data->save();
        if($result){
            return redirect('api/getData');
        }else{
            return ['result'=>'Insert Opration Failed'];
        }
    }

    function update($id){
        $data = product::find($id);
        return view('editProduct',['data'=>$data]);
    }

    function editData(Request $req){
        $data = product::find($req ->id);
        // $data->id=$req->id;
        $data->name=$req->name;
        $data->price=$req->price;
        $data->category=$req->category;
        $result = $data->save();
        if($result){
            return redirect('getData');
        }else{
            return ['result'=>'update opration failed'];
        }
    }

    function delete($id){
        $data = product::find($id);
        $result = $data->delete();
        if($result){
            return redirect('api/getData');
        }
        else{
            return ['result'=>'delete opration failed'];
        }
    }

    function search($name){
        return product::where('name',"like","%".$name."%")->get();
    }
}
