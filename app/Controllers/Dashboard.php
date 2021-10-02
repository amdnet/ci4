<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard');
        // echo view('layout/header');
        // echo view('dashboard');
        // echo view('layout/footer');
    }

    public function konsumen()
    {
        // echo view('layout/header');
        // echo view('layout/sidebar');
        echo view('konsumen');
        // echo view('layout/footer');
    }
}