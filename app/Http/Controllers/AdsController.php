<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AdsModel;
use Validator;

class AdsController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ads = AdsModel::all();
        $reponse = [
            'count' => count($ads),
            'reponse' => $ads
        ];
        return Response()->json($reponse);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'ads_name' => 'required', 
            'ads_description' => 'required', 
            'status' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all();
        try{
            $ads = AdsModel::create($input);
        }catch(Exception $e){
            return response()->json(['error'=>$e], 401);
        }
        $success = $input;
        return response()->json(['success'=>$success], $this-> successStatus);
        


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ads = AdsModel::find($id);
        $reponse = [
            'count' => 1,
            'reponse' => $ads
        ];
        return Response()->json($reponse);
    }

    public function search(Request $request)
    {
        $data = $request['query'];
        $key = $request['key'];
        if($key != 'ads_id'){
            if($key == 'ads_name'){
                $response = DB::table('ads')->where('ads_name', 'LIKE', '%'.$data.'%')->get();
            }else{
                $response = DB::table('ads')->where('ads_description', 'LIKE', '%'.$data.'%')->get();
            }
            
            if($response == null){
                return json_encode(['count' => 0,['reponse' => null ]]);
            }else{
                return json_encode(['count' => count($response),'reponse' => $response]);
            }
        }else{
            $response = AdsModel::find(intval($data),'*')->toArray();
            if($response == null){
                return json_encode(['count' => 0,['reponse' => null ]]);
            }else{
                return json_encode(['count' => count($response),'reponse' => $response]);
            }
        }
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
        $validator = Validator::make($request->all(), [ 
            'ads_name' => 'required', 
            'ads_description' => 'required', 
            'status' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all();
        $ads = AdsModel::find($id);
        $ads->ads_name = $input['ads_name'];
        $ads->ads_description = $input['ads_description'];
        $ads->status = $input['status'];
        $ads->save();
        $reponse = AdsModel::find($id);
        return response()->json(['success'=>$reponse], $this-> successStatus);
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
