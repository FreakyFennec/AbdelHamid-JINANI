<?php

    namespace Controller;

    use App\Session;
    use App\AbstractController;
    use App\ControllerInterface;
    use Model\Managers\TopicManager;
    use Model\Managers\PostManager;
    use Model\Managers\CategorieManager;
    use Model\Managers\UserManager;
    
    
    class SecurityController extends AbstractController implements ControllerInterface{

        public function index(){           
           
            return [
                "view" => VIEW_DIR."home.php"
            ];
        }
        
        public function addUser() {
           
            $userManager = new UserManager();

            if (isset($_POST['submit'])) {
                
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                $confirmUserPW = filter_input(INPUT_POST, "confirmUserPW", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                if ($password != $confirmUserPW) {
                    
                    echo "Vos mots de passes sont différents.";

                } else {
            
                    $data = [
                        'email' => $email,
                        'pseudo' => $pseudo,
                        'password' => password_hash($password, PASSWORD_DEFAULT)
                    ];

                    if (!$userManager->findOneByEmail($email) && !$userManager->findUserByPseudo($pseudo)) {

                        $userManager = $userManager->add($data);

                        return [
                            "view" => VIEW_DIR."/home.php"
                        ];                        
                    } else {

                        echo "Veuillez choisir un autre email et pseudo";
                    }
                }                
            }

            return [

                "view" => VIEW_DIR."security/register.php"
            ];
        }

        public function connexion() {

            $userManager = new UserManager;

            if (isset($_POST['submit'])) {
                
                $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                $password = filter_input(INPUT_POST, "userPassW", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                if ($userManager->findOneByEmail($email) && password_verify($password, $userManager->findOneByEmail($email)->getPassword())) {
                    Session::setUser($userManager->findOneByEmail($email));
                    return [
                        "view" => VIEW_DIR."/home.php"
                    ];
                } else {

                }
            }
            return [

                "view" => VIEW_DIR."security/login.php"
            ];
        }

        public function deconnexion() {

            Session::removeUser();

            return [

                "view" => VIEW_DIR."/home.php"
            ];
        }

        public function profileUser($id) {

            $userManager = new UserManager;
            $topicManager = new TopicManager;
            $postManager = new PostManager;

            $userManager->findOneById($id);

            return [
                "view" => VIEW_DIR."security/profileUser.php",
                "data" => [
                    "user" => $userManager->findOneById($id),
                    "topics" => $topicManager->findTopicByIdUser($id),
                    "posts" => $postManager->findPostByIdUser($id)
                ]
            ];
        }
    }
?>