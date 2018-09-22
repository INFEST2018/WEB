<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarPeserta extends CI_Controller {

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
			$data=array('page_content'=> 'DaftarPeserta');
			$this->load->view($this->_public_view, $data);
		}

		public function open() {
			$this->load->view('DaftarPeserta');
		}

		public function showTeamMember(){
				$N=0;
				$html="";
				$result = $this->Model_lib->SelectQuery(sprintf("SELECT * FROM team"));

				foreach ($result -> result() as $row) {

					$where = sprintf("SELECT * FROM anggota WHERE nama_tim='%s'",$row->nama_tim);
					$resultMember = $this->Model_lib->SelectQuery($where);

					$member= array('nama'=>array(),'ktm'=>array());
					$tmp=0;
					foreach($resultMember-> result() as $rowMember) {

							$member["nama"][$tmp]=$rowMember->nama;
							$member["ktm"][$tmp++]=$rowMember->ktm;
					}

					$dataTeam = array('no' => $N+1,
														'nama_tim'	=> $row->nama_tim,
														'email'	=> $row->email,
														'universitas'	=> $row->universitas,
														'anggota' => $member);

					//print_r($dataTeam);
					$html.=$this->templateTable($dataTeam);
					$N++;
				}
				echo $html;
		}

		public function templateTable($data){
				// data team
				$tableRow='<tr class="team expand">';
						$tableRow.='<th>'.$data["no"].'</th>';
						$tableRow.='<th>'.$data["nama_tim"].'</th>';
						$tableRow.='<th>'.$data["email"].'</th>';
						$tableRow.='<th class="lihat" onclick="expand(this)">Lihat <span class="sign"></span></th>';
						$tableRow.='<th id="'.$data["nama_tim"].'" class="hapus" onclick="deleteTeam(this)" >Del</th>';
				$tableRow.='</tr>';

				$tableRow.='<tr style="display: none;">';
						$tableRow.='<td></td>';
						$tableRow.='<td>Anggota</td>';
						$tableRow.='<td></td>';
						$tableRow.='<td></td>';
						$tableRow.='<td></td>';
				$tableRow.='</tr>';

				for ($i=0; $i <count($data['anggota']['nama']) ; $i++) {
						$tableRow.='<tr style="display: none;">';
								$tableRow.='<td></td>';
								$tableRow.='<td>'.$data["anggota"]["nama"][$i].'</td>';
								$tableRow.='<td>'.$data["anggota"]["ktm"][$i].'</td>';
								$tableRow.='<td></td>';
								$tableRow.='<td></td>';
						$tableRow.='</tr>';
				}

				return $tableRow;
		}

		function delete($team){
				$tabel="anggota";
				$where=sprintf("WHERE nama_tim='%s'",$team);
				$this->Model_lib->Delete($tabel,$where);
				$tabel="team";
				$this->Model_lib->Delete($tabel,$where);
		}
}
