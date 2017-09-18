<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    //分类模块
    public function add()
    {

    	
    	$data = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
         
        foreach ($data as $key => $value) {
            $num = substr_count($value->path,',');
            $data[$key]->type_name = str_repeat('|| - ', $num).$value->type_name;
        }
       
    	return view('admin.type.add',['title'=>'分类添加','data'=>$data]);
    }

    public function doadd(Request $request)
    {

    	$data=$request->except('_token');

       
         $this->validate($request, [
            'parent_id' => 'required',
            'type_name' => 'required|max:32',
            "type_desc" => 'required|max:255'
      ],[
            'parent_id.required' => '父类别未选中',
            'type_name.required' => '分类名称未填写',
            'type_name.max' => '分类名称不能超过32位',
            'type_desc.required'=>'分类描述未填写'
      ]
      );

    	$data['created_at']= date('Y-m-d H:i:s');
       
    	$first=\DB::table('videos_type')->where('type_id',$data['parent_id'])->first();
        if($first == null ){
            $data['path'] = 0;
        }else{
            $data['path'] = $first->path.','.$first->type_id;
        }    
    	
    	
    	$res=\DB::table('videos_type')->insert($data);

    	if($res){
    		
    		 return redirect('admin/type/index')->with(['info'=>'添加成功']);
    	}else{  
    		
             return back()->with(['info'=>'添加失败']);
        }   
    }
    
    public function index () {

    	$data=\DB::table('videos_type')->get();
    	$data = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
         
        foreach ($data as $key => $value) {
            $num = substr_count($value->path,',');
            $data[$key]->type_name = str_repeat('|| - ', $num).$value->type_name;
        }


    	return view('admin.type.index',['title'=>'分类列表','data'=>$data]);
    }
    public function edit($id){

    	$data=\DB::table('videos_type')->get();
    	$data = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
         
        foreach ($data as $key => $value) {
            $num = substr_count($value->path,',');
            $data[$key]->type_name = str_repeat('|| - ', $num).$value->type_name;
        }

    	$first=\DB::table('videos_type')->where('type_id',$id)->first();

    	
    	return view('admin.type.edit',['title'=>'类别编辑','first'=>$first,'data'=>$data]);
    }

    public function update(Request $request,$id){
    	
    	$data = $request->except('_token');

        $this->validate($request, [
            'parent_id' => 'required',
            'type_name' => 'required|max:32',
            "type_desc" => 'required|max:255'
      ],[
            'parent_id.required' => '父类别未选中',
            'type_name.required' => '分类名称未填写',
            'type_name.max' => '分类名称不能超过32位',
            'type_desc.required'=>'分类描述未填写'
      ]
      );
    	
    	$data['updated_at'] = date('Y-m-d H:i:s');

    	$first=\DB::table('videos_type')->where('type_id',$data['parent_id'])->first();

    	$data['path'] = $first->path.','.$first->type_id;
    	
    	$res = \DB::table('videos_type')->where('type_id',$id)->update($data);

    	if ($res) {
    		
    		return redirect('admin/type/index')->with(['info'=>'编辑成功']);
    	}else{
    		return back()->with(['info'=>'编辑失败']);
    	}

    }

    public function add_son($id)
    {
       
        $data = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
      
        foreach ($data as $key => $value) {
            $num = substr_count($value->path,',');
            $data[$key]->type_name = str_repeat('|| - ', $num).$value->type_name;
        }

        $first=\DB::table('videos_type')->where('type_id',$id)->first();
        
        return view('admin.type.add_son',['title'=>'添加子类','first'=>$first,'data'=>$data]);

    }

    public function doadd_son(Request $request)
    {

        $data = $request->except('_token');
       

         $this->validate($request, [
            'parent_id' => 'required',
            'type_name' => 'required|max:32',
            "type_desc" => 'required|max:255'
      ],[
            'parent_id.required' => '父类别未选中',
            'type_name.required' => '分类名称未填写',
            'type_name.max' => '分类名称不能超过32位',
            'type_desc.required'=>'分类描述未填写'
      ]
      );



        
        $first=\DB::table('videos_type')->where('type_id',$data['parent_id'])->first();

        $data['created_at']= date('Y-m-d H:i:s');

        $data['path'] = $first->path.','.$first->type_id;
        
        $res=\DB::table('videos_type')->insert($data);

        if($res){
            
             return redirect('admin/type/index')->with(['info'=>'添加成功']);
        }else{
            
             return back()->with(['info'=>'添加失败']);
        }   

    }

    public function delete($id){

        $res=\DB::table('videos_type')->where('type_id',$id)->delete();
        
        if($res){
            return back()->with(['info'=>'删除成功']); 
        }else{
            return back()->with(['info'=>'删除失败']);
        } 

    }

}
