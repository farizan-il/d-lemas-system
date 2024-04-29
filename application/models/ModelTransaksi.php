<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelTransaksi extends CI_Model
{
    public function getTransaksi()
    {
        return $this->db->get('transaksi');
    }

}