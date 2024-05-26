<?php
class User
{
    private $Name;
    private $Password;

    public function getName()
    {
        return $this->Name;
    }

    public function getPass()
    {
        return $this->Password;
    }

    public function setNom($Nom)
    {
        $this->Name = $Nom;
    }

    public function setPassWord($New_password)
    {
        $this->Password = $New_password;
    }
}

class PredefinedUser
{
    public $Name = "Christian";
}

$Blaze = new User();
$Blaze->setNom('Istvan90');
$Blaze->setpassWord(1234);

echo $Blaze->getName() . '<br>';
echo $Blaze->getPass(). '<br>';

$Personne = new PredefinedUser();

echo $Personne->Name;
?>