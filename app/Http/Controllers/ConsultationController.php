<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\Periodic;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class ConsultationController extends Controller
{


    public function index()
    {
        // lấy ra các cuộc tư vấn chưa có hđ

        $consultations = Consultation::where('contract_id', '=', NULL)
            ->get();
        // dd($consultations);

        return view('dashboard.consultation.index', compact(['consultations']));
    }

    

    public function getconsultationList()
    {
        $consultations = Consultation::all();

        return view('dashboard.consultation.list', compact(['consultations']));
    }

    // public function create()
    // {
    //     $consultations = Consultation::all();

    //     return view('dashboard.consultation.create', compact('consultations'));
    // }

    public function store(Request $request)
    {

        $consultation = new Consultation();
        $consultation->name = $request->name;
        $consultation->email = $request->email;
        $consultation->phone = $request->phone;
        $consultation->province = $request->calc_shipping_provinces;
        $consultation->status = 0;

        $consultation->save();
        Session::flash('flash_message', 'Cảm ơn quý khách đã gởi thông tin yêu cầu tư vấn');
        Session::flash('flash_type', 'alert-success');
        return redirect()->route('index');
    }

    public function showPageCreateContractByConsultaion($id)
    {
        //id la consultation_id
        $consultation = Consultation::findOrFail($id);
        $products_main = Product::withoutTrashed('products')
            ->where('category_id', 1)
            ->get();
        $products_sub = Product::withoutTrashed('products')
            ->where('category_id', '<>', 1)
            ->get();
        $categories = Category::withTrashed();
        $periodics = Periodic::all();
        // $products = Product::all();
        return view('dashboard.contract.create', compact(['categories', 'products_main', 'products_sub', 'periodics', 'consultation']));
        # code...
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editForm($id)
    {
        $consultation = Consultation::findOrFail($id);
        return view('dashboard.consultation.edit-form', compact('consultation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $consultation = Consultation::findOrFail($id);

        // Gán các thuộc tính mới
        $consultation->name = $request->consultation_name;

        // Lưu
        $consultation->save();

        return;
    }

    public function show($id)
    {
        $consultation = Consultation::findOrFail($id);

        return  view('dashboard.consultation.detail-form', compact('consultation'));
    }


    public function setEmployee(Request $request)
    {
        $consultation = Consultation::find($request->consultation_id);
        $consultation->status = $request->status;
        $consultation->user_id = Auth::user()->id;
        $consultation->save();

        return response()->json(['success' => 'Status change successfully.']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->delete();
        return response()->json(['success' => 'Xóa thành công']);
    }
}
