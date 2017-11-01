<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $firstname;
    public $lastname;
    public $alamat;
    public $date_of_birth;
    public $membership_type;
    public $credit_card_number;
    public $credit_card_expiration_date;
    public $credit_card_cvv;
    public $status;
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],
            
            ['firstname', 'required'],
            ['firstname', 'string', 'max' => 255],
            ['firstname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This name address has already been taken.'],
            
            ['lastname', 'required'],
            ['lastname', 'string', 'max' => 255],
            ['lastname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This name address has already been taken.'],
            
            ['alamat', 'required'],
            ['alamat', 'string', 'max' => 255],

            ['date_of_birth', 'required'],
            ['date_of_birth', 'date'],

            ['membership_type', 'required'],
            ['membership_type', 'string', 'max' => 255],
            
            ['credit_card_number', 'required'],
            ['credit_card_number', 'integer', 'max' => 16],

            ['credit_card_expiration_date', 'required'],
            ['credit_card_expiration_date', 'date'],

            ['credit_card_cvv', 'required'],
            ['credit_card_cvv', 'integer', 'max' => 3],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['status', 'required'],

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->alamat= $this->alamat;
        $user->date_of_birth = $this->date_of_birth;
        $user->membership_type = $this->membership_type;
        $user->credit_card_number = $this->credit_card_number;
        $user->credit_card_expiration_date = $this->credit_card_expiration_date;
        $user->credit_card_cvv = $this->credit_card_cvv;
        $user->status = $this->status;
        
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
