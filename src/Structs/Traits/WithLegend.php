<?php

namespace Solusoftek\SmartyCharts\Structs\Traits;

trait WithLegend
{

    private $legend;

    private function baseLegend(): array
    {
        return [
            'show'            => true,
            'position'        => 'bottom',
            'horizontalAlign' => 'center',
            'fontSize'        => null,
            'fontFamily'      => null,
            'fontWeight'      => null
        ];
    }

    public function defaultLegend()
    {
        $this->legend = $this->baseLegend();
    }

    public function showLegend()
    {
        data_set($this->legend, 'show', true);
        return $this;
    }

    public function hideLegend()
    {
        data_set($this->legend, 'show', false);
        return $this;
    }

    private function legendPosition($pos)
    {
        data_set($this->legend, 'position', $pos);
        return $this;
    }

    private function legendHorizontalAlign($align)
    {
        data_set($this->legend, 'horizontalAlign', $align);
        return $this;
    }

    public function showLegendInTop()
    {
        return $this->legendPosition('top');
    }

    public function showLegendInBottom()
    {
        return $this->legendPosition('bottom');
    }

    public function showLegendAtRight()
    {
        return $this->legendPosition('right');
    }

    public function showLegendAtLeft()
    {
        return $this->legendPosition('left');
    }

    public function AlignLegendAtCenter()
    {
        return $this->legendHorizontalAlign('center');
    }

    public function AlignLegendAtRight()
    {
        return $this->legendHorizontalAlign('right');
    }

    public function AlignLegendAtLeft()
    {
        return $this->legendHorizontalAlign('left');
    }

    public function setLegendStyle($fontName, $fontSize, $fontWeight = 'normal')
    {
        data_set($this->legend, 'fontSize', $fontSize);
        data_set($this->legend, 'fontFamily', $fontName);
        data_set($this->legend, 'fontWeight', $fontWeight);
        return $this;
    }

    protected function getLegendState($struct)
    {
        $this->legend = data_get($struct, 'legend', $this->baseLegend());
    }

    protected function setLegendState(): array
    {
        return [
            'legend' => $this->legend,
        ];
    }


}
