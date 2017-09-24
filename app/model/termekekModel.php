<?php

class termekekModel {

    public function kilista() {
        $pdo = Application::getConnection();
        $termek1 = "select * from termek order by datum DESC LIMIT 20; ";
        $stm = $pdo->prepare($termek1);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;

        //adatok kezelése függvény segítségével
    }

    public function katlista($id) {

        $pdo = Application::getConnection();
        $kat1 = "select * from termek ";
        $kat1 .= $id === false ?: "where kategoria_id={$id}";
        $stm = $pdo->prepare($kat1);
        $stm->execute();
        $result = $stm->fetchall(PDO::FETCH_ASSOC);
        return $result;
    }

}
