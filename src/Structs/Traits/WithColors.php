<?php

namespace Solusoftek\SmartyCharts\Structs\Traits;

trait WithColors
{
    private $colors;

    protected function defaultColors()
    {
        $this->colors = [];
    }

    /**
     * @param mixed $colors
     */
    public function setColors($colors)
    {
        $this->colors = $colors;
        return $this;
    }

    public function addColor($color)
    {
        $this->colors[] = $color;
        return $this;
    }

    protected function getColorsState($struct)
    {
        $this->colors = data_get($struct, 'colors', []);
    }

    protected function setColorsState(): array
    {
        return [
            'colors' => $this->colors,
        ];
    }

}
