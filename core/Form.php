<?php

namespace app\core;

class Form
{
    public function renderInputForm($type, $name, $params){
        echo "<div class='form-group'>";
        echo "<label for='example-text-input' class='form-control-label'>Email address</label>";
        echo "<input class='form-control' type='$type' name='$name' value='" . $params->$name . "' onfocus='focused(this)' onfocusout='defocused(this)'>";
                        if ($params != null && $params->errors != null) {
                            foreach ($params->errors as $attribute => $error) {
                                if ($attribute == $name) {
                                    echo "<span class='text-danger'>$error[0]</span>";
                                }
                            }
                        }
        echo "</div>";
    }
}