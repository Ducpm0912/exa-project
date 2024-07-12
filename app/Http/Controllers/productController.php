<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function listProduct()
    {
        $listProduct = DB::table('products')
            ->join('category', 'products.category_id', '=', 'cate_id')
            ->select('products.pro_id', 'products.pro_name', 'category.cate_name', 'products.pro_price', 'products.pro_view')
            ->orderBy('pro_view', 'desc')
            ->get();
        return view('products.listProduct')->with(['listProduct' => $listProduct]);
    }
    public function addProduct()
    {
        $category = DB::table('category')
            ->select('cate_id', 'cate_name')
            ->get();
        return view('products/addProduct')->with([
            'category' => $category
        ]);
    }
    public function addPostProduct(Request $req)
    {
        $data = [
            'pro_name' => $req->pro_name,
            'category_id' => $req->category,
            'pro_price' => $req->pro_price,
            'pro_view' => $req->pro_view,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->insert($data);
        return redirect()->route('products.listProduct');
    }
    public function updateProduct($proId)
    {
        $category = DB::table('category')
            ->select('cate_id', 'cate_name')
            ->get();
        $pro = DB::table('products')->where('pro_id', $proId)->first();
        return view('products/updateProduct')->with([
            'category' => $category,
            'product' => $pro
        ]);
    }
    public function updatePostProduct(Request $req)
    {
        $data = [
            'pro_name' => $req->pro_name,
            'category_id' => $req->category,
            'pro_price' => $req->pro_price,
            'pro_view' => $req->pro_view,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        DB::table('products')->where('pro_id', $req->proId)->update($data);
        return redirect()->route('products.listProduct');
    }
    public function deleteProduct($proId)
    {
        DB::table('products')->where('pro_id', $proId)->delete();
        return redirect()->route('products.listProduct');
    }
    public function search(Request $req){
        $data = $req->input('search');
        $listProduct = DB::where('pro_name', 'like','%'. $data .'%')->get();
        return view('products.listProduct',compact('listProduct'));
    }
}
