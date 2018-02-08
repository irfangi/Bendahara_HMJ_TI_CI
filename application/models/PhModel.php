<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PhModel extends CI_Model {
  var $table = 'bendahara_tabunganPH';
    var $column_order = array(null, 'namaPH','npk','tabungan'); //set column field database for datatable orderable
    var $column_search = array('namaPH','npk','tabungan'); //set column field database for datatable searchable
    var $order = array('npk' => 'asc'); // default order

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {

        $this->db->from($this->table);

        $i = 0;

        foreach ($this->column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
    public function editTabPH($id,$tb,$data=""){
        if (empty($data)) {
          $res=$this->db->get_where($tb,array('idTabPH'=>$id));
          return $res->row();
        }else {
          $res = $this->db->update($tb,$data,$id);
      		return $res;
        }
    }
    public function hapusTabPH($tabel,$where){
      $res = $this->db->delete($tabel,$where);
      return $res;
    }
    public function tambahPH($tabel,$data){
      $res = $this->db->insert($tabel,$data);
      return $res;
    }
    public function gunakanKasPH($tabel,$data,$totKeluar){
      $this->db->get("bendahara_kasPH");
      $hasil = $this->db->get("bendahara_kasPH")->row();
      $updateKas = $hasil->totalKasPH-$totKeluar;
      $update= $this->db->update("bendahara_kasPH",array('totalKasPH'=>$updateKas),array('idKasPh'=>1));
      if ($update) {
        $res = $this->db->insert($tabel,$data);
        return $res;
      }
    }
    public function kurangKasPh($tabel,$kurang){
      $total=0;
      $query = $this->db->get($tabel);
      foreach ($query->result() as $data) {
        $isi=$data->tabungan-$kurang;
        $dataInsert= array(
          "tabungan"=>$isi
        );
        $where=array(
          "idTabPH"=>$data->idTabPH
        );
        $this->db->update($tabel,$dataInsert,$where);
        $total=$total+$kurang;
      }
      // panggil variabel untuk update kasPH
      $cek=$this->db->get_where("bendahara_kasPH",array("idKasPh"=>"1"));
  		$isi=$cek->row();
  		$totalSemua=$isi->totalKasPH+$total;
      $res = $this->db->update("bendahara_kasPH",array("totalKasPH"=>$totalSemua),array("idKasPh"=>"1"));
      return $res;
    }
    public function tampil($tb){ //untuk 1 row
      $res = $this->db->get($tb);
      return $res->row();
    }
    public function tampilRows($tb){ // untuk banyak row
      $res = $this->db->get($tb);
      return $res->result_array();
    }
}
