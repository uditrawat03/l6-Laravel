<?php
namespace App\Http\Controllers;

use App\Http\Resources\api\user\module\ModuleResource;
use App\Models\Module;
use Illuminate\Http\Request;

class MenuController extends Controller{

    public function getMenus(Request $request){
        $modules = Module::with(['menus'])->get();

        return ModuleResource::collection($modules);
    }

}
