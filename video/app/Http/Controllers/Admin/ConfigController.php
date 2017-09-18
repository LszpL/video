<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //显示列表
    public function index()
    {
        $conf = Config::orderBy('conf_order')->get();
        foreach ($conf as $k=>$v){
            switch( $v->field_type){
                case 'input':
//      <input class="lg" type="text" name="conf_content[]" value="">
                    $conf[$k]['_content'] = ' <input class="lg" type="text" name="conf_content[]" value="'.$v->conf_content.'">';
                    break;

                case 'textarea':
//        <textarea class="lg" name="conf_content[]">谷歌统计</textarea>
                    $conf[$k]['_content'] ='<textarea class="lg" name="conf_content[]">'.$v->conf_content.'</textarea>';
                    break;

                case 'radio':
//               1|开启,0|关闭
//       ========>
//        <input type="radio" name="conf_content[]" value="1">开启
//        <input type="radio" name="conf_content[]" checked="" value="0">关闭
//                   1|开启,0|关闭 ==> array(0=>'1|开启',1=>'0|关闭')
                    $str = '';
                    $arr =  explode(',',$v->field_value);
                    foreach ($arr as $m=>$n) {
//                    [
//                        0=>1,
//                        1=>'开启'
//                    ]
//                    ========》 <input type="radio" name="conf_content[]" value="1">开启
                        $a = explode('|',$n);
                        $c = ($conf[$k]['conf_content'] == $a[0])?'checked':'';
                        $str.='<input type="radio" name="conf_content[]"'.$c.' value="'.$a[0].'">'.$a[1];
                        $conf[$k]['_content'] = $str;
                    }
                    break;
            }
        }

        return view('admin.config.list',compact('conf'),['title'=>'网站配置添加']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //引入模板
    public function create()
    {

        return view ('admin.config.add',['title'=>'系统配置']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //添加
    public function store(Request $request)
    {

        $input = $request->except('_token');
        $conf = Config::create($input);
        if($conf){

            return redirect('admin/config');
        }else{

            return  back()->with('errors','添加失败');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
