<?php

namespace Domnikl\StatsdBundle\Service;

final class Client
{
    /**
     * @var \Domnikl\Statsd\Client
     */
    private $client;

    /**
     *
     *
     * @param string $adapterClass
     * @param string $namespace
     * @param array $connectionOptions
     */
    public function __construct($adapterClass, $namespace = '', array $connectionOptions = array())
    {
        $host = $connectionOptions['host'];
        $port = $connectionOptions['port'];
        $timeout = $connectionOptions['timeout'];
        $persistent = $connectionOptions['persistent'];

        $connection = new $adapterClass($host, $port, $timeout, $persistent);
        $this->client = new \Domnikl\Statsd\Client($connection, $namespace);
    }

    /**
     * @return \Domnikl\Statsd\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * route calls to statsd client
     *
     * @param string $name
     * @param array $params
     *
     * @return mixed
     */
    public function __call($name, $params)
    {
        return call_user_func_array(array($this->client, $name), $params);
    }
}