<?php

declare(strict_types=1);

namespace BladeUIKit\Support;

use BladeUIKit\Component;
use Illuminate\Contracts\View\View;
use Lorisleiva\CronTranslator\CronTranslator;

class Cron extends Component
{
    /** @var string */
    public $schedule;

    public function __construct(string $schedule)
    {
        $this->schedule = $schedule;
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.support.cron');
    }

    public function translate(): string
    {
        return CronTranslator::translate($this->schedule);
    }

    final public static function componentAlias(): string
    {
        return 'cron';
    }
}
