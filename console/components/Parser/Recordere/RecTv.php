<?php
namespace console\components\parser\recordere;

use Yii;
use frontend\models\ParserTv;
use frontend\models\ExternalSite;
use yii\base\Exception;

require_once __DIR__ . '/RecBase.php';

class RecTv extends RecBase
{
    private $_table         = 'parser_tv';
    protected $_catalogUrl  = 'http://recordere.dk/tv/';
    protected $_baseUrl     = 'http://www.recordere.dk/indhold/templates/design.aspx?articleid=';

    public function saveItem($data)
    {
        $item = $this->_beforeSave((new ParserTv), $data);
        if ($item->save(false)) {
            return $item->id;
        } else {
            throw new Exception('Tv data could not be saved. Tv id ' . $data['id']);
        }
    }

    public function run()
    {
        set_time_limit(0);
        $before = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $catalogLinks = $this->getCatalogLinks();
        $existingArticles = $this->getExistingArticles($this->_table, ExternalSite::RECORDERE);
        $this->_processAndSave($catalogLinks, $existingArticles, 'Tv');
        $after = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $this->done('Tv', $before, $after);
    }
}