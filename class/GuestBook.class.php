<?php 

    /**
    *     
    */
    class GuestBook
    {

        public $tbName = "guest";
        public $db = NULL;
        
        function __construct( $db )
        {
            $this->db = $db;
        }

        public function getAll()
        {
            # code...
        }




    }

?>