<?php 

    /**
    *     
    */
    class GuestBook
    {

        public $tbName = "book";
        public $db = NULL;
        
        public function __construct()
        {
        }

        public function getAll($order="order by id desc",$limit=10)
        {
            
            return R::findAll($this->tbName, $order);
        }

        public function getOne($id)
        {
            return R::load($this->tbName, $id);
        }

        public function save($info)
        {
            $message = R::dispense($this->tbName);

            $message->email = $info['email'];
            $message->name = $info['name'];
            $message->message = $info['message'];

            $id = R::store($message);
            return $id;

        }




    }

?>