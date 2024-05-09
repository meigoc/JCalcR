<?php
namespace meigo\modules;

use php\gui\animatefx\AnimationFX;
use php\gui\framework\AbstractModule;


class function extends AbstractModule
{
    function ClickButton($a,$anima = "BounceIn",$o = 1)
    {
        echo "[INFO] function | received ".$a." & ".$anim."\n";
        
        if ($o == 1){
            if (app()->form("MainForm")->edit->text == 0){
                app()->form("MainForm")->edit->text = app()->form("MainForm")->$a->text;
            } else {
                app()->form("MainForm")->edit->text .= app()->form("MainForm")->$a->text;
            }
            
            if (app()->module("AppModule")->data_bin->get("disable.all.animations","main") != 1){
            $anim = new AnimationFX($anima, app()->form("MainForm")->$a, function(){
              echo "[INFO] animation | Successfully completed!\n";
            });
            $anim->start();
            } else {
                echo "[INFO] All animations are disabled!\n";
            }
            
        } else {
        
            if (app()->module("AppModule")->data_bin->get("disable.all.animations","main") != 1){
            $anim = new AnimationFX($anima, app()->form("MainForm")->$a, function(){
              echo "[INFO] animation | Successfully completed!\n";
            });
            $anim->start();
            } else {
                echo "[INFO] All animations are disabled!\n";
            }
        }
    }
}