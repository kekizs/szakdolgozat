<?php

class kosarModel {

    public function add($id) {

        if (!isset($_SESSION['kosar'][$id])) {
            $_SESSION['kosar'][$id] = 1;
        } else {
            $_SESSION['kosar'][$id] ++;
        }
        return $_SESSION['kosar'][$id];
    }

    public function kiir() {
        
        $keys = array_keys($_SESSION['kosar']);
        if(empty($keys)) {
            return [];
        }
        $stringid = implode(',', $keys);
        $pdo = Application::getConnection();
        $sql = "select * from termek where id in({$stringid}); ";
        $items = [];
        foreach ($pdo->query($sql) as $item) {
            $id = $item['id'];
            $item['db'] = $_SESSION['kosar'][$id]; //$_SESSION['kosar'][$item['id']];
            $items[] = $item;
        }

        return $items;
    }
    
    public function delete($id){
        
        unset($_SESSION['kosar'][$id]);
        
    }
    
     public function counter($id,$direction){
        
      $_SESSION['kosar'][$id]=$direction=='+' ? $_SESSION['kosar'][$id]+1 : $_SESSION['kosar'][$id]-1 ;
      if ($_SESSION['kosar'][$id] < 1) {
          $_SESSION['kosar'][$id]=1;
      }
      return $_SESSION['kosar'][$id];
    }

}
