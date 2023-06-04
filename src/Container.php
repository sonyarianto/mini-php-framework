<?php
class Container {
    private $dependencies = [];

    public function register($name, $resolver) {
        $this->dependencies[$name] = $resolver;
    }

    public function resolve($name) {
        if (isset($this->dependencies[$name])) {
            return $this->dependencies[$name]();
        }

        throw new Exception("Dependency not found: $name");
    }
}