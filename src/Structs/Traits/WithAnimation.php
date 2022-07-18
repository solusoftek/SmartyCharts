<?php

namespace Solusoftek\SmartyCharts\Structs\Traits;

trait WithAnimation
{
    private $animation;

    /**
     * @param mixed $animation
     */
    public function setAnimation($animation)
    {
        $this->animation = $animation;
        return $this;
    }

    protected function defaultAnimation()
    {
        $this->animation = false;
    }

    protected function getAnimationState($struct)
    {
        $this->animation = data_get($struct, 'animation', false);
    }

    protected function setAnimationState(): array
    {
        return ['animation' => $this->animation,];
    }

}
