<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sa_la_Category;
use App\Sa_la_Manufacture;
use App\Sa_la_Product;
use DB;
class ProductController extends Controller
{
     public function createProduct() {
        $categories = Sa_la_Category::where('publicationStatus', 1)->get();
        $manufacturers = Sa_la_Manufacture::where('publicationStatus', 1)->get();
        return view('admin.product.createProduct', ['categories' => $categories, 'manufacturers' => $manufacturers]);
    }
	public function storeProduct(Request $request) {
        $this->validate($request, [
            'productName' => 'required',
            'productPrice' => 'required',
            'productImage' => 'required',
        ]);
	$productImage = $request->file('productImage');
        $name = $productImage->getClientOriginalName();
        $uploadPath = 'productImage/';
        $productImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        $this->saveProductInfo($request, $imageUrl);
        return redirect('/product/add')->with('message', 'Product info save sauccessfully');	

		}
		 protected function saveProductInfo($request, $imageUrl) {
        $product = new Sa_la_Product();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
    }
	 public function manageProduct() {
       $products = DB::table('sa_la__products')
                ->join('sa_la__categories', 'sa_la__products.categoryId', '=', 'sa_la__categories.id')
                ->join('sa_la__manufactures', 'sa_la__products.manufacturerId', '=', 'sa_la__manufactures.id')
//                    ->select('sa_la__products.id', 'sa_la__products.productName', 'sa_la__products.productPrice', 'sa_la__products.productQuantity', 'sa_la__products.publicationStatus', 'sa_la__categories.categoryName', 'sa_la__manufactures.manufacturerName')
                ->select('sa_la__products.*', 'sa_la__categories.categoryName', 'sa_la__manufactures.manufacturerName')
                ->get(); 
        return view('admin.product.manageProduct',['products' => $products]);
    }
	 public function viewProduct($id) {
        $productById = DB::table('sa_la__products')
                ->join('sa_la__categories', 'sa_la__products.categoryId', '=', 'sa_la__categories.id')
                ->join('sa_la__manufactures', 'sa_la__products.manufacturerId', '=', 'sa_la__manufactures.id')
//                    ->select('sa_la__products.id', 'sa_la__products.productName', 'sa_la__products.productPrice', 'sa_la__products.productQuantity', 'sa_la__products.publicationStatus', 'sa_la__categories.categoryName', 'sa_la__manufacturers.manufacturerName')
                ->select('sa_la__products.*', 'sa_la__categories.categoryName', 'sa_la__manufactures.manufacturerName')
                ->where('sa_la__products.id', $id)
                ->first();
        return view('admin.product.viewProduct', ['product' => $productById]);
    }
	 public function editProduct($id) {
//       ['productById' => $productById, 'categories' => $categories, 'manufacturers' => $manufacturers];

        $categories = Sa_la_Category::where('publicationStatus', 1)->get();
        $manufacturers = Sa_la_Manufacture::where('publicationStatus', 1)->get();
        $productById = Sa_la_Product::where('id', $id)->first();
//        return view('admin.product.editProduct', ['productById' => $productById, 'categories' => $categories, 'manufacturers' => $manufacturers]);
        return view('admin.product.editProduct')
                        ->with('productById', $productById)
                        ->with('categories', $categories)
                        ->with('manufacturers', $manufacturers);
    }
	public function updateProduct(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
		
       $product = Sa_la_Product::find($request->productId);
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
		
        
        return redirect('/product/manage')->with('message','product Information Update Successfully');
    
    }

    private function imageExistStatus($request) {
        $productById = Sa_la_Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {
            //unlink($productById->productImage);
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $productById->productImage;
        }
        return $imageUrl;
    }
	
	
	
	public function deleteProduct($id){
        $Product = Sa_la_Product::find($id);
        $Product->delete();
        return redirect('/product/manage')->with('message','Products Information Deleted Successfully');
    } 
}