<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller 
{
    public function index()
    {
        $this->template->load("Template", "index/index", []);

    }
}