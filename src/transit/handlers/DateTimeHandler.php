<?php

namespace transit\handlers;

class DateTimeHandler implements Handler {

    public function tag() {
        return 'm';
    }

    public function type() {
        return \DateTime::class;
    }

    public function representation($obj) {
        return $obj->getTimestamp() * 1000;
    }

    public function resolve($obj) {
        return new \DateTime('@' . $obj/1000);
    }

}
