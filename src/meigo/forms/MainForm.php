<?php
namespace meigo\forms;

use std, gui, framework, meigo;


class MainForm extends AbstractForm
{

    /**
     * @event label.click-Left 
     **/
    function doLabelClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text = "";
    }

    /**
     * @event btn_7.click-Left 
     **/
    function doBtn_7ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_8.click-Left 
     **/
    function doBtn_8ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_9.click-Left 
     **/
    function doBtn_9ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_4.click-Left 
     **/
    function doBtn_4ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_5.click-Left 
     **/
    function doBtn_5ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_6.click-Left 
     **/
    function doBtn_6ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_1.click-Left 
     **/
    function doBtn_1ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_2.mouseDown-Left 
     **/
    function doBtn_2MouseDownLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_3.click-Left 
     **/
    function doBtn_3ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_0.mouseDown-Left 
     **/
    function doBtn_0MouseDownLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_comma.click-Left 
     **/
    function doBtn_commaClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_plus.click-Left 
     **/
    function doBtn_plusClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event btn_minus.click-Left 
     **/
    function doBtn_minusClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event btn_multiply.click-Left 
     **/
    function doBtn_multiplyClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event btn_divided.click-Left 
     **/
    function doBtn_dividedClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event btn_sin.click-Left 
     **/
    function doBtn_sinClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = sin($this->edit->text);
        }        
    }

    /**
     * @event button4.click-Left 
     **/
    function doButton4ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = cos($this->edit->text);
        }        
    }

    /**
     * @event button5.click-Left 
     **/
    function doButton5ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = tg($this->edit->text);
        }        
    }

    /**
     * @event button6.click-Left 
     **/
    function doButton6ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = ctg($this->edit->text);
        }        
    }

    /**
     * @event button3.click-Left 
     **/
    function doButton3ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if ($operation){
            $numbers = explode($operation, $this->edit->text);
            switch ($operation){ 
                case "+": 
                    $result = $numbers[0] + $numbers[1];
                break;
                case "-": 
                    $result = $numbers[0] - $numbers[1];
                break;
                case "*":
                    $result = $numbers[0] * $numbers[1];
                break;
                case "/": 
                    $result = $numbers[0] / $numbers[1];
                break;
                case "%": 
                    $procent = $numbers[0] / 100;  
                    $result = $numbers[1] * $procent; 
                break;
            }
            $this->edit->text = $result;
            $operation = false;
        }        
    }

    /**
     * @event button7.action 
     **/
    function doButton7Action(UXEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = log($this->edit->text);
        }        
    }

    /**
     * @event button.action 
     **/
    function doButtonAction(UXEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = sqrt($this->edit->text);
        }        
    }

    /**
     * @event buttonAlt.click-Left 
     **/
    function doButtonAltClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event button8.action 
     */
    function doButton8Action(UXEvent $e = null)
    {    
        
    }






}
