<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product;
use App\Models\Admin\PropertyValue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

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
//        dd($request->brand);


        if ($request->has('brand'))
        {
            $product = Product::where('brand_id', $request->brand)->property()->get();
            dd($product);
            $product->property()->where('property_id', '=', 1);
            dd($product->get());
        }




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
