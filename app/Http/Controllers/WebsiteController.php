<?php

namespace App\Http\Controllers;
use App\WebsiteModel;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class WebsiteController extends Controller
{
    public function home()
    {
        $webSiteModel = new WebsiteModel();
        return view('Website/index');
    }
    public function login()
    {
        return view('Website/login');
    }

    public function signup()
    {
        return view('Website/signup');
    }
    public function events()
    {
        $webSiteModel = new WebsiteModel();
        $store_name=$webSiteModel->get_store_list();
        $cat_name=$webSiteModel->get_category_list();
        $event_name=$webSiteModel->get_special_events_info();

        return view('Website/events')
                ->with('store_name',$store_name)
                ->with('cat_name',$cat_name)
                ->with('event_name',$event_name);
    }

    public function search_result(Request $request)
    {
        $search = $request->input('searchData');
        $websiteModel = new WebsiteModel();
        $data = $websiteModel->search_result($search);
        $store_name=$websiteModel->get_store_list();
        $cat_name=$websiteModel->get_category_list();

        return view('Website/search_result')
            ->with('store_name',$store_name)
            ->with('cat_name',$cat_name)
            ->with('data',$data);
//
    }



    public function all_store()
    {
        $get=new WebsiteModel();
        $stores = $get->all_store();
        $chunks = $stores->chunk(7);        
        return view('Website/stores')->with('data',$stores);
    }
    public function store_filter($filter)
    {
        $get=new WebsiteModel();
        $stores_filtered = $get->store_filter($filter);        
        $chunks = $stores_filtered->chunk(7);
        return view('Website/stores')->with('data',$stores_filtered);
    }


    public function offers_by_category($slug)
    {
        $get=new WebsiteModel();
        $category = $get->offers_by_category($slug);
        $categoryname = $get->get_category_name($slug);
        
        return view('Website/category')->with('data',$category)->with('slug',$slug)->with('categoryname',$categoryname);

    }



    public function categories()
    {
        
        $get=new WebsiteModel();
        $categories = $get->get_categories();
        $chunks = $categories->chunk(7);
        
        return view('Website/categories')->with('data',$categories);
    }
    public function perticularcategory($filter)
    {
        $get=new WebsiteModel();
        $categories = $get->get_categories_byword($filter);
        $chunks = $categories->chunk(7);
        // echo($chunks);
        // exit();
        
        return view('Website/categories')->with('data',$categories);
    }



    public function stores($store_slug)
    {
        $get=new WebsiteModel();
        $stores = $get->store_information($store_slug);
        return view('Website/store')
        ->with('data',$stores);

    }

       public function about(){
        return view('Website/about');
    }

    public function terms(){
        return view('Website/terms-conditions');
    }

    public function cookie_policy(){
        return view('Website/cookie');

    }

    public function privacy(){
        return view('Website/privacy-policy');

    }

    public function faq(){
        return view('Website/faq');

    }

    public function contact(){
        return view('Website/contact');

    }

    public function sitemap(){
        return view('Website/sitemap');
        
    }



}
