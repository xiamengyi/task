<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once './application/controllers/pc_controller.php';

class Statistics_theme extends PC_controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Appmodel','m_app',true);
		$this->load->model('Usermodel','m_user',true);
		$this->load->model('Systemmodel','m_system',true);
		$this->load->model('Typemodel','m_type',true);
		$this->load->model('Questionmodel','m_question',true);
	}

	public function index()
	{
		$data['question_type_and_type'] = $this->m_system->getQuestionDetailsByQuestionTypeAndType();
		$this->load->view('statistics_theme',$data);
	}

/*
| -------------------------------------------------------------------
|  Statistics_theme Basic Functions
| -------------------------------------------------------------------
*/


}
/* End of file Statistics_theme.php */
/* Location: ./application/controllers/statistics_theme.php */


