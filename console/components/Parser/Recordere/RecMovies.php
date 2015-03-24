<?php
namespace console\components\parser\recordere;

use Yii;
use frontend\models\ExternalSite;
use frontend\models\NewsCategory;
use yii\base\Exception;

require_once __DIR__ . '/RecBase.php';

class RecMovies extends RecBase
{
    private $_table         = 'news';
    private $_categoryId    = 0;
    protected $_catalogUrl  = 'http://www.recordere.dk/film/';
    protected $_baseUrl     = 'http://www.recordere.dk/indhold/templates/design.aspx?articleid=';

    public function saveItem($data)
    {
        $item = $this->_beforeSave($data, $this->_categoryId);
        if ($item->save(false)) {
            return $item->id;
        } else {
            throw new Exception('Movie data could not be saved. Movie id ' . $data['id']);
        }
    }

    public function run()
    {
        set_time_limit(0);
        $this->_categoryId = NewsCategory::MOVIES;
        $before = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $catalogLinks = $this->getCatalogLinks();
        $existingArticles = $this->getExistingNews(ExternalSite::RECORDERE);
        $this->_processAndSave($catalogLinks, $existingArticles, 'Movie');
        $after = $this->getExistingRowsCount($this->_table, ExternalSite::RECORDERE);
        $this->done('Movies', $before, $after);
    }
}