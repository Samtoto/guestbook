<?php 

    /**
    *     
    */
    class GuestBook
    {

        public $tbName = "book";
        public $db = NULL;
        
        public function __construct(  )
        {
            // $this->db = $db;
        }

        public function getAll($order="order by id desc",$limit=10)
        {
            
            return R::findAll($this->tbName, $order);
        }

        public function getOne($id)
        {
            return R::load($this->tbName, $id);
        }




    }

?>