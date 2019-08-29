<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class candidate extends CI_Controller {






    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
         $this->load->model('event_model');
        $this->load->helper('string');
        if(($this->session->userdata('admid'))) {

            $this->load->view('includes/header_view');
            $this->load->view('includes/navigation_view');
            $data['message']='';
            $data['imageerror'] ='';
            $data["allevents"] = $this->event_model->select_all_event();
            $this->load->view('add_candidate_view',$data);
            $this->load->view('includes/footer_view');
        }
        else
        {

            redirect(base_url().'index.php/admin/login/');
        }
    }


    public function addaction()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('candidate_model');
        $this->load->model('event_model');
        $data["allevents"] = $this->event_model->select_all_event();
        $this->load->helper('string');

        $data['imageerror'] ='';

        if(($this->session->userdata('admid'))) {

                $this->load->view('includes/header_view');
            $this->load->view('includes/navigation_view');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'required|trim|strip_tags');
            $this->form_validation->set_rules('event', 'Event', 'required|trim|strip_tags');
      
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            if ($this->form_validation->run()== FALSE)
            {
                $data['postdata']=$this->input->post();
                $data['message']='<div class="alert alert-warning alert-dismissable"> Try after sometime <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
                $this->load->view('add_candidate_view',$data);

            }
            else
            {
                $data['imageerror'] ="";
                $cphoto =" ";
                if($_FILES["cphoto"]["size"]>0) {
                    $flag = 0;
                    $config['upload_path'] = UPLOAD_CANDIDATE_URL;
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['file_name'] = random_string('alnum', 4) . "_" . $_FILES["cphoto"]["name"];


                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('cphoto')) {
                        // $error = array('imageerror' => $this->upload->display_errors());
                        $flag = 1;
                        $data['imageerror'] = $this->upload->display_errors();
                        // $this->load->view('upload_form', $error);
                    } else {
                        $cphoto = $this->upload->data('file_name');


                    }
                }
                $data2 = array(
                    'event' => $this->input->post('event'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'contactno' => $this->input->post('contactno'),
                    'photo'=>$cphoto
                );

                if($this->candidate_model->insert_candidate($data2))
                {

                    $data['message']= '<div class="alert alert-info alert-dismissable"> SucessFully Added <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
                    $this->load->view('add_candidate_view',$data);
                }
                else
                {
                    $data['postdata']=$this->input->post();
                    $data['message']= '<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
                    $this->load->view('add_candidate_view',$data);
                }

            }
            $this->load->view('includes/footer_view');
        }
        else
        {

            redirect(base_url().'index.php/admin/login/');
        }
    }





    public function candidate_list()
    {


        $this->load->helper('url');

        $this->load->library('pagination');
        $this->load->model('candidate_model');


        $config['base_url'] = base_url()."index.php/candidate/candidate_list/";
        $config['total_rows'] = $this->candidate_model->count_candidate();
        $config['per_page'] = 50;
        $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next Page';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous Page';
        $config['prev_tag_open'] = '<li >';
        $config['prev_tag_close'] = '</li>';


        $config['cur_tag_open'] ='<li class="active">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';



        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
            $page = ($this->uri->segment(3)) ;

        }
        else{
            $page = 0;
        }
        $data["allcandidates"] = $this->candidate_model->pagination_select_candidate($config["per_page"], $page);

        $str_links = $this->pagination->create_links();
        $data["links"] = $str_links ;

        $data['message']='';
        $this->load->view('includes/header_view');
        $this->load->view('includes/navigation_view');
        $this->load->view('list_candidate_view',$data);
        $this->load->view('includes/footer_view');
    }




    public function delete()
    {
        $this->load->model('candidate_model');
        $status=0;
        $id=$this->input->post('id');
        $candidate=$this->candidate_model->get_candidate($id);
        if($this->candidate_model->delete_candidate($id))
        {
            if(trim($candidate['photo'])!="")
                unlink(UPLOAD_CANDIDATE_URL.$candidate['photo']);
            $status=1;
        }
        $data = array('status' => $status);
        echo json_encode($data);

    }




    public function edit($id)
    {
        $this->load->model('candidate_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        if(($this->session->userdata('admid'))) {

            $this->load->view('includes/header_view');
            $this->load->view('includes/navigation_view');
        $this->load->model('event_model');
        $data["allevents"] = $this->event_model->select_all_event();
            $data['candidate']=$this->candidate_model->get_candidate($id);
            $data['message']='';
            $this->load->view('edit_candidate_view',$data);
            $this->load->view('includes/footer_view');
        }
        else
        {

            redirect(base_url().'index.php/admin/login/');
        }
    }



    public function editaction($id)
    {
        $this->load->model('candidate_model');
           $this->load->model('event_model');
        $data["allevents"] = $this->event_model->select_all_event();
        $this->load->helper('form');
        $this->load->helper('string');

        if(($this->session->userdata('admid'))) {
            $data['imageerror'] = "";
            $this->load->view('includes/header_view');
            $this->load->view('includes/navigation_view');


            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'required|trim|strip_tags');
            $this->form_validation->set_rules('event', 'Event', 'required|trim|strip_tags');
           
            $this->form_validation->set_error_delimiters('<div class="alert alert-warning alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            if ($this->form_validation->run()== FALSE)
            {
                $data['postdata']=$this->input->post();
                $data['message']='<div class="alert alert-warning alert-dismissable"> Try after sometime <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';
                $this->load->view('add_candidate_view',$data);

            }
            else {

                $candidate= $this->candidate_model->get_candidate($id);
                $cphoto = $candidate['photo'];
                if ($_FILES["cphoto"]["size"] > 0) {
                    $flag = 0;
                    $config['upload_path'] = UPLOAD_CANDIDATE_URL;
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['file_name'] = random_string('alnum', 4) . "_" . $_FILES["cphoto"]["name"];


                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('cphoto')) {
                        // $error = array('imageerror' => $this->upload->display_errors());
                        $flag = 1;
                        $data['imageerror'] = $this->upload->display_errors();
                        // $this->load->view('upload_form', $error);
                    } else {
                        $cphoto = $this->upload->data('file_name');


                    }
                }
                $data2 = array(
                    'event' => $this->input->post('event'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'contactno' => $this->input->post('contactno'),
                    'photo'=>$cphoto
                );

                $this->candidate_model->update_candidate($data2, $id);

                $data['message'] = '<div class="alert alert-info alert-dismissable"> SucessFully Ediited <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>';


                $data['candidate'] = $this->candidate_model->get_candidate($id);
                $this->load->view('edit_candidate_view', $data);
            }
            $this->load->view('includes/footer_view');
        }
        else
        {

            redirect(base_url().'index.php/admin/login/');
        }
    }

}
