The solution involves using the null coalescing operator (`??`) to safely handle potential null values before accessing object properties.

```php
<?php
class MyClass {
    public $property = 'some value';
}

$myObject = null;

$result = ($myObject ?? new MyClass())->property ?? 'default value';

echo $result; // Outputs 'default value'
?>
```

This revised code first checks if `$myObject` is null. If it is, a new `MyClass` object is created; otherwise, `$myObject` is used. Then, it checks if the `property` exists; if not, the default value is used. This prevents the fatal error and provides a more robust way to handle potential null values in ternary expressions.