<?php

namespace app\app;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}