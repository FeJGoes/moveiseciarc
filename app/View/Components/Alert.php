<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /** @var string */
    public $message;

    /** @var success|danger|warning|primary */
    public $type;

    /** @var boolean */
    public $dismissible;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message = '', $type = 'success', $dismissible = true)
    {
        $this->message = $message;
        $this->type = $type;
        $this->dismissible = $dismissible;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
