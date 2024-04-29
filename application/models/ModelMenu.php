<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelMenu extends CI_Model
{
    //manajemen menu
    public function getMenu()
    {
        return $this->db->get('menu');
    }

}