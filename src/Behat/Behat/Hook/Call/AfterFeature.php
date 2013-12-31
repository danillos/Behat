<?php

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Behat\Behat\Hook\Call;

use Behat\Behat\Tester\Event\FeatureTested;

/**
 * After feature hook.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class AfterFeature extends RuntimeFeatureHook
{
    /**
     * Initializes hook.
     *
     * @param null|string $filterString
     * @param Callable    $callback
     * @param null|string $description
     */
    public function __construct($filterString, $callback, $description = null)
    {
        parent::__construct(FeatureTested::AFTER, $filterString, $callback, $description);
    }

    /**
     * Returns hook name.
     *
     * @return string
     */
    public function getName()
    {
        return 'AfterFeature';
    }
}