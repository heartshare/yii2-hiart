<?php
/**
 * @link http://hiqdev.com/yii2-hiart
 * @copyright Copyright (c) 2015 HiQDev
 * @license http://hiqdev.com/yii2-hiart/license
 */

namespace hiqdev\hiart;

use common\components\Err;
use yii\base\Component;
use yii\base\InvalidCallException;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

/**
 * The Command class implements the API for accessing REST API.
 */
class Command extends Component
{
    /**
     * @var Connection
     */
    public $db;
    /**
     * @var string|array the indexes to execute the query on. Defaults to null meaning all indexes
     * @see http://www.elasticsearch.org/guide/en/elasticsearch/reference/current/search.html#search-multi-index
     */
    public $index;
    /**
     * @var string|array the types to execute the query on. Defaults to null meaning all types
     */
    public $type;
    /**
     * @var array list of arrays or json strings that become parts of a query
     */
    public $queryParts;
    public $options = [];


    /**
     * Sends a request to the _search API and returns the result
     * @param array $options
     * @return mixed
     * @throws ErrorResponseException
     */
    public function search($options = [])
    {
        $query = $this->queryParts;

        $options = array_merge($query, $options);
        $url = $this->index . ArrayHelper::remove($options, 'scenario', 'Search');

        $result = $this->db->get($url, $options);
        return $result;
    }

    public function getList($options = [])
    {
        $options = array_merge($this->queryParts, $options);
        $command = $this->index . 'GetList';
        $result = $this->db->get($command, $options);
        return $result;
    }


    public function insert($action, $data, $id = null, $options = [])
    {
        $options = array_merge($data, $options);

        if ($id !== null) {
            return $this->db->put($action . 'Update', array_merge($options, ['id' => $id]));
        } else {
            return $this->db->post($action . 'Create', $options);
        }
    }

    public function get($modelName, $primaryKey, $options)
    {
        return $this->db->get($modelName . 'GetInfo', ArrayHelper::merge(['id' => $primaryKey], $options));
    }

    public function mget($index, $type, $ids, $options = [])
    {
        $body = Json::encode(['ids' => array_values($ids)]);

        return $this->db->get([$index, $type, '_mget'], $options, $body);
    }

    public function exists($index, $type, $id)
    {
        return $this->db->head([$index, $type, $id]);
    }

    public function delete($index, $id, $options = [])
    {
        return $this->db->delete($index . 'Delete', array_merge($options, ['id' => $id]));
    }

    public function update($index, $id, $data, $options = [])
    {
        $options['id'] = $id;
        return $this->db->put($index . 'Update', array_merge($data, $options));
    }

    /**
     * @param $action
     * @param array $options
     *
     * @return mixed
     */
    public function perform($action, $options = [])
    {
        return $this->db->put($action, $options);
    }
}
