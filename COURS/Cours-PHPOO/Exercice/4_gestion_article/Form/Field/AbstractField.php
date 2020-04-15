<?php

namespace Form\Field;

abstract class AbstractField
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var array
     */
    protected $attr;

    /**
     * @var string
     */
    protected $value;

    // Fonction pour générer le code html du champ (input, select, button etc...)
    abstract protected function fieldView();

    public function __construct(string $name, string $label = '', array $attr = [])
    {
        $this->setName($name);
        $this->setLabel($label);
        $this->setAttr($attr);
    }

    public function createView()
    {
        $html = '<div class="form-group">';
        // Si label n'est pas vide, on crée la balise label
        if (!empty($this->label)) {
            $html .= '<label>' . $this->label . '</label>';
        }

        // On génére le code du champ
        $html .= $this->fieldView();
        $html .= '</div>';
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of attr
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * Set the value of attr
     *
     * @return  self
     */
    public function setAttr($attr)
    {
        $this->attr = $attr;

        return $this;
    }

    /**
     * Get the value of value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
