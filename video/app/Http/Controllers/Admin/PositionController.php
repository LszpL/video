<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \DB::table('positions')->get();
        // dd($data);
        return view('admin.position.index',['title'=>'推荐位列表','data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.position.add',['title'=>'添加推荐位']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,['position_name' => 'required',],['position_name.required'=>'名称不能为空,请输入']);
        $data = $request->except('_token');
        $data['created_at']=date('Y-m-d H:i:s');
        // dd($data);
        $res = \DB::table('positions')->insert($data);
        // dd($res);
        if($res)
        {
            return redirect('/admin/position')->with(['info'=>'添加成功']);
        }else{
            return back()->with(['info'=>'添加失败']);
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
        $name =$request->input('name');
        $sql = \DB::table('positions')->where('position_name',$name)->first();
        if ($sql) {
            $news='已存在';
        }else{
        $time = date('Y-m-d H:i:s');
        $res = \DB::table('positions')->where('position_id',$id)->update(['position_name'=>$name,'update_at'=>$time]);
        if($res){
            $news='修改成功';
        }else{
            $news='修改失败';
        }
        }
                
        return $news;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = \DB::table('positions')->where('position_id',$id)->delete();
        if($res){
            $data = [
                'state'=>0,
                'msg'=>'删除成功'
            ];
        }else{
            $data = [
                'state'=>1,
                'msg'=>'删除失败'
            ];
        }
        return $data;
    }
}
