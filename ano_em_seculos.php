<?php
    
    class Seculo {
        private  $ano = null;
        private $seculo = null;

        public function __get($name) {
            return $this->$name;
        }

        public function __set($name, $value) {
            $this->$name = $value;
        }

        public function numeroPositivo($ano) {
            if($ano < 0) {
                header('Location: index.php');;
            }
        }

        public function SeculoAno($ano, $seculo) {
            if($ano < 100) {
                $this->$seculo = 1;
            }else if($ano % 100 === 0) {
                $this->$seculo = $ano / 100;
            }else{
                $this->$seculo = round(($ano / 100) + 1); 
            }

            echo 'O século do ano digitado é: ' . $this->$seculo;

        }

    }

    $seculo = new Seculo();
    $seculo->__set('ano', $_POST['ano']);
    $seculo->numeroPositivo($_POST['ano']);
    $seculo->__get('seculo');
    $seculo->SeculoAno($_POST['ano'], 'seculo');

   
?>