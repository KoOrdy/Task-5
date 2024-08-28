<?php 

class Logger{
    private static $logCount;
    
    static function log() {
        self::$logCount++;
        return self::$logCount;
    }
        
}

echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";
echo Logger::log();
echo "<br>";