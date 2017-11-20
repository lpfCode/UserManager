<?php
    namespace App\Http\Controllers;
    use App\Http\Requests\Request;
    use App\Models\User;

class UserController extends Controller {

//    查全部
	public function index(){

	    $users = User::all();
//        return view('index',array('users',$users));
	    return View::make('index')->with('users',$users);
	}
//	增加按钮
    public function add(){

         return view('add');
    }
//    编辑按钮
    public function edit($id){

        return view('edit',array('id',$id));
    }
//    表单提交(更新)
    public function update(Request $request){
        $id = $request->id;
        $input = $request->all();
        $users = fill($input)->save();
        return redirect()->route('/');
    }
//    删除
    public function delete(){

         return view('index');
    }
//    表单提交（添加功能）
    public function save(Request $request){

        $input = $request->all();
        User::create($input);
        return redirect()->route('/');
//        return view('index');
    }
//    条件查询
    public function query(){

        return view('index');
    }
//    注册
    public function signup(){

         return view('users/signup');
    }
}
