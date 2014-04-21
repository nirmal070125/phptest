
<?php

// current time
echo "Going to sleep for 20s inside instance with IP: "  getIp() . "\n";

// sleep for 10 seconds
sleep(20);

// wake up !
echo "Request has been served!" . "\n";

function getIp(){

        $ip = $_SERVER['REMOTE_ADDR'];     
        if($ip){
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            return $ip;
        }
        // There might not be any data
        return false;
    }

?>
