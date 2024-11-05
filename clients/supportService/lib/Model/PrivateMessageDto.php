<?php
/**
 * PrivateMessageDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SupportService
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
 * PrivateMessageDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrivateMessageDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrivateMessageDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'timestamp' => '\DateTime',
        'read' => 'bool',
        'title' => 'string',
        'message' => 'string',
        'conversation_id' => 'string',
        'sender_social_profile_id' => 'string',
        'receiver_social_profile_id' => 'string',
        'sent_timestamp' => '\DateTime',
        'read_timestamp' => '\DateTime',
        'received_timestamp' => '\DateTime'
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
        'read' => null,
        'title' => null,
        'message' => null,
        'conversation_id' => null,
        'sender_social_profile_id' => null,
        'receiver_social_profile_id' => null,
        'sent_timestamp' => 'date-time',
        'read_timestamp' => 'date-time',
        'received_timestamp' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'timestamp' => true,
        'read' => false,
        'title' => true,
        'message' => true,
        'conversation_id' => true,
        'sender_social_profile_id' => true,
        'receiver_social_profile_id' => true,
        'sent_timestamp' => false,
        'read_timestamp' => false,
        'received_timestamp' => false
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
        'read' => 'read',
        'title' => 'title',
        'message' => 'message',
        'conversation_id' => 'conversationId',
        'sender_social_profile_id' => 'senderSocialProfileId',
        'receiver_social_profile_id' => 'receiverSocialProfileID',
        'sent_timestamp' => 'sentTimestamp',
        'read_timestamp' => 'readTimestamp',
        'received_timestamp' => 'receivedTimestamp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timestamp' => 'setTimestamp',
        'read' => 'setRead',
        'title' => 'setTitle',
        'message' => 'setMessage',
        'conversation_id' => 'setConversationId',
        'sender_social_profile_id' => 'setSenderSocialProfileId',
        'receiver_social_profile_id' => 'setReceiverSocialProfileId',
        'sent_timestamp' => 'setSentTimestamp',
        'read_timestamp' => 'setReadTimestamp',
        'received_timestamp' => 'setReceivedTimestamp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timestamp' => 'getTimestamp',
        'read' => 'getRead',
        'title' => 'getTitle',
        'message' => 'getMessage',
        'conversation_id' => 'getConversationId',
        'sender_social_profile_id' => 'getSenderSocialProfileId',
        'receiver_social_profile_id' => 'getReceiverSocialProfileId',
        'sent_timestamp' => 'getSentTimestamp',
        'read_timestamp' => 'getReadTimestamp',
        'received_timestamp' => 'getReceivedTimestamp'
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
        $this->setIfExists('read', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('conversation_id', $data ?? [], null);
        $this->setIfExists('sender_social_profile_id', $data ?? [], null);
        $this->setIfExists('receiver_social_profile_id', $data ?? [], null);
        $this->setIfExists('sent_timestamp', $data ?? [], null);
        $this->setIfExists('read_timestamp', $data ?? [], null);
        $this->setIfExists('received_timestamp', $data ?? [], null);
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
     * Gets read
     *
     * @return bool|null
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool|null $read read
     *
     * @return self
     */
    public function setRead($read)
    {
        if (is_null($read)) {
            throw new \InvalidArgumentException('non-nullable read cannot be null');
        }
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            array_push($this->openAPINullablesSetToNull, 'message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets conversation_id
     *
     * @return string|null
     */
    public function getConversationId()
    {
        return $this->container['conversation_id'];
    }

    /**
     * Sets conversation_id
     *
     * @param string|null $conversation_id conversation_id
     *
     * @return self
     */
    public function setConversationId($conversation_id)
    {
        if (is_null($conversation_id)) {
            array_push($this->openAPINullablesSetToNull, 'conversation_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('conversation_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['conversation_id'] = $conversation_id;

        return $this;
    }

    /**
     * Gets sender_social_profile_id
     *
     * @return string|null
     */
    public function getSenderSocialProfileId()
    {
        return $this->container['sender_social_profile_id'];
    }

    /**
     * Sets sender_social_profile_id
     *
     * @param string|null $sender_social_profile_id sender_social_profile_id
     *
     * @return self
     */
    public function setSenderSocialProfileId($sender_social_profile_id)
    {
        if (is_null($sender_social_profile_id)) {
            array_push($this->openAPINullablesSetToNull, 'sender_social_profile_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sender_social_profile_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sender_social_profile_id'] = $sender_social_profile_id;

        return $this;
    }

    /**
     * Gets receiver_social_profile_id
     *
     * @return string|null
     */
    public function getReceiverSocialProfileId()
    {
        return $this->container['receiver_social_profile_id'];
    }

    /**
     * Sets receiver_social_profile_id
     *
     * @param string|null $receiver_social_profile_id receiver_social_profile_id
     *
     * @return self
     */
    public function setReceiverSocialProfileId($receiver_social_profile_id)
    {
        if (is_null($receiver_social_profile_id)) {
            array_push($this->openAPINullablesSetToNull, 'receiver_social_profile_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('receiver_social_profile_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['receiver_social_profile_id'] = $receiver_social_profile_id;

        return $this;
    }

    /**
     * Gets sent_timestamp
     *
     * @return \DateTime|null
     */
    public function getSentTimestamp()
    {
        return $this->container['sent_timestamp'];
    }

    /**
     * Sets sent_timestamp
     *
     * @param \DateTime|null $sent_timestamp sent_timestamp
     *
     * @return self
     */
    public function setSentTimestamp($sent_timestamp)
    {
        if (is_null($sent_timestamp)) {
            throw new \InvalidArgumentException('non-nullable sent_timestamp cannot be null');
        }
        $this->container['sent_timestamp'] = $sent_timestamp;

        return $this;
    }

    /**
     * Gets read_timestamp
     *
     * @return \DateTime|null
     */
    public function getReadTimestamp()
    {
        return $this->container['read_timestamp'];
    }

    /**
     * Sets read_timestamp
     *
     * @param \DateTime|null $read_timestamp read_timestamp
     *
     * @return self
     */
    public function setReadTimestamp($read_timestamp)
    {
        if (is_null($read_timestamp)) {
            throw new \InvalidArgumentException('non-nullable read_timestamp cannot be null');
        }
        $this->container['read_timestamp'] = $read_timestamp;

        return $this;
    }

    /**
     * Gets received_timestamp
     *
     * @return \DateTime|null
     */
    public function getReceivedTimestamp()
    {
        return $this->container['received_timestamp'];
    }

    /**
     * Sets received_timestamp
     *
     * @param \DateTime|null $received_timestamp received_timestamp
     *
     * @return self
     */
    public function setReceivedTimestamp($received_timestamp)
    {
        if (is_null($received_timestamp)) {
            throw new \InvalidArgumentException('non-nullable received_timestamp cannot be null');
        }
        $this->container['received_timestamp'] = $received_timestamp;

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


