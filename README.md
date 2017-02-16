# InputMaskBundle

A simple Symfony bundle that implements Form classes for RobinHerbots/Inputmask jQuery plugin.

## Installation

Install with composer :
```bash
composer require it/input-mask-bundle
```

### Enable the bundle in your project

```php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new IT\InputMaskBundle\ITInputMaskBundle(),
        // ...
    );
}
```

## Config

Add the following line to your `config.yml` :
```yaml
# app/config/config.yml

twig:
    form_themes:
        - 'ITInputMaskBundle:Form:inputMaskFields.html.twig'
```

## Usage

You can use these types in your Sf2 forms :

```php
    // Will result of a single_widget date picker
    use IT\InputMaskBundle\Form\Type\DateMaskType;
    use IT\InputMaskBundle\Form\Type\EmailMaskType;
    use IT\InputMaskBundle\Form\Type\UrlMaskType;
    //...
    $builder
        ->add('birthdate', DateMaskType::class, array(
            'label' => 'Date of birth',
        ))
        ->add('email', EmailMaskType::class, array(
            'label' => 'Email field',
        ))
        ->add('url', UrlMaskType::class, array(
            'label' => 'Url field',
        ))
    ;
```

OR

```php
    // Will result of a text widget with the format "[0-9]{2}\.[0-9]{2}\.[0-9]{2}\.[0-9]{2}\.[0-9]{2}"
    use IT\InputMaskBundle\Form\Type\TextMaskType;
    //...
    $builder
        ->add('phone', TextMaskType::class, array(
            'label' => 'Phone number',
            'mask' => '99.99.99.99.99'
        ))
    ;
```

For the "mask" config, please refer to the RobinHerbots/Inputmask documentation :
https://github.com/RobinHerbots/Inputmask
or
http://robinherbots.github.io/Inputmask/
