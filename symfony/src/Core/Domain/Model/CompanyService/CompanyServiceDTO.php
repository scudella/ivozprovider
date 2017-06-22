<?php

namespace Core\Domain\Model\CompanyService;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class CompanyServiceDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var mixed
     */
    private $companyId;

    /**
     * @var mixed
     */
    private $serviceId;

    /**
     * @var mixed
     */
    private $company;

    /**
     * @var mixed
     */
    private $service;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'code' => $this->getCode(),
            'companyId' => $this->getCompanyId(),
            'serviceId' => $this->getServiceId()
        ];
    }

    /**
     * @param array $data
     * @return self
     */
    public static function fromArray(array $data)
    {
        $dto = new self();
        return $dto
            ->setId(isset($data['id']) ? $data['id'] : null)
            ->setCode(isset($data['code']) ? $data['code'] : null)
            ->setCompanyId(isset($data['companyId']) ? $data['companyId'] : null)
            ->setServiceId(isset($data['serviceId']) ? $data['serviceId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->company = $transformer->transform('Core\\Domain\\Model\\Company\\CompanyInterface', $this->getCompanyId());
        $this->service = $transformer->transform('Core\\Domain\\Model\\Service\\ServiceInterface', $this->getServiceId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return CompanyServiceDTO
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $code
     *
     * @return CompanyServiceDTO
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param integer $companyId
     *
     * @return CompanyServiceDTO
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param integer $serviceId
     *
     * @return CompanyServiceDTO
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @return \Core\Domain\Model\Service\ServiceInterface
     */
    public function getService()
    {
        return $this->service;
    }
}

