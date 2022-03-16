<?php


namespace App\Controllers;

if (!isset($_SESSION['start'])) {
    // session_start();
    $_SESSION['start'] = true;
}


use App\Libraries\Controller;

class Blog extends Controller
{
    public function index()
    {
        echo 'in Admin';
    }
    public function sH()
    {
        echo 'hello';
    }

    public function uploadBlog()
    {

        // echo 'uploading';
        // $this->view('upload');
        $this->view('upload');
    }

    public function uploading()
    {

        // echo 'uploading';

        // print_r($_POST);
        // $title = $_POST['title'];
        // $content = $_POST['content'];
        // echo $content;
        // echo $title;


        $data = $_POST ?? array();
        // print_r($data);
        // echo "in submit";
        // print_r($data['email']);
        // $this->view('login');

        if (isset($_POST['title']) && isset($_POST['content'])) {
            // print_r($_POST);
            $blog = $this->model('Blogs');
            // print_r($user);
            // $user = new User();
            //     print_r($user);
            $id = $_SESSION['user'];
            $blog->title = $data['title'];
            $blog->text = $data['content'];
            $blog->user_id = $id;
            // print_r($user);
            // echo $user->paswrd;
            $blog->save();

            $this->view('upload');
        } else {

            echo '"not upload';
        }
    }

    public function blogs()
    {

        // echo "hello world";
        $data['blog'] = $this->model('Blogs')::find_all_by_permission('yes');

        // print_r ($blogs);
        // foreach ($blogs as $blog) {
        //      echo "<pre>";
        //     print_r($blog->blog_id);
        // }
        // print_r($data);
        $this->view('display', $data);
    }

    public function readmore()
    {

        $id = $_GET['id'];
        $data['blog'] = $this->model('Blogs')::find_by_blog_id($id);

        // echo $data['blog']->text;
        // echo $data['blog']->blog_id;
        $this->view('detail', $data);
    }
    public function logout()
    {

        unset($_SESSION['user']);
        $this->view('login');
    }

    public function deleteBlog()
    {

        echo "Deleting";
        $id = $_GET['id'];
        $blog = $this->model('Blogs')::find_by_blog_id($id);
        $blog->delete();
        $_SESSION['user'] = $id;
        // $data['blog'] = $this->model('Blogs')::find_all_by_permission('yes');

        $data['blogs'] = $this->model('Blogs')::find_all_by_user_id($id);
        // echo "<pre>";
        // print_r($data['blogs']);
        $this->view('dashboard', $data);
    }

    public function edit()
    {


        echo "Editing";
        $id = $_GET['id'];
        echo $id;
        $data['blogs'] = $this->model('Blogs')::find_all_by_blog_id($id);
        $this->view('edit', $data);
    }
    public function updating()
    {

        // echo "Updating";
        // print_r( $_POST);
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $blog = $this->model('Blogs')::find_by_blog_id($id);
        $blog->title = $title;
        $blog->text = $content;
        $blog->save();
        $data['blog'] = $this->model('Blogs')::find_all_by_permission('yes');
        $this->view('display', $data);
    }
}
