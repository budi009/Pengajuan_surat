<?php

class m_qr extends CI_Model
{

  function kerja_praktek()
  {
    return $this->db->get('surat_kerja_praktek');
  }

  function add_qr($data)
  {
    return $this->db->insert('surat_aktif_kuliah', $data);
  }
}
