<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function homepage()
    { 
        return view('web-site.layout.home');
    }

    public function singlePage()
    { 
        return view('web-site.layout.single');
    }

    public function authPage()
    { 
        return view('auth.auth');
    }

    public function categoryPage()
    { 
        return view('web-site.layout.category');
    }

    public function contactPage()
    { 
        return view('web-site.layout.contact');
    }

    public function aboutPage()
    { 
        return view('web-site.layout.about');
    }

    //admin

    public function adminDashbord()
    { 
        return view('admin.layout.dashboard');
    }

    public function customersPage()
    { 
        return view('admin.layout.customers.customer');
    }

    public function suppliersPage()
    { 
        return view('admin.layout.suppliers.view_suppliers');
    }

    public function pendingProductsPage()
    { 
        return view('admin.layout.products.pending_products');
    }

    public function manageProductsPage()
    { 
        return view('admin.layout.products.manage_products');
    }

    public function ordersPage()
    { 
        return view('admin.layout.orders.orders');
    }
}
