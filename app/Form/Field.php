<?php

namespace app\app\Form;

use app\app\Model;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public const LABEL_FNAME = 'First Name';
    public const LABEL_LNAME = 'Last Name';
    public const LABEL_EMAIL = 'Email';
    public const LABEL_PASSWORD = 'Password';
    public const LABEL_REPEATPASSWORD = 'Repeat Password';
    public string $label;
    public string $type;
    public Model $model;
    public string $attribute;

    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->label = self::LABEL_FNAME;
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                <label for="%s" class="form-label">%s</label>
                <input type="%s" name="%s" value="%s" class="form-control%s" id="%s">
                <div class="invalid-feedback">
                    %s
                </div>
            </div>'
            , $this->attribute,
        $this->label,
        $this->type,
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->attribute,
        $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function lnameLabel()
    {
        $this->label = self::LABEL_LNAME;
        return $this;
    }

    public function emailLabel()
    {
        $this->label = self::LABEL_EMAIL;
        return $this;
    }

    public function passwordLabel()
    {
        $this->label = self::LABEL_PASSWORD;
        return $this;
    }

    public function repeatPasswordLabel()
    {
        $this->label = self::LABEL_REPEATPASSWORD;
        return $this;
    }
}