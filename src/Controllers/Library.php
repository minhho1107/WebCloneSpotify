<?php 

class Library extends Controller {
   

    public function index()
    {
      

        $this->view('Listener/index_Library', [
           
            'Page' => 'playlist2'
        ]);
    }
    public function podcast()
    {    
             $this->view('Listener/index_Library', [      
             'Page' => 'PodCast'
         ]);
    }
    public function album()
    {
      
        $this->view('Listener/index_Library', [
           
            'Page' => 'Album2'
        ]);
    }
    public function artist()
    {
      
        $this->view('Listener/index_Library', [
           
            'Page' => 'Artist2'
        ]);
    }
    public function topAlbum()
    {
      
        $this->view('Listener/index_Library', [
           
            'Page' => 'topAmbul'
        ]);
    }
     public function Podcastcomponent()
    {
      
        $this->view('Listener/index_Library', [
           
            'Page' => 'PostCard_component'
        ]);
    }
    
}


?>