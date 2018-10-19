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
		$this->load->model("main_model");
		if(($this->main_model->is_team_available($_POST["nama_tim"])) && ($this->main_model->is_email_available($_POST["email"]))) {
					if($this->sendMail($_POST["email"],$_POST["nama_tim"],$_POST["pswd"],$_POST["universitas"],$_POST["anggota1"],$_POST["anggota2"],$_POST["anggota3"],$_POST["nim1"],$_POST["nim2"],$_POST["nim3"])==0){
							// link gagal
				 			 echo '<html>

							  <body>
								  <div style="margin:10px 100px; background-color:#eaeaea">
									  <div style="background-color:#0e074b">
										  <h2 align="center" style="color:white;">Registrasi Gagal</h2>
										  <div style="background-color:#696969; width:100%; height:10px; "></div>
									  </div>
									  <div></div>
									  <br><br>
									  <div style="padding: 0px 20px 20px 20px;">

									  <p>Mohon Masukkan email yang valid</p>
							  
									  </div>
								  </div>
							  </body>
							  
							  </html>';

					}else{

								$config['max_size']=20048;
								$config['allowed_types']="png|jpg|jpeg|gif";
								$config['remove_spaces']=TRUE;
								$config['overwrite']=TRUE;
								$config['encrypt_name'] = TRUE;
								$config['upload_path']=FCPATH.'images';

								$nama_tim=$this->input->post('nama_tim');
								$email=$this->input->post('email');
								$password=$this->input->post('pswd');
								$universitas=$this->input->post('universitas');
								$password= hash('sha256',$password);

								$anggota1=$this->input->post('anggota1');
								$nim1=$this->input->post('nim1');
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
								'nim'=> $nim1,
								'fakultas'=> $fak_jur1,
								'no_hp'=> $no_hp1,
								'whatsapp'=> $wa1,
								'ktm'=> $pict,
								'nama_tim'=> $nama_tim);
								$this->Model_lib->insert("anggota", $data);

								$anggota2=$this->input->post('anggota2');
								$nim2=$this->input->post('nim2');
								$fak_jur2=$this->input->post('fak_jur2');
								$no_hp2=$this->input->post('no_hp2');
								$wa2=$this->input->post('wa2');


								//ambil data image 2
								$this->upload->do_upload('ktm2');
								$data_image=$this->upload->data('file_name');
								$location=base_url().'images/';
								$pict=$location.$data_image;


								$data=array('nama'=> $anggota2,
								'nim'=> $nim2,
								'fakultas'=> $fak_jur2,
								'no_hp'=> $no_hp2,
								'whatsapp'=> $wa2,
								'ktm'=> $pict,
								'nama_tim'=> $nama_tim);
								$this->Model_lib->insert("anggota", $data);

								$anggota3=$this->input->post('anggota3');
								$nim3=$this->input->post('nim3');
								$fak_jur3=$this->input->post('fak_jur3');
								$no_hp3=$this->input->post('no_hp3');
								$wa3=$this->input->post('wa3');

								//ambil data image 3
								$this->upload->do_upload('ktm3');
								$data_image=$this->upload->data('file_name');
								$location=base_url().'images/';
								$pict=$location.$data_image;


								$data=array('nama'=> $anggota3,
								'nim'=> $nim3,
								'fakultas'=> $fak_jur3,
								'no_hp'=> $no_hp3,
								'whatsapp'=> $wa3,
								'ktm'=> $pict,
								'nama_tim'=> $nama_tim);
								$this->Model_lib->insert("anggota", $data);
								// link sussces
								echo '<html>

								<body>
									<div style="margin:10px 100px; background-color:#eaeaea">
										<div style="background-color:#0e074b">
											<h2 align="center" style="color:white;">Registrasi Berhasil</h2>
											<div style="background-color:#696969; width:100%; height:10px; "></div>
										</div>
										<div></div>
										<br><br>
										<div style="padding: 0px 20px 20px 20px;">

										<p>Untuk keterangan lebih lanjut mohon perikasa email anda</p>
								
										</div>
									</div>
								</body>
								
								</html>';
					}

		} else {
				// link gagal
				echo '<html>

				<body>
					<div style="margin:10px 100px; background-color:#eaeaea">
						<div style="background-color:#0e074b">
							<h2 align="center" style="color:white;">Registrasi Gagal</h2>
							<div style="background-color:#696969; width:100%; height:10px; "></div>
						</div>
						<div></div>
						<br><br>
						<div style="padding: 0px 20px 20px 20px;">

						<p>Mohon Masukkan email dan team yang valid</p>
				
						</div>
					</div>
				</body>
				
				</html>';
		}

	}

	public function sendMail($emailS=null,$team,$password,$universitas,$anggota1,$anggota2,$anggota3,$nim1,$nim2,$nim3){
          //Load email library
     $this->load->library('email');
     //SMTP & mail configuration
     $config = array(
         'protocol'  => 'smtp',
         'smtp_host' => 'ssl://smtp.googlemail.com',
         'smtp_port' => 465,
         'smtp_user' => 'infest.unsyiah@gmail.com',
         'smtp_pass' => 'InfestU$k2018',
         'mailtype'  => 'html',
         'charset'   => 'utf-8'
     );
     $this->email->initialize($config);
     $this->email->set_mailtype("html");
     $this->email->set_newline("\r\n");
     //Email content
     $htmlContent = '
	 <html>

<body>
    <div style="margin:10px 10%; background-color:#eaeaea">
        <div style="background-color:#0e074b">
            <h2 align="center" style="color:white;">Registrasi Berhasil</h2>
            <div style="background-color:#696969; width:100%; height:10px; "></div>
        </div>
        <div></div>
        <br><br>
		<div style="padding: 0px 20px 20px 20px;">
		
			 <span>Nama Tim : '.$team.'</span> <br>
			 <span>password : '.$password.'</span><br>
			 <span>Universitas : '.$universitas.'</span><br>
			 <span>Anggota : </span>
			 <table style="width:100%">
				<tr>
					<th>'.$anggota1.'</th>
					<td>'.$nim1.'</td>
				</tr>
				<tr>
					<th>'.$anggota2.'</th>
					<td>'.$nim2.'</td>
				</tr>
				<tr>
	 				<th>'.$anggota3.'</th>
					<td>'.$nim3.'</td>
				</tr>
			</table>
            <p>Terima Kasih telah melakukan pendaftaran untuk lomba Programming Contest,
                untuk selanjutnya pihak panitia akan mengirim pesan melalui <i style="color:blue">email</i> setelah
                melakukan <i style="color:blue">verifikasi</i> data tim peserta</p>

        </div>
    </div>
</body>

</html>
     ';
     $this->email->to($emailS);
     $this->email->from('Informatics Festival');
     $this->email->subject('Pendaftaran INFEST 2018');
     $this->email->message($htmlContent);
     //Send email
          if($this->email->send()){
                    return 1;
          }else {
                    return 0;
          }
     }

}
