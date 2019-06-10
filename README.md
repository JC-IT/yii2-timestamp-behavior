# Timestamp behavior for Yii2

This extension provides a package that extends the [Timestamp behavior](https://www.yiiframework.com/doc/api/2.0/yii-behaviors-timestampbehavior) with a `deleted_at` field.

```bash
$ composer require jc-it/yii2-timestamp-behavior
```

or add

```
"jc-it/yii2-timestamp-behavior": "^<latest version>"
```

to the `require` section of your `composer.json` file.

## Configuration

In a model:

```php
/**
 * @return array
 */
public function behaviors(): array
{
    return ArrayHelper::merge(
        parent::behaviors(),
        [
            TimestampBehavior::class => [
                'class' => TimestampBehavior::class
            ],
        ]
    );
}
```

For more detailed configuration, see [Timestamp behavior](https://www.yiiframework.com/doc/api/2.0/yii-behaviors-timestampbehavior).

## Credits
- [Joey Claessen](https://github.com/joester89)

## License

The MIT License (MIT). Please see [LICENSE](https://github.com/jc-it/yii2-timestamp-behavior/blob/master/LICENSE) for more information.