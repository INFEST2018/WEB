<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct() {
		parent::__construct();
		$this->_public_view=$this->config->item('public_view');
		$this->load->model('Model_lib');
	}

	public function index() {
		$data=array('page_content'=> 'registrasi');
		$this->load->view($this->_public_view, $data);
	}

	public function open() {
		$this->load->view('registrasi');
	}



	function check_email_avalibility() {
		if( !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			echo '<label style="color:red; font-size:10pt;"><span style="font-size:10pt" class="material-icons">clear</span> Invalid Email</label>';
		}

		else {
			$this->load->model("main_model");

			if($this->main_model->is_email_available($_POST["email"])) {
				echo '<label style="color:green; font-size:10pt;"><span style="font-size:10pt" class="material-icons">done</span> Email Available</label>';
			}

			else {
				echo '<label style="color:red; font-size:10pt;"><span style="font-size:10pt" class="material-icons">clear</span> Email Already register</label>';
			}
		}
	}

	function check_team_avalibility() {
		$this->load->model("main_model");

		if($this->main_model->is_team_available($_POST["nama_tim"])) {
			echo '<label style="color:green; font-size:10pt;"><span style="font-size:10pt" class="material-icons">done</span> Team Available</label>';
		}
		else {
			echo '<label style="color:red; font-size:10pt;"><span style="font-size:10pt" class="material-icons">clear</span> Team Already register</label>';

		}

	}



	function tambah_aksi() {

		if(($this->main_model->is_team_available($_POST["nama_tim"])) && ($this->main_model->is_email_available($_POST["email"]))) {
					if($this->sendMail($_POST["email"])==0){
							// link gagal
				 			 header('Location: http://www.infestunsyiah.com');

					}else{

								$config['max_size']=2048;
								$config['allowed_types']="png|jpg|jpeg|gif";
								$config['remove_spaces']=TRUE;
								$config['overwrite']=TRUE;
								$config['encrypt_name'] = TRUE;
								$config['upload_path']=FCPATH.'images';
								$this->load->model("main_model");

								$nama_tim=$this->input->post('nama_tim');
								$email=$this->input->post('email');
								$password=$this->input->post('pswd');
								$universitas=$this->input->post('universitas');
								$password= hash('sha256',$password);

								$anggota1=$this->input->post('anggota1');
								$fak_jur1=$this->input->post('fak_jur1');
								$no_hp1=$this->input->post('no_hp1');
								$wa1=$this->input->post('wa1');

								$data=array('nama_tim'=> $nama_tim,
								'email'=> $email,
								'password'=> $password,
								'universitas'=> $universitas);
								$this->Model_lib->insert("team", $data);

								$this->load->library('upload');
								$this->upload->initialize($config);

								//ambil data image 1
								$this->upload->do_upload('ktm1');
								$data_image=$this->upload->data('file_name');
								$location=base_url().'images/';
								$pict=$location.$data_image;

								$data=array('nama'=> $anggota1,
								'fakultas'=> $fak_jur1,
								'no_hp'=> $no_hp1,
								'whatsapp'=> $wa1,
								'ktm'=> $pict,
								'nama_tim'=> $nama_tim);
								$this->Model_lib->insert("anggota", $data);

								$anggota2=$this->input->post('anggota2');
								$fak_jur2=$this->input->post('fak_jur2');
								$no_hp2=$this->input->post('no_hp2');
								$wa2=$this->input->post('wa2');


								//ambil data image 2
								$this->upload->do_upload('ktm2');
								$data_image=$this->upload->data('file_name');
								$location=base_url().'images/';
								$pict=$location.$data_image;


								$data=array('nama'=> $anggota2,
								'fakultas'=> $fak_jur2,
								'no_hp'=> $no_hp2,
								'whatsapp'=> $wa2,
								'ktm'=> $pict,
								'nama_tim'=> $nama_tim);
								$this->Model_lib->insert("anggota", $data);

								$anggota3=$this->input->post('anggota3');
								$fak_jur3=$this->input->post('fak_jur3');
								$no_hp3=$this->input->post('no_hp3');
								$wa3=$this->input->post('wa3');

								//ambil data image 3
								$this->upload->do_upload('ktm3');
								$data_image=$this->upload->data('file_name');
								$location=base_url().'images/';
								$pict=$location.$data_image;


								$data=array('nama'=> $anggota3,
								'fakultas'=> $fak_jur3,
								'no_hp'=> $no_hp3,
								'whatsapp'=> $wa3,
								'ktm'=> $pict,
								'nama_tim'=> $nama_tim);
								$this->Model_lib->insert("anggota", $data);
								// link sussces
								header('Location: http://www.infestunsyiah.com');
					}

		} else {
				// link gagal
				header('Location: http://www.infestunsyiah.com');
		}

	}

	public function sendMail($emailS=null){
          //Load email library
     $this->load->library('email');
     //SMTP & mail configuration
     $config = array(
         'protocol'  => 'smtp',
         'smtp_host' => 'ssl://smtp.googlemail.com',
         'smtp_port' => 465,
         'smtp_user' => 'muammar.clasic@gmail.com',
         'smtp_pass' => 'sudo-apt-get-update',
         'mailtype'  => 'html',
         'charset'   => 'utf-8'
     );
     $this->email->initialize($config);
     $this->email->set_mailtype("html");
     $this->email->set_newline("\r\n");
     //Email content
     $htmlContent = '
     <html><p>tes</p> </html>
     ';
     $this->email->to($emailS);
     $this->email->from('muammar.clasic@gmail.com');
     $this->email->subject('Pendaftaran INFEST 2018');
     $this->email->message($htmlContent);
     //Send email
          if($this->email->send()){
                    return 1;
          }else {
                    return 0;
          }
     }return 0;

}
