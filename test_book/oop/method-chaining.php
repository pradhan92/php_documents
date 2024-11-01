<?php
//Method chaining
    // Method chaining in PHP allows you to call multiple methods on the same object in a 
    // single line of code. This is achieved by having methods return the object itself
    // (often referred to as $this), enabling subsequent method calls. It’s commonly used
    // for fluent interfaces and can make code more concise and expressive


// Example 
class QueryBuilder {
    private array $conditions = [];
    
    // Add a condition and return the instance for chaining
    public function where(string $field, string $operator, string $value): self {
        $this->conditions[] = "$field $operator '$value'";
        return $this;
    }
    
    // Add an 'ORDER BY' clause and return the instance for chaining
    public function orderBy(string $field, string $direction): self {
        $this->conditions[] = "ORDER BY $field $direction";
        return $this;
    }
    
    // Get the SQL query string
    public function getQuery(): string {
        return implode(' ', $this->conditions);
    }
}

// Usage of method chaining
$queryBuilder = new QueryBuilder();
$sql = $queryBuilder
    ->where('age', '>', '30')
    ->orderBy('name', 'ASC')
    ->getQuery();

echo $sql; // Outputs: age > '30' ORDER BY name ASC

// Explanation:
    // 1.Method Definitions: The where and orderBy methods add conditions to the $conditions
    // array and return $this to allow chaining.

    // 2.Chaining Methods: The where and orderBy methods are called in succession, followed by 
    // a call to getQuery, which constructs the final query string.
    ?>