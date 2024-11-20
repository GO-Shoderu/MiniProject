<?php declare(strict_types=1);

namespace MiniProject\Enquiry\Model;

use Magento\Framework\Model\AbstractModel;
use MiniProject\Enquiry\Api\Data\EnquiryInterface;
use MiniProject\Enquiry\Model\ResourceModel\EnquiryResourceModel;

class EnquiryModel extends AbstractModel implements EnquiryInterface
{
    private const ENQUIRY_ID = 'enquiry_id';
    private const FIRST_NAME = 'first_name';
    private const LAST_NAME = 'last_name';
    private const PHONE_NUMBER = 'phone_number';
    private const EMAIL = 'email';
    private const INTERN_POSITION = 'intern_position';
    private const ENQUIRY_DETAILS = 'enquiry_details';
    private const CREATED_AT = 'created_at';
    private const UPDATED_AT = 'updated_at';
    private const ENQUIRY_STATUS = 'enquiry_status';

    protected function _construct()
    {
        $this->_init(EnquiryResourceModel::class);
        
        $this->_eventPrefix = 'MiniProject_Enquiry';
        $this->_eventObject = 'Enquiry';
        $this->_idFieldName = 'enquiry_id';
    }

    /**
     * @inheritDoc
     */
    public function getEnquiryId(): ?int
    {
        return (int) $this->getData(self::ENQUIRY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setEnquiryId(int $enquiryId)
    {
        return $this->setData(self::ENQUIRY_ID, $enquiryId);
    }

    /**
     * @inheritDoc
     */
    public function getFirstName(): ?string
    {
        return (string) $this->getData(self::FIRST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setFirstName(string $firstName)
    {
        return $this->setData(self::FIRST_NAME, $firstName);
    }

    /**
     * @inheritDoc
     */
    public function getLastName(): ?string
    {
        return (string) $this->getData(self::LAST_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setLastName(string $lastName)
    {
        return $this->setData(self::LAST_NAME, $lastName);
    }

    /**
     * @inheritDoc
     */
    public function getPhoneNumber(): ?string
    {
        return (string) $this->getData(self::PHONE_NUMBER);
    }

    /**
     * @inheritDoc
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        return $this->setData(self::PHONE_NUMBER, $phoneNumber);
    }

    /**
     * @inheritDoc
     */
    public function getEmail(): ?string
    {
        return (string) $this->getData(self::EMAIL);
    }

    /**
     * @inheritDoc
     */
    public function setEmail(string $email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * @inheritDoc
     */
    public function getInternPosition(): ?string
    {
        return (string) $this->getData(self::INTERN_POSITION);
    }

    /**
     * @inheritDoc
     */
    public function setInternPosition(string $internPosition)
    {
        return $this->setData(self::INTERN_POSITION, $internPosition);
    }

    /**
     * @inheritDoc
     */
    public function getEnquiryDetails(): ?string
    {
        return (string) $this->getData(self::ENQUIRY_DETAILS);
    }

    /**
     * @inheritDoc
     */
    public function setEnquiryDetails(string $enquiryDetails)
    {
        return $this->setData(self::ENQUIRY_DETAILS, $enquiryDetails);
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt(): ?string
    {
        return (string) $this->getData(self::CREATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt(string $createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt(): ?string
    {
        return (string) $this->getData(self::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt(string $updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * @inheritDoc
     */
    public function getEnquiryStatus(): ?string
    {
        return (string) $this->getData(self::ENQUIRY_STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setEnquiryStatus(string $enquiryStatus)
    {
        return $this->setData(self::ENQUIRY_STATUS, $enquiryStatus);
    }
}
