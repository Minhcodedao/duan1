<?php 
    function loadall_binhluan($idpro) {
        $sql = "SELECT * FROM binhluan WHERE 1";
     
        if ($idpro > 0) {
            $sql .= " AND idpro='" . $idpro . "'";
        }
        $sql .= " ORDER BY id DESC";
        $listbl = pdo_query($sql);
        return $listbl;
        
    }
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values ('$noidung','$iduser','$idpro','$ngaybinhluan')"; 
        pdo_execute($sql);
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }
    function delete_binhluan2($id){
        $sql="delete from binhluan where idpro=".$id;
        pdo_execute($sql);
    }

?>