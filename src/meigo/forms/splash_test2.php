<?php
namespace meigo\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class splash_test2 extends AbstractForm
{

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)
    {
        app()->shutdown();
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $e = null)
    {
        if ($this->iconified) {
            $this->iconified = false;
        } else {
            $this->iconified = true;
        }  
    }





}
