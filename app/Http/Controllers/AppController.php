<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppModel;
use Validator;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $app = AppModel::all();
        $reponse = [
            'count' => count($app),
            'reponse' => $app
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
            'ad_type' => 'required', 
            'app_type' => 'required', 
            'cat_int' => 'required',
            'cat_key' => 'required',
            'cat_type' => 'required',
            'category' => 'required',
            'created' => 'required',
            'description' => 'required',
            'downloads' => 'required',
            'i18n_lang' => 'required',
            'market_update' => 'required',
            'package_name' => 'required',
            'rating' => 'required',
            'screenshots' => 'required',
            'size' => 'required',
            'title' => 'required',
            'keyword' => 'required',
            'version' => 'required',
            'website' => 'required',
            'developer' => 'required',
            'icon' => 'required',
            'market_url' => 'required',
            'apk_url' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all();
        $app = AppModel::create($input);
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
        $app = AppModel::find($id);
        $reponse = [
            'count' => 1,
            'reponse' => $app
        ];
        return Response()->json($reponse);
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
            'ad_type' => 'required', 
            'app_type' => 'required', 
            'cat_int' => 'required',
            'cat_key' => 'required',
            'cat_type' => 'required',
            'category' => 'required',
            'created' => 'required',
            'description' => 'required',
            'downloads' => 'required',
            'i18n_lang' => 'required',
            'market_update' => 'required',
            'package_name' => 'required',
            'rating' => 'required',
            'screenshots' => 'required',
            'size' => 'required',
            'title' => 'required',
            'keyword' => 'required',
            'version' => 'required',
            'website' => 'required',
            'developer' => 'required',
            'icon' => 'required',
            'market_url' => 'required',
            'apk_url' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all();
        $ads = AppModel::find($id);
        $ads->fill($input)->save();
        $reponse = AppModel::find($id);
        return response()->json(['success'=>$reponse], $this-> successStatus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        // $data = $request['query'];
        // $key = $request['key'];
        // if($key != 'ads_id'){
        //     if($key == 'ads_name'){
        //         $response = DB::table('ads')->where('ads_name', 'LIKE', '%'.$data.'%')->get();
        //     }else{
        //         $response = DB::table('ads')->where('ads_description', 'LIKE', '%'.$data.'%')->get();
        //     }
            
        //     if($response == null){
        //         return json_encode(['count' => 0,['reponse' => null ]]);
        //     }else{
        //         return json_encode(['count' => count($response),'reponse' => $response]);
        //     }
        // }else{
        //     $response = AdsModel::find(intval($data),'*')->toArray();
        //     if($response == null){
        //         return json_encode(['count' => 0,['reponse' => null ]]);
        //     }else{
        //         return json_encode(['count' => count($response),'reponse' => $response]);
        //     }
        // }
    }
    
    public function destroy($id)
    {
        //
    }
}
