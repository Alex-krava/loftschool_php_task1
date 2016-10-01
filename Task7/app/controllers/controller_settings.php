<?php
class Controller_Settings extends Controller {

    private $name;
    private $age;
    private $ip;
    private $data;

    function __construct()
    {
        $this->view = new View();
    }
    public function action_index()
    {
        session_start();

        if($_SESSION['user']){
            if($_POST){

                $this->name = isset($_POST['personalName']) ? $_POST['personalName'] : null;
                $this->age = isset($_POST['personalAge']) ? $_POST['personalAge'] : null;
                $this->ip = isset($_POST['personalIp']) ? $_POST['personalIp'] : null;
                $this->data = isset($_POST['personalData']) ? $_POST['personalData'] : null;

                $arr = [
                    'name' => $this->name,
                    'age' => $this->age,
                    'ip' => $this->ip,
                    'data' => $this->data
                ];
                $result = GUMP::is_valid($arr, [
                    'name' => 'required|min_len,5',
                    'age' => 'required|integer|min_len,2|max_len,2',
                    'ip' => 'required|valid_ip',
                    'data' => 'required|min_len,50'
                ]);
                if(isset($result)){
                    $data = $result;
                }
                else{
                    $data = '';
                }
            }

            $this->view->generate('settings.twig', array(
                'data' => $data,
                'users' => 'true'
            ));
        }
        else{
            header('location: /');
        }
    }
}