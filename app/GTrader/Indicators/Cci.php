<?php

namespace GTrader\Indicators;

use GTrader\Indicators\Trader;

class Cci extends Trader
{

    public function runDependencies(bool $force_rerun = false)
    {
        return $this;
    }

    public function traderCalc(array $values)
    {
        if (!($values = trader_cci(
            $values[$this->getInput('input_high')],
            $values[$this->getInput('input_low')],
            $values[$this->getInput('input_close')],
            $this->getParam('indicator.period')
            ))) {
            error_log('trader_cci returned false');
            return [];
        }
        return [$values];
    }
}