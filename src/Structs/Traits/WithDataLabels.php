<?php

namespace Solusoftek\SmartyCharts\Structs\Traits;

trait WithDataLabels
{
    private $dataLabels;

    protected function defaultDataLabels()
    {
        $this->dataLabels = [
            'enabled' => false,
            'style'   => [],
        ];
    }

    public function enabledDataLabels()
    {
        data_set($this->dataLabels, 'enabled', true);
        return $this;
    }

    public function disabledDataLabels()
    {
        data_set($this->dataLabels, 'enabled', false);
        return $this;
    }

    public function setDataLabelsStyle($fontName, $fontSize, $fontWeight = 'normal')
    {
        data_set($this->dataLabels, 'style', [
            'fontSize'   => $fontSize,
            'fontFamily' => $fontName,
            'fontWeight' => $fontWeight
        ]);
        return $this;
    }

    protected function getDataLabelState($struct)
    {
        $this->dataLabels = data_get($struct, 'dataLabels', ['enabled' => false]);
        return $this;
    }

    protected function setDataLabelState()
    {
        return [
            'dataLabels' => $this->dataLabels,
        ];
    }

}
