<?php
	class rvd1{
		private $id =null;
     
        private $jour=null;
        private $heure=null;
        private $nom_med=null;
        private $nom_patient=null;
		            public function __construct($nom_med,$nom_patient,$jour,$heure){
                        $this->nom_med=$nom_med;
                        $this->nom_patient=$nom_patient;
                        $this->jour=$jour;
                        $this->heure=$heure;
           
        }
		public function getNom_med(){
			return $this->nom_med;
        }
        public function getNom_patient(){
			return $this->nom_patient;
		}
	    public function setId($id){
			$this->id=$id;
        }
        public function setnom_med($nom_med){
            $this->nom_med=$nom_med;
                }
        public function setnom_patient($nom_patient){
			$this->Nom_patient=$nom_patient;
        }
		public function setjour($jour){
			$this->jour=$jour;
        }
        public function getjour(){
			return $this->jour;
		}
		public function setheure($heure){
            $this->heure=$heure;}
        public function getheure(){
                return $this->heure;		
            }
}

?>