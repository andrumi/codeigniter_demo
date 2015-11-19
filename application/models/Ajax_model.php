 <?php
class Ajax_model extends CI_Model {

      public function __construct()
      {
              $this->load->database();
      }
		
      public function get_search($param)
      {
          $this->db->like('title', $param);
          $query = $this->db->get('news');
          return $query->result_array();
      }

}