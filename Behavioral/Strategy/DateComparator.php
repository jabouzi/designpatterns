<?php

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Class DateComparator
 */
class DateComparator implements ComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function compare($a, $b)
    {
		//~ print_r($a);
		//~ print_r($b);
        $aDate = new \DateTime($a['date']);
        $bDate = new \DateTime($b['date']);

        if ($aDate == $bDate) {
            return 0;
        } else {
            return $aDate < $bDate ? -1 : 1;
        }
    }
}
