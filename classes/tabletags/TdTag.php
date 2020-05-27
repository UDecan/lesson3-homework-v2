<?php


namespace App\classes\tabletags;


use App\classes\abstracts\AbstractTag;
use App\classes\traits\CharAndValignTrait;
use App\classes\traits\ColorAndAlignTrait;
use App\classes\traits\GetViewTrait;
use App\classes\traits\HeightAndWightTrait;

class TdTag extends AbstractTag
{
    use getViewTrait;
    use ColorAndAlignTrait;
    use CharAndValignTrait;
    use HeightAndWightTrait;

    protected static array $showAttr = ['abbr', 'align', 'axis', 'background', 'bgcolor',
        'bordercolor', 'char', 'charoff', 'colspan', 'headers', 'height', 'nowrap',
        'rowspan', 'scope', 'valign', 'width'];

    public const TAG_NAME = 'td';

    /**
     * @var string
     */
    protected string $abbr;

    /**
     * @var string
     */
    protected string $axis;

    /**
     * @var string
     */
    protected string $background;

    /**
     * unsigned int
     * @var int
     */
    protected int $colspan;

    /**
     * @var string
     */
    protected string $headers;

    /**
     * @var string
     */
    protected string $nowrap;

    /**
     * unsigned int
     * @var int
     */
    protected int $rowspan;

     /**
     * @var array
     */
    protected static array $scopeValues = ['col', 'colgroup', 'row', 'rowgroup', ''];

    /**
     * @var string
     */
    protected string $scope;

    protected static array $availableTypesForUl = ['disc', 'circle', 'square'];

    protected static array $availableTypesForOl = ['A', 'a', 'I', 'i', '1'];


    public function __construct()
    {
        $this->alignValues = ['left', 'center', 'right', 'justify', ''];
        $this->valignValues = ['top', 'middle', 'bottom', 'baseline', ''];
    }

    /**
     * @inheritDoc
     */
    public function getView(string $inner = ''): string
    {
        if ($inner === '' && strlen($this->inner)) {
            $inner = $this->inner;
        }
        return $this->getHTML(static::TAG_NAME, $this->getAttributes(), $inner);
    }

    /**
     * @return string
     */
    public function getAbbr(): string
    {
        return $this->abbr;
    }

    /**
     * @param string $abbr
     * @return TdTag
     */
    public function setAbbr(string $abbr): TdTag
    {
        $this->abbr = $abbr;
        return $this;
    }

    /**
     * @return string
     */
    public function getAxis(): string
    {
        return $this->axis;
    }

    /**
     * @param string $axis
     * @return TdTag
     */
    public function setAxis(string $axis): TdTag
    {
        $this->axis = $axis;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackground(): string
    {
        return $this->background;
    }

    /**
     * @param string $background
     * @return TdTag
     */
    public function setBackground(string $background): TdTag
    {
        $this->background = $background;
        return $this;
    }

    /**
     * @return int
     */
    public function getColspan(): int
    {
        return $this->colspan;
    }

    /**
     * @param int $colspan
     * @return TdTag
     */
    public function setColspan(int $colspan): TdTag
    {
        $this->colspan = $colspan;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeaders(): string
    {
        return $this->headers;
    }

    /**
     * @param string $headers
     * @return TdTag
     */
    public function setHeaders(string $headers): TdTag
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNowrap(): bool
    {
        return $this->nowrap;
    }

    /**
     * @param string $nowrap
     * @return TdTag
     */
    public function setNowrap(bool $nowrap): TdTag
    {
        $this->nowrap = $nowrap ? 'nowrap' : '';
        return $this;
    }

    /**
     * @return int
     */
    public function getRowspan(): int
    {
        return $this->rowspan;
    }

    /**
     * @param int $rowspan
     * @return TdTag
     */
    public function setRowspan(int $rowspan): TdTag
    {
        $this->rowspan = $rowspan;
        return $this;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     * @return TdTag
     */
    public function setScope(string $scope): TdTag
    {
        $this->scope = $scope;
        return $this;
    }
}