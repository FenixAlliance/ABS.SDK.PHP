<?php
/**
 * MarketingListDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MarketingService
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.1.4089
 * Contact: support@fenix-alliance.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * MarketingListDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MarketingListDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MarketingListDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'timestamp' => '\DateTime',
        'locked' => 'bool',
        'name' => 'string',
        'purpose' => 'string',
        'description' => 'string',
        'source' => 'string',
        'cost' => 'float',
        'modified_on' => '\DateTime',
        'last_used_on' => '\DateTime',
        'currency_id' => 'string',
        'tenant_id' => 'string',
        'enrolment_id' => 'string',
        'marketing_list_type' => 'int',
        'marketing_list_target' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'timestamp' => 'date-time',
        'locked' => null,
        'name' => null,
        'purpose' => null,
        'description' => null,
        'source' => null,
        'cost' => 'double',
        'modified_on' => 'date-time',
        'last_used_on' => 'date-time',
        'currency_id' => null,
        'tenant_id' => null,
        'enrolment_id' => null,
        'marketing_list_type' => 'int32',
        'marketing_list_target' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'timestamp' => true,
        'locked' => false,
        'name' => true,
        'purpose' => true,
        'description' => true,
        'source' => true,
        'cost' => false,
        'modified_on' => false,
        'last_used_on' => false,
        'currency_id' => true,
        'tenant_id' => true,
        'enrolment_id' => true,
        'marketing_list_type' => false,
        'marketing_list_target' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'timestamp' => 'timestamp',
        'locked' => 'locked',
        'name' => 'name',
        'purpose' => 'purpose',
        'description' => 'description',
        'source' => 'source',
        'cost' => 'cost',
        'modified_on' => 'modifiedOn',
        'last_used_on' => 'lastUsedOn',
        'currency_id' => 'currencyId',
        'tenant_id' => 'tenantId',
        'enrolment_id' => 'enrolmentId',
        'marketing_list_type' => 'marketingListType',
        'marketing_list_target' => 'marketingListTarget'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'locked' => 'setLocked',
        'name' => 'setName',
        'purpose' => 'setPurpose',
        'description' => 'setDescription',
        'source' => 'setSource',
        'cost' => 'setCost',
        'modified_on' => 'setModifiedOn',
        'last_used_on' => 'setLastUsedOn',
        'currency_id' => 'setCurrencyId',
        'tenant_id' => 'setTenantId',
        'enrolment_id' => 'setEnrolmentId',
        'marketing_list_type' => 'setMarketingListType',
        'marketing_list_target' => 'setMarketingListTarget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'locked' => 'getLocked',
        'name' => 'getName',
        'purpose' => 'getPurpose',
        'description' => 'getDescription',
        'source' => 'getSource',
        'cost' => 'getCost',
        'modified_on' => 'getModifiedOn',
        'last_used_on' => 'getLastUsedOn',
        'currency_id' => 'getCurrencyId',
        'tenant_id' => 'getTenantId',
        'enrolment_id' => 'getEnrolmentId',
        'marketing_list_type' => 'getMarketingListType',
        'marketing_list_target' => 'getMarketingListTarget'
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

    public const MARKETING_LIST_TYPE_NUMBER_0 = 0;
    public const MARKETING_LIST_TYPE_NUMBER_1 = 1;
    public const MARKETING_LIST_TARGET_NUMBER_0 = 0;
    public const MARKETING_LIST_TARGET_NUMBER_1 = 1;
    public const MARKETING_LIST_TARGET_NUMBER_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarketingListTypeAllowableValues()
    {
        return [
            self::MARKETING_LIST_TYPE_NUMBER_0,
            self::MARKETING_LIST_TYPE_NUMBER_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarketingListTargetAllowableValues()
    {
        return [
            self::MARKETING_LIST_TARGET_NUMBER_0,
            self::MARKETING_LIST_TARGET_NUMBER_1,
            self::MARKETING_LIST_TARGET_NUMBER_2,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('locked', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('purpose', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('modified_on', $data ?? [], null);
        $this->setIfExists('last_used_on', $data ?? [], null);
        $this->setIfExists('currency_id', $data ?? [], null);
        $this->setIfExists('tenant_id', $data ?? [], null);
        $this->setIfExists('enrolment_id', $data ?? [], null);
        $this->setIfExists('marketing_list_type', $data ?? [], null);
        $this->setIfExists('marketing_list_target', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMarketingListTypeAllowableValues();
        if (!is_null($this->container['marketing_list_type']) && !in_array($this->container['marketing_list_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'marketing_list_type', must be one of '%s'",
                $this->container['marketing_list_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMarketingListTargetAllowableValues();
        if (!is_null($this->container['marketing_list_target']) && !in_array($this->container['marketing_list_target'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'marketing_list_target', must be one of '%s'",
                $this->container['marketing_list_target'],
                implode("', '", $allowedValues)
            );
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
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime|null $timestamp timestamp
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        if (is_null($timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked locked
     *
     * @return self
     */
    public function setLocked($locked)
    {
        if (is_null($locked)) {
            throw new \InvalidArgumentException('non-nullable locked cannot be null');
        }
        $this->container['locked'] = $locked;

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
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string|null $purpose purpose
     *
     * @return self
     */
    public function setPurpose($purpose)
    {
        if (is_null($purpose)) {
            array_push($this->openAPINullablesSetToNull, 'purpose');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('purpose', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            array_push($this->openAPINullablesSetToNull, 'source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets modified_on
     *
     * @return \DateTime|null
     */
    public function getModifiedOn()
    {
        return $this->container['modified_on'];
    }

    /**
     * Sets modified_on
     *
     * @param \DateTime|null $modified_on modified_on
     *
     * @return self
     */
    public function setModifiedOn($modified_on)
    {
        if (is_null($modified_on)) {
            throw new \InvalidArgumentException('non-nullable modified_on cannot be null');
        }
        $this->container['modified_on'] = $modified_on;

        return $this;
    }

    /**
     * Gets last_used_on
     *
     * @return \DateTime|null
     */
    public function getLastUsedOn()
    {
        return $this->container['last_used_on'];
    }

    /**
     * Sets last_used_on
     *
     * @param \DateTime|null $last_used_on last_used_on
     *
     * @return self
     */
    public function setLastUsedOn($last_used_on)
    {
        if (is_null($last_used_on)) {
            throw new \InvalidArgumentException('non-nullable last_used_on cannot be null');
        }
        $this->container['last_used_on'] = $last_used_on;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string|null
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string|null $currency_id currency_id
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {
        if (is_null($currency_id)) {
            array_push($this->openAPINullablesSetToNull, 'currency_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string|null
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string|null $tenant_id tenant_id
     *
     * @return self
     */
    public function setTenantId($tenant_id)
    {
        if (is_null($tenant_id)) {
            array_push($this->openAPINullablesSetToNull, 'tenant_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tenant_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets enrolment_id
     *
     * @return string|null
     */
    public function getEnrolmentId()
    {
        return $this->container['enrolment_id'];
    }

    /**
     * Sets enrolment_id
     *
     * @param string|null $enrolment_id enrolment_id
     *
     * @return self
     */
    public function setEnrolmentId($enrolment_id)
    {
        if (is_null($enrolment_id)) {
            array_push($this->openAPINullablesSetToNull, 'enrolment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enrolment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enrolment_id'] = $enrolment_id;

        return $this;
    }

    /**
     * Gets marketing_list_type
     *
     * @return int|null
     */
    public function getMarketingListType()
    {
        return $this->container['marketing_list_type'];
    }

    /**
     * Sets marketing_list_type
     *
     * @param int|null $marketing_list_type marketing_list_type
     *
     * @return self
     */
    public function setMarketingListType($marketing_list_type)
    {
        if (is_null($marketing_list_type)) {
            throw new \InvalidArgumentException('non-nullable marketing_list_type cannot be null');
        }
        $allowedValues = $this->getMarketingListTypeAllowableValues();
        if (!in_array($marketing_list_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'marketing_list_type', must be one of '%s'",
                    $marketing_list_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['marketing_list_type'] = $marketing_list_type;

        return $this;
    }

    /**
     * Gets marketing_list_target
     *
     * @return int|null
     */
    public function getMarketingListTarget()
    {
        return $this->container['marketing_list_target'];
    }

    /**
     * Sets marketing_list_target
     *
     * @param int|null $marketing_list_target marketing_list_target
     *
     * @return self
     */
    public function setMarketingListTarget($marketing_list_target)
    {
        if (is_null($marketing_list_target)) {
            throw new \InvalidArgumentException('non-nullable marketing_list_target cannot be null');
        }
        $allowedValues = $this->getMarketingListTargetAllowableValues();
        if (!in_array($marketing_list_target, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'marketing_list_target', must be one of '%s'",
                    $marketing_list_target,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['marketing_list_target'] = $marketing_list_target;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


