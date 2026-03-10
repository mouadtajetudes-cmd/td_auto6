<?php
namespace App;

interface QueryBuilderInterface {
    public function table(string $table) : self;
    public function select(array $columns) : self;
    public function where(string $condition) : self;
    public function build() : string;
}
