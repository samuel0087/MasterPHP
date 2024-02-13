<?php

require_once 'models/Usuario.php';

class UsuarioController {

    public function index() {
        echo "INDEX DE USUARIOS";
    }

    public function registro() {
        require_once 'views/usuario/registro.php';
    }

    public function save() {

        if (isset($_POST)) {
            $nombre = isset($_POST['name']) ? $_POST['name'] : false;
            $apellidos = isset($_POST['surname']) ? $_POST['surname'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($nombre && $apellidos && $email && $password) {

                $usuario = new Usuario($nombre, $apellidos, $email, $password);
                $status = $usuario->save();

                if ($status) {
                    $_SESSION['register'] = true;
                } else {
                    $_SESSION['register'] = false;
                }
            } else {
                $_SESSION['register'] = false;
            }
        } else {
            $_SESSION['register'] = false;
        }

        header("Location:" . base_url . "/Usuario/registro");
    }
    
    public function login(){
        if(isset($_POST)){
            $user = new Usuario();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            
            $userMaster = $user->login();
            
            if($userMaster && is_object($userMaster)){
                $_SESSION['identity'] = $userMaster;
                
                if($userMaster->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
                        
            }
            else{
                $_SESSION['login'] = false;
            }
            
        }
        
        header('Location:'.base_url);
    }
    
    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        
        header('Location:'.base_url);
    }

}
