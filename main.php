<?php
    // Exercicio 1
    function isValid($num){
        $posL = strpos($num, "(");
        $posR = strpos($num, ")");

        if($posL != ""){
            if($posR != ""){
                if($posL == 0){
                    
                    $sp = substr($num,($posR+1),1);
                    if($sp == " "){ 
                        
                        $digitos = substr($num,($posR+2),10);
                        $traC = strpos($digitos,"-");
                        if($traC != ""){
                            if($traC == 5 || $traC == 4){
                                $soN = intval(str_replace("-","",$traC));
                                if($soN == 0){
                                    
                                    return false;
                                }else{
                                    
                                    return true;
                                }
                            }else{
                                
                                return false;
                            } 
                        }else{
                            
                            return false;
                        } 
                    }else{
                        
                        return false;
                    }
                }else{
                    
                    return false;
                }
            }else{
                
                return false;
            }
        }else{
            
            return false;
        }
    }
    
    // Exercicio 2
    function removeCharacters($str){
        $novaStr = str_replace("!","",str_replace("@","",str_replace("#","",str_replace("$","",str_replace("%","",str_replace("^","",str_replace("&","",str_replace("\*","",str_replace("*","",str_replace("(","",str_replace(")","",$str)))))))))));
        return $novaStr;
    }

    // Exercicio 3
    function calculaPontuacao($str){
        $ana = substr_count($str,"A");
        $bruna = substr_count($str,"B");
        $caio = substr_count($str,"C");
        $mat = [$ana,$bruna,$caio];
        return $mat;
    }

    // Exercicio 5
    function mutiplicar($num){
        if($num == 1){
            return 1;
        }else{
            return $num * mutiplicar($num -1);
        }
    }

    // Exercicio 4
    function dividirGrupos($str){
        $arrayfinal = [];
        $letras = str_split($str);
        foreach ($letras as $key => $value) {
            $pos = false;
            foreach ($arrayfinal as $key => $val) {
                $letra = str_split($val);
                if($letra[0] == $value){
                    $pos = true;
                }
            }
            if($pos == false){
                $rep = substr_count($str,$value);
                $l = "";
                for ($i=0; $i < $rep; $i++) { 
                    $l = $l."$value";
                }
                array_push($arrayfinal,$l);
            }else{

            }
        }
        return $arrayfinal;
    }
?>