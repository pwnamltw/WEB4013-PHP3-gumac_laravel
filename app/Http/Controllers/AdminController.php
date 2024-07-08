<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\categories;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Symfony\Contracts\Service\Attribute\Required;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function ProductList(){
        $products = products::products()->paginate(5);
        return view('admin.product-list', compact('products'));
    }
    
    
    public function ProductAdd(){
        $show_categories = categories::showCata();
        return view('admin.product-add',compact('show_categories'));
    }

    public function productpost(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'price' => 'required|numeric',
            'name' => 'required|string',
            'sale' => 'nullable|numeric',
            'soluong' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'nullable|string',
            'img' => 'required|file|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
      

        // $data = $request->all();
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $data['img'] = $imageName;
        }
        products::create($data);
        return redirect()->route('product-list');
    }
    
    public function productdelete($product_id)
    {
        $product = products::find($product_id);
        $imgPath="uploaded/".$product->img;
        if(file_exists($imgPath)){
            unlink($imgPath);
        }
        $product->delete();
        return redirect()->route('product-list');
    }
    
    
    public function productupdate($product_id){
        $show_categories = categories::showCata();
        $product = products::find($product_id);
        return view('admin.product-update', compact('show_categories','product'));
    }

    public function productpostupdate(Request $request)
    { 
         $data = $request->validate([
            'price' => 'required|numeric',
            'name' => 'required|string',
            'sale' => 'nullable|numeric',
            'soluong' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'nullable|string',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,svg|max:2048',
            'id'=> 'required|integer|exists:products,id'
        ]);
       
        $product_id=$request->id;
        $product = products::find($product_id);
        
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $data['img'] = $imageName;
            $imgPath="uploaded/".$product->img;
            if(file_exists($imgPath)){
                unlink($imgPath);
            }
        }
        $product->update($data);
        return redirect()->route('product-list');
    }
  
    
    // Category
   
    public function CategoryList(){
        $show_categories = categories::showCata();
        $categoryList = [];
        foreach ($show_categories as $category) {
            $productCount = Products::where('category_id', $category->id)->count();
            $category->productCount = $productCount;
            $categoryList[] = $category;
        }
        return view('admin.category-list',compact('show_categories'));
    }
    public function CategoryAdd(){
        $show_categories = categories::showCata();
        return view('admin.category-add',compact('show_categories'));
    }

    public function CategoryPost(Request $request){
        $data = $request->validate([
            'name' => 'required|string'
        ]);
        categories::create($data);
        return redirect()->route('category-list');
    }
    public function CategoryDelete($category_id){
        $categories = categories::find($category_id);
        $categories->delete();
        return redirect()->route('category-list');

    }
 
    public function categoryupdate($category_id){
        $categories = categories::find($category_id);
        return view('admin.category-update',compact('categories'));
    }
    public function categorypostupdate(Request $request)
    {
       
        // dd($request->all());
        $data= $request->validate([
            
            'name' => 'required|string',
            'sethome' => 'required|numeric',
        ]);
       
        $category_id = $request->category_id;
        $categories = categories::find($category_id);
        $categories->update($data);
        return redirect()->route('category-list');
    }

    // user

    public function UserList()
    {
        $listuser = user::all();
       return view('admin.userlist',compact('listuser'));
    }
    public function UserDelete(Request $request)
    {
        $id=$request->id;
        $listuser = user::find($id);
        $listuser->delete();
        return redirect()->route('user-list');
    }

    public function donhang()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('admin.donhang',compact('orders'));
    }
}   

