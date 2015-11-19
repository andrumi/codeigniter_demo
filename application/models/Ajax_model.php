 <?php
class Ajax_model extends CI_Model
{

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

    public function get_searchDate($param)
    {
        $first_date =$param-3;
        $second_date = $param +3;
        //$paramDate = strtotime($param);
        $date=date_create($param);
        $paramDate =date_create_from_format($param,"d/m/y H:i:s");
        print $paramDate;
//        $this->db->where('date >=', $first_date);
//        $this->db->where('date <=', $second_date);
//        $this->db->where(date_create_from_format(date_create('date'),"d/m/y H:i:s") <= $paramDate);
        $this->db->where(date_create_from_format('date',"d/m/y H:i:s")== $paramDate);
        //$this->db->where(DATEDIFF('date',$param)<=3);
        $query = $this->db->get('news');
        return $query->result_array();

    }
}