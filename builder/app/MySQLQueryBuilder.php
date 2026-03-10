<?php
namespace App;

class MySQLQueryBuilder implements QueryBuilderInterface {
    private $table;
    private $columns = [];
    private $conditions = [];
    private $condition;

    public function table(string $table) : self {
        $this->table = $table;
        return $this;
    }

    public function select(array $columns) : self {
        $this->columns = $columns;
        return $this;
    }

    public function where(string $condition) : self {
        $this->conditions[] = $condition;
        return $this;
    }



    public function build() : string {
        if (empty($this->table)) {
            throw new \Exception("Table name is required.");
        }
        if (empty($this->columns)) {
            throw new \Exception("At least one column must be selected.");
        }
        if (empty($this->conditions)) {
            throw new \Exception("Where condition is required.");
        }

        $columns = implode(", ", $this->columns);
        $conditions = implode(" AND ", $this->conditions);
        return "SELECT {$columns} FROM {$this->table} WHERE {$conditions};";
    }
}
