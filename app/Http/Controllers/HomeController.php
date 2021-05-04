<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Contracts\Session\Session;

class HomeController extends Controller
{
    public function showLogin()
    {
        return view('auth.sign-in');
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
            'roles' => 3,
        ];

        if (!Auth::attempt($user)) {
            return redirect()->route('userlogin')->withErrors('login-error', 'Tài khoản hoặc mật khẩu không đúng!');
        } else {

            $products = Product::paginate(4);
            $categories = Category::all();
            $customer_name = session(['customer_name' => Auth::user()->name]);

            return view('index', compact(['categories', 'products',]));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('customer_name');
        return redirect()->route('index');
    }

    public function register(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $name = $request->full_name;

        $user = new User();
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->name = $name;

        $user->save();

        return route('userlogin');
    }

    public function index()
    {
        $products = Product::paginate(4);
        $categories = Category::all();

        return view('index', compact(['categories', 'products']));
    }

    public function getAllProduct()
    {
        $products = Product::paginate(4);
        $categories = Category::all();

        return view('home.product_list', compact(['categories', 'products']));
    }

    public function getProductById($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('home.product_detail', compact(['categories', 'product']));
    }

    public function getProductByCategory($id)
    {
        $products = Product::where('category_id', '=', $id)
            ->get();


        return view('home.productBycategory', compact(['products']));
    }

    public function showHomeContract()
    {
        return view('home.contract');
    }
    
    public function showContactForm()
    {
        return view('home.contactForm');
    }
}
