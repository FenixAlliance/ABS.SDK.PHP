<?php
/**
 * TenantInvitationDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HolderService
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
 * TenantInvitationDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TenantInvitationDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TenantInvitationDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'timestamp' => '\DateTime',
        'tenant_id' => 'string',
        'revoked' => 'bool',
        'redeemed' => 'bool',
        'redeemed_timestamp' => '\DateTime',
        'user_email' => 'string',
        'creator_enrollment_id' => 'string',
        'related_enrollment_id' => 'string'
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
        'tenant_id' => null,
        'revoked' => null,
        'redeemed' => null,
        'redeemed_timestamp' => 'date-time',
        'user_email' => null,
        'creator_enrollment_id' => null,
        'related_enrollment_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'timestamp' => true,
        'tenant_id' => true,
        'revoked' => false,
        'redeemed' => false,
        'redeemed_timestamp' => true,
        'user_email' => true,
        'creator_enrollment_id' => true,
        'related_enrollment_id' => true
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
        'tenant_id' => 'tenantId',
        'revoked' => 'revoked',
        'redeemed' => 'redeemed',
        'redeemed_timestamp' => 'redeemedTimestamp',
        'user_email' => 'userEmail',
        'creator_enrollment_id' => 'creatorEnrollmentId',
        'related_enrollment_id' => 'relatedEnrollmentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'tenant_id' => 'setTenantId',
        'revoked' => 'setRevoked',
        'redeemed' => 'setRedeemed',
        'redeemed_timestamp' => 'setRedeemedTimestamp',
        'user_email' => 'setUserEmail',
        'creator_enrollment_id' => 'setCreatorEnrollmentId',
        'related_enrollment_id' => 'setRelatedEnrollmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'tenant_id' => 'getTenantId',
        'revoked' => 'getRevoked',
        'redeemed' => 'getRedeemed',
        'redeemed_timestamp' => 'getRedeemedTimestamp',
        'user_email' => 'getUserEmail',
        'creator_enrollment_id' => 'getCreatorEnrollmentId',
        'related_enrollment_id' => 'getRelatedEnrollmentId'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('timestamp', $data ?? [], null);
        $this->setIfExists('tenant_id', $data ?? [], null);
        $this->setIfExists('revoked', $data ?? [], null);
        $this->setIfExists('redeemed', $data ?? [], null);
        $this->setIfExists('redeemed_timestamp', $data ?? [], null);
        $this->setIfExists('user_email', $data ?? [], null);
        $this->setIfExists('creator_enrollment_id', $data ?? [], null);
        $this->setIfExists('related_enrollment_id', $data ?? [], null);
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
     * Gets revoked
     *
     * @return bool|null
     */
    public function getRevoked()
    {
        return $this->container['revoked'];
    }

    /**
     * Sets revoked
     *
     * @param bool|null $revoked revoked
     *
     * @return self
     */
    public function setRevoked($revoked)
    {
        if (is_null($revoked)) {
            throw new \InvalidArgumentException('non-nullable revoked cannot be null');
        }
        $this->container['revoked'] = $revoked;

        return $this;
    }

    /**
     * Gets redeemed
     *
     * @return bool|null
     */
    public function getRedeemed()
    {
        return $this->container['redeemed'];
    }

    /**
     * Sets redeemed
     *
     * @param bool|null $redeemed redeemed
     *
     * @return self
     */
    public function setRedeemed($redeemed)
    {
        if (is_null($redeemed)) {
            throw new \InvalidArgumentException('non-nullable redeemed cannot be null');
        }
        $this->container['redeemed'] = $redeemed;

        return $this;
    }

    /**
     * Gets redeemed_timestamp
     *
     * @return \DateTime|null
     */
    public function getRedeemedTimestamp()
    {
        return $this->container['redeemed_timestamp'];
    }

    /**
     * Sets redeemed_timestamp
     *
     * @param \DateTime|null $redeemed_timestamp redeemed_timestamp
     *
     * @return self
     */
    public function setRedeemedTimestamp($redeemed_timestamp)
    {
        if (is_null($redeemed_timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'redeemed_timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemed_timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redeemed_timestamp'] = $redeemed_timestamp;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string|null $user_email user_email
     *
     * @return self
     */
    public function setUserEmail($user_email)
    {
        if (is_null($user_email)) {
            array_push($this->openAPINullablesSetToNull, 'user_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets creator_enrollment_id
     *
     * @return string|null
     */
    public function getCreatorEnrollmentId()
    {
        return $this->container['creator_enrollment_id'];
    }

    /**
     * Sets creator_enrollment_id
     *
     * @param string|null $creator_enrollment_id creator_enrollment_id
     *
     * @return self
     */
    public function setCreatorEnrollmentId($creator_enrollment_id)
    {
        if (is_null($creator_enrollment_id)) {
            array_push($this->openAPINullablesSetToNull, 'creator_enrollment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creator_enrollment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creator_enrollment_id'] = $creator_enrollment_id;

        return $this;
    }

    /**
     * Gets related_enrollment_id
     *
     * @return string|null
     */
    public function getRelatedEnrollmentId()
    {
        return $this->container['related_enrollment_id'];
    }

    /**
     * Sets related_enrollment_id
     *
     * @param string|null $related_enrollment_id related_enrollment_id
     *
     * @return self
     */
    public function setRelatedEnrollmentId($related_enrollment_id)
    {
        if (is_null($related_enrollment_id)) {
            array_push($this->openAPINullablesSetToNull, 'related_enrollment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('related_enrollment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['related_enrollment_id'] = $related_enrollment_id;

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


