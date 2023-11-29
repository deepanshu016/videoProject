<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRequest;
use App\Models\Category;
use DataTables;

class CategoriesController extends Controller
{

    // Terms Condition Page
    public function index()
    {
        return view('backend.categories.list');
    }

    public function addCategory()
    {
        return view('backend.categories.add-edit');
    }

    public function categoriesList(Request $request)
    {
       try{
            if ($request->ajax()) {
                $categoriesList = Category::orderBy('id','DESC')->get();
                return Datatables::of($categoriesList)
                        ->addIndexColumn()
                        ->editColumn('category', function($row){
                            return $row->category_name;
                        })
                        ->make();
            }
       }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>'')); 
        }
    }



    // saveCategory Data
    public function saveCategory(CategoriesRequest $request) {
        try{
            if($request->category_id == ''){
                $category = new Category();
            }else{
                $category = Category::where('id',$request->category_id)->first();
            }
            $category->category_name = $request->category_name;
            $category->description = $request->description;
            $category->save();
            if($category->id){
                return response()->json(array('status'=> 'success','msg'=>'Data added successfully','url'=>url('admin/categories')));
            }
            return response()->json(array('status'=> 'error','msg'=>'Something went wrong','url'=>'')); 
        }catch(Exception $e){
            \Log::debug($e->getMessage());
            return response()->json(array('status'=> 'error','msg'=>$e->getMessage(),'url'=>'')); 
        }
    }
}
