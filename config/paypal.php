<?php
return array(
    // set your paypal credential
    'client_id' => 'AUVz6iG8Mo3NYaEIE4L9KoCN7zGjeagS-5zWzYuRkDg0ljEuCXcYu7EfNenb8ntqceil4UOav7yco1Jq',
    'secret' => 'EKNxWuUYz2gcPFyJ0Tkj6oso10YBwg16E9wU1-sC54fDEMyoKC7-u12nJXpt7pbmOu7JLNV9UqdrBHO9',
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