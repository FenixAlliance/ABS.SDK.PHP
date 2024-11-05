<?php
/**
 * InvoiceUpdateDto
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * InvoicingService
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
 * InvoiceUpdateDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InvoiceUpdateDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceUpdateDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'closed' => 'bool',
        'title' => 'string',
        'user_id' => 'string',
        'tenant_id' => 'string',
        'forex_rate' => 'float',
        'currency_id' => 'string',
        'price_list_id' => 'string',
        'description' => 'string',
        'enrollment_id' => 'string',
        'individual_id' => 'string',
        'payment_term_id' => 'string',
        'organization_id' => 'string',
        'receiver_tenant_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company_name' => 'string',
        'billing_email' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'postal_code' => 'string',
        'country_id' => 'string',
        'state_id' => 'string',
        'city_id' => 'string',
        'billing_location_id' => 'string',
        'shipping_location_id' => 'string',
        'shipping_method_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'closed' => null,
        'title' => null,
        'user_id' => null,
        'tenant_id' => null,
        'forex_rate' => 'double',
        'currency_id' => null,
        'price_list_id' => null,
        'description' => null,
        'enrollment_id' => null,
        'individual_id' => null,
        'payment_term_id' => null,
        'organization_id' => null,
        'receiver_tenant_id' => null,
        'first_name' => null,
        'last_name' => null,
        'company_name' => null,
        'billing_email' => null,
        'address_line1' => null,
        'address_line2' => null,
        'postal_code' => null,
        'country_id' => null,
        'state_id' => null,
        'city_id' => null,
        'billing_location_id' => null,
        'shipping_location_id' => null,
        'shipping_method_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'closed' => false,
        'title' => true,
        'user_id' => true,
        'tenant_id' => true,
        'forex_rate' => false,
        'currency_id' => true,
        'price_list_id' => true,
        'description' => true,
        'enrollment_id' => true,
        'individual_id' => true,
        'payment_term_id' => true,
        'organization_id' => true,
        'receiver_tenant_id' => true,
        'first_name' => true,
        'last_name' => true,
        'company_name' => true,
        'billing_email' => true,
        'address_line1' => true,
        'address_line2' => true,
        'postal_code' => true,
        'country_id' => true,
        'state_id' => true,
        'city_id' => true,
        'billing_location_id' => true,
        'shipping_location_id' => true,
        'shipping_method_id' => true
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
        'closed' => 'closed',
        'title' => 'title',
        'user_id' => 'userId',
        'tenant_id' => 'tenantId',
        'forex_rate' => 'forexRate',
        'currency_id' => 'currencyId',
        'price_list_id' => 'priceListId',
        'description' => 'description',
        'enrollment_id' => 'enrollmentId',
        'individual_id' => 'individualId',
        'payment_term_id' => 'paymentTermId',
        'organization_id' => 'organizationId',
        'receiver_tenant_id' => 'receiverTenantId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'company_name' => 'companyName',
        'billing_email' => 'billingEmail',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'postal_code' => 'postalCode',
        'country_id' => 'countryId',
        'state_id' => 'stateId',
        'city_id' => 'cityId',
        'billing_location_id' => 'billingLocationId',
        'shipping_location_id' => 'shippingLocationId',
        'shipping_method_id' => 'shippingMethodId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'closed' => 'setClosed',
        'title' => 'setTitle',
        'user_id' => 'setUserId',
        'tenant_id' => 'setTenantId',
        'forex_rate' => 'setForexRate',
        'currency_id' => 'setCurrencyId',
        'price_list_id' => 'setPriceListId',
        'description' => 'setDescription',
        'enrollment_id' => 'setEnrollmentId',
        'individual_id' => 'setIndividualId',
        'payment_term_id' => 'setPaymentTermId',
        'organization_id' => 'setOrganizationId',
        'receiver_tenant_id' => 'setReceiverTenantId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company_name' => 'setCompanyName',
        'billing_email' => 'setBillingEmail',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'postal_code' => 'setPostalCode',
        'country_id' => 'setCountryId',
        'state_id' => 'setStateId',
        'city_id' => 'setCityId',
        'billing_location_id' => 'setBillingLocationId',
        'shipping_location_id' => 'setShippingLocationId',
        'shipping_method_id' => 'setShippingMethodId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'closed' => 'getClosed',
        'title' => 'getTitle',
        'user_id' => 'getUserId',
        'tenant_id' => 'getTenantId',
        'forex_rate' => 'getForexRate',
        'currency_id' => 'getCurrencyId',
        'price_list_id' => 'getPriceListId',
        'description' => 'getDescription',
        'enrollment_id' => 'getEnrollmentId',
        'individual_id' => 'getIndividualId',
        'payment_term_id' => 'getPaymentTermId',
        'organization_id' => 'getOrganizationId',
        'receiver_tenant_id' => 'getReceiverTenantId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company_name' => 'getCompanyName',
        'billing_email' => 'getBillingEmail',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'postal_code' => 'getPostalCode',
        'country_id' => 'getCountryId',
        'state_id' => 'getStateId',
        'city_id' => 'getCityId',
        'billing_location_id' => 'getBillingLocationId',
        'shipping_location_id' => 'getShippingLocationId',
        'shipping_method_id' => 'getShippingMethodId'
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
        $this->setIfExists('closed', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('tenant_id', $data ?? [], null);
        $this->setIfExists('forex_rate', $data ?? [], null);
        $this->setIfExists('currency_id', $data ?? [], null);
        $this->setIfExists('price_list_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('enrollment_id', $data ?? [], null);
        $this->setIfExists('individual_id', $data ?? [], null);
        $this->setIfExists('payment_term_id', $data ?? [], null);
        $this->setIfExists('organization_id', $data ?? [], null);
        $this->setIfExists('receiver_tenant_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('billing_email', $data ?? [], null);
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country_id', $data ?? [], null);
        $this->setIfExists('state_id', $data ?? [], null);
        $this->setIfExists('city_id', $data ?? [], null);
        $this->setIfExists('billing_location_id', $data ?? [], null);
        $this->setIfExists('shipping_location_id', $data ?? [], null);
        $this->setIfExists('shipping_method_id', $data ?? [], null);
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
     * Gets closed
     *
     * @return bool|null
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param bool|null $closed closed
     *
     * @return self
     */
    public function setClosed($closed)
    {
        if (is_null($closed)) {
            throw new \InvalidArgumentException('non-nullable closed cannot be null');
        }
        $this->container['closed'] = $closed;

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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

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
     * Gets forex_rate
     *
     * @return float|null
     */
    public function getForexRate()
    {
        return $this->container['forex_rate'];
    }

    /**
     * Sets forex_rate
     *
     * @param float|null $forex_rate forex_rate
     *
     * @return self
     */
    public function setForexRate($forex_rate)
    {
        if (is_null($forex_rate)) {
            throw new \InvalidArgumentException('non-nullable forex_rate cannot be null');
        }
        $this->container['forex_rate'] = $forex_rate;

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
     * Gets price_list_id
     *
     * @return string|null
     */
    public function getPriceListId()
    {
        return $this->container['price_list_id'];
    }

    /**
     * Sets price_list_id
     *
     * @param string|null $price_list_id price_list_id
     *
     * @return self
     */
    public function setPriceListId($price_list_id)
    {
        if (is_null($price_list_id)) {
            array_push($this->openAPINullablesSetToNull, 'price_list_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price_list_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price_list_id'] = $price_list_id;

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
     * Gets enrollment_id
     *
     * @return string|null
     */
    public function getEnrollmentId()
    {
        return $this->container['enrollment_id'];
    }

    /**
     * Sets enrollment_id
     *
     * @param string|null $enrollment_id enrollment_id
     *
     * @return self
     */
    public function setEnrollmentId($enrollment_id)
    {
        if (is_null($enrollment_id)) {
            array_push($this->openAPINullablesSetToNull, 'enrollment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enrollment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enrollment_id'] = $enrollment_id;

        return $this;
    }

    /**
     * Gets individual_id
     *
     * @return string|null
     */
    public function getIndividualId()
    {
        return $this->container['individual_id'];
    }

    /**
     * Sets individual_id
     *
     * @param string|null $individual_id individual_id
     *
     * @return self
     */
    public function setIndividualId($individual_id)
    {
        if (is_null($individual_id)) {
            array_push($this->openAPINullablesSetToNull, 'individual_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('individual_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['individual_id'] = $individual_id;

        return $this;
    }

    /**
     * Gets payment_term_id
     *
     * @return string|null
     */
    public function getPaymentTermId()
    {
        return $this->container['payment_term_id'];
    }

    /**
     * Sets payment_term_id
     *
     * @param string|null $payment_term_id payment_term_id
     *
     * @return self
     */
    public function setPaymentTermId($payment_term_id)
    {
        if (is_null($payment_term_id)) {
            array_push($this->openAPINullablesSetToNull, 'payment_term_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_term_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_term_id'] = $payment_term_id;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string|null
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string|null $organization_id organization_id
     *
     * @return self
     */
    public function setOrganizationId($organization_id)
    {
        if (is_null($organization_id)) {
            array_push($this->openAPINullablesSetToNull, 'organization_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organization_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets receiver_tenant_id
     *
     * @return string|null
     */
    public function getReceiverTenantId()
    {
        return $this->container['receiver_tenant_id'];
    }

    /**
     * Sets receiver_tenant_id
     *
     * @param string|null $receiver_tenant_id receiver_tenant_id
     *
     * @return self
     */
    public function setReceiverTenantId($receiver_tenant_id)
    {
        if (is_null($receiver_tenant_id)) {
            array_push($this->openAPINullablesSetToNull, 'receiver_tenant_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('receiver_tenant_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['receiver_tenant_id'] = $receiver_tenant_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            array_push($this->openAPINullablesSetToNull, 'first_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('first_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            array_push($this->openAPINullablesSetToNull, 'last_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            array_push($this->openAPINullablesSetToNull, 'company_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('company_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets billing_email
     *
     * @return string|null
     */
    public function getBillingEmail()
    {
        return $this->container['billing_email'];
    }

    /**
     * Sets billing_email
     *
     * @param string|null $billing_email billing_email
     *
     * @return self
     */
    public function setBillingEmail($billing_email)
    {
        if (is_null($billing_email)) {
            array_push($this->openAPINullablesSetToNull, 'billing_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_email'] = $billing_email;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (is_null($address_line1)) {
            array_push($this->openAPINullablesSetToNull, 'address_line1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 address_line2
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (is_null($address_line2)) {
            array_push($this->openAPINullablesSetToNull, 'address_line2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            array_push($this->openAPINullablesSetToNull, 'postal_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postal_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string|null
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string|null $country_id country_id
     *
     * @return self
     */
    public function setCountryId($country_id)
    {
        if (is_null($country_id)) {
            array_push($this->openAPINullablesSetToNull, 'country_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return string|null
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param string|null $state_id state_id
     *
     * @return self
     */
    public function setStateId($state_id)
    {
        if (is_null($state_id)) {
            array_push($this->openAPINullablesSetToNull, 'state_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets city_id
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->container['city_id'];
    }

    /**
     * Sets city_id
     *
     * @param string|null $city_id city_id
     *
     * @return self
     */
    public function setCityId($city_id)
    {
        if (is_null($city_id)) {
            array_push($this->openAPINullablesSetToNull, 'city_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city_id'] = $city_id;

        return $this;
    }

    /**
     * Gets billing_location_id
     *
     * @return string|null
     */
    public function getBillingLocationId()
    {
        return $this->container['billing_location_id'];
    }

    /**
     * Sets billing_location_id
     *
     * @param string|null $billing_location_id billing_location_id
     *
     * @return self
     */
    public function setBillingLocationId($billing_location_id)
    {
        if (is_null($billing_location_id)) {
            array_push($this->openAPINullablesSetToNull, 'billing_location_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_location_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_location_id'] = $billing_location_id;

        return $this;
    }

    /**
     * Gets shipping_location_id
     *
     * @return string|null
     */
    public function getShippingLocationId()
    {
        return $this->container['shipping_location_id'];
    }

    /**
     * Sets shipping_location_id
     *
     * @param string|null $shipping_location_id shipping_location_id
     *
     * @return self
     */
    public function setShippingLocationId($shipping_location_id)
    {
        if (is_null($shipping_location_id)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_location_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_location_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_location_id'] = $shipping_location_id;

        return $this;
    }

    /**
     * Gets shipping_method_id
     *
     * @return string|null
     */
    public function getShippingMethodId()
    {
        return $this->container['shipping_method_id'];
    }

    /**
     * Sets shipping_method_id
     *
     * @param string|null $shipping_method_id shipping_method_id
     *
     * @return self
     */
    public function setShippingMethodId($shipping_method_id)
    {
        if (is_null($shipping_method_id)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_method_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_method_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_method_id'] = $shipping_method_id;

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

