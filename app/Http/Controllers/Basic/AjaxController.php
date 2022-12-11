<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function filter(Request $request)
    {
        $products = Product::select('products.*')
            ->leftJoin('product_properties', 'products.id', '=', 'product_properties.product_id')->select('products.*');

        if ($request->has('propertyValue')) {
            $x = count($request->propertyValue);
            $products->whereIn('product_properties.property_value_id', $request->propertyValue);
            $products->groupBy('products.id');
            $products->havingRaw("COUNT(DISTINCT product_properties.property_value_id) = $x");
        }

        if ($request->has('brand')) {
            $products->where('products.brand_id', $request->brand);
        }

        if ($request->has('subcategory')) {
            $products->where('products.subcategory_id', $request->subcategory);
        }

        $products->distinct('products.id');
        $productAll = $products->get();

        return view('basic/partials/products', compact('productAll'));


//        $product = Product::find(1);

//        $products = DB::table('products as p')
//            ->leftJoin('product_properties','p.id','=','product_properties.product_id')->select('p.*');
//
//        if($request->has('propertyValue')){
//            $x = count($request->propertyValue);
//            $products->whereIn('product_properties.property_value_id', $request->propertyValue);
//            $products->groupBy('p.id');
//            $products->havingRaw("COUNT(DISTINCT product_properties.property_value_id) = $x");
//        }


//        if($request->has('brand'))


//        dd($request->brand);
//        if ()
//        {
//            $product = Product::where('brand_id', $request->brand)->property()->get();
//            dd($product);
//            $product->property()->where('property_id', '=', 1);
//            dd($product->get());
//        }


//        $properties = $request->propertyValue;
//        $query = Product::whereHas('property', function (Builder $query) {
//            $query->where('property_id', 1);
//            $query->where('property_id', 2);
//        })->get();


//        $product = Product::with('brand', 'property')
//            ->join('product_properties as pp', 'pp.product_id', '=', 'products.id',)
//        ->whereIn('pp.property_id', $request->propertyValue)->get();

////        if($request->has('propertyValue')){
////            $propertyValueId = $request->propertyValue;
////            dd($propertyValueId);
//        }
    }

    //    public function ajaxRequestPost(Request $request)
//    {
//        echo 1;
//        $input = $request->all();
//        dd($input);
//        Log::info($input);
//
//        return response()->json(['success'=>'Got Simple Ajax Request.']);
//    }
}
