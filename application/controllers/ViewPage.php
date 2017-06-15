<?php

class ViewPage extends CI_Controller{

            public function index($page = 'home'){

                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }

                $data['title'] = ucfirst($page);

                $this->load->view('templates/index/header.php', $data);
                $this->onePage();
                $this->load->view('templates/index/footer.php', $data);
            }

            public function onePage(){

                $views = array(
                    'home',
                    'about',
                    'gallery',
                    'blog',
                    'contact'
                );

                foreach($views as $view){
                    $data['title'] = ucfirst($view);
                    $this->load->view('templates/section/header.php', $data);
                    $this->load->view('pages/'.$view);
                    $this->load->view('templates/section/footer.php');
                }
            }
}

?>
