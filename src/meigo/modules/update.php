<?php
namespace meigo\modules;

use action\Animation;
use php\lang\Thread;
use php\gui\framework\AbstractModule;


class update extends AbstractModule
{
    function update()
    {
        $thread = new Thread(function () {
            $a = trim(file_get_contents("https://raw.githubusercontent.com/meigoc/JCalcR/main/update/upd.ver"));
            
            if ($a == "1.4"){
                self::noupdates();
                return "No updates";
            } else {
                self::doupdate();
                return $a;
            }
        });
        $thread->start(); // стартуем выполнение
    }
    
    static function noupdates()
    {
        uiLater(function() {
            app()->form("splash_load")->label->text = "Обновлений не найдено!";
            waitAsync(500, function () use ($e, $event) {
                Animation::fadeTo(app()->form("splash_load")->progressIndicator, 500, 0);
                Animation::fadeTo(app()->form("splash_load")->label, 500, 0);
                waitAsync(500, function () use ($e, $event) {
                    Animation::fadeTo(app()->form("splash_load"), 1000, 0);
                });
            });    
        });
    }
    
    static function doupdate()
    {
        uiLater(function() {
            app()->module("function")->free();
            app()->form("MainForm")->free();
            app()->form("splash_load")->label->text = "Найдено обновление ".$a."\nWindows:\n\nОбновите с гитхаба приложение\n\nOpenUI:\n\nПерейдите в Настройки, далее в Центр обновлений и обновите данное приложение\n\nОбновление обязательное, без него вы не можете использовать приложение!";
        });
    }
}