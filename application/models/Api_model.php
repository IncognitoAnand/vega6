<?php
class Api_model extends CI_Model {

    public function __construct(){

        parent::__construct();

    }

    function savedata($data,$table,$id=NULL){
        $this->load->database();
        if($id){
            $this->db->update($table, $data, array('id' => $id));
            return $id;
        } else {
            $this->db->insert($table,$data);
            return $this->db->insert_id();
        }
    }

    function list()
    {
        $this->load->database();
        $sql = "SELECT * FROM `searcheditem`";
        $query = $this->db->query($sql);
        $data = $query->result();
        return $data;
    }

    function hard_delete($table, $id)
    {
        $this->load->database();
        $this->db->delete($table, array('id' => $id));
    }

    function apiRequest($url,$request_type,$data=NULL){
        $respo = curl_init();
        curl_setopt($respo, CURLOPT_URL, $url );
        curl_setopt($respo, CURLOPT_RETURNTRANSFER, true); // do not echo the result, write it into variable
        curl_setopt($respo, CURLOPT_CUSTOMREQUEST, $request_type); // according to MailChimp API: POST/GET/PATCH/PUT/DELETE
        curl_setopt($respo, CURLOPT_TIMEOUT, 10);
        curl_setopt($respo, CURLOPT_SSL_VERIFYPEER, false); // certificate verification for TLS/SSL connection
     
        if( $request_type != 'GET' ) {
            curl_setopt($respo, CURLOPT_POST, true);
            curl_setopt($respo, CURLOPT_POSTFIELDS, $data ); // send data in json
        }
     
        return curl_exec($respo);
    }
    
}
