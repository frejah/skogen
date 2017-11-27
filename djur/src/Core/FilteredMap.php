<?php

    namespace Djur\Core;

    class FilteredMap {
        private $map;

        public function __construct(array $baseMap) {
            $this->map = $baseMap;
        }

        public function has(string $name) : bool {
            return isset($this->map[$name]);
        }

        public function get(string $name) {
            return $this->map[$name] ?? null;
        }

        public function getInt(string $name) : int {
            return (int) $this->get($name);
        }

        public function getNumber(string $name) : float {
            return (float) $this->get($name);
        }

        public function getString(string $name, bool $filter = true) : string {
            $value = (string) $this->get($name);


            if($filter) {
                return addslashes($value);

            } else {
                return $value;
            }
        }
    }









?>