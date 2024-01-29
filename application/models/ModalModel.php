<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModalModel extends CI_Model {

    public function getDataByNoFaktur($no_faktur) {
        $this->db->where('no_faktur', $no_faktur);
        $query = $this->db->get('tb_tambah_stok');
        return $query->result_array();
    }

}
?>
