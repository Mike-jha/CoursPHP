<?php

namespace Form;

use Form\Field\AbstractField;

class Form
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $action;

    /**
     * @var array
     */
    private $fields = [];

    /**
     * Données du formulaire (objet Entity)
     */
    private $data = null;

    public function __construct(string $name, string $action = '')
    {
        $this->setName($name);
        $this->setAction($action);
    }

    /**
     * Get the value of name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name)
    {
        $this->name = trim($name);

        return $this;
    }

    /**
     * Get the value of action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action.
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Ajoute un champ au formulaire.
     */
    public function addField(AbstractField $field)
    {
        // Ajoute un objet champ
        $this->fields[] = $field;
    }

    public function createView()
    {
        $html = '<form name="' . $this->name . '" action="' . $this->action . '" method="post">';
        // TODO  Ajouter le code html des champs
        foreach ($this->fields as $field) {
            // Ajout de données provenant de l'objet Entity
            if (is_object($this->data)) { // Teste si data est un objet
                // Nom du champ ('title') doit être transformé en nom de methode ('getTitle')
                $nomMethode = 'get' . ucfirst($field->getName()); // Quand le nom du champ est 'content' => le nom de la méthode est getContent
                // Teste si la méthode existe dans l'objet
                if (method_exists($this->data, $nomMethode)) {
                    // Appel de la méthode dont le nom est contenu dans l variable $nomMethode
                    $value = $this->data->$nomMethode(); // Attention il faut ici un $ devant nomMethode
                    $field->setValue($value); // Envoie la donnée dans le champs
                }
            }
            $html .= $field->createView();
        }

        $html .= '</form>';

        return $html;
    }

    /**
     * Get données du formulaire (objet Entity)
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set données du formulaire (objet Entity)
     *
     * @return  self
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}
