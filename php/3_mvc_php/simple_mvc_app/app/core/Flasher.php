<?php

class Flasher
{
    public static function setFlash($type, $action, $message)
    {
        $_SESSION['flash'] = [
            'type' => $type,
            'action' => $action,
            'message' => $message
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo
            '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>' . $_SESSION['flash']['action'] . '</strong> ' . $_SESSION['flash']['message'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        unset($_SESSION['flash']);
    }
}
