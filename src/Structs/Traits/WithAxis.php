<?php

namespace Solusoftek\SmartyCharts\Structs\Traits;


trait WithAxis
{
    private $x;

    private $y;

    private function simpleXAxis(): array
    {
        return [
            'categories' => [],
            'labels'     => [
                'show'   => true
            ],
        ];
    }

    private function simpleYAxis(): array
    {
        return [
            'show'   => true,
            'labels' => [],
        ];
    }

    protected function defaultAxis()
    {
        $this->x = $this->simpleXAxis();

        $this->y = $this->simpleYAxis();
    }

    public function setXAxisVisibility($visibility)
    {
        data_set($this->x, 'labels.show', $visibility);
        return $this;
    }

    public function setYAxisVisibility($visibility)
    {
        data_set($this->y, 'show', $visibility);
        return $this;
    }

    public function setCategories($categories = [])
    {
        data_set($this->x, 'categories', $categories);
        return $this;
    }

    protected function getAxisState($struct)
    {
        $this->x = data_get($struct, 'xAxis', $this->simpleXAxis());
        $this->y = data_get($struct, 'yAxis', $this->simpleYAxis());
    }

    protected function setAxisState(): array
    {
        return [
            'xAxis' => $this->x,
            'yAxis' => $this->y
        ];
    }



}
