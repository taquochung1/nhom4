<?php 
    function show_khuyen_mai_update_phim() {
        $sql = "SELECT * FROM khuyen_mai";
        $result_khuyenmai = pdo_query($sql);
        return $result_khuyenmai;
    }
