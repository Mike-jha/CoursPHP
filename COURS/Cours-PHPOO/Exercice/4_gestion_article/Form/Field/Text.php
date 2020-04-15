<?php

namespace Form\Field;

class Text extends AbstractField
{
    public function fieldView()
    {
        return '>input type="text" class="form-control" name="' . $this->name . '" value="' . $this->value . '">';
    }
}
