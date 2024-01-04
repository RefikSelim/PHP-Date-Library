<?php
class Date
{

    public function pasttime($date)
    {
        $date =  strtotime($date);
        $date_diff = time() - $date;
        $sec = $date_diff;
        $min = round($date_diff/60);
        $hour = round($date_diff/3600);
        $day = round($date_diff/86400);
        $week = round($date_diff/604800);
        $month = round($date_diff/2419200);
        $year = round($date_diff/29030400);
        if( $sec < 60 ){
            if ($sec == 0){
                return "az önce";
            } else {
                return $sec .' saniye önce';
            }
        } else if ( $min < 60 ){
            return $min .' dakika önce';
        } else if ( $hour < 24 ){
            return $hour.' saat önce';
        } else if ( $day < 7 ){
            return $day .' gün önce';
        } else if ( $week < 4 ){
            return $week.' hafta önce';
        } else if ( $month < 12 ){
            return $month .' ay önce';
        } else {
            return $year.' yıl önce';
        }
    }
    
    public function datetostr($date)
    {
        return strftime('%d %B %Y',strtotime($date));
    }
    public function datetimetostr($date)
    {
        if($date != ""){
            return strftime('%d %B %Y | %H:%M',strtotime($date));
        }else{
            return "";
        }
    }
    public function datetimetostrwithdayname($date)
    {
        if($date != ""){
            return strftime('%d %B %Y %A, %H:%M',strtotime($date));
        }else{
            return "";
        }
    }

    public function calculateBusinessDays($workday_count){
        $today = date("Y-m-d");
        $haftaIciGunler = array(1, 2, 3, 4, 5);
        $result_count = strtotime($today);
        $temp = 0;

        while ($temp < $workday_count) {
            if (in_array(date("N", $result_count), $haftaIciGunler)) {
                $temp++;
            }
            $result_count = strtotime("+1 day", $result_count);
        }
        return date("Y-m-d", $result_count);
    }
}
?>
