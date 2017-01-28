<?php
return array(
    // set your paypal credential
    'client_id' => 'AWoH78ZoT3a0SMs3BikdBP1eSh00fkPAkWO2Kgh2NfXa6XXf2fyNGyU9cV_Hv61SPSkyMTualvrhoue9',
    'secret' => 'EGDJP3QxMSa5iygrc36je97xjlyYmX-Mr3YfzpRwR0StIIq7G991c0eCzzfvAFw7JjbiwldApVfSqaw2',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);