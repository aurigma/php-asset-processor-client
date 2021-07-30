<?php
/**
 * ImagePreviewFitMode
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
 * ImagePreviewFitMode Class Doc Comment
 *
 * @category Class
 * @description Image preview fit mode
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ImagePreviewFitMode
{
    /**
     * Possible values of this enum
     */
    const FIT = 'Fit';
    const SHRINK = 'Shrink';
    const RESIZE = 'Resize';
    const FILL = 'Fill';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIT,
            self::SHRINK,
            self::RESIZE,
            self::FILL,
        ];
    }
}

