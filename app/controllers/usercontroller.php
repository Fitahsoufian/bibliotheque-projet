<?php


namespace PHPMVC\Controllers;


use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Session;
use PHPMVC\Models\ReserveModel;
use PHPMVC\Models\UserModel;

class UserController extends AbstractController
{
    use InputFilter;
    use Helper;

    public function __construct()
    {
        Session::Start();
    }

    public function defaultAction()
    {
        $this->_data['users'] = UserModel::getAll();
        $users = $this->_data['users'];
        $this->_view();
    }

    public function registerAction()
    {
        if (isset($_POST['submit'])) {
            $user = new UserModel();
            $user->firstName = $this->filterString($_POST['first_name']);
            $user->lastName = $this->filterString($_POST['last_name']);
            $user->age = $this->filterInt($_POST['age']);
            $user->phone = $this->filterInt($_POST['phone']);
            $user->mail = $this->filterString($_POST['mail']);
            $user->pass = $this->filterString($_POST['password']);
            // var_dump($user);

            if ($user->save()) {
                // $_SESSION['message'] = 'user, added successfully';
                $this->redirect('/index/achat');
            }


        }

        $this->_view();
    }

    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
//        var_dump($id);
        $user = UserModel::getByPk($id);
        if ($user === false) {
            // $this->redirect('/user');
        }
        var_dump($user);
        $this->_data['user'] = $user;
        if (isset($_POST['submit'])) {
//            $user = new UserModel();
            $user->user_name = $this->filterString($_POST['name']);
            $user->user_email = $this->filterString($_POST['email']);
            $user->user_pass = $this->filterString($_POST['password']);
            $user->user_address = $this->filterString($_POST['address']);
            $user->user_first_name = $this->filterString($_POST['first_name']);
            $user->user_last_name = $this->filterString($_POST['last_name']);
            var_dump($user);
            if ($user->save()) {
                $_SESSION['message'] = 'user, added successfully';
                // $this->redirect('/user');
            }
        }
        $this->_view();
    }

    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        var_dump($id);
        $user = UserModel::getByPk($id);
        if ($user->delete()) {
            $_SESSION['message'] = 'user, deleted successfully';
            // $this->redirect('/user');
        }
    }

    public function loginAction()
    {
        if (isset($_POST['login'])) {
            $login_mail = trim($_POST['mail']);
            $login_pass = trim($_POST['password']);
            if (UserModel::checkAuth($login_mail, $login_pass)) {
                if ( $_SESSION['session_user_role'] == 'Admin'){
                    $this->redirect('/dashboard');
                }
                // Session::Set('mail', $login_mail);
                else{
                    $this->redirect('/index/achat');
                }
                // $this->redirect('/product');
            } else {
                $_SESSION['msg'] = "Incorrect information try again!!";

            }
        }

        $this->_view();
    }
   
    public function logoutAction()
    {
        Session::Stop();
        // $this->redirect('/index');

    }

    public function reservationAction(){
        $this->_data['reservs'] = ReserveModel::getAll();

        $this->_view();
    }
}
