<?php
class Application {
    public function index($data) {
        echo 'This is index.';
    }

    public function about($data) {
        echo 'This is about.';
    }

    public function template($data) {
        $blade = new Blade();

        $blade->render('page', [
            'title' => 'Title',
            'text' => 'This is my text!',
        ]);
    }

    public function content($data) {
        echo 'This is content with id: ' . $data['parameters']['id'];
    }
}