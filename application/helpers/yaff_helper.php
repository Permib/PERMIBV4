<?php

function cut_text($string){
  $string = strip_tags($string);
  if (strlen($string) > 50) {

    // truncate string
    $stringCut = substr($string, 0, 150);
    $endPoint = strrpos($stringCut, ' ');

    //if the string doesn't contain any space then it will cut without word basis.
    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
	$string .= '...';
  }
echo $string;
}

function getBulan($bln){
	switch ($bln){
		case 1: return "Januari"; break;
		case 2:	return "Februari"; break;
		case 3:	return "Maret";	break;
		case 4:	return "April";	break;
		case 5:	return "Mei"; break;
		case 6:	return "Juni"; break;
		case 7:	return "Juli"; break;
		case 8:	return "Agustus"; break;
		case 9:	return "September";	break;
		case 10: return "Oktober"; break;
		case 11: return "November";	break;
		case 12: return "Desember";	break;
	}
}

function secondsToTime($seconds) {
    $dtF = new \DateTime('@0');
    $dtT = new \DateTime("@$seconds");
    $hasil = $dtF->diff($dtT);

    if($hasil->format('%y') > 0){
      return $hasil->format('%y Years %m Month');
    }else if($hasil->format('%m') > 0){
      return $hasil->format('%m Month %d Days');
    }else if($hasil->format('%a') > 0){
      return $hasil->format('%a Days %h Hours');
    }else if($hasil->format('%h') > 0){
      return $hasil->format('%h Hours %i Minutes');
    }else if($hasil->format('%i') > 0){
      return $hasil->format('%i Minutes');
    }else{
      return $hasil->format('%s Seconds');
    }
}

function selisih_waktu($waktu_akhir){
  $waktu_sekarang = date('Y-m-d H:i:s');
  $to_time = strtotime($waktu_akhir);
  $from_time = strtotime($waktu_sekarang);
  $hasil= abs($to_time - $from_time);
  return secondsToTime($hasil);
}
