<?php

namespace App\Http\Controllers;
use App\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin/index');
    }
    public function get_networks()
    {
        $get=new AdminModel();
        $networks = $get->get_networks();
        return view('Admin/networks')->with('data',$networks);

    }
    public function edit_networkform($nid)
    {
        $get=new AdminModel();
        $placeholder = $get->network_placeholder($nid);
        return view('Admin/edit_networkform')->with('data',$placeholder);

    }
    public function edit_network(Request $request,$nid)
    {
        $get=new AdminModel();
        $edit_network_name = $get->edit_network($request,$nid);
        return redirect('/admin/networks');

    }
    public function add_networkform()
    {

        return view('Admin/add_networkform');

    }
    public function add_network(Request $request)
    {
        $get=new AdminModel();
        $network_name = $get->add_network($request);
        return redirect('/admin/networks');

    }

     public function stores($nid)
    {
        $get = new AdminModel();
        $store = $get->get_stores_by_network($nid);
        $network_name = $get->get_network_name($nid);
        return view('Admin/store')
        ->with('store',$store)
        ->with('network_name',$network_name)
        ->with('network_id',$nid);

    }
    public function filter_store(Request $request, $nid)
    {
        $get=new AdminModel();
        $filter_store = $get->filter_store($request, $nid);
        $network_name = $get->get_network_name($nid);
        $filter_website = $request->input('website_status');
        $filter_network = $request->input('network_status');
        $filter_delete  = $request->input('delete_status');

        return view('Admin/filter_store')
        ->with('store',$filter_store)
        ->with('network_name',$network_name)
        ->with('filter_website',$filter_website)
        ->with('filter_network',$filter_network)
        ->with('filter_delete',$filter_delete)
            ->with('network_id',$nid);
    }
    public function edit_storeform($store_id)
    {

        $get = new AdminModel();
        $store_details = $get->fetch_store_details($store_id);
        return view('Admin/edit_storeform')->with('storedetail',$store_details);
    }

    public function storeedit(Request $request,$store_id)
    {
        $get = new adminModel();
        $get->edit($request,$store_id);
        $concatinate_network_id= $request->input('concatinate');
        // return redirect('/admin/stores/'.$concatinate_network_id);
        $store_details = $get->fetch_store_details($store_id);
        return redirect('admin/edit_storeform/'.$store_id);
    }

      public function offer($store_id)
    {
        $get=new AdminModel();
        $offers = $get->get_offer($store_id);
        $store_name = $get->get_store_name($store_id);
        return view('Admin/offer')->with('offers',$offers)->with('store_id',$store_id)->with('store_name',$store_name);
    }



}
