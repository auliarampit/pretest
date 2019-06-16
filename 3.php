<?php
    function pohon($tahun, $tinggi){
        for($i=0; $i < $tahun; $i++){
            $tinggi = ($tinggi*2) +1;
        
        }
        return $tinggi;
    }
 echo pohon(3, 2);

?>