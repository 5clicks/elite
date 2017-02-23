<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publik extends CI_Controller {

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
	public function index()
	{
		$data['page'] = 'Home';
		$data['images'] = $this->pml->getLatestPictures();
		$data['videos'] = $this->pml->getLatestVideos();
		$data['audios'] = $this->pml->getLatestAudios();

		$this->load->view('includes/header',$data);
		$this->load->view('home',$data);
		$this->load->view('includes/footer');
	}
	public function about()
	{
		$data['page'] = 'About';
		$this->load->view('includes/header',$data);
		$this->load->view('about');
		$this->load->view('includes/footer');
	}
	public function directory()
	{
		$data['page'] = 'Directory';
		$this->load->view('includes/header',$data);
		$this->load->view('directory');
		$this->load->view('includes/footer');
	}
	public function school()
	{
		$data['page'] = 'Nu Vision School';
		$data['media'] = $this->pml->getLatestPicturesVideos();
		$this->load->view('includes/header',$data);
		$this->load->view('school',$data);

		$this->load->view('includes/footer');
	}
	public function pricing()
	{
		$data['page'] = 'Price Table';
		$this->load->view('includes/header',$data);
		$this->load->view('pricing');
		$this->load->view('includes/footer');
	}
	public function contact()
	{
		$data['page'] = 'Contact Us';
		$this->load->view('includes/header',$data);
		$this->load->view('contact');
		$this->load->view('includes/footer');
	}
	public function searchresults()
	{
		$data['page'] = 'Search Results';
		$data['keyword'] = $_POST['mysearch'];
		$this->load->view('includes/header',$data);
		$this->load->view('searchresults');
		$this->load->view('includes/footer');
	}
	public function scholarship()
	{
		$data['page'] = 'Scholarships';
		
		$data['scholarship'] = $this->pml->getLatestScholarship();

		$this->load->view('includes/header',$data);
		$this->load->view('scholarship');
		$this->load->view('includes/footer');
	}
}
