<?php

class ImageUpload_Model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    function dbInsert($image_data = array()){
        //Insert data array into images table
        $this->db->insert('images', $image_data);
    }
}

?>
