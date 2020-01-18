<?php
namespace App\Http\Controllers;

use App\Services\ModuleService;

class  ModuleController extends Controller{


    public function __construct(ModuleService $module){
        $this->module = $module;
    }

    public function index(){
        return $this->module->get();
    }


    public function create(){
        
        try{
            $name = request('name');
            $this->module->create($name);
            $response = response()->json(['msg' => $name . " module created"], 200 );
        }catch(Exception $e){
            $response = response()->json(['error' => 'unable_to_add_module'], 401);
        }
        
    }
}