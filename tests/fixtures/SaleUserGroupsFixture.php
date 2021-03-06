<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craftcommercetests\fixtures;

use craft\commerce\records\SaleUserGroup;
use craft\test\Fixture;
use crafttests\fixtures\UserGroupsFixture;

/**
 * Sale User Groups Fixture
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.x
 */
class SaleUserGroupsFixture extends Fixture
{
    /**
     * @inheritdoc
     */
    public $dataFile = __DIR__.'/data/sale-usergroups.php';

    /**
     * @inheritdoc
     */
    public $modelClass = SaleUserGroup::class;

    public $depends = [SalesFixture::class, UserGroupsFixture::class];
}