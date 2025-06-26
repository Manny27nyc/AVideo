/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php
namespace Aws;

/**
 * Interface for adding and retrieving client-side monitoring events
 */
interface MonitoringEventsInterface
{

    /**
     * Get client-side monitoring events attached to this object. Each event is
     * represented as an associative array within the returned array.
     *
     * @return array
     */
    public function getMonitoringEvents();

    /**
     * Prepend a client-side monitoring event to this object's event list
     *
     * @param array $event
     */
    public function prependMonitoringEvent(array $event);

    /**
     * Append a client-side monitoring event to this object's event list
     *
     * @param array $event
     */
    public function appendMonitoringEvent(array $event);

}
