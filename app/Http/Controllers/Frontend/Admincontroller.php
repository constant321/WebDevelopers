<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Admincontroller extends Controller
{
    public function index(){
        return view('frontend.adminLogin');
    }

    public function Admin(){
        $blogs = DB::table('blogs')->select('blog_id','blog_name','blog_description')->get();
        return view('frontend.admin')->with('blogs', $blogs);
    }

    public function editP(){
        return view('frontend.edit');
    }

    public function edit(Request $req, $id){
        echo $id;
        //$id= $req->blog_id;
        return view('frontend.edit')->with('id', $id);
    }

    public function EditSubmit(Request $req, $id){
        $name = $req->input('name');
        $dsc = $req->input('description');
        //$pID = get[$id];
        DB::update('update blogs set blog_name=?, blog_description=? where blog_id= ?', [$name, $dsc, $id]);
        return redirect('Admin');

    }

    public function delete($id){
        DB::table('blogs')->where('blog_id', $id)->delete();
        return redirect('Admin');
    }


    public function login(Request $req){
        $uname = $req->input('user');
        $pass = $req->input('pass');

        $loginData = DB::select('select password from login where username = ?', [$uname]); 
     
        if (count($loginData) > 0){
            
            foreach ($loginData as $tablepass) {

                if (($tablepass->password) == $pass){
                    return redirect('Admin');
                }
                else{
                    $error='Password does not match';
                    return view('frontend.adminLogin')->with('error',$error);
                }
            }
        }

        else{
            $error='Username not Found.';
            return view('adminlogin')->with('error',$error);
        }
    }

    public function project(){
        return view('frontend.addProject');
    }

    public function blog(){
        return view('frontend.addBlog');
    }
    // protected function authenticated(Request $request, $user, $pass) {
    //     $con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
        
      
    //     $query=mysqli_query($con, "SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    //     $numrows=mysqli_num_rows($query);  
    //     if($numrows!=0)  
    //     {  
    //     while($row=mysqli_fetch_assoc($query))  
    //     {  
    //     $dbusername=$row['username'];  
    //     $dbpassword=$row['password'];  
    //     }  
        
        
    //     if($user==$dbusername && $pass==$dbpassword)  
    //     {  
    //     //session_start();  
    //     //$_SESSION['sess_user']=$user; 
    //     return redirect('/Admin');
    //     }  
    //     } else {  
    //     echo "Invalid username or password!";  
    //     }  
    // }

}
