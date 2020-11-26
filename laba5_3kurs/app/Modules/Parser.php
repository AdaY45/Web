<?php

namespace App\Modules;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Parser
{
    public function parsing($txt) {
        $constantBegin = "[[";
        $constantEnd = "]]";
        $firstEnter = stripos($txt,$constantBegin);
        $lastEnter = stripos($txt,$constantEnd);
        $textBefore = substr($txt,0,$firstEnter);
        $textAfter = substr($txt, $lastEnter+2);
        $text = $this->get_string_between($txt, "[[","]]");
		$arg_constantDivision = " | ";
		$commandText = explode($arg_constantDivision,$text);
		$command = $commandText[0];
        array_shift($commandText);
        $args = $commandText;
		$prefix = 'command_';
        $func_name = $prefix . $command;
        if(method_exists($this,$func_name)) {
            $result = $this->$func_name($args);
            return $textBefore . $result . $textAfter;
        } else {
            return $textBefore . $textAfter;
        }
    }

    public function command_img($args) {
        return '<img class="macro-img" src="/images/' . $args[0] . '.jpg" style="text-align:' . $args[1] . '">';
    }
    
    public function command_link($args) {
    	return '<a class="button read_more" href="/' . $args[0] . '">';
    }
    
    public function command_endl($args) {
    	return '</a>';
    }
    
    public function command_openElement($args) {
    	return '<div class="card macro">
                    <a href="#" class="card_img">
                        <img src="images/' . $args[0] . '.jpg"  alt="Card Back">
                        <img src="images/' . $args[0] . '_hover.jpg" class="img-top macro" alt="Card Front">
                    </a>
                    <div class="card_text">
                        <div class="card_text_title" style="font-weight:700">' . $args[1] . '</div>
                        <div class="text_description">' . $args[2] . '</div>
                    </div>
                </div>';
    }

    public function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
}
    
    
