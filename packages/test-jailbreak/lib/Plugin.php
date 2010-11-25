<?php

require_once('Insight/Program/JavaScript.php');

class SandboxedUIPlugins_TestJailbreak_Plugin extends Insight_Program_JavaScript {

    public function getOptions() {
        return array(
            'height' => 200
        );
    }

}
