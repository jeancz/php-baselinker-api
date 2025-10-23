<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderExtraFields;

use Imper86\PhpBaselinkerApi\Model\AbstractResponse;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class GetOrderExtraFieldsResponse extends AbstractResponse
{
    /**
     * @var ExtraField[]|null
     */
    private ?array $extraFields = null;

    public function __construct(HttpResponseInterface $httpResponse)
    {
        parent::__construct($httpResponse);

        if (isset($this->body['extra_fields']) && is_array($this->body['extra_fields'])) {
            foreach ($this->body['extra_fields'] as $extraField) {
                $this->extraFields[] = ExtraField::fromPrimitives($extraField);
            }
        }
    }

    /**
     * @return ExtraField[]|null
     */
    public function getExtraFields(): ?array
    {
        return $this->extraFields;
    }
}
