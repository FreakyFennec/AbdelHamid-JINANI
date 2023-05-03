<?php
    namespace Model\Managers;
    
    use App\Manager;
    use App\DAO;

    class TopicManager extends Manager{

        protected $className = "Model\Entities\Topic";
        protected $tableName = "topic";

        public function __construct(){
            parent::connect();
        }

        public function findTopicsByCategorie($id) {

            $topicManager = new TopicManager();

            $sql = "SELECT *
                   FROM ".$this->tableName." p
                   WHERE p.categorie_id = :id";
            
            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }

        public function updateTopicUserNull($id) {
            $topicManager = new TopicManager();

            $sql = "UPDATE ".$this->tableName." p
                    SET p.user_id = NULL
                    WHERE p.user_id = :id";

            DAO::update($sql, ["id" => $id]);
        }

        public function findTopicByIdUser($id) {
            $topicManager = new TopicManager();

            $sql = "SELECT *
                    FROM ". $this->tableName ." t
                    WHERE t.user_id = :id";

            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }
    }