<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome_model extends CI_Model 
{
    var $table;
    var $table2;
    public function __construct()
    {
        parent::__construct();
        $this->table2 = $this->db->dbprefix.'employees_monthly_expenses';
    }
    
    public function get_expense_list_by_month()
    {
        $sql = "SELECT id, date as exp_month, sum(pre_tax_amount) as pamount FROM ".$this->table2." GROUP BY YEAR(date), MONTH(date) ORDER BY date DESC";        
        $query = $this->db->query($sql);     
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        } 
    }

    public function get_month_detail($date){

        $this->db->select('*');
        $this->db->like('date', $date);
        $this->db->from($this->table2);
        $this->db->order_by("date", "DESC");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return null;
        }


    }

    public function import_data($data){
        $this->db->insert($this->table2, $data);
    }

   
}

?>