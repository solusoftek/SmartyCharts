<?php

namespace Solusoftek\SmartyCharts\Structs;

use Solusoftek\SmartyCharts\Structs\Traits\WithAnimation;
use Solusoftek\SmartyCharts\Structs\Traits\WithAxis;
use Solusoftek\SmartyCharts\Structs\Traits\WithColors;
use Solusoftek\SmartyCharts\Structs\Traits\WithDataLabels;

class MainChartStruct
{
    use WithAnimation;
    use WithAxis;
    use WithColors;
    use WithDataLabels;

    public function __construct()
    {
        $this->defaultAnimation();
        $this->defaultAxis();
        $this->defaultColors();
        $this->defaultDataLabels();
    }

}
