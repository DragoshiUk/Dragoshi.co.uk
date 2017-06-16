<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller{

    public function __construct(){
        parent::__construct();

        $this->load->model('ImageUpload_Model');
        $this->load->helper('form');
    }

    public function do_upload(){

        $config['upload_path'] = realpath(APPPATH.'../upload');
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']	= '204800';
        $config['min_width'] = '150';
        $config['min_height'] = '150';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile')) //If this upload fails
        {
                //Put reason for errors in array for use in view
                $error = array('error' => $this->upload->display_errors());
                //Call view with error
                $this->load->view('templates/index/header');
                $this->load->view('forms/upload_form', $error);
                $this->load->view('templates/index/footer');

        }else
        {
                //Populate the array with the data received for use in view
                $db_data = array('name' => $this->upload->data('file_name'),
                                'path' => $this->upload->data('file_path'),
                                'description' => $this->input->post('description')
                            );
                //Insert image information into database with model function dbInsert
                $this->ImageUpload_Model->dbInsert($db_data);
                //Call upload success page
                $this->load->view('templates/index/header');
                $this->load->view('forms/upload_success', $db_data);
                $this->load->view('templates/index/footer');
        }
    }
}

?>
