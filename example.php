<?php

namespace Galaxy\Far\Far\Away;

use Illuminate\Database\Eloquent\Model;

class Jedi extends Model
{
    /**
     * Define Hero.
     *
     * @var string
     */
    const HERO = 'Luke';

    /**
     * These aren't the droids you're looking for.
     *
     * @var array
     */
    protected $droids = [
        'R2-D2',
        'C-3PO',
    ];

    public function askKenobi()
    {
        if ($this->blindfolded()) {
            return $this->useTheForceLuke();
        }

        return $this->searchFeelings();
    }
}
