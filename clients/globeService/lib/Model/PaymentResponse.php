<?php
/**
 * PaymentResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GlobeService
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
 * PaymentResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'test' => 'bool',
        'ip' => 'string',
        'bank' => 'string',
        'status' => 'string',
        'errors' => 'mixed',
        'response' => 'string',
        'auth_code' => 'string',
        'payment_id' => 'string',
        'franchise' => 'string',
        'signature' => 'string',
        'payment_status' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'test' => null,
        'ip' => null,
        'bank' => null,
        'status' => null,
        'errors' => null,
        'response' => null,
        'auth_code' => null,
        'payment_id' => null,
        'franchise' => null,
        'signature' => null,
        'payment_status' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'test' => false,
        'ip' => true,
        'bank' => true,
        'status' => true,
        'errors' => true,
        'response' => true,
        'auth_code' => true,
        'payment_id' => true,
        'franchise' => true,
        'signature' => true,
        'payment_status' => false
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
        'test' => 'test',
        'ip' => 'ip',
        'bank' => 'bank',
        'status' => 'status',
        'errors' => 'errors',
        'response' => 'response',
        'auth_code' => 'authCode',
        'payment_id' => 'paymentID',
        'franchise' => 'franchise',
        'signature' => 'signature',
        'payment_status' => 'paymentStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'test' => 'setTest',
        'ip' => 'setIp',
        'bank' => 'setBank',
        'status' => 'setStatus',
        'errors' => 'setErrors',
        'response' => 'setResponse',
        'auth_code' => 'setAuthCode',
        'payment_id' => 'setPaymentId',
        'franchise' => 'setFranchise',
        'signature' => 'setSignature',
        'payment_status' => 'setPaymentStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'test' => 'getTest',
        'ip' => 'getIp',
        'bank' => 'getBank',
        'status' => 'getStatus',
        'errors' => 'getErrors',
        'response' => 'getResponse',
        'auth_code' => 'getAuthCode',
        'payment_id' => 'getPaymentId',
        'franchise' => 'getFranchise',
        'signature' => 'getSignature',
        'payment_status' => 'getPaymentStatus'
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

    public const PAYMENT_STATUS_NUMBER_0 = 0;
    public const PAYMENT_STATUS_NUMBER_1 = 1;
    public const PAYMENT_STATUS_NUMBER_2 = 2;
    public const PAYMENT_STATUS_NUMBER_3 = 3;
    public const PAYMENT_STATUS_NUMBER_4 = 4;
    public const PAYMENT_STATUS_NUMBER_5 = 5;
    public const PAYMENT_STATUS_NUMBER_6 = 6;
    public const PAYMENT_STATUS_NUMBER_7 = 7;
    public const PAYMENT_STATUS_NUMBER_8 = 8;
    public const PAYMENT_STATUS_NUMBER_9 = 9;
    public const PAYMENT_STATUS_NUMBER_10 = 10;
    public const PAYMENT_STATUS_NUMBER_11 = 11;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_NUMBER_0,
            self::PAYMENT_STATUS_NUMBER_1,
            self::PAYMENT_STATUS_NUMBER_2,
            self::PAYMENT_STATUS_NUMBER_3,
            self::PAYMENT_STATUS_NUMBER_4,
            self::PAYMENT_STATUS_NUMBER_5,
            self::PAYMENT_STATUS_NUMBER_6,
            self::PAYMENT_STATUS_NUMBER_7,
            self::PAYMENT_STATUS_NUMBER_8,
            self::PAYMENT_STATUS_NUMBER_9,
            self::PAYMENT_STATUS_NUMBER_10,
            self::PAYMENT_STATUS_NUMBER_11,
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
        $this->setIfExists('test', $data ?? [], null);
        $this->setIfExists('ip', $data ?? [], null);
        $this->setIfExists('bank', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
        $this->setIfExists('response', $data ?? [], null);
        $this->setIfExists('auth_code', $data ?? [], null);
        $this->setIfExists('payment_id', $data ?? [], null);
        $this->setIfExists('franchise', $data ?? [], null);
        $this->setIfExists('signature', $data ?? [], null);
        $this->setIfExists('payment_status', $data ?? [], null);
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

        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_status', must be one of '%s'",
                $this->container['payment_status'],
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
     * Gets test
     *
     * @return bool|null
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool|null $test test
     *
     * @return self
     */
    public function setTest($test)
    {
        if (is_null($test)) {
            throw new \InvalidArgumentException('non-nullable test cannot be null');
        }
        $this->container['test'] = $test;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip ip
     *
     * @return self
     */
    public function setIp($ip)
    {
        if (is_null($ip)) {
            array_push($this->openAPINullablesSetToNull, 'ip');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ip', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets bank
     *
     * @return string|null
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param string|null $bank bank
     *
     * @return self
     */
    public function setBank($bank)
    {
        if (is_null($bank)) {
            array_push($this->openAPINullablesSetToNull, 'bank');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bank', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return mixed|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param mixed|null $errors errors
     *
     * @return self
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            array_push($this->openAPINullablesSetToNull, 'errors');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('errors', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string|null $response response
     *
     * @return self
     */
    public function setResponse($response)
    {
        if (is_null($response)) {
            array_push($this->openAPINullablesSetToNull, 'response');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('response', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code auth_code
     *
     * @return self
     */
    public function setAuthCode($auth_code)
    {
        if (is_null($auth_code)) {
            array_push($this->openAPINullablesSetToNull, 'auth_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auth_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets payment_id
     *
     * @return string|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string|null $payment_id payment_id
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        if (is_null($payment_id)) {
            array_push($this->openAPINullablesSetToNull, 'payment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets franchise
     *
     * @return string|null
     */
    public function getFranchise()
    {
        return $this->container['franchise'];
    }

    /**
     * Sets franchise
     *
     * @param string|null $franchise franchise
     *
     * @return self
     */
    public function setFranchise($franchise)
    {
        if (is_null($franchise)) {
            array_push($this->openAPINullablesSetToNull, 'franchise');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('franchise', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['franchise'] = $franchise;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string|null $signature signature
     *
     * @return self
     */
    public function setSignature($signature)
    {
        if (is_null($signature)) {
            array_push($this->openAPINullablesSetToNull, 'signature');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('signature', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return int|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param int|null $payment_status payment_status
     *
     * @return self
     */
    public function setPaymentStatus($payment_status)
    {
        if (is_null($payment_status)) {
            throw new \InvalidArgumentException('non-nullable payment_status cannot be null');
        }
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_status', must be one of '%s'",
                    $payment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

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


