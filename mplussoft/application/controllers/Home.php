<?php 
class Home extends CI_Controller{
  
  public function __construct() {
    parent:: __construct();
    $this->load->database();
    $this->load->model("BookModel"); 
  }

  public function index() {
    $data = array(
      "book" => $this->BookModel->get()
    );
    $this->load->view("HomeView", $data);
  }

  public function detail($id) {
    $data = array (
      "book" => $this->BookModel->detail($id)
    );
    $this->load->view("DetailView", $data);
  }

  public function tambah() {
    if($this->input->method() == "post"){
      $insert = $this->BookModel->tambah(array(
        'title' => $this->input->post("title"),
        'author' => $this->input->post("author"),
        'date' => $this->input->post("date"),
        'page' => $this->input->post("page"),
        'type' => $this->input->post("type")
      ));
      if($insert) {
        echo "<script>alert('Sukses Menambah data Buku')</script>"; 
      } else {
        echo "<script>alert('Gagal Menambah data Buku')</script>";
      }
    }
    $this->load->view("FormView");
  }

  public function hapus($id=0) {
    $hapus = $this->BookModel->hapus($id);
    if($hapus) {
      echo "<script>alert('Sukses Menghapus Buku')</script>";
    }
    else {
      echo "<script>alert('Gagal Menghapus Buku')</script>";
    }
    echo '<meta http-equiv="refresh" content="0;url=../../../">';
  }

  public function edit($id) {
    $data['tipe'] = "Edit";
    $data['default'] = $this->BookModel->get_default($id);
    if(isset($_POST['tombol_submit'])) {
      $this->BookModel->edit($_POST, $id);
      redirect("../");
    }
    $this->load->view("EditView", $data);
  }

}
?>