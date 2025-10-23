<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderExtraFields;

class ExtraField
{
    private int $extraFieldId;
    private string $name;
    private string $editorType;

    public function __construct(int $extraFieldId, string $name, string $editorType)
    {
        $this->extraFieldId = $extraFieldId;
        $this->name = $name;
        $this->editorType = $editorType;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self($data['extra_field_id'], $data['name'], $data['editor_type']);
    }

    /**
     * @return int
     */
    public function getExtraFieldId(): int
    {
        return $this->extraFieldId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEditorType(): string
    {
        return $this->editorType;
    }

}
