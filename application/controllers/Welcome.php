<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('api_model');
	}

	public function index()
	{
		$data['info'] = $this->api_model->list();;
		$this->load->view('pixares',$data);

	}

	public function search()
	{
		if (isset($_REQUEST['pixsubmit'])) 
		{
			if ($_REQUEST['pixchoose'] == 'image') 
			{
				$searchvar = $_REQUEST['mysearch'];
				$pixamain = $this->api_model->apiRequest("https://pixabay.com/api/?key=".PXKEY."&q=".$searchvar."&image_type=photo",'GET');
				$data['res'] = json_decode($pixamain);
				$this->load->view('piximgview',$data);
			}
			if ($_REQUEST['pixchoose'] == 'video') 
			{
				$searchvar = $_REQUEST['mysearch'];
				$pixamain = $this->api_model->apiRequest("https://pixabay.com/api/videos/?key=".PXKEY."&q=".$searchvar."&image_type=photo",'GET');
				$data['res'] = json_decode($pixamain);
				$this->load->view('pixvidview',$data);
			}
			$req = array('keywords' => $_REQUEST['mysearch'],
						'format' => $_REQUEST['pixchoose'],
						'date_created' => date("Y-m-d h:i:s"));
			if (isset($_REQUEST['id'])) {
				$this->api_model->savedata($req,'searcheditem',$_REQUEST['id']);
				$insert = $_REQUEST['id'];
			} else {
				$insert = $this->api_model->savedata($req,'searcheditem');
			}
		}
	}
	public function deleteme($id)
	{
		$this->api_model->hard_delete('searcheditem',$id);
		redirect('http://localhost/vega6/');
	}
}
