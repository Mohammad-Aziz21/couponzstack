<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminModel extends Model
{
    public function get_networks()
    {
        $networks = DB::table('networks')->select('nid','network_name')->get();
        return $networks;
    }
    public function add_network($request)
    {
        $network_name = $request->input('network_name');
        DB::table('networks')->insert(['network_name'=>$network_name]);
    }
    public function network_placeholder($nid)
    {
        $placeholder = DB::table('networks')->select('network_name','nid')->where('nid',$nid)->get();
        return $placeholder;
    }
    public function edit_network($request,$nid)
    {
        $network_name = $request->input('network_name');
        DB::table('networks')->where('nid',$nid)->update(['network_name'=>$network_name]);
    }

    public function get_stores_by_network($nid)
    {
        $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('network_id',$nid)
            ->paginate(20);

        return $store;
    }

     public function get_network_name($nid)
    {
        $network_name = DB::table('networks')
            ->select('network_name')
            ->where('nid',$nid)
            ->get();
        return $network_name;
    }


    public function fetch_store_details($store_id)
    {
        $fetch_store_details = DB::table('stores')->select('store_id','network_id','advertiser_id','network_id','store_api_availability','store_name','store_description','store_about','store_availability','is_featured','delete_status')
        ->where('store_id', $store_id)->get();
       return $fetch_store_details;
    }

    
    

    public function edit($request,$store_id)
    {
        $name =$request->input('store_name');
        $description=$request->input('store_description');
        $about=$request->input('store_about');
        $website_status=$request->input('website_status');
        $featured=$request->input('featured');
        $delete_status=$request->input('delete');
        date_default_timezone_set ( "Asia/Karachi" );
        $current_date=date("Y-m-d H:i:s");
        $store=DB::table('stores')->where('store_id', $store_id)
        ->update(['store_name' => $name,'store_description'=>$description , 'store_about'=> $about,
                    'store_availability' => $website_status,'is_featured'=>$featured , 'delete_status'=> $delete_status,
                    'modified_on'=> $current_date]);
        
        return $store;

    }


    public function get_offer($store_id){

         $offers = DB::table('offers')
            ->select('offer_title','offers.offer_id','offer_expiry','offers.network_id',
                    'offer_api_availability','offer_availability','is_deal','offer_code')->join('store_offer','offers.offer_id','=','store_offer.offer_id')->join('stores','store_offer.store_id','=','stores.store_id')
            ->where('stores.store_id',$store_id)
            ->paginate(20);

        return $offers;


    }

    public function get_store_name($store_id){

    $store_name = DB::table('stores')
            ->select('store_name')
            ->where('store_id',$store_id)
            ->get();

        return $store_name;

    }

    public function filter_store($request, $nid)
    {
        $filter_website = $request->input('website_status');
        $filter_network = $request->input('network_status');
        $filter_delete  = $request->input('delete_status');

        // all close
        if($filter_website == "2" && $filter_network == "2" && $filter_delete == "2")
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('network_id',$nid)
            ->paginate(20);
        }

        // web  open
        elseif($filter_website != "2" && $filter_network == "2" && $filter_delete == "2")
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('store_availability', $filter_website)
            ->where('network_id',$nid)
            ->paginate(20);
        }

        // web , network  open
        elseif($filter_website != "2" && $filter_network != "2" && $filter_delete == "2")
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('store_availability', $filter_website)
            ->where('store_api_availability', $filter_network)
            ->where('network_id',$nid)
            ->paginate(20);
        }

        // web , delete  open
        elseif($filter_website != "2" && $filter_network == "2" && $filter_delete != "2")
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('store_availability', $filter_website)
            ->where('delete_status', $filter_delete)
            ->where('network_id',$nid)
            ->paginate(20);
        }

        // network  open
        elseif($filter_website == "2" && $filter_network != "2" && $filter_delete == "2")
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('store_api_availability', $filter_network)
            ->where('network_id',$nid)
            ->paginate(20);
        }

        //network delete opens
        elseif($filter_website == "2" && $filter_network != "2" && $filter_delete != "2")
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('store_api_availability', $filter_network)
            ->where('delete_status', $filter_delete)
            ->where('network_id',$nid)
            ->paginate(20);
        }

        //delete open
        elseif($filter_website == "2" && $filter_network == "2" && $filter_delete != "2")
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('delete_status', $filter_delete)
            ->where('network_id',$nid)
            ->paginate(20);
        }

        //all close / same output as shown in store
        else
        {
            $store = DB::table('stores')
            ->select('store_name','store_id','advertiser_id','network_id',
                    'store_api_availability','store_availability','totaloffers','delete_status')
            ->where('store_availability', $filter_website)
            ->where('store_api_availability', $filter_network)
            ->where('delete_status', $filter_delete)
            ->where('network_id',$nid)
            ->paginate(20);
        }

        return $store;
    }
}


