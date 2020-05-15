<?php
class Session
{
    public function __construct()
    {
        if (isset($_COOKIE['session_id'])) {
            session_id($_COOKIE['session_id']);
            session_start();
        } else {
            session_start();
            setcookie('session_id', session_id(), time() + 86400);
        }
    }

    public function set(string $key, $data)
    {
        $_SESSION[$key] = $data;
    }

    public function get(string $key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function kill(string $key)
    {
        unset($_SESSION[$key]);
    }

    public function destroy()
    {
        session_destroy();
    }
}