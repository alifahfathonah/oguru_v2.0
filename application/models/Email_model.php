<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
    
    
    
	function password_reset_email($new_password = '' , $email = '')
	{
		$query = $this->db->get_where('users' , array('email' => $email));
		if($query->num_rows() > 0)
		{

			$email_msg	=	'<!DOCTYPE html>
                                <html>
                                <head>
                                <meta name="viewport" content="width=device-width">
                                <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
                                <title>Reset Password</title>
                                
                                </head>
                                
                                <body style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-size: 14px !important; color: #24292e; height: 100% !important; line-height: 1.5; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; margin: 0; padding: 0;" bgcolor="#fff">
                                <table class="body" style="width: 100%; background-color: #fff;" width="100%" bgcolor="#fff">
                                  <tr>
                                    <td style="vertical-align: top;" valign="top"></td>
                                    <td class="container" style="vertical-align: top; display: block; max-width: 580px; width: 580px; margin: 0 auto; padding: 24px;" width="580" valign="top">
                                      <div class="content" style="display: block; max-width: 580px; margin: 0 auto;">
                                
                                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Reset Password</span>
                                
                                <div class="header" style="width: 100%; padding-top: 8px; padding-bottom: 8px; margin-bottom: 16px; border-bottom-width: 1px; border-bottom-color: #eee; border-bottom-style: solid;">
                                  <table style="width: 100%;" width="100%">
                                    <tr>
                                      <td style="vertical-align: top;" valign="top">
                                        <a href="https://oguruindonesia.com" style="color: #0366d6; text-decoration: none;">
                                          <img src="https://oguruindonesia.com/uploads/system/logo-dark.png" style="height: 35px; width: auto;" alt="Oguru Indonesia" style="-ms-interpolation-mode: bicubic; max-width: 100%;">
                                        </a>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                
                                <div class="mb-2" style="margin-bottom: 8px !important;">
                                  <div class="h2 lh-condensed" style="font-size: 24px !important; font-weight: 600 !important; line-height: 1.25 !important;">
                                    Hallo, Sobat Oguru
                                  </div>
                                </div>
                                
                                <div class="pb-2" style="padding-bottom: 8px !important;">
                                  <div class="mb-3" style="margin-bottom: 16px !important;">
                                    <p>Reset password berhasil, berikut password baru akun anda.</p>
                                    <div>
                                    <div class="mb-3 rounded-1 overflow-hidden" style="border-radius: 3px !important; overflow: hidden !important; margin-bottom: 16px !important; border: 1px solid #d1d5da;">
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100%;">
                                        <tr>
                                          <td style="vertical-align: top;" valign="top">
                                            <table class="bg-gray" border="0" cellpadding="4" cellspacing="0" width="100%" style="width: 100%; background-color: #f6f8fa !important;" bgcolor="#f6f8fa !important">
                                              <tr>
                                                <td style="vertical-align: top;" valign="top">
                                                  <table border="0" cellpadding="0" cellspacing="4" style="width: 100%;" width="100%">
                                                    <tr>
                                                      <td style="vertical-align: top;" valign="top">
                                                        <span class="h5" style="font-weight: 600 !important;">Akun Anda</span>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                
                                        <tr>
                                          <td width="100%" style="vertical-align: top;" valign="top">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                              <tr><td style="background-color: #d1d5da;" bgcolor="#d1d5da" valign="top"></td></tr>
                                            </table>
                                          </td>
                                        </tr>

                                
                                        <tr>
                                          <td style="vertical-align: top;" valign="top">
                                            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;" width="100%">
                                              <tr>
                                                <pre>   Email     : '.$email.'</pre>
                                                <pre>   Password  : '.$new_password.'</pre>

                                              </tr>
                                              
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                    
                                    
                                  </div>
                                
                                  
                                
                                
                                        <div class="footer" style="clear: both; width: 100%;">
                                          <hr class="footer-hr" style="height: 0; overflow: visible; margin-top: 24px; border-top-color: #e1e4e8; border-top-style: solid; color: #959da5; font-size: 12px; line-height: 18px; margin-bottom: 30px; border-width: 1px 0 0;">
                                          <div class="footer-links" style="color: #959da5; font-size: 12px; line-height: 18px;">
                                            <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">
                                            <a href="https://oguruindonesia.com/home/tentang_kami" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Tentang Kami</a> &#183;
                                              <a href="https://oguruindonesia.com/home/bantuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Bantuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/syarat_ketentuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Syarat & Ketentuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/kebijakan_privasi" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Kebijakan Privasi</a> &#183;
                                            </p>
                                          </div>
                                          <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">Oguru Indonesia<br style="color: #959da5; font-size: 12px; line-height: 18px;">Jl. Melati No. 3 Balonggabus Candi<br style="color: #959da5; font-size: 12px; line-height: 18px;">Sidoarjo, Jawa Timur</p>
                                        </div>
                                      </div>
                                
                                    </td>
                                    <td style="vertical-align: top;" valign="top"></td>
                                  </tr>
                                </table>
                                
                                </body>
                                </html>';
// 			$email_msg	.=	"Password baru anda : ".$new_password."<br />";

			$email_sub	=	"Reset password";
			$email_to	=	$email;
			//$this->do_email($email_msg , $email_sub , $email_to);
			$this->send_smtp_mail($email_msg , $email_sub , $email_to);
			return true;
		}
		else
		{
			return false;
		}
	}
	
    public function send_email_pembayaran($to='', $kelas ="", $total = "", $metode = "", $kode = "", $batas = "", $carapem =""){
        $subject = "Menunggu Pembayaran";
        if($metode == "bank_transfer"){
           $metodepem = "Bank Transfer"; 
        }else{
           $metodepem = "";
        }
        $redirect_url = $carapem;
        $email_msg = '<!DOCTYPE html>
                    <html>
                    <head>
                    <meta name="viewport" content="width=device-width">
                    <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
                    <title>Menunggu Pembayaran</title>
                    
                    </head>
                    
                    <body style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-size: 14px !important; color: #24292e; height: 100% !important; line-height: 1.5; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; margin: 0; padding: 0;" bgcolor="#fff">
                    <table class="body" style="width: 100%; background-color: #fff;" width="100%" bgcolor="#fff">
                      <tr>
                        <td style="vertical-align: top;" valign="top"></td>
                        <td class="container" style="vertical-align: top; display: block; max-width: 580px; width: 580px; margin: 0 auto; padding: 24px;" width="580" valign="top">
                          <div class="content" style="display: block; max-width: 580px; margin: 0 auto;">
                    
                    <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Menunggu Pembayaran</span>
                    
                    <div class="header" style="width: 100%; padding-top: 8px; padding-bottom: 8px; margin-bottom: 16px; border-bottom-width: 1px; border-bottom-color: #eee; border-bottom-style: solid;">
                      <table style="width: 100%;" width="100%">
                        <tr>
                          <td style="vertical-align: top;" valign="top">
                            <a href="https://oguruindonesia.com" style="color: #0366d6; text-decoration: none;">
                              <img src="https://oguruindonesia.com/uploads/system/logo-dark.png" style="height: 35px; width: auto;" alt="Oguru Indonesia" style="-ms-interpolation-mode: bicubic; max-width: 100%;">
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                    
                    <div class="mb-2" style="margin-bottom: 8px !important;">
                      <div class="h2 lh-condensed" style="font-size: 24px !important; font-weight: 600 !important; line-height: 1.25 !important;">
                        Hallo, Sobat Oguru
                      </div>
                    </div>
                    
                    <div class="pb-2" style="padding-bottom: 8px !important;">
                      <div class="mb-3" style="margin-bottom: 16px !important;">
                        <p>Pembelian "'.$kelas.'" sudah diproses. Lakukan pembayaran untuk melanjutkan.</p>
                        <div>
                        
                        <div class="mb-3 rounded-1 overflow-hidden" style="border-radius: 3px !important; overflow: hidden !important; margin-bottom: 16px !important; border: 1px solid #d1d5da;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100%;">
                          <tr>
                            <td style="vertical-align: top;" valign="top">
                              <table class="bg-gray" border="0" cellpadding="4" cellspacing="0" width="100%" style="width: 100%; background-color: #f6f8fa !important;" bgcolor="#f6f8fa !important">
                                <tr>
                                  <td style="vertical-align: top;" valign="top">
                                    <table border="0" cellpadding="0" cellspacing="4" style="width: 100%;" width="100%">
                                      <tr>
                                        <td style="vertical-align: top;" valign="top">
                                          <b>Detail Pembayaran</b>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
        
                          <tr>
                            <td width="100%" style="vertical-align: top;" valign="top">
                              <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                <tr><td style="background-color: #d1d5da;" bgcolor="#d1d5da" valign="top"></td></tr>
                              </table>
                            </td>
                          </tr>
        
        
                          <tr>
                            <td style="vertical-align: top;" valign="top">
                              <table border="0" cellpadding="3" cellspacing="0" style="width: 100%;  margin-left:5px; margin-bottom:5px;" width="100%">
                                <tr>
                                  <td style="vertical-align: top;" valign="top">
                                    <table border="0" width="69%" align="left">
                                      <tr>
                                        <td style="margin-left:5px;color: #000000 !important;" >
                                          Total Pembayaran
                                        </td>
                                      </tr>
                                    </table>
                                    <table class="action-table" border="0" width="30%">
                                      <tr>
                                        <td class="action-cell text-gray" style="color: #84878a !important;" align="right">
                                            Rp. '.$total.'
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" style="vertical-align: top; padding-right: 10px" valign="top">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                      <tr><td style="background-color: #ededed;" bgcolor="#d1d5da" valign="top"></td></tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="vertical-align: top;" valign="top">
                                    <table border="0" width="69%" align="left">
                                      <tr>
                                        <td style="margin-left:5px;color: #000000 !important;">
                                          Metode Pembayaran
                                        </td>
                                      </tr>
                                    </table>
                                    <table class="action-table" border="0" width="30%">
                                      <tr>
                                        <td class="action-cell" style="color: #84878a" align="right">
                                          
                                            '.$metodepem.'
                                          
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" style="vertical-align: top; padding-right: 10px" valign="top">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                      <tr><td style="background-color: #ededed;" bgcolor="#d1d5da" valign="top"></td></tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="vertical-align: top;" valign="top">
                                    <table border="0" width="69%" align="left">
                                      <tr>
                                        <td style="margin-left:5px;color: #000000 !important;">
                                          Kode Pembayaran
                                        </td>
                                      </tr>
                                    </table>
                                    <table class="action-table" border="0" width="30%">
                                      <tr>
                                        <td class="action-cell" style="color: #84878a" align="right">
                                         
                                            '.$kode.'
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" style="vertical-align: top; padding-right: 10px" valign="top">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                      <tr><td style="background-color: #ededed;" bgcolor="#d1d5da" valign="top"></td></tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="vertical-align: top;" valign="top">
                                    <table border="0" width="69%" align="left">
                                      <tr>
                                        <td style="margin-left:5px;color: #000000 !important;">
                                          Batas Waktu Pembayaran
                                        </td>
                                      </tr>
                                    </table>
                                    <table class="action-table" border="0" width="30%">
                                      <tr>
                                        <td class="action-cell" style="color: #84878a" align="right">
                                          
                                            '.$batas.'
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" style="vertical-align: top; padding-right: 10px" valign="top">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                      <tr><td style="background-color: #ededed;" bgcolor="#d1d5da" valign="top"></td></tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="vertical-align: top;" valign="top">
                                    <table border="0" width="69%" align="left">
                                      <tr>
                                        <td style="margin-left:5px;color: #000000 !important;">
                                          Untuk Pembayaran
                                        </td>
                                      </tr>
                                    </table>
                                    <table class="action-table" border="0" width="30%">
                                      <tr>
                                        <td class="action-cell" style="color: #84878a" align="right">
                                          
                                            Pembelian '.$kelas.'
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td width="100%" style="vertical-align: top; padding-right: 10px" valign="top">
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                      <tr><td style="background-color: #ededed;" bgcolor="#d1d5da" valign="top"></td></tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="vertical-align: top;" valign="top">
                                    <table border="0" width="69%" align="left">
                                      <tr>
                                        <td style="margin-left:5px;color: #000000 !important;">
                                          Status Pembayaran
                                        </td>
                                      </tr>
                                    </table>
                                    <table class="action-table" border="0" width="30%">
                                      <tr>
                                        <td class="action-cell" style="color: #84878a" align="right">
                                          
                                            Menunggu Pembayaran
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
        
                        </table>
                      </div>
        
        
                      </div>
                    </div>
                        <a href="'.$redirect_url.'" target = "_blank" style="background-color: #1e67e6; color:#FFFFFF; border-radius: 8px; height: 48px; line-height: 48px; display: inline-block; font-family: Helvetica, Arial, sans-serif; font-weight: bold; font-size: 16px; width: 100%; text-align: center; text-decoration: none;">
                                            Cara Pembayaran
                                          </a>
                        
                      </div>
                    
                      
                    
                    
                            <div class="footer" style="clear: both; width: 100%;">
                              <hr class="footer-hr" style="height: 0; overflow: visible; margin-top: 24px; border-top-color: #e1e4e8; border-top-style: solid; color: #959da5; font-size: 12px; line-height: 18px; margin-bottom: 30px; border-width: 1px 0 0;">
                              <div class="footer-links" style="color: #959da5; font-size: 12px; line-height: 18px;">
                                <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">
                                <a href="https://oguruindonesia.com/home/tentang_kami" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Tentang Kami</a> &#183;
                                  <a href="https://oguruindonesia.com/home/bantuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Bantuan</a> &#183;
                                  <a href="https://oguruindonesia.com/home/syarat_ketentuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Syarat & Ketentuan</a> &#183;
                                  <a href="https://oguruindonesia.com/home/kebijakan_privasi" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Kebijakan Privasi</a> &#183;
                                </p>
                              </div>
                              <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">Oguru Indonesia<br style="color: #959da5; font-size: 12px; line-height: 18px;">Jl. Melati No. 3 Balonggabus Candi<br style="color: #959da5; font-size: 12px; line-height: 18px;">Sidoarjo, Jawa Timur</p>
                            </div>
                          </div>
                    
                        </td>
                        <td style="vertical-align: top;" valign="top"></td>
                      </tr>
                    </table>
                    
                    </body>
                    </html>';
                    $this->send_smtp_mail($email_msg, $subject, $to);
    }
	
	public function send_mail_edukator_aktif($to='', $status ="", $pesan = "")
	{
		$redirect_url = site_url('home');
		if ($status != 'tolak') {
			$subject 		= "Verifikasi Edukator";
			$email_msg		= '<!DOCTYPE html>
                                <html>
                                <head>
                                <meta name="viewport" content="width=device-width">
                                <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
                                <title>Verifikasi Edukator Behasil</title>
                                
                                </head>
                                
                                <body style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-size: 14px !important; color: #24292e; height: 100% !important; line-height: 1.5; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; margin: 0; padding: 0;" bgcolor="#fff">
                                <table class="body" style="width: 100%; background-color: #fff;" width="100%" bgcolor="#fff">
                                  <tr>
                                    <td style="vertical-align: top;" valign="top"></td>
                                    <td class="container" style="vertical-align: top; display: block; max-width: 580px; width: 580px; margin: 0 auto; padding: 24px;" width="580" valign="top">
                                      <div class="content" style="display: block; max-width: 580px; margin: 0 auto;">
                                
                                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Verifikasi Edukator Behasil</span>
                                
                                <div class="header" style="width: 100%; padding-top: 8px; padding-bottom: 8px; margin-bottom: 16px; border-bottom-width: 1px; border-bottom-color: #eee; border-bottom-style: solid;">
                                  <table style="width: 100%;" width="100%">
                                    <tr>
                                      <td style="vertical-align: top;" valign="top">
                                        <a href="https://oguruindonesia.com" style="color: #0366d6; text-decoration: none;">
                                          <img src="https://oguruindonesia.com/uploads/system/logo-dark.png" style="height: 35px; width: auto;" alt="Oguru Indonesia" style="-ms-interpolation-mode: bicubic; max-width: 100%;">
                                        </a>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                
                                <div class="mb-2" style="margin-bottom: 8px !important;">
                                  <div class="h2 lh-condensed" style="font-size: 24px !important; font-weight: 600 !important; line-height: 1.25 !important;">
                                    Hallo, Sobat Oguru
                                  </div>
                                </div>
                                
                                <div class="pb-2" style="padding-bottom: 8px !important;">
                                  <div class="mb-3" style="margin-bottom: 16px !important;">
                                    <p>Selamat akun anda diterima menjadi edukator</p>
                                    <div>
                                    <div class="mb-3 rounded-1 overflow-hidden" style="border-radius: 3px !important; overflow: hidden !important; margin-bottom: 16px !important; border: 1px solid #d1d5da;">
                                      <table border="0" cellpadding="0" cellspacing="0" width="100%" style="width: 100%;">
                                        <tr>
                                          <td style="vertical-align: top;" valign="top">
                                            <table class="bg-gray" border="0" cellpadding="4" cellspacing="0" width="100%" style="width: 100%; background-color: #f6f8fa !important;" bgcolor="#f6f8fa !important">
                                              <tr>
                                                <td style="vertical-align: top;" valign="top">
                                                  <table border="0" cellpadding="0" cellspacing="4" style="width: 100%;" width="100%">
                                                    <tr>
                                                      <td style="vertical-align: top;" valign="top">
                                                        <span class="h5" style="font-weight: 600 !important;">Dokumen</span>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                
                                        <tr>
                                          <td width="100%" style="vertical-align: top;" valign="top">
                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" height="1" style="width: 100%;">
                                              <tr><td style="background-color: #d1d5da;" bgcolor="#d1d5da" valign="top"></td></tr>
                                            </table>
                                          </td>
                                        </tr>
                                
                                        <tr>
                                          <td style="vertical-align: top;" valign="top">
                                            <table border="0" cellpadding="4" cellspacing="0" style="width: 100%;" width="100%">
                                              <tr>
                                                <td style="vertical-align: top;" valign="top">
                                                  <table border="0" width="69%" align="left">
                                                    <tr>
                                                      <td>
                                                        Edukator Guide.pdf
                                                      </td>
                                                    </tr>
                                                  </table>
                                                  <table class="action-table" border="0" width="30%">
                                                    <tr>
                                                      <td class="action-cell" align="right">
                                                        <a class="text-small" style="font-size: 12px !important;" href="https://drive.google.com/file/d/1m365XMcH9VGQpV73SFpi_LFQYT7K5Ali/view?usp=sharing">
                                                          Download
                                                        </a>
                                                      </td>
                                                    </tr>
                                                  </table>
                                                </td>
                                              </tr>
                                            </table>
                                          </td>
                                        </tr>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                                    <a href="'.$redirect_url.'" target = "_blank" style="background-color: #1e67e6; color:#FFFFFF; border-radius: 8px; height: 48px; line-height: 48px; display: inline-block; font-family: Helvetica, Arial, sans-serif; font-weight: bold; font-size: 16px; width: 100%; text-align: center; text-decoration: none;">
                                            Masuk
                                          </a>
                                    
                                  </div>
                                
                                  
                                
                                
                                        <div class="footer" style="clear: both; width: 100%;">
                                          <hr class="footer-hr" style="height: 0; overflow: visible; margin-top: 24px; border-top-color: #e1e4e8; border-top-style: solid; color: #959da5; font-size: 12px; line-height: 18px; margin-bottom: 30px; border-width: 1px 0 0;">
                                          <div class="footer-links" style="color: #959da5; font-size: 12px; line-height: 18px;">
                                            <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">
                                            <a href="https://oguruindonesia.com/home/tentang_kami" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Tentang Kami</a> &#183;
                                              <a href="https://oguruindonesia.com/home/bantuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Bantuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/syarat_ketentuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Syarat & Ketentuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/kebijakan_privasi" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Kebijakan Privasi</a> &#183;
                                            </p>
                                          </div>
                                          <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">Oguru Indonesia<br style="color: #959da5; font-size: 12px; line-height: 18px;">Jl. Melati No. 3 Balonggabus Candi<br style="color: #959da5; font-size: 12px; line-height: 18px;">Sidoarjo, Jawa Timur</p>
                                        </div>
                                      </div>
                                
                                    </td>
                                    <td style="vertical-align: top;" valign="top"></td>
                                  </tr>
                                </table>
                                
                                </body>
                                </html>';
// 			$email_msg		= "<b>Halo, Sobat Oguru</b>";
// 			$email_msg		.= "<p>Selamat akun anda diterima menjadi edukator.</p>";
//             $email_msg		.= "<a href = 'https://drive.google.com/file/d/1ZK_g4j3Oe-BFPIzuwnZMUXBdRDGRLFa1/view?usp=sharing' target = '_blank'>Educator Guide</a>";	
// 			$email_msg		.= "<a href = ".$redirect_url." target = '_blank'>Masuk</a>";	
		}else{
			$subject 		= "Verifikasi Edukator";
			$email_msg		= '<!DOCTYPE html>
                                <html>
                                <head>
                                <meta name="viewport" content="width=device-width">
                                <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
                                <title>Verifikasi Edukator Belum Disetujui</title>
                                
                                </head>
                                
                                <body style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-size: 14px !important; color: #24292e; height: 100% !important; line-height: 1.5; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; margin: 0; padding: 0;" bgcolor="#fff">
                                <table class="body" style="width: 100%; background-color: #fff;" width="100%" bgcolor="#fff">
                                  <tr>
                                    <td style="vertical-align: top;" valign="top"></td>
                                    <td class="container" style="vertical-align: top; display: block; max-width: 580px; width: 580px; margin: 0 auto; padding: 24px;" width="580" valign="top">
                                      <div class="content" style="display: block; max-width: 580px; margin: 0 auto;">
                                
                                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Verifikasi Edukator Belum Disetujui</span>
                                
                                <div class="header" style="width: 100%; padding-top: 8px; padding-bottom: 8px; margin-bottom: 16px; border-bottom-width: 1px; border-bottom-color: #eee; border-bottom-style: solid;">
                                  <table style="width: 100%;" width="100%">
                                    <tr>
                                      <td style="vertical-align: top;" valign="top">
                                        <a href="https://oguruindonesia.com" style="color: #0366d6; text-decoration: none;">
                                          <img src="https://oguruindonesia.com/uploads/system/logo-dark.png" style="height: 35px; width: auto;" alt="Oguru Indonesia" style="-ms-interpolation-mode: bicubic; max-width: 100%;">
                                        </a>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                
                                <div class="mb-2" style="margin-bottom: 8px !important;">
                                  <div class="h2 lh-condensed" style="font-size: 24px !important; font-weight: 600 !important; line-height: 1.25 !important;">
                                    Hallo, Sobat Oguru
                                  </div>
                                </div>
                                
                                <div  style="padding-bottom: 8px !important;">
                                  <div  style="margin-bottom: 16px !important;">
                                    <p>Mohon maaf untuk akun anda belum terverifikasi oleh tim oguru.</p>
                                    <div>
                                    <div class="mb-3 rounded-1 overflow-hidden" style="border-radius: 3px !important; overflow: hidden !important; margin-bottom: 16px !important; border: 1px solid #d1d5da; padding-right: 16px; padding-left: 16px ">
                                      <p style="text-align: justify;">'.$pesan.'</p>
                                    </div>
                                  </div>
                                </div>
                                    
                                    
                                  </div>
                                
                                  
                                
                                
                                        <div class="footer" style="clear: both; width: 100%;">
                                          <hr class="footer-hr" style="height: 0; overflow: visible; margin-top: 24px; border-top-color: #e1e4e8; border-top-style: solid; color: #959da5; font-size: 12px; line-height: 18px; margin-bottom: 30px; border-width: 1px 0 0;">
                                          <div class="footer-links" style="color: #959da5; font-size: 12px; line-height: 18px;">
                                            <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">
                                            <a href="https://oguruindonesia.com/home/tentang_kami" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Tentang Kami</a> &#183;
                                              <a href="https://oguruindonesia.com/home/bantuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Bantuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/syarat_ketentuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Syarat & Ketentuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/kebijakan_privasi" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Kebijakan Privasi</a> &#183;
                                            </p>
                                          </div>
                                          <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">Oguru Indonesia<br style="color: #959da5; font-size: 12px; line-height: 18px;">Jl. Melati No. 3 Balonggabus Candi<br style="color: #959da5; font-size: 12px; line-height: 18px;">Sidoarjo, Jawa Timur</p>
                                        </div>
                                      </div>
                                
                                    </td>
                                    <td style="vertical-align: top;" valign="top"></td>
                                  </tr>
                                </table>
                                
                                </body>
                                </html>';
// 			$email_msg		.= "<p>Mohon maaf untuk akun anda belum terverifikasi oleh tim oguru.</p>";
// 			$email_msg      .= "<p>".$pesan."</p>";
		}
		$this->send_smtp_mail($email_msg, $subject, $to);
	}

	public function send_email_verification_mail($to = "", $verification_code = "") {
		$redirect_url = site_url('login/verify_email_address/'.$verification_code);
		$subject 		= "Verifikasi Email";
		$email_msg	=	'<!DOCTYPE html>
                                <html>
                                <head>
                                <meta name="viewport" content="width=device-width">
                                <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
                                <title>Verifikasi Email</title>
                                
                                </head>
                                
                                <body style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-size: 14px !important; color: #24292e; height: 100% !important; line-height: 1.5; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; margin: 0; padding: 0;" bgcolor="#fff">
                                <table class="body" style="width: 100%; background-color: #fff;" width="100%" bgcolor="#fff">
                                  <tr>
                                    <td style="vertical-align: top;" valign="top"></td>
                                    <td class="container" style="vertical-align: top; display: block; max-width: 580px; width: 580px; margin: 0 auto; padding: 24px;" width="580" valign="top">
                                      <div class="content" style="display: block; max-width: 580px; margin: 0 auto;">
                                
                                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Verifikasi Email</span>
                                
                                <div class="header" style="width: 100%; padding-top: 8px; padding-bottom: 8px; margin-bottom: 16px; border-bottom-width: 1px; border-bottom-color: #eee; border-bottom-style: solid;">
                                  <table style="width: 100%;" width="100%">
                                    <tr>
                                      <td style="vertical-align: top;" valign="top">
                                        <a href="https://oguruindonesia.com" style="color: #0366d6; text-decoration: none;">
                                          <img src="https://oguruindonesia.com/uploads/system/logo-dark.png" style="height: 35px; width: auto;" alt="Oguru Indonesia" style="-ms-interpolation-mode: bicubic; max-width: 100%;">
                                        </a>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                
                                <div class="mb-2" style="margin-bottom: 8px !important;">
                                  <div class="h2 lh-condensed" style="font-size: 24px !important; font-weight: 600 !important; line-height: 1.25 !important;">
                                    Hallo, Sobat Oguru
                                  </div>
                                </div>
                                
                                <div class="pb-2" style="padding-bottom: 8px !important;">
                                  <div class="mb-3" style="margin-bottom: 16px !important;">
                                    <p>Silahkan klik tombol dibawah ini untuk memverifikasi emailmu !</p>
                                    <div>
                                    
                                  </div>
                                </div>
                                    <a href="'.$redirect_url.'" target = "_blank" style="background-color: #1e67e6; color:#FFFFFF; border-radius: 8px; height: 48px; line-height: 48px; display: inline-block; font-family: Helvetica, Arial, sans-serif; font-weight: bold; font-size: 16px; width: 100%; text-align: center; text-decoration: none;">
                                            Verifikasi Email Anda
                                          </a>
                                    
                                  </div>
                                
                                  
                                
                                
                                        <div class="footer" style="clear: both; width: 100%;">
                                          <hr class="footer-hr" style="height: 0; overflow: visible; margin-top: 24px; border-top-color: #e1e4e8; border-top-style: solid; color: #959da5; font-size: 12px; line-height: 18px; margin-bottom: 30px; border-width: 1px 0 0;">
                                          <div class="footer-links" style="color: #959da5; font-size: 12px; line-height: 18px;">
                                            <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">
                                            <a href="https://oguruindonesia.com/home/tentang_kami" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Tentang Kami</a> &#183;
                                              <a href="https://oguruindonesia.com/home/bantuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Bantuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/syarat_ketentuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Syarat & Ketentuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/kebijakan_privasi" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Kebijakan Privasi</a> &#183;
                                            </p>
                                          </div>
                                          <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">Oguru Indonesia<br style="color: #959da5; font-size: 12px; line-height: 18px;">Jl. Melati No. 3 Balonggabus Candi<br style="color: #959da5; font-size: 12px; line-height: 18px;">Sidoarjo, Jawa Timur</p>
                                        </div>
                                      </div>
                                
                                    </td>
                                    <td style="vertical-align: top;" valign="top"></td>
                                  </tr>
                                </table>
                                
                                </body>
                                </html>';
// 		$email_msg	.=	"<p>Silahkan klik link dibawah ini untuk memverifikasi emailmu !</p>";
// 		$email_msg	.=	"<a href = ".$redirect_url." class='btn btn-primmary' target = '_blank'>Verifikasi email anda.</a>";
		$this->send_smtp_mail($email_msg, $subject, $to);
	}

	public function send_mail_on_course_status_changing($course_id = "", $mail_subject = "", $mail_body = "") {
		$instructor_id		 = 0;
		$course_details    = $this->crud_model->get_course_by_id($course_id)->row_array();
		if ($course_details['user_id'] != "") {
			$instructor_id = $course_details['user_id'];
		}else {
			$instructor_id = $this->session->userdata('user_id');
		}
		$instuctor_details = $this->user_model->get_all_user($instructor_id)->row_array();
		$email_from = get_settings('system_email');
        
        $email_msg = '<!DOCTYPE html>
                                <html>
                                <head>
                                <meta name="viewport" content="width=device-width">
                                <meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
                                <title>Perubahan Status Kelas</title>
                                
                                </head>
                                
                                <body style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-size: 14px !important; color: #24292e; height: 100% !important; line-height: 1.5; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; width: 100% !important; margin: 0; padding: 0;" bgcolor="#fff">
                                <table class="body" style="width: 100%; background-color: #fff;" width="100%" bgcolor="#fff">
                                  <tr>
                                    <td style="vertical-align: top;" valign="top"></td>
                                    <td class="container" style="vertical-align: top; display: block; max-width: 580px; width: 580px; margin: 0 auto; padding: 24px;" width="580" valign="top">
                                      <div class="content" style="display: block; max-width: 580px; margin: 0 auto;">
                                
                                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Perubahan Status Kelas</span>
                                
                                <div class="header" style="width: 100%; padding-top: 8px; padding-bottom: 8px; margin-bottom: 16px; border-bottom-width: 1px; border-bottom-color: #eee; border-bottom-style: solid;">
                                  <table style="width: 100%;" width="100%">
                                    <tr>
                                      <td style="vertical-align: top;" valign="top">
                                        <a href="https://oguruindonesia.com" style="color: #0366d6; text-decoration: none;">
                                          <img src="https://oguruindonesia.com/uploads/system/logo-dark.png" style="height: 35px; width: auto;" alt="Oguru Indonesia" style="-ms-interpolation-mode: bicubic; max-width: 100%;">
                                        </a>
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                
                                <div class="mb-2" style="margin-bottom: 8px !important;">
                                  <div class="h2 lh-condensed" style="font-size: 24px !important; font-weight: 600 !important; line-height: 1.25 !important;">
                                    Hallo, Sobat Oguru
                                  </div>
                                </div>
                                
                                <div  style="padding-bottom: 8px !important;">
                                  <div  style="margin-bottom: 16px !important;">
                                    <p>Perubahan status kelas anda oleh tim oguru.</p>
                                    <div>
                                    <div class="mb-3 rounded-1 overflow-hidden" style="border-radius: 3px !important; overflow: hidden !important; margin-bottom: 16px !important; border: 1px solid #d1d5da; padding-right: 16px; padding-left: 16px ">
                                      <p style="text-align: justify;">'.$mail_body.'</p>
                                    </div>
                                  </div>
                                </div>
                                    
                                    
                                  </div>
                                
                                  
                                
                                
                                        <div class="footer" style="clear: both; width: 100%;">
                                          <hr class="footer-hr" style="height: 0; overflow: visible; margin-top: 24px; border-top-color: #e1e4e8; border-top-style: solid; color: #959da5; font-size: 12px; line-height: 18px; margin-bottom: 30px; border-width: 1px 0 0;">
                                          <div class="footer-links" style="color: #959da5; font-size: 12px; line-height: 18px;">
                                            <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">
                                            <a href="https://oguruindonesia.com/home/tentang_kami" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Tentang Kami</a> &#183;
                                              <a href="https://oguruindonesia.com/home/bantuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Bantuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/syarat_ketentuan" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Syarat & Ketentuan</a> &#183;
                                              <a href="https://oguruindonesia.com/home/kebijakan_privasi" style="color: #959da5; font-size: 12px; line-height: 18px; text-decoration: none;">Kebijakan Privasi</a> &#183;
                                            </p>
                                          </div>
                                          <p class="footer-text" style="font-weight: normal; color: #959da5; font-size: 12px; line-height: 18px; margin: 0 0 15px;">Oguru Indonesia<br style="color: #959da5; font-size: 12px; line-height: 18px;">Jl. Melati No. 3 Balonggabus Candi<br style="color: #959da5; font-size: 12px; line-height: 18px;">Sidoarjo, Jawa Timur</p>
                                        </div>
                                      </div>
                                
                                    </td>
                                    <td style="vertical-align: top;" valign="top"></td>
                                  </tr>
                                </table>
                                
                                </body>
                                </html>';
		$this->send_smtp_mail($email_msg, $mail_subject, $instuctor_details['email'], $email_from);
	}

	public function send_smtp_mail($msg=NULL, $sub=NULL, $to=NULL, $from=NULL) {
		//Load email library
		$this->load->library('email');

		if($from == NULL)
			$from		=	$this->db->get_where('settings' , array('key' => 'system_email'))->row()->value;

		//SMTP & mail configuration
		$config = array(
			'protocol'  => "smtp",
			'smtp_host' => "ssl://mail.oguruindonesia.com",
			'smtp_port' => "465",
			'smtp_user' => "admin@oguruindonesia.com",
			'smtp_pass' => "Oguru123456789",
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'smtp_timeout' => '400',
			'crlf' => "\r\n",
		);
//         $config = array(
// 			'protocol'  => "smtp",
// 			'smtp_host' => "ssl://smtp.gmail.com",
// 			'smtp_port' => "465",
// 			'smtp_user' => "indonesiaoguru@gmail.com",
// 			'smtp_pass' => "oguru2019",
// 			'mailtype'  => 'html',
// 			'charset'   => 'utf-8',
// 			'smtp_timeout' => '400',
// 			'crlf' => "\r\n",
// 		);
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		$htmlContent = $msg;

		$this->email->to($to);
		$this->email->from($from, get_settings('system_name'));
		$this->email->subject($sub);
		$this->email->message($htmlContent);

		//Send email
		$this->email->send();
	}
}
