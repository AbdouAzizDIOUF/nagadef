<?php

/**
 * Generated 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\WebParts;

use Office365\Runtime\ClientValue;
/**
 * Represents 
 * a Tile that describes a graphical link the user can click. 
 */
class TileData extends ClientValue
{
    /**
     * Accessibility: Read/WriteSpecifies 
     * the location of the images used to render the tile background, if it is a tile 
     * with a split background.
     * @var array
     */
    public $BackgroundCollageImageLocations;
    /**
     * Specifies 
     * the URL 
     * of the Tile background image.
     * @var string
     */
    public $BackgroundImageLocation;
    /**
     * Specifies 
     * whether the background image renders as an icon, positioned just above the 
     * overlay.
     * @var bool
     */
    public $BackgroundImageRendersAsIcon;
    /**
     * Specifies 
     * the text written in the body of the tile.
     * @var string
     */
    public $BodyText;
    /**
     * Specifies 
     * the text that describes a Tile.
     * @var string
     */
    public $Description;
    /**
     * Specifies 
     * whether the tile's hover behavior SHOULD be disabled.
     * @var bool
     */
    public $HoverDisabled;
    /**
     * Species a 
     * unique number that represents the Tile in a list of Tiles.
     * @var integer
     */
    public $ID;
    /**
     * Specifies 
     * whether the tile is a wide tile.
     * @var bool
     */
    public $IsWide;
    /**
     * Specifies 
     * the URL 
     * location of the navigation that happens on Tile click. 
     * @var string
     */
    public $LinkLocation;
    /**
     * Specifies 
     * a number that indicates the ordering of the Tile in a list of Tiles.
     * @var integer
     */
    public $TileOrder;
    /**
     * Specifies 
     * the title of the Tile.
     * @var string
     */
    public $Title;
    /**
     * Specifies 
     * whether the tile's title overlay SHOULD be completely transparent.
     * @var bool
     */
    public $TransparentOverlay;
}