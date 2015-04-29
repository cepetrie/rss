<?php
//Rss.php controller
class Rss extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->config->set_item('banner', 'Global News Banner');
        }

        
    
        public function index()
        {
                   
            //read-feed-simpleXML.php
            //our simplest example of consuming an RSS feed

            $request = "http://rss.news.yahoo.com/rss/software";//model
            $response = file_get_contents($request);//model
            $data['xml'] = simplexml_load_string($response);//model


            //$data['news'] = $this->news_model->get_news();
            $data['title'] = 'RSS Feed';               
            $this->load->view('rss/index', $data);
              
        }#end index

}#end Rss class/controller()