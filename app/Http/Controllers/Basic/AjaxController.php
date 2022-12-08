<?php

namespace App\Http\Controllers\Basic;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Log;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    public function ajaxRequestPost(Request $request)
    {
        echo 1;
        $input = $request->all();
        dd($input);
        Log::info($input);

        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

    public function filter(Request $request)
    {
//        $product = Product::find(1);

        $products = DB::table('products as p')
            ->leftJoin('product_properties','p.id','=','product_properties.product_id')->select('p.*');

        if($request->has('propertyValue')){
            $x = count($request->propertyValue);
            $products->whereIn('product_properties.property_value_id', $request->propertyValue);
            $products->groupBy('p.id');
            $products->havingRaw("COUNT(DISTINCT product_properties.property_value_id) = $x");
        }
        $result = $products->get();

        dd($result);

        if($request->has('brand'))
        dd($products);

//        dd($request->brand);
//        if ()
//        {
//            $product = Product::where('brand_id', $request->brand)->property()->get();
//            dd($product);
//            $product->property()->where('property_id', '=', 1);
//            dd($product->get());
//        }

        dd($query);
//        $properties = $request->propertyValue;
        $query = Product::whereHas('property', function (Builder $query) {
            $query->where('property_id', 1);
            $query->where('property_id', 2);
        })->get();
        dd($query);

        $product = Product::with('brand', 'property')
            ->join('product_properties as pp', 'pp.product_id', '=', 'products.id',)
        ->whereIn('pp.property_id', $request->propertyValue)->get();
        dd($product);
        if($request->has('propertyValue')){
            $propertyValueId = $request->propertyValue;
            dd($propertyValueId);
        }
    }
}
