<?php 

class MY_Model extends CI_Model {

    protected $table    = '';
    protected $perPage  = 5;


    public function __construct() {
        parent::__construct();

        if (!$this->table) {
            $this->table = strtolower(
                str_replace('_model', '', get_class($this))
            );
        }
    }
    
    // CRUD Model
    public function create($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($data) {
        return $this->db->update($this->table, $data);
    }

    public function delete() {
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    // End of CRUD Model
}
