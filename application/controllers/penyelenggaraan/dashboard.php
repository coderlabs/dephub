<?php
class Dashboard extends Penyelenggaraan_Controller{
    
    protected $thn;
    
    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model('mdl_penyelenggaraan','slng');
        $this->load->model('mdl_perencanaan','rnc');
        $this->thn = date('Y');
    }
    
    function index(){
	$data['sub_title']='Dashboard';
	$this->template->display('simdik/penyelenggaraan/dashboard',$data);       
    }
    
}
