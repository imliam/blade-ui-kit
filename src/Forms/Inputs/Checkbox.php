<?php

declare(strict_types=1);

namespace BladeUIKit\Forms\Inputs;

use Illuminate\Contracts\View\View;

class Checkbox extends Input
{
    /** @var bool */
    public $checked;

    public function __construct(string $name, string $id = null, bool $checked = false)
    {
        parent::__construct($name, $id, 'checkbox');

        $this->checked = old($name, $checked);
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.forms.inputs.checkbox');
    }

    final public static function componentAlias(): string
    {
        return 'checkbox';
    }
}
