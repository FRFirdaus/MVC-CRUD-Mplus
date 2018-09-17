<?php
class BookModel extends CI_model {
  
  public function get() {
    $this->load->database();
    return $this->db->get("book")->result();
  }

  public function detail($id) {
    $this->load->database();
    $this->db->where('id', $id);
    return $this->db->get("book")->result();
  }

  public function tambah($data = array()) {
    $this->load->database();
    return $this->db->insert("book", $data);
  }

  public function hapus($id) {
    $this->load->database();
    $this->db->where('id', $id);
    return $this->db->delete("book");
  }

  public function get_default($id) {
		$sql = $this->db->query("SELECT * FROM book WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
  }
  
  public function edit($post, $id){

		$title = $this->db->escape($post['title']);
    $author = $this->db->escape($post['author']);
    $date = $this->db->escape($post['date']);
    $page = $this->db->escape($post['page']);
    $type = $this->db->escape($post['type']);

		$sql = $this->db->query("UPDATE book SET
                            title   = $title, 
                            author  = $author,
                            date    = $date,
                            page    = $page,
                            type    = $type
                            WHERE id = ".intval($id));
		return true;
	}

}

?>