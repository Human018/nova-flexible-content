<?php

namespace Formfeed\NovaFlexibleContent\Layouts;

use Formfeed\NovaFlexibleContent\Flexible;

abstract class Preset
{
    /**
     * Execute the preset configuration
     *
     * @return void
     */
    abstract public function handle(Flexible $field);
}
