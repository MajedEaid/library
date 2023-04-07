<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countries = Country::withCount('cities')->orderBy('id' , 'desc'); // if ($request->get('search')) {
        // if ($request->get('search')) {
        //     $moduleIndex = city::where('created_at', 'like', '%' . $request->search . '%');
        // }
        if ($request->get('name')) {
            $countries = Country::where('name', 'like', '%' . $request->name . '%');
                                //  ->Orwhere('code', 'like', '%' . $request->code . '%');
        }
        if ($request->get('code')) {
            $countries = Country::where('code', 'like', '%' . $request->code . '%');
        }
        if ($request->get('created_at')) {
            $countries = Country::where('created_at', 'like', '%' . $request->created_at . '%');
        }


            $countries = $countries->paginate(5);
            return response()->view('cms.country.index' , compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'name' => 'required|string|min:3|max:20',
            'code' => 'required|digits:3|numeric',
        ],[
            'name.required' => '(اسم الدولة)هذا الحقل مطلوب ',
            'code.required' => '(الكود)هذا الحقل مطلوب',
            'name.min' => 'اسم الدولة لا يقبل أقل من 3 حروف',
            'name.max' => 'اسم الدولة لا يقبل أكثر من 20 حروف',
        ]);

        if($validator->fails()){
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ],400);

        }
        else{
            $countries = new country();
            $countries->name =$request->get('name');
            $countries->code =$request->get('code');

        $isSaved = $countries->save();
        return response()->json([
            'icon' => 'success',
            'title' => 'Created is Successfully',
        ],200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $countries = Country::findOrFail($id);
        return response()->view('cms.country.show' , compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::findOrFail($id);
        return response()->view('cms.country.edit' , compact('countries'));
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
        $validator = Validator($request->all(),[
            'name' => 'required|string|min:3|max:20',
            'code' => 'required|digits:3|numeric',
        ]);

        if(! $validator->fails()){

            $countries = Country::findOrFail($id);
            $countries->name =$request->get('name');
            $countries->code =$request->get('code');
            $isUpdate = $countries->save();

            return ['redirect'=>route('countries.index')];

            return response()->json([
                'icon' => 'success',
                'title' => 'Updated is Successfully',
            ],200);

        }
        else{
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ],400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $countries = Country::destroy($id);
    }
}
