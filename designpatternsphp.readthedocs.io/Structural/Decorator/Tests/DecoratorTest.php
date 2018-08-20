<?php

namespace DPRDIO\Structural\Decorator\Tests;

use DPRDIO\Structural\Decorator\DoubleRoomBooking;
use DPRDIO\Structural\Decorator\ExtraBed;
use DPRDIO\Structural\Decorator\WIFI;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRommBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertEquals(40, $booking->calculatePrice());
        $this->assertEquals('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WIFI($booking);

        $this->assertEquals(42, $booking->calculatePrice());
        $this->assertEquals('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WIFI($booking);
        $booking = new ExtraBed($booking);

        $this->assertEquals(72, $booking->calculatePrice());
        $this->assertEquals('double room with wifi with extra bed', $booking->getDescription());
    }
}