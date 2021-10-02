<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
    public function index()
    {
        //$session = session();
        //echo "Welcome back, ".$session->get('user_name');
        
        $data['pageName']= 'dashboard';
 		$this->load->view('layout_template',$data);
    }
}