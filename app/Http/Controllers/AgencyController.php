<?php

namespace App\Http\Controllers;

use App\Agency;
use Illuminate\Http\Request;
use Validator;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputArray = $request->toArray();
        $rules = [
            'applicant_name' => 'required',
            'business_name' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'facilities' => 'required'
        ];


        $messages = [
            'business_name.required' => 'نام شرکت ضروری است.',
            'applicant_name.required' => 'نام کاربر ضروری است.',
            'phone.required' => 'شماره تماس ضروری است.',
            'city.required' => 'شهر شما ضروری است.',
            'facilities.required' => 'تجهیزات و امکانات ضروری است.'
        ];

        $validator = Validator::make($inputArray, $rules, $messages);
        if($validator->fails()){
            return response()->json(['messages' => $validator->errors()->all()], 422);
        }
        $agency = Agency::createNew($inputArray);
        return $agency;

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
        //
    }
}
