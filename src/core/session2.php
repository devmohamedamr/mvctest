<?php
namespace Itrax\Mvc\core;


class session2
{
    /**
     * Session constructor
     */
    private function __construct() {}
    
    /**
     * session start
     * @return void
     */
    public static function start()
    {
        // if(!session_id()){
            ini_set('session.use_only_cookies', 1);
            session_start();
        // }
    }

    /**
     * set $_SESSION[$key]
     * @param string $key
     * @param mixed $value
     * @return mixed $value
     */
    public static function set(string $key, array $value)
    {
        $_SESSION[$key] = $value;
        return $value;
    }

    /**
     * check that session key exists or not exists
     * 
     * @param string $key
     * @return bool
     */
    public static function has(string $key)
    {
        return isset($_SESSION[$key]);
    }

    /**
     * Get Session By The Given Key
     * 
     * @param string $key
     * @return mixed
     */
    public static function get(string $key)
    {
        return static::has($key) ? $_SESSION[$key]:null;
    }

    /**
     * Remove Session By The Given Key
     * 
     * @param string $key
     * @return void
     */
    public static function remove(string $key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * Return All Session
     * 
     * @return array
     */
    public static function all()
    {
        return $_SESSION;
    }

    /**
     * Destroy The Session
     * 
     * @return void
     */
    public static function destroy()
    {
        foreach (static::all() as $key => $value) {
            static::remove($key);
        }
    }

    /**
     * Get flash Session
     * 
     * @param string $key
     * @return mixed
     */
    public static function flash(string $key)
    {
        $value = null;
        if(static::has($key)) {
            $value = static::get($key);
            static::remove($key);
        }
        return $value;
    }

}
