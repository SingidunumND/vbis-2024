<?php

namespace app\core;

class Form
{
    public function renderInputForm($type, $name, $value, $params){
        echo "<div class='form-group'>";
        echo "<label for='example-text-input' class='form-control-label'>$name</label>";
        echo "<input class='form-control' type='$type' name='$value' value='" . $params->$value . "' onfocus='focused(this)' onfocusout='defocused(this)'>";
                        if ($params != null && $params->errors != null) {
                            foreach ($params->errors as $attribute => $error) {
                                if ($attribute == $value) {
                                    echo "<span class='text-danger'>$error[0]</span>";
                                }
                            }
                        }
        echo "</div>";
    }
}