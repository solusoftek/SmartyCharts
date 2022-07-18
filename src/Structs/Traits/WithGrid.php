<?php

namespace Solusoftek\SmartyCharts\Structs\Traits;

trait WithGrid
{
    private $grid;

    protected function defaultGrid()
    {
        $this->grid = $this->baseGrid();
    }

    private function baseGrid(): array
    {
        return [
            'show' => false,
            'position' => 'back',
            'xaxis' => [
                'lines' => [
                    'show' => true,
                ],
            ],
            'yaxis' => [
                'lines' => [
                    'show' => true,
                ],
            ],
        ];
    }

    public function showGrid()
    {
        data_set($this->grid, 'show', true);
        return $this;
    }

    public function hideGrid()
    {
        data_set($this->grid, 'show', false);
        return $this;
    }

    protected function getGridState($struct)
    {
        $this->grid = data_get($struct, 'grid', $this->baseGrid());
    }

    protected function setGridState(): array
    {
        return [
            'grid' => $this->grid,
        ];
    }

}
