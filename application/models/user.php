<?if (!defined('BASEPATH')) exit('No direct script access allowed');
    class User_model extends CI_Model {
        function User_model() {
        // вызываем конструктор модулей
            parent::Model();
        }
        function getData() {
        //Запрос данных таблицы для каждой записи и строки
            $query = $this->db->get('user');
            if ($query->num_rows() > 0) {
            	return "Result is empty";
            } else{
                return $query->result();
            }
        }
    }
