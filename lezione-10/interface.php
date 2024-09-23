<?php

    class Postino implements SendMail{
        public function sendPackage($package)
        {
            
        }
        public function sendMail($mail)
        {
            
        }
    }

    class Furgone implements SendMail{
        public function sendPackage($package)
        {
            
        }
        public function sendMail($mail)
        {
            
        }
    }

    interface SendMail{

        public function sendPackage($package);
        public function sendMail($mail);

    }


