<?php
    namespace Model\Managers;

    use App\Manager;
    use App\DAO;

    class PostManager extends Manager {

        protected $className = "Model\Entities\Post";
        protected $tableName = "post";

        public function __construct() {
            parent::connect();
        }

        public function findPostsByTopic($id) {

            $sql = "SELECT *
                   FROM ".$this->tableName." p
                   WHERE p.topic_id = :id";
            
            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }

        public function removeAllPostsByIdTopic($topic_id) {

            $sql = "DELETE FROM " .$this->tableName." p
            WHERE p.topic_id = :topic_id";
            DAO::delete($sql, ['topic_id' => $topic_id]);
        }
        
        // Supprime toutes les lignes selon l'id d'un topic.
        public function deleteByIdTopic($topicId) {
            $sql = "DELETE FROM " . $this->tableName . "
                    WHERE topic_id = :id
                    ";

            return DAO::delete($sql, ['id' => $topicId]);
        }

        public function updatePostUserNull($id) {
            $postManager = new PostManager();

            $sql = "UPDATE ".$this->tableName." p
                    SET p.user_id = NULL
                    WHERE p.user_id = :id";

            DAO::update($sql, ["id" => $id]);
        }

        public function findPostByIdUser($id) {
            $postManager = new PostManager;

            $sql = "SELECT *
                    FROM " . $this->tableName . " p
                    WHERE p.id_post = :id
                    ";

            return $this->getMultipleResults(
                DAO::select($sql, ['id' => $id]),
                $this->className
            );
        }
    }
?>