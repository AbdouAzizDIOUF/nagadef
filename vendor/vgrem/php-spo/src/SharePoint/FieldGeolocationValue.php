<?php

/**
 * Generated 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * altitude, latitude, longitude and measure values for FieldGeolocation 
 * (section 3.2.5.185).<191>
 */
class FieldGeolocationValue extends ClientValue
{
    /**
     * Specifies 
     * the altitude value for FieldGeolocation (section 3.2.5.185). 
     * The semantics of the altitude value are user-defined. This value will not be 
     * used in any out of the box calculations.
     * @var double
     */
    public $Altitude;
    /**
     * Specifies 
     * the latitude value for FieldGeolocation (section 3.2.5.185).
     * @var double
     */
    public $Latitude;
    /**
     * Specifies 
     * the longitude value for FieldGeolocation (section 3.2.5.185).
     * @var double
     */
    public $Longitude;
    /**
     * Specifies 
     * the measure value for FieldGeolocation (section 3.2.5.185). 
     * The semantics of the measure value are user-defined. This value will not be 
     * used in any out-of-the-box calculations.
     * @var double
     */
    public $Measure;
}