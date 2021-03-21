<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Name:  DOMPDF
* 
* Author: Jd Fiscus
* 	 	  jdfiscus@gmail.com
*         @iamfiscus
*          
*
* Origin API Class: http://code.google.com/p/dompdf/
* 
* Location: http://github.com/iamfiscus/Codeigniter-DOMPDF/
*          
* Created:  06.22.2010 
* 
* Description:  This is a Codeigniter library which allows you to convert HTML to PDF with the DOMPDF library
* 
*/

class Dompdf_gen {
		
	public function spl_autoload_register() {
		
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
		
		$pdf = new DOMPDF();
		
		$CI =& get_instance();
		$CI->dompdf_gen = $pdf;
		
	}
	
}

// function __autoload($class) {
//     if (strpos($class, 'CI_') !== 0) {
//         if (file_exists($file = APPPATH . 'core/' . $class . php)) {
//             include $file;
//         }
//     }
// }