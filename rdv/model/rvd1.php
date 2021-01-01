<?php
	class rvd1{
		private $id =null;
        private $id_med =null;
        private $id_patient =null;
        private $jour=null;
        private $heure=null;
        private $nom_med=null;
        private $nom_patient=null;
		            public function __construct($id_med,$id_patient,$jour,$heure,$nom_med,$nom_patient){
            $this->id_med=$id_med;
            $this->id_patient=$id_patient;
            $this->jour=$jour;
            $this->heure=$heure;
            $this->nom_med=$nom_med;
            $this->nom_patient=$nom_patient;
        }
		public function getId(){
			return $this->id;
        }
        public function getId_med(){
			return $this->id_med;
        }
        public function getId_jour(){
			return $this->getId_jour;
        }
        public function getId_heure(){
			return $this->getId_heure;
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
        public function setId_med($id_med){
			$this->id_med=$id_med;
        }
        public function setId_patient($id_patient){
			$this->id_patient=$id_patient;
        }
        public function getId_patient(){
return $this->id_patient;		}
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
        public function setnom_med($nom_med){
            $this->nom_med=$nom_med;
                }
        public function setnom_patient($nom_patient){
			$this->Nom_patient=$nom_patient;
        }

}

?>