<?php
return [
    // set your paypal credential
    'client_id' => 'AU4TPu1yt9eJtEjsiEveEKirwzOnxmJf7se9sWMqZrb-Z8VqEYEAt3F6XNy7Znp7I8CS11mbsz20szse',
    'secret' => 'ED5JItAmg7hUYmr5TjAu4n7fXHYT4g5YLEwQR0WVuh4ms85DZxRCFWYgcU20skykh1FY0JPbXKEXwPCT',
    /**
     * SDK configuration
     */
    'settings' => [
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
    ],
];