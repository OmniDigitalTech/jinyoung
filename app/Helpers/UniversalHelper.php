<?php

use Illuminate\Support\Facades\Log;

if (!function_exists('convert_to_62')) {
    function convert_to_62($phone_number) {
        $hp = $phone_number;
        // kadang ada penulisan no hp 0811 239 345
        $phone_number = str_replace(" ","",$phone_number);
        // kadang ada penulisan no hp (0274) 778787
        $phone_number = str_replace("(","",$phone_number);
        // kadang ada penulisan no hp (0274) 778787
        $phone_number = str_replace(")","",$phone_number);
        // kadang ada penulisan no hp 0811.239.345
        $phone_number = str_replace(".","",$phone_number);
        // kadang ada penulisan no hp +62857 121231
        $phone_number = str_replace("+","",$phone_number);
        // kadang ada penulisan no hp +0812-1212-1212
        $phone_number = str_replace("-","",$phone_number);

        // cek apakah no hp mengandung karakter + dan 0-9
        if(!preg_match('', trim($phone_number))){
            // cek apakah no hp karakter 1-3 adalah 62
            if(substr(trim($phone_number), 0, 3)=='62'){
                $phone_number = trim($phone_number);
            }
            // cek apakah no hp karakter 1-4 adalah 620
            elseif(substr(trim($phone_number), 0, 3)=='620'){
                $phone_number = '62'.substr(trim($phone_number), 3);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif(substr(trim($phone_number), 0, 1)=='0'){
                $phone_number = '62'.substr(trim($phone_number), 1);
            }
            // cek apakah no hp karakter 1 adalah 8
            elseif(substr(trim($phone_number), 0, 1)=='8'){
                $phone_number = '62'.substr(trim($phone_number), 0);
            }
        }

        return $phone_number;
    }
}

if (!function_exists('throw_custom_exception')) {
    function throw_custom_exception($exception) {
        if(app()->environment('production')) {
            $url = url()->$full();
            $method = request()->getMethod();
            $reqData = json_encode(request()->except(['password', 'notification_token', 'family_card_data', 'foto_data', 'foto_ktp_data']));

            $trace = $exception->getTraceAsString();
            $address = request()->getClientIp();
            $exceptionClass = get_class($exception);

            $error = "The legendary wild bug has appeared!";
            $error .= "\n";
            $error .= "```";
            $error .= "\n Address        : {$address}";
            $error .= "\n Route          : {$method} : {$url}";
            $error .= "\n File           : {$exception->getFile()} : {$exception->getLine()}";
            $error .= "\n Message        : {$exception->getMessage()}";
            $error .= "\n E-Class        : {$exceptionClass}";
            $error .= "\n Request        : {$reqData}";
            if(str_contains($exception->getFile(), 'vendor')) {
                $error .= "\n Trace          : {$trace}";
            }

            $error .= "```";
            Log::critical($error);
        }
    }
}

if (!function_exists('set_env')) {
    function set_env($key, $value) {
        file_put_contents(app()->environmentFilePath(), str_replace(
            $key . '=' . env($key),
            $key . '=' . $value,
            file_get_contents(app()->environmentFilePath())
        ));
    }
}

if (!function_exists('http_post_request')) {
    function http_post_request($url, $headers, $body) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;
    }
}

if (!function_exists('get_operating_system')) {
    function get_operating_system() {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $operating_system = 'Unknown Operating System';

        //Get the operating_system name
        if (preg_match('/linux/i', $u_agent)) {
            $operating_system = 'Linux';
        } elseif (preg_match('/macintosh|mac os x|mac_powerpc/i', $u_agent)) {
            $operating_system = 'Mac OS';
        } elseif (preg_match('/windows|win32|win98|win95|win16/i', $u_agent)) {
            $operating_system = 'Windows';
        } elseif (preg_match('/ubuntu/i', $u_agent)) {
            $operating_system = 'Ubuntu';
        } elseif (preg_match('/iphone/i', $u_agent)) {
            $operating_system = 'IPhone';
        } elseif (preg_match('/ipod/i', $u_agent)) {
            $operating_system = 'IPod';
        } elseif (preg_match('/ipad/i', $u_agent)) {
            $operating_system = 'IPad';
        } elseif (preg_match('/android/i', $u_agent)) {
            $operating_system = 'Android';
        } elseif (preg_match('/blackberry/i', $u_agent)) {
            $operating_system = 'Blackberry';
        } elseif (preg_match('/webos/i', $u_agent)) {
            $operating_system = 'Mobile';
        }

        return $operating_system;
    }
}

if (!function_exists('get_device_platform')) {
    function get_device_platform() {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $operating_system = 'Unknown Operating System';

        //Get the operating_system name
        if (preg_match('/linux/i', $u_agent)) {
            $operating_system = 'Desktop';
        } elseif (preg_match('/macintosh|mac os x|mac_powerpc/i', $u_agent)) {
            $operating_system = 'Desktop';
        } elseif (preg_match('/windows|win32|win98|win95|win16/i', $u_agent)) {
            $operating_system = 'Desktop';
        } elseif (preg_match('/ubuntu/i', $u_agent)) {
            $operating_system = 'Desktop';
        } elseif (preg_match('/iphone/i', $u_agent)) {
            $operating_system = 'Mobile';
        } elseif (preg_match('/ipod/i', $u_agent)) {
            $operating_system = 'Mobile';
        } elseif (preg_match('/ipad/i', $u_agent)) {
            $operating_system = 'Mobile';
        } elseif (preg_match('/android/i', $u_agent)) {
            $operating_system = 'Mobile';
        } elseif (preg_match('/blackberry/i', $u_agent)) {
            $operating_system = 'Mobile';
        } elseif (preg_match('/webos/i', $u_agent)) {
            $operating_system = 'Mobile';
        }

        return $operating_system;
    }
}

if (!function_exists('get_first_letter_each_word')){
    function get_first_letter_each_word($sparator, $word){

        $words = explode($sparator, $word);
        $acronym = "";

        foreach ($words as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }

        return $acronym;
    }
}

if(!function_exists('remove_emoticons')){
    function remove_emoticons($word){
        $text = preg_replace('/[^ -\x{2122}]\s+|\s*[^ -\x{2122}]/u','',$word);
        return $text;
    }
}

?>
