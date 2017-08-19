# Sonata Time Picker, Symfony Bundle

This bundle provides a time picker for sonata admin.

## Usage

```php
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('startHour', TimePickerType::class);
    }
``` 