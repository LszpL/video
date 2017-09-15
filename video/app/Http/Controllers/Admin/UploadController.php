<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function index(Request $request){

        $users = \DB::table('users_upload')->where('users_name','like','%'.$request->input('keywords').'%')->paginate($request->input('num',8));
        //显示分页并且保持分页
        return view('admin.uploads.index',['title'=>'上传列表','request'=>$request->all(),'page'=>$request->input('page')],compact('users'));

    }

    public function finish(Request  $request ,$id){
        //审核完成
            if('status' == '审核完成'){

               return  redirect('/admin/upload/index?page='.$request->input('page'),['page'=>$request->input('page')]);
            }
        $res=\DB::table('users_upload')->where('upload_id', $id) ->update(['status' => '审核完成','audit_time'=>date('Y-m-d H:i:s')]);

        if($res){
            return redirect('/admin/upload/index?page='.$request->input('page'))->with(['info'=>'该用户已成功通过审核','page'=>$request->input('page')]);
        }


    }



    public function   defeated(Request  $request ,$id){

        if('status' == '审核失败'){

            return  redirect('/admin/upload/index?page='.$request->input('page'),['page'=>$request->input('page')]);
        }
        //审核失败
        $res=\DB::table('users_upload')->where('upload_id', $id) ->update(['status' => '审核失败','audit_time'=>date('Y-m-d H:i:s')]);
        if($res){
            return redirect('/admin/upload/index?page='.$request->input('page'))->with(['info'=>'该用户审核未通过','page'=>$request->input('page')]);
        }


    }

    public function   delete(Request $request,$id){

        $res=\DB::table('users_upload')->where('upload_id', '=', $id)->delete();
        if($res){

            return redirect('/admin/upload/index?page='.$request->input('page'))->with(['info'=>'该用户审核失败,已经删除成功','page'=>$request->input('page')]);

        }

    }


        public  function add()
        {
            //引入视频分类
            $data = \DB::table('videos_type')->get();
            $data = \DB::table('videos_type')->select('*', \DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();
            foreach ($data as $key => $value) {
                $num = substr_count($value->path, ',');
                $data[$key]->type_name = str_repeat('|| - ', $num) . $value->type_name;

            }
            return view('admin.uploads.add', ['title' => '用户视频添加'], compact('data')
            );


        }

        public  function insert(Request $request)
        {
            //表单验证
            $data2 = $request->except('_token', 'parent_id');
            $rule = [
                'title' => 'required|min:2|max:15',
                'type_name' => 'required',
                'label' => 'required|min:2|max:16',
                'content' => 'required|min:10|max:30',
                'file_name' => 'required',
            ];
            $msg = [
                'file_name.required' => '请先上传文件',
                'title.required' => '标题不能为空',
                'title.min' => '标题最小小2位',
                'title.max' => '标题最大不能超过15位',
                'type_name.required' => '类型不能为空',
                'label.required' => '标签不能为空',
                'label.min' => '标签最小2位',
                'label.max' => '标签最大16位',
                'content.required' => '内容不能为空',
                'content.min' => '内容最小为10位',
                'content.max' => '内容最大为30位',
            ];
            $validator = Validator::make($data2, $rule, $msg);
            if ($validator->fails()) {
                return redirect('admin/upload/add')
                    ->withErrors($validator)
                    ->withInput();
            }
            //判断是否有上传
            //获取上传的文件对象
        $file = Input::file('file_name');
         if($request->hasFile("file_name")) {
           //确认上传的文件是否成功
            if ($request->file('file_name')->isValid()) {
               $ext = $request->file('file_name')->getClientOriginalExtension();
               //执行移动上传文件
                $filename = time().rand(1000,9999).".".$ext;
                //$request->file('file_name')->move("./uploads",$filename);
             \Storage::disk('qiniu')->writeStream('uploads/'.$filename, fopen($file->getRealPath(), 'r'));
                //修改文件数据
            $data2['file_name'] = $filename;
            $data2['upload_address'] = 'uploads/' . $filename;
//                $filepath = 'uploads/'.$filename;
//                //返回文件的路径
//                return  $filepath;
           }
        }

            $time = date('Y-m-d H:i:s', time());
            $data2['upload_time'] = $time;
//                //插入数据库
            $res = \DB::table('users_upload')->insert($data2);
            if ($res) {
                return redirect('/admin/upload/index')->with(['info' => '添加成功']);
//
            } else {

                return back()->with(['info' => '添加失败']);
            }


        }


    }