<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET, OPTIONS');
class Snap extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server--dO7ib2YnIPAO1AWYA_P7PPu', 'production' => false);
        // $params = array('server_key' => 'Mid-server-1UAY4wNGm8ww4_QjgC2cWJHu', 'production' => true);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->database();
        $this->load->library('session');
    }

    public function index()
    {
    	$this->load->view('frontend/default/checkout_snap');
    }

    public function token()
    {
    	// $nama_detail = explode('_', $nama);
     //    $name_item = str_replace('%20', ' ', $nama_detail[3]);
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $_GET['total_bayar'], // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => $_GET['id_course'],
		  'price' => $_GET['total_bayar']/$_GET['jumlah'],
		  'quantity' => $_GET['jumlah'],
		  'name' => $_GET['judul_course']
		);

		// Optional
		$customer_details = array(
          'id' => $_GET['id_user'],
		  'first_name'    => $_GET['first_name'],
		  'last_name'     => $_GET['last_name'],
		  'email'         => $_GET['email'],
		  // 'phone'         => "081122334455",
		  'billing_address'  => $billing_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 1440
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item1_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry,
            'customer_details'   => $customer_details
        );

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));

    	if(isset($result->va_number[0]->bank)){
    		$bank = $result->va_number[0]->bank;
    	}
    	else{
    		$bank = "-";
    	}

    	if(isset($result->va_number[0]->va_number)){
    		$va_number = $result->va_number[0]->va_number;
    	}
    	else{
    		$va_number = "-";
    	}

    	if(isset($result->bill_key)){
    		$bill_key = $result->bill_key;
    	}
    	else{
    		$bill_key = "-";
    	}

    	if(isset($result->biller_code)){
    		$biller_code = $result->biller_code;
    	}
    	else{
    		$biller_code = "-";
    	}

    	if(isset($result->permata_va_number)){
    		$permata_va_number = $result->permata_va_number;
    	}
    	else{
    		$permata_va_number = "-";
    	}

    	if(isset($result->bca_va_number)){
    		$bca_va_number = $result->bca_va_number;
    	}
    	else{
    		$bca_va_number = "-";
    	}

        $gross = substr($result->gross_amount, 0, -3);
        $admin_revenue = 40 * (int)$gross / 100;
        $edukator_revenue = (int)$gross - $admin_revenue;
        $jum = $gross / $this->input->post('harga_asli');

    	$data = [
            'id_pengirim' => $this->input->post('id_pengirim'),
            'id_penerima' => $this->input->post('id_penerima'),
            'id_course' => $this->input->post('id_course'),
    		'status_code' => $result->status_code,
    		'status_message' => $result->status_message,
    		'transaction_id' => $result->transaction_id,
    		'order_id' => $result->order_id,
    		'gross_amount' => $result->gross_amount,
    		'payment_type' => $result->payment_type,
    		'transaction_time' => $result->transaction_time,
    		'transaction_status' => $result->transaction_status,
    		'fraud_status' => $result->fraud_status,
    		'pdf_url' => $result->pdf_url,
    		'finish_redirect_url' => $result->finish_redirect_url,

    		'permata_va_number' => $permata_va_number,
    		'bank' => $bank,
    		'va_number' => $va_number,
    		'bill_key' => $bill_key,
    		'biller_code' => $biller_code,
    		'bca_va_number' => $bca_va_number,
            'admin_revenue' => $admin_revenue,
            'edukator_revenue' => $edukator_revenue,
            'date_added' => strtotime(date('D, d-M-Y')),
    	];

        foreach ($this->input->post("nama") as $nama) {
            $sertifikat = array(
                'nama' => $nama,
                'order_id' => $result->order_id,
            );
            $this->db->insert('sertifikat', $sertifikat);
        }
        $timestamp = strtotime('now'); 
        $batas= date('l, j F Y H:i ', strtotime('+1 day', $timestamp)). "WIB";
        $user= $this->user_model->get_user($this->input->post('id_pengirim'));
        $email_user = $user->result_array()[0]['email'];
        $kelas = $this->crud_model->get_course_by_id($this->input->post('id_course'));
        $nama_kelas = $kelas->result_array()[0]['title'];
       
        // $to='', $kelas ="", $total = "", $metode = "", $kode = "", $batas = ""
        // die($email_user);
        // die($email_user.'/'.$nama_kelas.'/'.$result->gross_amount.'/'.$result->payment_type.'/'.$result->order_id.'/'.$batas.'/');
        $this->email_model->send_email_pembayaran($email_user, $nama_kelas,$result->gross_amount,$result->payment_type,$result->order_id,$batas,$result->pdf_url);
        $this->db->insert('payment_mid', $data);
        $this->session->set_flashdata('flash_message', 'Pembelian berhasil, silahkan cek notifikasi');
        // $url = substr($this->input->post('id_url'), 26);
        $this->session->set_flashdata('flash_message', 'Pembelian berhasil');
        redirect(site_url('home/finish_payment'), 'refresh');
    }
}
