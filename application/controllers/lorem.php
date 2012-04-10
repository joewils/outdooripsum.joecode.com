<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lorem extends CI_Controller {

	public function index()
	{
  	$this->load->helper('url');
	  $this->load->library('loremipsum');
	  
	  // cache page output
	  $this->output->cache(60);
	  
	  // how many words?
	  $words = $this->uri->segment(2,500);
	  if (!is_numeric($words)) $words = 500; 
	  if ($words > 10000) $words = 10000; 
	  if ($words <= 0) $words = 500; 
	  
	  // lorem ipsum
	  $lorem = $this->loremipsum->getContent($words, 'html', false);
	  
	  // view
	  $this->load->view('lorem', array('lorem' => $lorem, 'words' => $words));
	  
	}
	
	public function words() 
	{
	  $this->load->helper('url');
	  
	  $words = 500;
	  if ( $this->input->post('words') && 
	      is_numeric($this->input->post('words')) && 
	      ( $this->input->post('words') > 0 ) &&
	      ( $this->input->post('words') < 10000)
	      ) {
	    $words = $this->input->post('words');
	  }
	  
    redirect('/lorem/'.$words);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */