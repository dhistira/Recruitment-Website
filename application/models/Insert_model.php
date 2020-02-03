<?php
class insert_model extends CI_Model{

function form_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('students', $data);
}
}
?>