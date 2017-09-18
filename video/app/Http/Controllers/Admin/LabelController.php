<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabelController extends Controller
{
    //

	public function add(){


		return view('admin.label.add',['title'=>'标签添加']);

	}

	public function doadd(Request $request)
	{




		$data=$request->except('_token');
		
		$data['created_at']=date('Y-m-d H:i:s');
		$res=\DB::table('videos_label')->insert($data);

		if($res){

			return redirect('admin/label/index')->with(['info'=>'添加成功']);
		}else{
			return back()->with(['info'=>'添加失败']);
		}
			
	}

	public function index (Request $request)
	{	
		$search = $request->except('_token');

		$data = \DB::table('videos_label')->where('label_name','like','%'.$request->input('keyword').'%')->paginate($request->input('count',5));
		
		if(empty($search)){
			$search['count']=5;
			$search['keyword']='';

		}
		return view('admin.label.index')->with(['title'=>'标签列表','data'=>$data,'search'=>$search]);

	}
	public function update(Request $request)
	{	

		
		$id=$request->input('id');
		$name =$request->input('name');
		$time = date('Y-m-d H:i:s');

		$res = \DB::table('videos_label')->where('label_id',$id)->update(['label_name'=>$name,'updated_at'=>$time]);
		if($res){
			$news='修改成功';
		}else{
			$news='修改失败';
		}
		
		echo $news;
	}
		
	public function delete(Request $request)

	{

		$id = $request->input('id');
		$res = \DB::table('videos_label')->where('label_id',$id)->delete();
		if($res){
			$news='删除成功';
		}else{
			$news='删除失败';
		}
		echo $news;
	}	
		
}
