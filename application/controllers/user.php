<?if (!defined('BASEPATH')) exit('No direct script access allowed');
    class User extends CI_Controller{
        function index() {
            $this->load->model('user_model');
            $data['result'] = $this->user_model->getData();
            $data['page_title'] = "Список пользователей.";
            $this->load->view('user_list',$data);
        }
    }
