<?php

namespace frontend\widgets;

use yii\base\Widget;

class AdBlockTop extends Widget
{
    public function run()
    {
        return '
        <div class="banner form-group">
            <img class="full-width" src="images/banner_250-360.jpg" alt=""/>
        </div>
        <div class="banner form-group">
            <img class="full-width" src="images/banner_250-360.jpg" alt=""/>
        </div>';
    }
}
