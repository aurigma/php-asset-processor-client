<?php
/**
 * MockupDto
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
 * MockupDto Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\AssetProcessor
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MockupDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MockupDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'metadata' => '\Aurigma\AssetProcessor\Model\MockupMetadataDto',
        'private' => 'bool',
        'type' => '\Aurigma\AssetProcessor\Model\MockupType',
        'previews' => 'array<string,\Aurigma\AssetProcessor\Model\PreviewMetadata>',
        'size' => 'int',
        'folder_id' => 'string',
        'tenant_id' => 'int',
        'id' => 'string',
        'owner_id' => 'string',
        'name' => 'string',
        'custom_fields' => 'array<string,mixed>',
        'last_modified' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'metadata' => null,
        'private' => null,
        'type' => null,
        'previews' => null,
        'size' => 'int64',
        'folder_id' => null,
        'tenant_id' => 'int32',
        'id' => null,
        'owner_id' => null,
        'name' => null,
        'custom_fields' => null,
        'last_modified' => 'date-time'
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
        'metadata' => 'metadata',
        'private' => 'private',
        'type' => 'type',
        'previews' => 'previews',
        'size' => 'size',
        'folder_id' => 'folderId',
        'tenant_id' => 'tenantId',
        'id' => 'id',
        'owner_id' => 'ownerId',
        'name' => 'name',
        'custom_fields' => 'customFields',
        'last_modified' => 'lastModified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metadata' => 'setMetadata',
        'private' => 'setPrivate',
        'type' => 'setType',
        'previews' => 'setPreviews',
        'size' => 'setSize',
        'folder_id' => 'setFolderId',
        'tenant_id' => 'setTenantId',
        'id' => 'setId',
        'owner_id' => 'setOwnerId',
        'name' => 'setName',
        'custom_fields' => 'setCustomFields',
        'last_modified' => 'setLastModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metadata' => 'getMetadata',
        'private' => 'getPrivate',
        'type' => 'getType',
        'previews' => 'getPreviews',
        'size' => 'getSize',
        'folder_id' => 'getFolderId',
        'tenant_id' => 'getTenantId',
        'id' => 'getId',
        'owner_id' => 'getOwnerId',
        'name' => 'getName',
        'custom_fields' => 'getCustomFields',
        'last_modified' => 'getLastModified'
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
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['private'] = $data['private'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['previews'] = $data['previews'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['folder_id'] = $data['folder_id'] ?? null;
        $this->container['tenant_id'] = $data['tenant_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['last_modified'] = $data['last_modified'] ?? null;
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
     * Gets metadata
     *
     * @return \Aurigma\AssetProcessor\Model\MockupMetadataDto|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Aurigma\AssetProcessor\Model\MockupMetadataDto|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool|null
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool|null $private private
     *
     * @return self
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Aurigma\AssetProcessor\Model\MockupType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Aurigma\AssetProcessor\Model\MockupType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets previews
     *
     * @return array<string,\Aurigma\AssetProcessor\Model\PreviewMetadata>|null
     */
    public function getPreviews()
    {
        return $this->container['previews'];
    }

    /**
     * Sets previews
     *
     * @param array<string,\Aurigma\AssetProcessor\Model\PreviewMetadata>|null $previews previews
     *
     * @return self
     */
    public function setPreviews($previews)
    {
        $this->container['previews'] = $previews;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param string|null $folder_id folder_id
     *
     * @return self
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return int|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param int|null $tenant_id tenant_id
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return array<string,mixed>|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param array<string,mixed>|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime|null $last_modified last_modified
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

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

