<?php
namespace console\components\parser\recordere;

use Yii;
use frontend\models\Review;
use frontend\models\ReviewType;
use frontend\models\ExternalSite;
use yii\base\Exception;

require_once __DIR__ . '/RecBase.php';

class RecReviews extends RecBase
{
    private $_table         = 'review';
    protected $_baseUrl     = 'http://www.recordere.dk/indhold/templates/design.aspx?articleid=';
    protected $_catalogUrl  = 'http://www.recordere.dk/anmeldelser/';

    public function saveItem($data)
    {
        $item = $this->_beforeSaveNewsReviews((new Review), $data);
        $item->review_id        = $data['id'];
        $item->review_type_id   = ReviewType::UNKNOWN;
        if ($item->save(false)) {
            return $item->id;
        } else {
            throw new Exception('Review data could not be saved. Review id ' . $data['id']);
        }
    }

    public function run()
    {
        set_time_limit(0);
        $before = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $catalogLinks = $this->getCatalogLinks();
        $existingReviews = $this->getExistingReviews(ExternalSite::RECORDERE);
        $this->_processAndSave($catalogLinks, $existingReviews, 'Reviews');
        $after = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $this->done('RecReviews', $before, $after);
    }
}