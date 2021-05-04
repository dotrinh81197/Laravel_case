<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Product;
use App\Models\Category;
use App\Models\Consultation;
use App\Models\ContractDetail;
use App\Models\Periodic;
use App\Models\Price;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use Symfony\Component\Console\Input\Input;
use App\Models\User;
use App\Models\Contract_product;
use App\Http\Requests\RegisterRequest;

class ContractController extends Controller
{

    public function index()
    {
        $contracts = Contract::all();
        $users = User::all();

        return view('dashboard.contract.index', compact(['contracts', 'users']));
    }

    public function getlist()
    {
        $contracts = Contract::all();
        // $users = [];
        // foreach ($contracts as $key => $contract) {
        //     $users[] = User::where('contract_id', '=', $contract->id);
        // }

        return view('dashboard.contract.list', compact(['contracts']));
    }

    public function getProduct_subList()
    {
        $products_sub = Product::withoutTrashed('products')
            ->where('category_id', '<>', 1)
            ->get();
        $periodics = Periodic::all();
        return view('dashboard.contract.list_product_sub', compact(['products_sub', 'periodics']));
    }

    public function store(Request $request)
    {

        $contract = new Contract();
        $full_name =  $contract->full_name = $request->full_name;
        $email = $contract->email = $request->email;
        $phone = $contract->phone = $request->phone;
        $address = $contract->address = $request->address;
        $gender = $contract->gender = $request->gender;
        $dob = $contract->dob = $request->dob;
        $cmnd = $contract->cmnd = $request->cmnd;
        $job = $contract->job = $request->job;
        $contract->user_id = Auth::user()->id;

        $contract->save();

        // $terms = $request->input('term', []);
        // $periodics_id = $request->input('periodic_id', []);
        // $fees_recurring = $request->input('fee_recurring', []);
        // $insurances_money = $request->input('insurance_money', []);


        $products = $request->input('products', []);

        // $products is array

        for ($i = 0; $i < count($products); $i++) {
            //lay ra duoc id cua product
            $product_id = $products[$i];

            $price = new Price();
            $price->product_id = $product_id;
            $price->contract_id = $contract->id;

            $term = $request->input('term', [$i][0]);
            $price->term = $term[$i][0];

            $periodic_id = $request->input('periodic_product', [$i][0]);
            $price->periodic_id = $periodic_id[$i][0];

            $fee_recurring = $request->input('fee_recurring', [$i][0]);
            $price->fee_recurring = $fee_recurring[$i][0];

            $insurance_money = $request->input('insurance_money', [$i][0]);
            $price->insurance_money = $insurance_money[$i][0];
            $price->save();


            if ($products[$i] != '') {
                $contract->product()->attach($products[$i]);
            }
        }

        if (isset($consulation)) {
            # code...
        }
        echo "ĐÃ GỞI HỒ SƠ YÊU CẦU BẢO HIỂM ";
    }

    public function showRegisterForm($id)
    {
        $contract_id = $id;

        return view('dashboard.contract.registerForm', compact('contract_id'));
    }

    public function create()
    {
        $products_main = Product::withoutTrashed('products')
            ->where('category_id', 1)
            ->get();
        $products_sub = Product::withoutTrashed('products')
            ->where('category_id', '<>', 1)
            ->get();
        $categories = Category::withTrashed();
        $periodics = Periodic::all();
        // $products = Product::all();
        return view('dashboard.contract.create', compact(['categories', 'products_main', 'products_sub', 'periodics']));
    }


    public function storeByConsultation(Request $request, $id)
    {

        $contract = new Contract();
        $full_name =  $contract->full_name = $request->full_name;
        $email = $contract->email = $request->email;
        $phone = $contract->phone = $request->phone;
        $address = $contract->address = $request->address;
        $gender = $contract->gender = $request->gender;
        $dob = $contract->dob = $request->dob;
        $cmnd = $contract->cmnd = $request->cmnd;
        $job = $contract->job = $request->job;
        $contract->user_id = Auth::user()->id;

        $contract->save();



        $products = $request->input('products', []);

        // $products is array

        for ($i = 0; $i < count($products); $i++) {
            //lay ra duoc id cua product
            $product_id = $products[$i];

            $price = new Price();
            $price->product_id = $product_id;
            $price->contract_id = $contract->id;
            $term = $request->input('term', [$i][0]);
            $price->term = $term[$i][0];

            $periodic_id = $request->input('periodic_product', [$i][0]);
            $price->periodic_id = $periodic_id[$i][0];

            $fee_recurring = $request->input('fee_recurring', [$i][0]);
            $price->fee_recurring = $fee_recurring[$i][0];

            $insurance_money = $request->input('insurance_money', [$i][0]);
            $price->insurance_money = $insurance_money[$i][0];
            $price->save();


            if ($products[$i] != '') {
                $contract->product()->attach($products[$i]);
            }
        }


        $consulation =  Consultation::findOrFail($id);
        $consulation->contract_id = $contract->id;
        $consulation->save();
        // dd($consulation);
        "ĐÃ GỞI HỒ SƠ YÊU CẦU BẢO HIỂM THEO CUỘC TƯ VẤN";
        return redirect()->route('contract.list');
    }


    public function search(Request $request)
    {
        $keyword = $request->keyword;

        $contracts = Contract::where('id', 'LIKE', '%' . $keyword . '%')
            ->orWhere('full_name', 'like', '%' . $keyword . '%')
            ->orWhere('cmnd', 'like', '%__' . $keyword . '%')
            ->orWhere('email', 'like', '%__' . $keyword . '%')
            ->orWhere('phone', 'like', '%__' . $keyword . '%')

            ->get();


        return view('home.contract-result', compact('contracts'));
    }

    public function showDetailContract($id)
    {
        $contract_products = Contract_product::where('contract_id', '=', $id)->get();

        $prices = Price::where('contract_id', '=', $id)->get();

        return view("home.contract-detail", compact(['contract_products', 'prices']));
    }
    public function storeCustomer(Request $request)
    {

        $user = new User();
        $user->name     = $request->user_name;
        $user->email    = $request->user_email;
        $user->password      = bcrypt($request->user_password);
        $user->roles = 3;
        $user->contract_id      = $request->user_contract_id;

        $user->save();
        //dung session de dua ra thong bao

        //tao moi xong quay ve trang danh sach khach hang
        return compact('user');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::findOrFail($id)->get();
        $products_main = Product::withoutTrashed('products')
            ->where('category_id', 1)
            ->get();
        $products_sub = Product::withoutTrashed('products')
            ->where('category_id', '<>', 1)
            ->get();
        $categories = Category::withTrashed();
        $periodics = Periodic::all();
        $contract_products = Contract_product::where('contract_id', '=', $id)->get();


        return view('dashboard.contract.contract_edit_form', compact(['contract', 'products_main', 'products_sub', 'categories', 'periodics', 'contract_products']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contract = Contract::findOrFail($id);
        $contract->delete();
        return response()->json(['success' => 'Hợp đồng đã được hủy thành công']);
    }
}
