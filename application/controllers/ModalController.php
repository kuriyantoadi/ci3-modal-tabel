
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModalController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ModalModel');
    }

    public function getByNoFaktur($no_faktur) {
        $data['records'] = $this->ModalModel->getDataByNoFaktur($no_faktur);
        $this->load->view('modal_view', $data);
    }

}
?>
