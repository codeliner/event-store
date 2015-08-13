<?php
/**
 * This file is part of VehicleManagement
 * Date: 8/13/15 - 11:34 PM
 * (c) Sixt GmbH & Co. Autovermietung KG
 */
namespace Prooph\EventStoreTest\Mock;


use Prooph\Common\Messaging\Message;
use Prooph\EventStore\Adapter\Adapter;
use Prooph\EventStore\Stream\Stream;
use Prooph\EventStore\Stream\StreamName;

final class AdapterMock implements Adapter
{
    private $options;

    public function __construct(array $options)
    {
        $this->options = $options;
    }

    /**
     * @return array
     */
    public function getInjectedOptions()
    {
        return $this->options;
    }

    /**
     * @param Stream $stream
     * @return void
     */
    public function create(Stream $stream)
    {
        throw new \BadMethodCallException(__CLASS__ . '::' . __METHOD__);
    }

    /**
     * @param StreamName $streamName
     * @param Message[] $domainEvents
     * @throws \Prooph\EventStore\Exception\StreamNotFoundException If stream does not exist
     * @return void
     */
    public function appendTo(StreamName $streamName, array $domainEvents)
    {
        throw new \BadMethodCallException(__CLASS__ . '::' . __METHOD__);
    }

    /**
     * @param StreamName $streamName
     * @param null|int $minVersion Minimum version an event should have
     * @return Stream|null
     */
    public function load(StreamName $streamName, $minVersion = null)
    {
        throw new \BadMethodCallException(__CLASS__ . '::' . __METHOD__);
    }

    /**
     * @param StreamName $streamName
     * @param array $metadata If empty array is provided, then all events should be returned
     * @param null|int $minVersion Minimum version an event should have
     * @return Message[]
     */
    public function loadEventsByMetadataFrom(StreamName $streamName, array $metadata, $minVersion = null)
    {
        throw new \BadMethodCallException(__CLASS__ . '::' . __METHOD__);
    }
}
 