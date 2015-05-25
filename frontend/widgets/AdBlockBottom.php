<?php

namespace frontend\widgets;

use yii\base\Widget;

class AdBlockBottom extends Widget
{
    public function run()
    {
        return '
        <div class="banner form-group">
            <img alt="" src="images/banner_250-360.jpg" class="full-width">
        </div>
        <div class="banner form-group">
            <img alt="" src="images/banner_250-360.jpg" class="full-width">
        </div>';
    }
}
