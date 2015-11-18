 <?php
class Ajax_model extends CI_Model {

      public function __construct()
      {
              $this->load->database();
      }
		
		
      public function get_search($slug)
      {
          
          $query = $this->db->get_where('news', array('slug' => $slug));                   
          
          return $query->row_array();  
      }  			

}