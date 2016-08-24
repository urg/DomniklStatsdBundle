# domnikl/statsd-bundle

A Symfony2 Bundle for [statsd](https://github.com/etsy/statsd).

## Installation

The best way to install the domnikl/statsd-bundle is to use Composer and add the following to your project's `composer.json` file:

```javascript
{
    "require": {
        "domnikl/statsd-bundle": "*"
    }
}
```

## Configuration

Register the bundle in your `app/AppKernel.php` by adding `new Domnikl\StatsdBundle\DomniklStatsdBundle()`. It should look like:

```
        $bundles = array(
            ...
            new Domnikl\StatsdBundle\DomniklStatsdBundle(),
            ...
        );
```

Add the following lines to your `app/config/config.yml`:

```
domnikl_statsd:
    namespace: "" # global namespace
    connection:
        class: \Domnikl\Statsd\Connection\Socket # or Blackhole to disable metrics
        port: 8126 # default is 8125
        host: "statsd.foo.bar" # default is localhost
```

## Usage

To use the `statsd` service, have a look at [statsd-php](https://github.com/domnikl/statsd-php).

## Author

Original author: Dominik Liebler <liebler.dominik@googlemail.com>

## License

(The MIT License)

Copyright (c) 2013 Dominik Liebler

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
