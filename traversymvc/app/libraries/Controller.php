<?php

/**
 * Base Controller
 * Load The Models and Views
 */

class Controller
{
    // Load Model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instantiate model
        return new $model();
    }

    // Load View
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // View Does Not Exists
            die('View does not exist');
        }
    }
}