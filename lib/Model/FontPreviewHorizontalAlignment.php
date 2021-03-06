<?php
/**
 * FontPreviewHorizontalAlignment
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AssetProcessor API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\AssetProcessor\Model;
use \Aurigma\AssetProcessor\ObjectSerializer;

/**
 * FontPreviewHorizontalAlignment Class Doc Comment
 *
 * @category Class
 * @description Horizontal alignment of text visualization in font preview image
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FontPreviewHorizontalAlignment
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const LEFT = 'Left';
    const CENTER = 'Center';
    const RIGHT = 'Right';
    const JUSTIFY_ALL = 'JustifyAll';
    const JUSTIFY_LEFT = 'JustifyLeft';
    const JUSTIFY_CENTER = 'JustifyCenter';
    const JUSTIFY_RIGHT = 'JustifyRight';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::LEFT,
            self::CENTER,
            self::RIGHT,
            self::JUSTIFY_ALL,
            self::JUSTIFY_LEFT,
            self::JUSTIFY_CENTER,
            self::JUSTIFY_RIGHT,
        ];
    }
}


