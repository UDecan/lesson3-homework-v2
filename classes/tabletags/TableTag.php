<?php
declare(strict_types=1);

namespace App\classes\tabletags;

use App\classes\abstracts\AbstractListTag;
use App\classes\traits\ColorAndAlignTrait;
use App\classes\traits\getParamForGetView;
use App\classes\traits\GetViewTrait;
use App\classes\traits\HeightAndWightTrait;

class TableTag extends AbstractListTag
{
    use ColorAndAlignTrait;
    use getParamForGetView;
    use GetViewTrait;
    use HeightAndWightTrait;

    protected const TAG_NAME = 'table';

    protected static array $showAttribute = ['align', 'background', 'bgcolor', 'border',
        'bordercolor', 'cellpadding', 'cellspacing', 'cols', 'frame', 'height',
        'rules', 'summary', 'width'];

    /**
     * @var string
     */
    protected string $background;

    /**
     * @var int
     */
    protected int $border;

    /**
     * unsigned int
     * @var int
     */
    protected int $cellpadding;

    /**
     * unsigned int
     * @var int
     */
    protected int $cellspacing;

    /**
     * @var int
     */
    protected int $cols;

    /**
     * @var array
     */
    protected static array $frameValues = ['void', 'border', 'above', 'below', 'hsides', 'vsides' , 'rhs', 'lhs', ''];

    /**
     * @var string
     */
    protected string $frame;



    /**
     * @var array
     */
    protected static array $rulesValues = ['all', 'groups', 'cols', 'none', 'rows'];

    /**
     * @var string
     */
    protected string $rules;

    /**
     * @var string
     */
    protected string $summary;

    /**
     * TableTag constructor.
     */
    public function __construct()
    {
        $this->alignValues = ['left', 'center', 'right', 'justify', ''];
        $this->valignValues = ['top', 'middle', 'bottom', 'baseline', ''];
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
     * @return TableTag
     */
    public function setBackground(string $background): TableTag
    {
        $this->background = $background;
        return $this;
    }

    /**
     * @return int
     */
    public function getBorder(): int
    {
        return $this->border;
    }

    /**
     * @param int $border
     * @return TableTag
     */
    public function setBorder(int $border): TableTag
    {
        $this->border = $border;
        return $this;
    }

    /**
     * @return int
     */
    public function getCellpadding(): int
    {
        return $this->cellpadding;
    }

    /**
     * @param int $cellpadding
     * @return TableTag
     */
    public function setCellpadding(int $cellpadding): TableTag
    {
        $this->cellpadding = $cellpadding;
        return $this;
    }

    /**
     * @return int
     */
    public function getCellspacing(): int
    {
        return $this->cellspacing;
    }

    /**
     * @param int $cellspacing
     * @return TableTag
     */
    public function setCellspacing(int $cellspacing): TableTag
    {
        $this->cellspacing = $cellspacing;
        return $this;
    }

    /**
     * @return int
     */
    public function getCols(): int
    {
        return $this->cols;
    }

    /**
     * @param int $cols
     * @return TableTag
     */
    public function setCols(int $cols): TableTag
    {
        $this->cols = $cols;
        return $this;
    }

    /**
     * @return string
     */
    public function getFrame(): string
    {
        return $this->frame;
    }

    /**
     * @param string $frame
     * @return TableTag
     */
    public function setFrame(string $frame): TableTag
    {
        if (!in_array($frame, $this->alignValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->frame = $frame;
        return $this;
    }



    /**
     * @return string
     */
    public function getRules(): string
    {
        return $this->rules;
    }

    /**
     * @param string $rules
     * @return TableTag
     */
    public function setRules(string $rules): TableTag
    {
        if (!in_array($rules, $this->alignValues)) {
            throw new \RuntimeException('Значение вне диапазона');
        }
        $this->rules = $rules;
        return $this;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     * @return TableTag
     */
    public function setSummary(string $summary): TableTag
    {
        $this->summary = $summary;
        return $this;
    }
}