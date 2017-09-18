<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class VideoController extends Controller
{
    //
    public function add()
    {	
    	$type=\DB::table('videos_type')->get();
    	$type = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
         
        foreach ($type as $key => $value) {
            $num = substr_count($value->path,',');
            $type[$key]->type_name = str_repeat('|| - ', $num).$value->type_name;
        }

        $user=\DB::table('users_admin')->get();
        $label =\DB::table('videos_label')->get();

    	return view('admin.video.add',['title'=>'视频添加','type'=>$type,'user'=>$user,'label'=>$label]);
    } 

     public function upload(Request $request)
    {

    
        // 获取上传的文件对象
        $file = Input::file('file_upload');
        //判断文件是否有效
        if($file->isValid()){
            $entension = $file->getClientOriginalExtension();//上传文件的后缀名
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            $path = $file->move(public_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName ;
            //返回文件的路径
            return  $filepath;
        }
    }

    public function doadd(Request $request)
    {	
    	$data=$request->except(['_token','file_upload']);
		
		 $this->validate($request, [
	        'type_id' => 'required',
	        'video_name' => 'required|max:64',
	        'video_url' =>'required|max:255',
	        'admin_name'=>'required',
	        'video_time'=>'required',
	        'video_labels'=>'required',
	        'video_status'=>'required',
	        'video_img'=>'required',
	        "video_desc" => 'required|max:255'
      ],[
      		'type_id.required' => '视频类别未选中',
	        'video_name.required' => '视频名称未填写',
	        'video_name.max' => '视频名称不能超过64位',
	        'video_url.required' =>'远程连接未填写',
	        'video_url.max' =>'远程连接不能超过255位',
	        'admin_name.required'=>'发布人未选中',
	        'video_time.required'=>'视频时长未添加',
	        'video_labels.required'=>'视频标签未选择',
	        'video_status.required'=>'视频状态未选择',
	        'video_img.required'=>'视频缩略图未添加',
	        'video_desc.required'=>'视频描述未填写'
      ]
      );



		 
	    //视频添加
		$data['created_at']=date('Y-m-d H:i:s');
		$video_labels= serialize($data['video_labels']);


		$data['video_labels']= $video_labels;
		$data['video_like'] = 0;
		$data['video_trample'] = 0;
		$data['video_collect'] = 0;
		$data['video_count'] = 0;
		$data['video_comments'] = 0;

		$res=\DB::table('videos_data')->insert($data);
		
		$id = \DB::table('videos_data')->where('video_name',$data['video_name'])->first()->video_id;

		//视频标签关联表添加
		$arr=$request->except(['_token','file_upload'])['video_labels'];
		
		
		foreach ($arr as $k=>$v){

		$re[$k] = \DB::table('rel_videos_label')->insert(['video_id'=>$id,'video_name'=>$data['video_name'],'label_name' => $v]);  
		  
		}
		//验证 所有插入成功
		$num=count($re);
		$mun=0;
		foreach( $re as $k=>$v){
		   $mun+= $v;
		}
	
		if($res && $num ==$mun ){

			return redirect('admin/video/index')->with(['info'=>'添加成功']);
		}else{
			return back()->with(['info'=>'添加失败']);
		}	

    	


    }
    public function index(Request $request)
    {
    	$data = \DB::table('videos_data')->where('video_name','like','%'.$request->input('keyword').'%')->paginate($request->input('count',5));
		$search = $request->except('_token');


    	return view('admin.video.index',['title'=>'视频列表','data'=>$data,'search'=>$search]);

    }

    public function detail($id)
    {

    	$first = \DB::table('videos_data')->where('video_id',$id)->first();

    	$video_labels= unserialize($first->video_labels);
    	$str='';
    	foreach($video_labels as $k=>$v)
    	{	
    		$str.=$v.'、';
    	}
    	$str = rtrim($str,'、');
    	$first->video_labels=$str;
    	$type=\DB::table('videos_type')->get();
    	$type = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
         
        foreach ($type as $key => $value) {
            $num = substr_count($value->path,',');
            $type[$key]->type_name = str_repeat('|| - ', $num).$value->type_name;
        }
    	
    	return view('admin.video.detail',['title'=>'视频详情','first'=>$first,'type'=>$type]);



    }
    public function online(Request $request)
    {
    	$id=$request->input('id');
		$res = \DB::table('videos_data')->where('video_id',$id)->update(['video_status'=>'上线']);
		if($res){
			$news='视频上线';
		}else{
			$news='上线失败';
		}
		
		echo $news;


    }

    public function offline(Request $request)
    {
    	$id=$request->input('id');
		$res = \DB::table('videos_data')->where('video_id',$id)->update(['video_status'=>'下线']);
		if($res){
			$news='视频下线';
		}else{
			$news='下线失败';
		}
		
		echo $news;
    }

    public function edit($id)
    {

    	$type=\DB::table('videos_type')->get();
    	$type = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
         
        foreach ($type as $key => $value) {
            $num = substr_count($value->path,',');
            $type[$key]->type_name = str_repeat('|| - ', $num).$value->type_name;
        }

        $user=\DB::table('users_admin')->get();
        $label =\DB::table('videos_label')->get();
        $first=\DB::table('videos_data')->where('video_id',$id)->first();
    	return view('admin.video.edit',['title'=>'视频添加','type'=>$type,'user'=>$user,'label'=>$label,'first'=>$first]);


    }

    public function update(Request $request,$id)
    {
    	$data=$request->except(['_token','file_upload']);
		
		$this->validate($request, [
		        'type_id' => 'required',
		        'video_name' => 'required|max:64',
		        'video_url' =>'required|max:255',
		        'admin_name'=>'required',
		        'video_time'=>'required',
		        'video_labels'=>'required',
		        // 'video_status'=>'required',
		        'video_img'=>'required',
		        "video_desc" => 'required|max:255'
	    ],[
	      		'type_id.required' => '视频类别未选中',
		        'video_name.required' => '视频名称未填写',
		        'video_name.max' => '视频名称不能超过64位',
		        'video_url.required' =>'远程连接未填写',
		        'video_url.max' =>'远程连接不能超过255位',
		        'admin_name.required'=>'发布人未选中',
		        'video_time.required'=>'视频时长未添加',
		        'video_labels.required'=>'视频标签未选择',
		        // 'video_status.required'=>'视频状态未选择',
		        'video_img.required'=>'视频缩略图未添加',
		        'video_desc.required'=>'视频描述未填写'
	       ]
	    );

	    
		$video_labels= serialize($data['video_labels']);
		$res = \DB::table('videos_data')->where('video_id',$id)->update([
				  "type_id" => $data['type_id'],
				  "video_name" => $data['video_name'],
				  "video_url" => $data['video_url'],
				  "admin_name" => $data['admin_name'],
				  "video_time" =>$data['video_time'],
				  "video_labels" =>$video_labels,
				  "video_img" => $data['video_img'],
				  "video_desc" => $data['video_desc'],
				  "updated_at"=>date('Y-m-d H:i:s')
			]);

	    if ($res) {
	    				
	    		 return redirect('admin/video/index')->with(['info'=>'编辑成功']);
	    	}else{
	    		
	    		 return back()->with(['info'=>'编辑失败']);
	     }

    }

	

	public function delete($id)
	{

        $res=\DB::table('videos_data')->where('video_id',$id)->delete();
        
        if($res){
            return redirect('/admin/video/index')->with(['info'=>'删除成功']); 
        }else{
            return back()->with(['info'=>'删除失败']);
        } 

    }

	    
}
