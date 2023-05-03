<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Entities\Post;
    use Model\Managers\TopicManager;
    use Model\Managers\PostManager;
    use Model\Managers\CategorieManager;
    use Model\Managers\UserManager;
    
    
    class ForumController extends AbstractController implements ControllerInterface{

        public function index(){
          
           $topicManager = new TopicManager();
           $categorieManager = new CategorieManager();
            
            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                "data" => [
                    "topics" => $topicManager->findAll(["creationdate", "DESC"]),
                    "categories" => $categorieManager->findAll(["nom", "ASC"])
                ]
            ];
        
        }

        public function listCategorie() {

            $categorieManager = new CategorieManager();

            return [
                "view" => VIEW_DIR."forum/listCategories.php",
                "data" => [
                    "categories" => $categorieManager->findAll(["nom", "ASC"])
                ]
            ];
        }

        public function listPostsById($id) {

            $postManager = new PostManager();
            $topicManager = new topicManager();
     
            return [
                "view" => VIEW_DIR."forum/listPosts.php",
                "data" => [
                    "topic" => $topicManager->findOneById($id),
                    "posts" => $postManager->findPostsByTopic($id)
                ]
            ];
        }

        

        public function listTopicsByCategorie($id) {

            $topicManager = new TopicManager();
            $categorieManager = new CategorieManager();

            return [
                "view" => VIEW_DIR."forum/listTopics.php",
                "data" => [
                    "categorie" => $categorieManager->findOneById($id),
                    "topics" => $topicManager->findTopicsByCategorie($id)
                ]
            ];
        }

        public function addCategorie() {

            $categorieManager = new CategorieManager();

            if (isset($_POST['submit'])) {

                $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $data = ['nom' => $nom];        // regardes dans manager (add)

                $categorieManager->add($data);  // ajoute le array data

                return [
                    "view" => VIEW_DIR."forum/listCategories.php",
                    "data" => [
                        "categories" => $categorieManager->findAll(["nom", "ASC"])
                    ]
                ];
            }            
        }

        public function addPost() {

            $postManager = new PostManager();
            $topicManager = new TopicManager();

            if (isset($_POST['submit'])) {

               $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
               $topic_id = filter_input(INPUT_POST, "topic_id", FILTER_SANITIZE_NUMBER_INT);

               $data = [
                    'text' => $text,
                    'user_id' => \App\Session::getUser()->getId(),
                    'topic_id' => $topic_id
               ];

               $postManager->add($data);

               return [
                    "view" => VIEW_DIR."forum/listPosts.php",
                    "data" => [
                        "topic" => $topicManager->findOneById($topic_id),
                        "posts" => $postManager->findPostsByTopic($topic_id)
                    ]
                ];
            }
        }

        public function addTopic() {

            $postManager = new PostManager();
            $topicManager = new TopicManager();

            if (isset($_POST['submit'])) {

                $add_topic = filter_input(INPUT_POST, "title", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $user_id = filter_input(INPUT_POST, "user_id", FILTER_SANITIZE_NUMBER_INT);
                $categorie_id = filter_input(INPUT_POST, "categorie_id", FILTER_SANITIZE_NUMBER_INT);
                $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $data = [
                    'title' => $add_topic,
                    'user_id' => $user_id,
                    'categorie_id' => $categorie_id
                ];

                $topic_id = $topicManager->add($data);

                $data = [
                    'text' => $text,
                    'user_id' => $user_id,
                    'topic_id' => $topic_id
                ];
                
                $post_id = $postManager->add($data);

                return [
                    "view" => VIEW_DIR."forum/listPosts.php",
                    "data" => [
                        "topic" => $topicManager->findOneById($topic_id),
                        "posts" => $postManager->findPostsByTopic($topic_id)
                    ]
                ];
            }
        }

        public function listUsers() {

            $userManager = new UserManager();

            return [
                "view" => VIEW_DIR."forum/listUsers.php",
                "data" => [
                    "user" => $userManager->findAll(["pseudo", "ASC"])
                ]
            ];
        }

        public function removeUser() {

            $userManager = new UserManager();

            if (isset($_POST['submit'])) {
                
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $data = [
                    'email' => $email
                ];

                $pseudo = $userManager->removeByEmail($data);
                
            }
            
            return [
                "view" => VIEW_DIR."forum/listUsers.php",
                "data" => [
                    "user" => $userManager->findAll(["pseudo", "ASC"])
                ]
            ];
        }

        public function removeTopicById($id) {

            $topicManager = new TopicManager();

            if (isset($_POST['id'])) {
                
                $data = [
                    'id' => $id
                ];

                $id = $topicManager->removeTopic($data);
            }

            return [

                "view" => VIEW_DIR."forum/listUsers.php",
                "data" => [
                    "user" => $topicManager->findAll(["pseudo", "ASC"])
                ]
            ];
        }

        public function removePost($id) {
            $postManager = new PostManager();
            // trouver le post dont l'id est $id
            $post = $postManager->findOneById($id);
            $topicId = $post->getTopic()->getId();
            $postManager->delete($id);
            return $this->redirectTo("forum", "listPostsById", $topicId);
        }

        public function removeTopicAndHisPosts($id) {

            $postManager = new PostManager;
            $topicManager = new TopicManager;

            // Trouver le topic dont l'id est $id 
            $topic = $topicManager->findOneById($id);
            $topicId = $topic->getId();
            $categorieId = $topic->getCategorie()->getId();


            $postManager->deleteByIdTopic($topicId);
            $topicManager->delete($topicId);
            
            return $this->redirectTo("forum", "listTopicsByCategorie", $categorieId);

        }

        public function removeById($id) {

            // mettre à NULL l'user_id dans la table topic
            $topicManager = new TopicManager();
            $topicManager->updateTopicUserNull($id);

            // mettre à NULL l'user_id dans la table post
            $postManager = new PostManager;
            $postManager->updatePostUserNull($id);
            
            // supprimer l'user
            // appelle la méthode removeById($id) de UserManager
            $userManager = new UserManager;
            $userManager->removeById($id);

            // redirection vers la liste des users
            $this->redirectTo("home", "users");
        }
    }
