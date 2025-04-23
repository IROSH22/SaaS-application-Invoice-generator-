<?php
class Logger {
    public static function log($message, $type = 'info') {
        $file = __DIR__ . "/{$type}.log";

        error_log(date('[Y-m-d H:i:s] ') . $message . PHP_EOL, 3, $file);
    }
}
