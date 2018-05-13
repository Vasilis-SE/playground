<?php

    class Account {

        private $username;
        private $password;
        private $emailName;
        private $emailProvider;

        // Constructor
        function _constructor( $us, $ps, $en, $ep ) {
            $this->username = $us;
            $this->password = $ps;
            $this->emailName = $en;
            $this->emailProvider = $ep;
        }

        function CheckIfFieldsAreEmpty() {

            if( $this->username == "" || $this->password == "" || $this->emailName == "" ||
                $this->emailProvider == "") {
                return false;
            }

            return true;
        }

        function CheckFiledLengthIntegrity() {

            if( count($this->username) < 6 || count($this->password) < 6 || count($this->emailName) < 3 ) {
                return false;
            }

            return true;
        }

        function CheckFieldsForSpecialChars() {
            $flag = true;
            $invalidSpecialChars = array("!","@","#","$","%","^","&","*","(",")","-","+","=","/",".",",","?","<",">",":",";","|","~","`");

            for( $i=0; $i<count($invalidSpecialChars); $i++ ) {
                if( strpos($this->username, $invalidSpecialChars[$i]) ) { $flag = false; }
            }

            return $flag;
        }

        function PasswordFieldsMatchCheck( $rpass ) {
            if( $rpass != $this->password )
                return false;

            return true;
        }


    } // End of class

?>
