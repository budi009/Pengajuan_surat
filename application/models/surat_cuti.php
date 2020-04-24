<?php

Class surat_cuti extends CI_Model{

    function cuti(){
            return $this->db->get('surat_cuti');

    }

}


