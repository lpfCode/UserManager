<?php namespace App\Http\Controllers;

class AboutController extends Controller {

	public function index(){
            
             return view('static_pages/about');
	}
        public function add(){

             return view('add');
        }
        public function edit(){

            return view('edit');
        }
        public function delete(){
       
             return view('index');
        }
        public function save(){
            
             return view('index');
        }
        public function query(){

             return view('index');
        }
}
