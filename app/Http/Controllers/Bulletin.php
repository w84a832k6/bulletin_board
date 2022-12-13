<?php

namespace App\Http\Controllers;

use App\Models\Bulletins;
use Illuminate\Http\Request;

class Bulletin extends Controller
{
    public function index()
    {
        return response()->json(['code' => 1, 'data' => Bulletins::all()]);
    }

    public function create(Request $request)
    {
        try {
            Bulletins::create(['title' => $request->get('title', ''), 'content' => $request->get('content', '')]);
            return response()->json(['code' => 1, 'message' => '新增成功']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'message' => '新增失敗']);
        }
    }

    public function edit(Request $request)
    {
        try {
            Bulletins::find($request->get('id'))->update(['title' => $request->get('title'), 'content' => $request->get('content')]);
            return response()->json(['code' => 1, 'message' => '修改成功']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'message' => '修改失敗']);
        }
    }

    public function delete($id)
    {
        try {
            Bulletins::find($id)->delete();
            return response()->json(['code' => 1, 'message' => '刪除成功']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'message' => '刪除失敗']);
        }
    }
}
