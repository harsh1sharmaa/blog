<?php

namespace App\Controllers;

if (!isset($_SESSION['start'])) {
    // session_start();
    $_SESSION['start'] = true;
}



use App\Libraries\Controller;
use App\Models\User;

class Sample extends Controller
{
    public function index()
    {
        $this->view('sample');
    }
    public function sH()
    {
        echo 'hello';
    }
    public function login()
    {

        print_r($_POST);
        $this->view('login');


        // if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['paswrd'])) {
        //     $data = $_POST ?? array();
        //     print_r($data['email']);
        //     $user = $this->model('Users');
        //     $user->email = $data['email'];
        //     $user->paswrd = $data['paswrd'];

        //     $user->save();
        // }
    }
    public function register()
    {

        print_r($_POST);
        $this->view('register');
    }
    public function registerUser()
    {
        $data = $_POST ?? array();
        // print_r($data);
        // echo "in submit";
        // print_r($data['email']);
        // $this->view('login');

        if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['pswrd']) && isset($_POST['username'])) {
            // print_r($_POST);
            $user = $this->model('Users');
            // print_r($user);
            // $user = new User();
            //     print_r($user);
            $user->username = $data['username'];
            $user->email = $data['email'];
            $user->pswrd = $data['pswrd'];
            // print_r($user);
            // echo $user->paswrd;
            $user->save();
        } else {

            echo '"not registered';
        }

        // $ndata['users'] = $this->model('Users')::all();
        // $con = $this->model('Users')::find_by_email_and_pswrd('harsh@sharma', 'rgregt');
        // // print_r($con);
        // echo var_dump($con);
        // if ($con != null) {
        //     $this->view('dashboard', $ndata);
        // } else {
        //     $val = " invalid user";
        //     $this->view('warning', $val);
        // }
        // $this->view('sample', $ndata);
        $this->view('login');
    }

    public function checkUser()
    {
        // print_r($_POST);

        if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['pswrd'])) {
            // print_r($_POST);
            // echo "hello";
            // $user = $this->model('Users');
            // print_r($user);
            // $user = new User();
            //     print_r($user);
            $email = $_POST['email'];
            $paswrd = $_POST['pswrd'];
            $con = $this->model('Users')::find_by_email_and_pswrd($email, $paswrd);
            if ($con != NULL && $con->permission == 'yes') {
                print_r($con->role);
                print_r($con->permission);
                $id = $con->id;
                $permission = $con->permission;


                // echo var_dump($con);

                if ($con->role == 'admin') {
                    //admin dashboard
                    $_SESSION['user'] = $id;
                    $data['users'] = $this->model('Users')::all();
                    $data['blogs'] = $this->model('Blogs')::all();
                    $this->view('admindash', $data);
                } else {
                    //userdashboard
                    // $data = "hello";
                    $_SESSION['user'] = $id;
                    // $data['blog'] = $this->model('Blogs')::find_all_by_permission('yes');

                    $data['blogs'] = $this->model('Blogs')::find_all_by_user_id($id);
                    // echo "<pre>";
                    // print_r($data['blogs']);
                    $this->view('dashboard', $data);
                }


                // print_r($user);
                // echo $user->paswrd;
                // $user->save();
            } else if ($con != NULL) {

                $data['warning'] = "wait for admin aprovel";
                $this->view('login', $data);
            } else {

                $data['warning'] = "invalid user";
                $this->view('login', $data);
            }
        }
    }

    public function changePermission()
    {

        // echo "changePermission";
        $id = $_GET['id'];
        $permission = $_GET['permission'];

        if (isset($_GET['id']) && isset($_GET['permission'])) {

            // $user = $this->model('Users');

            // $user = Users::find($id);
            // print_r($this->model('Users')::find($id));
            $user = ($this->model('Users')::find($id));
            $user->permission = $permission;
            $user->save();
        }
        $ndata['users'] = $this->model('Users')::all();
        $ndata['blogs'] = $this->model('Blogs')::all();
        $this->view('admindash', $ndata);
    }
    public function blogPermission()
    {

        // echo "changePermission";
        $id = $_GET['id'];
        $permission = $_GET['permission'];

        if (isset($_GET['id']) && isset($_GET['permission'])) {

            // $user = $this->model('Users');

            // $user = Users::find($id);
            // print_r($this->model('Users')::find($id));
            $user = ($this->model('Blogs')::find($id));
            $user->permission = $permission;
            $user->save();
        }
        $ndata['users'] = $this->model('Users')::all();
        $ndata['blogs'] = $this->model('Blogs')::all();
        $this->view('admindash', $ndata);
    }
}
