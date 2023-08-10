<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PracticeController extends Controller
{
//    function PracticeAction(Request $request){
//        return Brand::create($request->input());
//    }



//    function PracticeAction(Request $request){
//     return Brand::where('id','=',$request->id)
//         ->update($request->input());
//    }


    // function PracticeAction(Request $request){
    //     return Brand::updateOrCreate(
    //       ['brandName'=>$request->name],
    //       $request->input()
    //     );
    // }

//    function PracticeAction(Request $request){
//        return Brand::where("id",'=',$request->id)->delete();
//    }



//    function PracticeAction(Request $request){
//        return Product::where('id','=',$request->id)
//            ->increment('price',1000);
//    }

//    function PracticeAction(Request $request){
//        return Product::where('id','=',$request->id)
//            ->Decrement('price',1000);
//    }


//    function PracticeAction(Request $request){
////        return Product::get();
////        return Product::all();
////        return Product::first();
//        return Product::find(10);
//    }



//    function PracticeAction(Request $request){
//        return Product::pluck('price','title');
//    }

//    function PracticeAction(Request $request){
//        $count = Product::count('price');
//        $avg = Product::avg('price');
//        $sum = Product::sum('price');
//        $max = Product::max('price');
//        $min = Product::min('price');
//
//        return [
//            'count' => $count,
//            'avg' => $avg,
//            'sum' => $sum,
//            'max' => $max,
//            'min' => $min,
//        ];
//    }

//    function PracticeAction(Request $request){
////        return Product::select('title','price')->get();
//        return Product::select('title')->distinct()->get();
//       return DB::table('products')->select('title')->distinct()->get();
//    }


//    function PracticeAction(Request $request){
////        return Product::where('price','=','3000')->get();
////        return Product::where('price','!=','2000')->get();
////        return Product::where('price','<','3000')->get();
////        return Product::where('title','LIKE','%Car%')->get();
////        return Product::where('title','LIKE','%New%')->get();
//        return Product::where('title','NOT LIKE','%Shoe%')->get();
//    }


//    function PracticeAction(Request $request){
////        return Product::wherebetween('price',[1,500])->get();
////        return Product::wherebetween('price',[1,500])->get();
//        return Product::wherenotbetween('price',[1,500])->get();
//    }


//    function PracticeAction(Request $request){
////        return Product::wherein('price',[1,500])->get();
//        return Product::wherenotin('price',[1,500])->get();
//    }


//    function PracticeAction(Request $request){
////        return Product::wherenull('price')->get();
//        return Product::wherenotnull('price')->get();
//    }


//    function PracticeAction(Request $request){
////        return Brand::wheredate('created_at','=','2023-02-19')->get();
////        return Brand::wheremonth('created_at','=','02')->get();
////        return Brand::whereday('created_at','=','19')->get();
////        return Brand::whereyear('created_at','=','2023')->get();
//
//        return Brand::wheretime('created_at','=','14:05:12')->get();
//    }


//    function PracticeAction(Request $request){
////        return Product::orderby('price','desc')->get();
//        return Product::orderby('price','asc')->get();
//    }


//    function PracticeAction(Request $request){
//        return Brand::inrandomorder()->first();
//    }

//    function PracticeAction(Request $request){
////        return Brand::latest()->get();
//        return Brand::oldest()->get();
//    }

//    function PracticeAction(Request $request){
//        return Product::groupby('price')
//            ->having('price','>',2000)
//            ->get();
//    }

//    function PracticeAction(Request $request){
//        return Product::skip(10)
//            ->limit(2)
//            ->get();
//    }


//    function PracticeAction(Request $request){
//        return Product::simplepaginate(5);
//    }

//    function PracticeAction(Request $request){
////        return Product::paginate(5);
//        return Product::paginate(
//            $perPage = 10,
//            $columns = ['*'],
//            $pageName = "Hello Page"
//        );
//    }


    function PracticeAction(Request $request){
        $allData = Product::join('brands','products.brand_id','=','brands.id')
            ->join('categories','products.category_id','=','categories.id')
            ->get();
        return $allData;
    }



}
