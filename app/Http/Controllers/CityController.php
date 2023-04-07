<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          $cities = City::with('country')->orderBy('id' , 'desc'); // if ($request->get('search')) {
            // if ($request->get('search')) {
            //     $moduleIndex = city::where('created_at', 'like', '%' . $request->search . '%');
            // }
            if ($request->get('name')) {
                $cities = City::where('name', 'like', '%' . $request->name . '%');
                                    //  ->Orwhere('code', 'like', '%' . $request->code . '%');
            }
            if ($request->get('street')) {
                $cities = City::where('street', 'like', '%' . $request->street . '%');
            }
            if ($request->get('created_at')) {
                $cities = City::where('created_at', 'like', '%' . $request->created_at . '%');
            }


            $cities = $cities->paginate(5);
            return response()->view('cms.city.index' , compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return response()->view('cms.city.create' , compact('countries'));
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
            'street' => 'required|string|min:3|max:20',
        ],[
            'name.required' => '(اسم الدولة)هذا الحقل مطلوب ',
            'street.required' => '(الشارع)هذا الحقل مطلوب',
            'name.min' => 'اسم الدولة لا يقبل أقل من 3 حروف',
            'name.max' => 'اسم الدولة لا يقبل أكثر من 20 حروف',
        ]);

        if( $validator->fails()){
            return response()->json([
                'icon' => 'error',
                'title' => $validator->getMessageBag()->first(),
            ],400);
        }
        else{
            $cities = new City();
            $cities->name =$request->get('name');
            $cities->street =$request->get('street');
            $cities->country_id =$request->get('country_id');

        $isSaved = $cities->save();
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
        $cities = City::findOrFail($id);
        $countries = Country::all();
        return response()->view('cms.city.edit' , compact('cities' , 'countries'));
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
            'street' => 'required|string|min:3|max:20',
        ],[
            'name.required' => '(اسم الدولة)هذا الحقل مطلوب ',
            'street.required' => '(الشارع)هذا الحقل مطلوب',
            'name.min' => 'اسم الدولة لا يقبل أقل من 3 حروف',
            'name.max' => 'اسم الدولة لا يقبل أكثر من 20 حروف',
        ]);

        if(! $validator->fails()){
            $cities = City::findOrFail($id);
            $cities->name =$request->get('name');
            $cities->street =$request->get('street');
            $cities->country_id =$request->get('country_id');

        $isSaved = $cities->save();

            return['redirect'=>route('cities.index')];

        // return response()->json([
        //     'icon' => 'success',
        //     'title' => 'Created is Successfully',
        // ],200);
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
        $cities = City::destroy($id);
    }
}
