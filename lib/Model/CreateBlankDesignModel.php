<?php
/**
 * CreateBlankDesignModel
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

use \ArrayAccess;
use \Aurigma\AssetProcessor\ObjectSerializer;

/**
 * CreateBlankDesignModel Class Doc Comment
 *
 * @category Class
 * @description &#39;Create blank design&#39; operation parameters.
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateBlankDesignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateBlankDesignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'design_params' => '\Aurigma\AssetProcessor\Model\DesignParamsModel',
        'preview_settings' => '\Aurigma\AssetProcessor\Model\DesignPreviewSettingsModel',
        'blank_design_settings' => '\Aurigma\AssetProcessor\Model\BlankDesignSettingsModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'design_params' => null,
        'preview_settings' => null,
        'blank_design_settings' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'design_params' => 'designParams',
        'preview_settings' => 'previewSettings',
        'blank_design_settings' => 'blankDesignSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'design_params' => 'setDesignParams',
        'preview_settings' => 'setPreviewSettings',
        'blank_design_settings' => 'setBlankDesignSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'design_params' => 'getDesignParams',
        'preview_settings' => 'getPreviewSettings',
        'blank_design_settings' => 'getBlankDesignSettings'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['design_params'] = $data['design_params'] ?? null;
        $this->container['preview_settings'] = $data['preview_settings'] ?? null;
        $this->container['blank_design_settings'] = $data['blank_design_settings'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['design_params'] === null) {
            $invalidProperties[] = "'design_params' can't be null";
        }
        if ($this->container['blank_design_settings'] === null) {
            $invalidProperties[] = "'blank_design_settings' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets design_params
     *
     * @return \Aurigma\AssetProcessor\Model\DesignParamsModel
     */
    public function getDesignParams()
    {
        return $this->container['design_params'];
    }

    /**
     * Sets design_params
     *
     * @param \Aurigma\AssetProcessor\Model\DesignParamsModel $design_params design_params
     *
     * @return self
     */
    public function setDesignParams($design_params)
    {
        $this->container['design_params'] = $design_params;

        return $this;
    }

    /**
     * Gets preview_settings
     *
     * @return \Aurigma\AssetProcessor\Model\DesignPreviewSettingsModel|null
     */
    public function getPreviewSettings()
    {
        return $this->container['preview_settings'];
    }

    /**
     * Sets preview_settings
     *
     * @param \Aurigma\AssetProcessor\Model\DesignPreviewSettingsModel|null $preview_settings preview_settings
     *
     * @return self
     */
    public function setPreviewSettings($preview_settings)
    {
        $this->container['preview_settings'] = $preview_settings;

        return $this;
    }

    /**
     * Gets blank_design_settings
     *
     * @return \Aurigma\AssetProcessor\Model\BlankDesignSettingsModel
     */
    public function getBlankDesignSettings()
    {
        return $this->container['blank_design_settings'];
    }

    /**
     * Sets blank_design_settings
     *
     * @param \Aurigma\AssetProcessor\Model\BlankDesignSettingsModel $blank_design_settings blank_design_settings
     *
     * @return self
     */
    public function setBlankDesignSettings($blank_design_settings)
    {
        $this->container['blank_design_settings'] = $blank_design_settings;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


