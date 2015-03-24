<?php
namespace console\components\parser\recordere;

use Yii;
use frontend\models\ParserMusic;
use frontend\models\ExternalSite;
use yii\base\Exception;

require_once __DIR__ . '/RecBase.php';

class RecMusic extends RecBase
{
    private $_table         = 'parser_music';
    protected $_catalogUrl  = 'http://recordere.dk/musik/';
    protected $_baseUrl     = 'http://www.recordere.dk/indhold/templates/design.aspx?articleid=';

    public function saveItem($data)
    {
        $item = $this->_beforeSave((new ParserMusic), $data);
        if ($item->save(false)) {
            return $item->id;
        } else {
            throw new Exception('Music data could not be saved. Music id ' . $data['id']);
        }
    }

    public function run()
    {
        set_time_limit(0);
        $before = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $catalogLinks = $this->getCatalogLinks();
        $existingArticles = $this->getExistingArticles($this->_table, ExternalSite::RECORDERE);
        $this->_processAndSave($catalogLinks, $existingArticles, 'Music');
        $after = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $this->done('Music', $before, $after);
    }
}