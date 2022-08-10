<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class WebsiteModel extends Model
{

    public static function get_store_list()
    {
        $stores = DB::table('stores')
            ->select('store_name','store_id','slug')->paginate(36);
            
        return $stores;
    }
    public static function get_category_list()
    {
        $categories = DB::table('categories')
            ->select('cat_id','cat_name','slug')->paginate(18);
            
        return $categories;
    }
    public function get_special_events_info()
    {
        $event_name = DB::table('special_events_info')
            ->select('event_id','event_name','event_slug')
            ->get();
        return $event_name;
    }

    public function search_result($search)
    {
        $store_name_search = DB::table('stores')
            ->select('store_name','store_id','slug')
            ->where('store_name','LIKE', '%' .$search)
            ->orwhere('store_name','LIKE', '%' .$search. '%')
            ->orwhere('store_name','LIKE', $search. '%')
            ->get();
        return $store_name_search;
    }



    
    public function all_store()
    {
        $stores = DB::table('stores')
        ->select('store_name','totaloffers','slug')
        ->orderBy('store_name')
        ->get();
        return $stores;
    }
    public function store_filter($filter)
    {
        if($filter == '0-9'){
            $stores_filtered = DB::table('stores')
            ->select('store_name','totaloffers','slug')
            ->where('store_name', 'REGEXP', '^[0-9]')
            ->get();
            return $stores_filtered;
        }
        else{
            $stores_filtered = DB::table('stores')
            ->select('store_name','totaloffers','slug')
            ->where('store_name', 'LIKE', $filter.'%')
            ->get();
            return $stores_filtered;
        }
        
    }



    public function offers_by_category($slug)
    {
        $offers = DB::table('categories')
            ->join('cat_store', 'categories.cat_id', '=', 'cat_store.cat_id')
            ->join('store_offer', 'cat_store.store_id', '=', 'store_offer.store_id')
            ->join('offers', 'store_offer.offer_id', '=', 'offers.offer_id')
            ->select('offers.offer_title','offers.offer_images','offers.is_deal','offers.uses','offers.offer_code')
            ->where('categories.slug',$slug)->where('offers.offer_availability',1)->where('offers.offer_api_availability',1)->limit(9)->get();
            
            return $offers;
    }

    public function get_category_name($slug){

        $catname = DB::table('categories')
            ->select('categories.cat_name')
            ->where('categories.slug',$slug)->get();
            
            return $catname;

    }


    public function get_categories()
    {
        $categories = DB::table('categories')->select('cat_name','totalstores','slug')->orderBy('cat_name')->get();
        return $categories;
    }
    public function get_categories_byword($filter)
    {
        $categories_byword = DB::table('categories')->select('cat_name','totalstores','slug')->where('cat_name', 'LIKE', $filter.'%')->get();
        return $categories_byword;
        
    }


    public function store_information($store_slug)
    {
        $offers = DB::table('stores')
            ->join('store_offer', 'stores.store_id', '=', 'store_offer.store_id')
            ->join('offers', 'store_offer.offer_id', '=', 'offers.offer_id')
            ->select('stores.store_id', 'stores.store_name', 'stores.rating', 'stores.votes', 'stores.store_images', 'stores.store_description', 'stores.totaloffersall',   
                    'offers.offer_title', 'offers.uses', 'offers.offer_expiry', 'offers.is_deal', 'offers.offer_code')
            ->where('slug',$store_slug)->where('offers.offer_availability',1)->where('offers.offer_api_availability',1)->limit(9)->get();

        return $offers;
    }




}
