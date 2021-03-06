<?php

namespace Encore\Admin\Grid\Displayers;

use Encore\Admin\Admin;

class Datetime extends AbstractDisplayer
{
    public function display($format = '')
    {
        $name = $this->column->getName();

        return Admin::component('admin::grid.inline-edit.datetime', [
            'key'      => $this->getKey(),
            'value'    => $this->getValue(),
            'name'     => $name,
            'resource' => $this->getResource(),
            'trigger'  => "ie-trigger-{$name}",
            'target'   => "ie-content-{$name}-{$this->getKey()}",

            'format'   => $format,
            'locale'   => config('app.locale'),
        ]);
    }
}
