<?php

namespace Models;

interface Crud
{
    public function insert();
    public function delete($paramid);
    public function update($paramid);
}