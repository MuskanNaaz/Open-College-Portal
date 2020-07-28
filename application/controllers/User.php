<?php 
class User extends CI_controller{
    public function index(){
        if(isset($_GET['search'])){
            $search = $_GET['search'];
            $data['info']= $this->datawork->search('college',['c_name'=>$search]);
        }
        else{
         $data['info']=$this->datawork->calling('college');
        
        }
         $data['cat']=$this->datawork->calling('cat');
        $this->load->view('home',$data);
    }
    public function search_cat(){
         if(isset($_GET['stream'])){
            $search = $_GET['stream'];
            $data['info']= $this->datawork->search('college',['c_cat'=>$search]);
        }
        else{
            redirect('user/index');
        }
         $data['cat']=$this->datawork->calling('cat');
        $this->load->view('home',$data);
    }
    
    public function insert(){
        $config['upload_path']= './access/';
        $config['allowed_types']= 'gif|jpg|png';
        $this->load->library("upload",$config);
        $this->form_validation->set_error_delimiters("<small class='text-danger'>","</small>");
        $this->form_validation->set_rules('c_name','c_name','required');
        $this->form_validation->set_rules('address','address','required');
        $this->form_validation->set_rules('descr','descr','required');
        $this->form_validation->set_rules('fees','fees','required');
        $this->form_validation->set_rules('rating','rating','required');
        $this->form_validation->set_rules('website','website','required');
        $this->form_validation->set_rules('email','email','required|valid_email');
        $this->form_validation->set_rules('mobile','mobile','required');
        if($this->form_validation->run()){
            if($this->upload->do_upload('image')){
            
            $data=[
                'c_name'=>$_POST['c_name'],
                'address'=>$_POST['address'],
                'descr'=>$_POST['descr'],
                'fees'=>$_POST['fees'],
                'website'=>$_POST['website'],
                'rating'=>$_POST['rating'],
                'email'=>$_POST['email'],
                'mobile'=>$_POST['mobile'],
                'c_cat' =>$_POST['c_cat'],
                'image' =>$_FILES['image']['name']
            ];
            $this->datawork->insert_data('college',$data);
            $this->session->set_flashdata("success","<div class='alert bg-info text-white'>Data insert successfully!!</div>");
            redirect('user/insert');
            }
            else{
                print_r($this->upload->display_errors());
                echo "Not Uploaded";
            }
            }
        else
        {
            
            $data['info']=$this->datawork->calling('cat');
            $this->load->view('insert',$data);}
    }
    public function insert_cat(){
        $this->form_validation->set_rules('cat','cat','required');
        if($this->form_validation->run()){
            $data=[
                'cat'=>$_POST['cat']
                ];
            $this->datawork->insert_data('cat',$data);
            $this->session->set_flashdata("success","<div class='alert bg-danger text-white'>Category insert successfully!!</div>");
            redirect('user/insert');
        }
        else
        {$this->load->view('insert');}
    }
    public function view($id=NULL){
        $data['infor']=$this->datawork->calling_onedata('college',['id'=>$id]);
        $this->load->view('view',$data);
    }
}
?>