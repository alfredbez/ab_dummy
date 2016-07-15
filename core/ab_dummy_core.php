<?php

class ab_dummy_core {
    public function dummy() {
        return oxRegistry::getConfig()->getConfigParam('sCompileDir').'/test';
    }
}
