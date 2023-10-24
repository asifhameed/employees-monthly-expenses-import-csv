<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	var $data;
	public function __construct()
	{
		parent::__construct();

		$this->data = array(
			'pno' => 1,
			'heading' => 'Dashboard',
			'sub_heading' => 'Dashboard',
			'title' => 'Dashboard'
		);
		$this->load->model('welcome_model');
	}

	public function index()
	{
		$data = $this->data;
		$data['result'] = $this->welcome_model->get_expense_list_by_month();
		$data['main'] = "welcome";  // view file name
		$this->load->ext_view(_TEMPLATE_PATH, 'template', $data);
	}

	public function upload_csv()
	{
		$fileName = $_FILES["file"]["tmp_name"];
		$date = date("Y-m-d h:i:s");
    
		if ($_FILES["file"]["size"] > 0) {
			
			$file = fopen($fileName, "r");
			$i = 0;
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
				if ($i > 0)
				{
					$data = array(
						'date'=> date('Y-m-d', strtotime($column[0])),
						'category'=> trim($column[1]),
						'employee_name'=> trim($column[2]),
						'employee_address'=> trim($column[3]),
						'employee_email_address'=> trim($column[4]),
						'expense_description'=> trim($column[5]),
						'pre_tax_amount'=> trim($column[6]),
						'tax_amount'=> trim($column[7]),
						'created_date'=> $date
					);
					$result = $this->welcome_model->import_data($data);
				}
				$i++;
			}
			$this->session->set_flashdata('message', 'CSV file import successfully.');
			redirect(base_url());
		}
		else
		{
			$this->session->set_flashdata('error', 'File not importe.');
			redirect(base_url());
		}
	}

	public function monthly_detail()
	{
		$data = $this->data;
		$date = $this->uri->segment(3);
		$data['month_date'] = date("F Y", strtotime($date));
		$data['result'] = $this->welcome_model->get_month_detail($date);
		$data['main'] = "monthly_employee_details";  // view file name
		$this->load->ext_view(_TEMPLATE_PATH, 'template', $data);
	}



}
