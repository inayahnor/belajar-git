<?php

Class Blog extends CI_Controller
{
    public function index()
    {
        $this->load->database();
        $query=$this->db->get('blog');
        $data['blog']=$query->result_array();
        $this->load->view('blog', $data);
    }
    
    public function detail($url)
    {
        $this->load->database();
        $this->db->where('url', $url);
        $query=$this->db->get('blog');
        $data['blog']=$query->row_array($url);
        $this->load->view('detail', $data);
    }
} 
?>   