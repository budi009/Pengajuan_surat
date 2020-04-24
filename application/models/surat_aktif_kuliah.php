<?php

Class surat_aktif_kuliah extends CI_Model{

    function aktif_kuliah(){
            return $this->db->get('surat_aktif_kuliah');
    }

}


