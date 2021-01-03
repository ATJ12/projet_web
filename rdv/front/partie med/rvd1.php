<?php
	class rvd1{
		private $id =null;
        private $nom_patient=null;
        private $pre_patient=null;
        private $email=null;
        private $gender=null;
        private $discription=null;
public function __construct($nom_patient, $pre_patient, $email,$gender,$discription){
            $this->nom_patient=$nom_patient;
            $this->pre_patient=$pre_patient;
            $this->$email=$email;
            $this->gender=$gender;
            $this->discription=$discription;
        }
		public function getId(){
			return $this->id;
        }
        public function getnom_patient(){
			return $this->nom_patient;
        }
        public function getpre_patient(){
			return $this->pre_patient;
        }
        public function getemail(){
			return $this->email;
        }
		public function getgender(){
			return $this->gender;
        }
        public function getdiscribtion(){
			return $this->discribtion;
        }
	    public function setId($id){
			$this->id=$id;
        }
        public function setnom_patient($nom_patient){
			$this->nom_patient=$nom_patient;
        }
        public function set_patient($pre_patient){
			$this->pre_patient=$pre_patient;
        }
        public function setdiscribtion($discribtion){
			$this->discribtion=$discribtion;
        }

		public function setemail($email){
			$this->email=$email;
        }

}

?>