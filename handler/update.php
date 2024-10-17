<?php
 if (isset($_POST['submit']) 
 && $_POST['submit'] == 'izmeni' 
 && isset($_POST['predmet'] ) 
 && isset($_POST['katedra'] )
 && isset($_POST['sala'] )
 && isset($_POST['datum'] ) ) {

        $id = $_POST['id_predmeta'];
        $predmet = $_POST['predmet'];
        $katedra = $_POST['katedra'];
        $sala = $_POST['sala'];
        $datum = $_POST['datum'];
        $prijava = new Prijava($id, $katedra,$predmet,$sala,$datum);
        $status = Prijava::update($prijava, $conn);
        if ($status) {
            echo "Uspesno ste izmnili";
        } else {
            echo "Doslo je do problema prilikom izmene";
        }
    }


?>