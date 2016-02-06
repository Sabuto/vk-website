<?php

namespace App\Http;

class Flash {

    public function create($title, $message, $notice)
    {
        session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'notice' => $notice
        ]);
    }

    public function message($title, $message)
    {
        return $this->create($title, $message, 'info');
    }

    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }

    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }

    
}