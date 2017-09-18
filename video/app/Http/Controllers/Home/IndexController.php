<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
	public function index(){

		$type = \DB::table('videos_type')->select('*',\DB::raw("concat(path,',',type_id) AS sort_path"))->orderBy('sort_path')->get();


		//数组处理!
       $arr=[]; 
       foreach($type as $k=>$v){
       	$arr[$k]=
       	[ 	
       		'path'=>$v->sort_path,
	       	'pid'=>$v->parent_id,
	       	'type_id'=>$v->type_id,
	       	'type_name'=>$v->type_name
	       	
       	];	
       }
		dd($arr);
		$r=array();	
		foreach($arr as $v){

			$p=&$r;
			 foreach(explode(',',array_shift($v)) as $k) {
			    if(! isset($p[$k])) 
			    $p[$k] = array();
			    $p = & $p[$k];
			  }
			  $p['value'] = $v; //if $v['']
			}
		$types=[];	
		$types=$r[0];

		
		
		 
		  foreach($types as $key=>$item) {
		    echo $item['value']['type_name'];
		    foreach($item as $k=>$t)
		    	echo $k ,'<br>';
		      if($k == 'value') {
		        echo 1;
		
		       }
		  }
		  die;      
		echo'<pre>'; 
		print_r($types);
		echo '</pre>'; 
		


		return view('home.index.index',['title'=>'视频首页'])->with(['types'=>$types]);

	} 

	
}
