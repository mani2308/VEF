<?php
class CheckPassword {

    protected $password;
    protected $minimumChars;
    protected $mixedCase = false;
    protected $minimumNumbers = 0;
    protected $minimumSymbols = 0;
    protected $errors = [];

    public function __construct($password, $minimumChars = 6) {
        $this->password = $password;
        $this->minimumChars = $minimumChars;
    }

    public function check() {
        if (preg_match('/\s/', $this->password)) {
            $this->errors[] = 'Password cannot contain spaces.';
        }
        if (strlen($this->password) < $this->minimumChars) {
            $this->errors[] = "Password must be at least
                $this->minimumChars characters.";
        }
        if ($this->mixedCase) {
            $pattern = '/(?=.*[a-z])(?=.*[A-Z])/';
            if (!preg_match($pattern, $this->password)) {
                $this->errors[] = 'Password should include uppercase
                    and lowercase characters.';
            }
        }
        return $this->errors ? false : true;
    }

    public function getErrors() {
        return $this->errors;
    }

}