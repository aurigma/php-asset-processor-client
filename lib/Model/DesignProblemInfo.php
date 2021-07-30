<?php
/**
 * DesignProblemInfo
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
 * DesignProblemInfo Class Doc Comment
 *
 * @category Class
 * @description Information about design problems
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DesignProblemInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DesignProblemInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'font_missing_problems' => '\Aurigma\AssetProcessor\Model\DesignFontMissingProblemDescription[]',
        'data_validation_problems' => '\Aurigma\AssetProcessor\Model\DesignDataValidationProblemDescription[]',
        'data_schema_missing_problem' => '\Aurigma\AssetProcessor\Model\DesignDataSchemaMissingProblemDescription'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'font_missing_problems' => null,
        'data_validation_problems' => null,
        'data_schema_missing_problem' => null
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
        'font_missing_problems' => 'fontMissingProblems',
        'data_validation_problems' => 'dataValidationProblems',
        'data_schema_missing_problem' => 'dataSchemaMissingProblem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'font_missing_problems' => 'setFontMissingProblems',
        'data_validation_problems' => 'setDataValidationProblems',
        'data_schema_missing_problem' => 'setDataSchemaMissingProblem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'font_missing_problems' => 'getFontMissingProblems',
        'data_validation_problems' => 'getDataValidationProblems',
        'data_schema_missing_problem' => 'getDataSchemaMissingProblem'
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
        $this->container['font_missing_problems'] = $data['font_missing_problems'] ?? null;
        $this->container['data_validation_problems'] = $data['data_validation_problems'] ?? null;
        $this->container['data_schema_missing_problem'] = $data['data_schema_missing_problem'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets font_missing_problems
     *
     * @return \Aurigma\AssetProcessor\Model\DesignFontMissingProblemDescription[]|null
     */
    public function getFontMissingProblems()
    {
        return $this->container['font_missing_problems'];
    }

    /**
     * Sets font_missing_problems
     *
     * @param \Aurigma\AssetProcessor\Model\DesignFontMissingProblemDescription[]|null $font_missing_problems List of font missing problem descriptions
     *
     * @return self
     */
    public function setFontMissingProblems($font_missing_problems)
    {
        $this->container['font_missing_problems'] = $font_missing_problems;

        return $this;
    }

    /**
     * Gets data_validation_problems
     *
     * @return \Aurigma\AssetProcessor\Model\DesignDataValidationProblemDescription[]|null
     */
    public function getDataValidationProblems()
    {
        return $this->container['data_validation_problems'];
    }

    /**
     * Sets data_validation_problems
     *
     * @param \Aurigma\AssetProcessor\Model\DesignDataValidationProblemDescription[]|null $data_validation_problems List of data validation problem descriptions
     *
     * @return self
     */
    public function setDataValidationProblems($data_validation_problems)
    {
        $this->container['data_validation_problems'] = $data_validation_problems;

        return $this;
    }

    /**
     * Gets data_schema_missing_problem
     *
     * @return \Aurigma\AssetProcessor\Model\DesignDataSchemaMissingProblemDescription|null
     */
    public function getDataSchemaMissingProblem()
    {
        return $this->container['data_schema_missing_problem'];
    }

    /**
     * Sets data_schema_missing_problem
     *
     * @param \Aurigma\AssetProcessor\Model\DesignDataSchemaMissingProblemDescription|null $data_schema_missing_problem data_schema_missing_problem
     *
     * @return self
     */
    public function setDataSchemaMissingProblem($data_schema_missing_problem)
    {
        $this->container['data_schema_missing_problem'] = $data_schema_missing_problem;

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

