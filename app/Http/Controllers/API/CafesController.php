<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 2019/12/16
 * Time: 11:30
 */
namespace App\Http\Controllers\API;

use App\Models\Cafe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CafesController extends Controller
{
    public function getCafes()
    {
        $cafes = Cafe::all();
        return response()->json($cafes);
    }

    public function getCafe($id)
    {
        $cafe = Cafe::where('id', '=', $id)->first();
        return response()->json($cafe);
    }

    public function postNewCafe()
    {
        $cafe = new Cafe();
        $cafe->name = Request::get('name');
        $cafe->address = Request::get('address');
        $cafe->city = Request::get('city');
        $cafe->state = Request::get('state');
        $cafe->zip = Request::get('zip');
        $cafe->save();

        // 201 Created 该请求已成功，并因此创建了一个新的资源。这通常是在POST请求，或是某些PUT请求之后返回的响应。
        return response()->json($cafe, 201);
    }
}
