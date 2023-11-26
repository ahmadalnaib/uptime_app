<?php


namespace App\Enums;

enum EndpointFrequency: int
{
case ONE__MINUTE = 1 * 60;
case FIVE_MINUTES = 5 * 60;
case THIRTY_MINUTES = 30 * 60;
case ONE_HOUR = 60 * 60;

}
