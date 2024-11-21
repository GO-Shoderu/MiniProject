<?php declare(strict_types=1);

namespace MiniProject\Enquiry\Api\Data;

interface EnquiryInterface
{
    /**
     * Get Enquiry ID
     *
     * @return int|null
     */
    public function getEnquiryId(): ?int;

    /**
     * Set Enquiry ID
     *
     * @param int $enquiryId
     */
    public function setEnquiryId(int $enquiryId);

    /**
     * Get First Name
     *
     * @return string|null
     */
    public function getFirstName(): ?string;

    /**
     * Set First Name
     *
     * @param string $firstName
     */
    public function setFirstName(string $firstName);

    /**
     * Get Last Name
     *
     * @return string|null
     */
    public function getLastName(): ?string;

    /**
     * Set Last Name
     *
     * @param string $lastName
     */
    public function setLastName(string $lastName);

    /**
     * Get Phone Number
     *
     * @return string|null
     */
    public function getPhoneNumber(): ?string;

    /**
     * Set Phone Number
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber);

    /**
     * Get Email Address
     *
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * Set Email Address
     *
     * @param string $email
     */
    public function setEmail(string $email);

    /**
     * Get Intern Position
     *
     * @return string|null
     */
    public function getInternPosition(): ?string;

    /**
     * Set Intern Position
     *
     * @param string $internPosition
     */
    public function setInternPosition(string $internPosition);

    /**
     * Get Enquiry Details
     *
     * @return string|null
     */
    public function getEnquiryDetails(): ?string;

    /**
     * Set Enquiry Details
     *
     * @param string $enquiryDetails
     */
    public function setEnquiryDetails(string $enquiryDetails);

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * Set Created At
     *
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt);

    /**
     * Get Updated At
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * Set Updated At
     *
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt);

    /**
     * Get Enquiry Status
     *
     * @return string|null
     */
    public function getEnquiryStatus(): ?string;

    /**
     * Set Enquiry Status
     *
     * @param string $enquiryStatus
     */
    public function setEnquiryStatus(string $enquiryStatus);
}

