<?php
namespace console\components\parser\recordere;

use Yii;
use frontend\models\ParserMedia;
use frontend\models\ExternalSite;
use yii\base\Exception;

require_once __DIR__ . '/RecBase.php';

/**
 * For background section
 * Class RecMedia
 * @package app\components\parser\recordere
 */
class RecMedia extends RecBase
{
    private $_table         = 'parser_media';
    protected $_catalogUrl  = 'http://www.recordere.dk/artikler/';
    protected $_baseUrl     = 'http://www.recordere.dk/indhold/templates/design.aspx?articleid=';

    public function saveItem($data)
    {
        $item = $this->_beforeSave((new ParserMedia()), $data);
        if ($item->save(false)) {
            return $item->id;
        } else {
            throw new Exception('Media data could not be saved. Media id ' . $data['id']);
        }
    }

    public function run()
    {
        set_time_limit(0);
        $before = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $catalogLinks = $this->getCatalogLinks();
        $existingArticles = $this->getExistingArticles($this->_table, ExternalSite::RECORDERE);
        $this->_processAndSave($catalogLinks, $existingArticles, 'Media');
        $after = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $this->done('Media', $before, $after);
    }
}